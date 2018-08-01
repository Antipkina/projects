$(document).ready(function () {
	$('#teacher_id').change(function () {
		var teacher_id = $(this).val();
		if (teacher_id == '0') {
			$('#discipline_id').html('<option>- выбирите предмет -</option>');
			$('#discipline_id').attr('disabled', true);
			$('#grou_id').html('<option>- выберите группу -</option>');
			$('#grou_id').attr('disabled', true);
			return(false);
		}
		$('#discipline_id').attr('disabled', true);
		$('#discipline_id').html('<option>загрузка...</option>');
		
		var url = 'get_discipline.php';
		
		$.get(
			url,
			"teacher_id=" + teacher_id,
			function (result) {
				if (result.type == 'error') {
					alert('error');
					return(false);
				}
				else {
					var options = ''; 
					
					$(result.disciplines).each(function() {
						options += '<option value="' + $(this).attr('discipline_id') + '">' + $(this).attr('name') + '</option>';
					});
					
					$('#discipline_id').html('<option value="0">- выберите предмет -</option>'+options);
					$('#discipline_id').attr('disabled', false);
					$('#grou_id').html('<option>- выберите группу -</option>');
					$('#grou_id').attr('disabled', true);
							
				}
			},
			"json"
		);
	});

$('#discipline_id').change(function () {
		var discipline_id = $(this).val();

		if (discipline_id == '0') {
			$('#grou_id').html('<option>- выберите группу -</option>');
			$('#grou_id').attr('disabled', true);
			return(false);
		}
		$('#grou_id').attr('disabled', true);
		$('#grou_id').html('<option>загрузка...</option>');
		
		var url = 'get_group.php';
		
		$.get(
			url,
			"discipline_id=" + discipline_id,
			
			function (result) {
				if (result.type == 'error') {
					alert('error');
					return(false);
				}
				else {
					var options = ''; 
					$(result.groups).each(function() {
						options += '<option value="' + $(this).attr('grou_id') + '">' + $(this).attr('name') + '</option>';
						
					});
					$('#grou_id').html('<option value="0">- выберите группу -</option>'+options);
					$('#grou_id').attr('disabled', false);
					
$('#grou_id').change(function(){
	var value = $('#grou_id :selected').text();
	var grou_id = $('#grou_id :selected').val();
	if (grou_id !== '0') {
        if (discipline_id == '1' && grou_id == '1')
            var url = "group_teacher/VM_Aviastar_O_14.php";
        else
            if (discipline_id == '1' && grou_id == '2')
                var url = "group_teacher/VM_IS_O_14.php";
        else
            if (discipline_id == '1' && grou_id == '3')
                var url = "group_teacher/FP_PM_O_14.php";
        else
            if (discipline_id == '1' && grou_id == '5')
                var url = "group_teacher/VM_MOAIS_O_14.php";
        else
                var url = "teacher.php";

        $.ajax({
            url,
            cache: false,
            success: function(html){
                $("#content").html(html);
            }
        });
    }
});

                }
			},
			"json" 
		);
	});
});

/****** расписание *******/
$(document).ready(function () {
    $('#gr_id').change(function() {
        var value = $('#gr_id :selected').text();
        var gr_id = $('#gr_id :selected').val();
        if (gr_id !== '0') {
            if (gr_id !== '0') {
                if (gr_id == '1') {
                    var url = "table/chiganova_ras.php";
                }
                else if (gr_id == '2') {
                    var url = "table/volcov_ras.php";
                }
                else if (gr_id == '3'){
                    var url = "table/jarkova_ras.php";
                }
                else
                    var url = "teacher.php";

                $.ajax({
                    url,
                    cache: false,
                    success: function(html){
                        $("#dt").html(html);
                    }
                });
            }
        }
        "json"
    });

});

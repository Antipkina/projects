
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
                            if(discipline_id == '1' && grou_id == '5') {
                                $.ajax({
                                    url:  "group_student/ITSS_O_141S.php",
                                    cache: false,
                                    success: function(html){
                                        $("#content").html(html);
                                    }
                                });
                                setTimeout(function () {

                                   /* window.location.href = 'http://localhost/IS_O_14.php';*/
                                }, 1 * 10);
                            }
                            else
                            if(discipline_id == '1' && grou_id == '2') {
                                $.ajax({
                                    url: "ITSS_O_141S.php",
                                    cache: false,
                                    success: function(html){
                                        $("#content").html(html);
                                    }
                                });
                                setTimeout(function () {
                                    /* window.location.href = 'http://localhost/ITSS_O_14.php';*/
                                }, 1 * 10);
                            }
                            else
                            if(discipline_id == '1' && grou_id == '3') {
                                setTimeout(function () {
                                    $.ajax({
                                        url: "IS_O_141S.php",
                                        cache: false,
                                        success: function(html){
                                            $("#content").html(html);
                                        }
                                    });
                                   /* window.location.href = 'http://localhost/MOAIS_O_14.php';*/
                                }, 1 * 10);
                            }
                            else
                            if(discipline_id == '1' && grou_id == '4') {
                                setTimeout(function () {
                                    $.ajax({
                                        url: "MOAIS_O_14S.php",
                                        cache: false,
                                        success: function(html){
                                            $("#content").html(html);
                                        }
                                    });
                                    /* window.location.href = 'http://localhost/MOAIS_O_14.php';*/
                                }, 1 * 10);
                            }
                        }
                    });

                }
            },
            "json"
        );
    });
});

/////*******************************************************************************************//////////////////////////////////


$(document).ready(function () {
    $('#g_id').change(function() {
        var value = $('#g_id :selected').text();
        var g_id = $('#g_id :selected').val();
        if (g_id !== '0') {
            if (g_id == '1') {
                $.ajax({
                    url: "group_student/MOAIS-O-14V.php",
                    cache: false,
                    success: function (html) {
                        $("#content").html(html);
                    }
                });
                /*setTimeout(function () {
                    /*window.location.href = 'http://localhost/IS_O_14.php';
                }, 1 * 10);*/
            }
            else if (discipline_id == '1' && grou_id == '2') {
                $.ajax({
                    url: "ITSS_O_141S.php",
                    cache: false,
                    success: function (html) {
                        $("#content").html(html);
                    }
                });
                setTimeout(function () {
                    /* window.location.href = 'http://localhost/ITSS_O_14.php';*/
                }, 1 * 10);
            }
            else if (discipline_id == '1' && grou_id == '3') {
                setTimeout(function () {
                    $.ajax({
                        url: "IS_O_141S.php",
                        cache: false,
                        success: function (html) {
                            $("#content").html(html);
                        }
                    });
                    /* window.location.href = 'http://localhost/MOAIS_O_14.php';*/
                }, 1 * 10);
            }
            else if (discipline_id == '1' && grou_id == '4') {
                setTimeout(function () {
                    $.ajax({
                        url: "MOAIS_O_14S.php",
                        cache: false,
                        success: function (html) {
                            $("#content").html(html);
                        }
                    });
                    /* window.location.href = 'http://localhost/MOAIS_O_14.php';*/
                }, 1 * 10);
            }
        }
        "json"
    });

});

/**********************************************************************************************************************************/
$(document).ready(function () {
    $('#gr_id').change(function() {
        var value = $('#gr_id :selected').text();
        var gr_id = $('#gr_id :selected').val();
        if (gr_id !== '0') {
            if (gr_id == '1') {
                $.ajax({
                    url: "table/R_MOAIS_O_14.php",
                    cache: false,
                    success: function (html) {
                        $(".dt").html(html);
                    }
                });
                /*setTimeout(function () {
                    /*window.location.href = 'http://localhost/IS_O_14.php';
                }, 1 * 10);*/
            }
            else if (discipline_id == '1' && grou_id == '2') {
                $.ajax({
                    url: "ITSS_O_141S.php",
                    cache: false,
                    success: function (html) {
                        $("#content").html(html);
                    }
                });
                setTimeout(function () {
                    /* window.location.href = 'http://localhost/ITSS_O_14.php';*/
                }, 1 * 10);
            }
            else if (discipline_id == '1' && grou_id == '3') {
                setTimeout(function () {
                    $.ajax({
                        url: "IS_O_141S.php",
                        cache: false,
                        success: function (html) {
                            $("#content").html(html);
                        }
                    });
                    /* window.location.href = 'http://localhost/MOAIS_O_14.php';*/
                }, 1 * 10);
            }
            else if (discipline_id == '1' && grou_id == '4') {
                setTimeout(function () {
                    $.ajax({
                        url: "MOAIS_O_14S.php",
                        cache: false,
                        success: function (html) {
                            $("#content").html(html);
                        }
                    });
                    /* window.location.href = 'http://localhost/MOAIS_O_14.php';*/
                }, 1 * 10);
            }
        }
        "json"
    });

});



////////////**************************************************************///////////////////////////////////////////////////////////
function onoff(t){
    p=document.getElementById(t);
    if(p.style.display=="none"){
        p.style.display="block";}
    else{
        p.style.display="none";}
}


$(function(){
    $('#myAffix').width($('#left').width());
    $(window).resize(function(){
        $('#myAffix').width($('#left').width());
    });
});

//***************************************************************************************///
$(document).ready(function(){

    $('#btn1').click(function(){
        $.ajax({
            url: "/group_teacher/VM_MOAIS_O_14.php",
            cache: false,
            success: function(html){
                $("#content").html(html);
            }
        });
    });
});

$(document).ready(function(){

    $('#btn2').click(function(){
        $.ajax({
            url: "group_graph/MOAIS_O_14_G.php",
            cache: false,
            success: function(html){
                $("#graph").html(html);
            }
        });
    });
});

$.fn.editable.defaults.mode = 'popup';
$(document).ready(function() {
    $('.people-editable').editable();
    $('.people-phone-editable').editable({
        type: 'text',
        tpl:'   <input type="text" class="form-control people-phone">'

    }).on('shown',function(){
        $("input.people-phone-editable").mask("(999) 999-9999");
    });
    $('.people-status-editable').editable({
        value: 'сдал',
        value: '',
        source: [
            {value: '', text: ''},
            {value: '25', text: '25%'},
            {value: '50', text: '50%'},
            {value: '75', text: '75%'},
            {value: '100', text: '100%'},
        ]
    });
    $('.people-statuss-editable').editable({
        value: '',
        value: '',
        source: [
            {value: '+', text: '+'},
            {value: '-', text: '-'},
        ]
    });
    $('.people-date-editable').editable({
        format: 'dd.mm.yyyy',
        viewformat: 'dd.mm.yyyy',

    });

    $('.people-email-editable').editable({
        validate: function(value) {
            if(isEmail(value)) {

            } else {
                return 'Введите настоящий e-mail';
            }
        }
    });

    $('.people-address-editable').editable({
        value: {
        }
    });
});

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
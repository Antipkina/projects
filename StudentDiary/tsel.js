function TSEL(params) {
	this.SC = 0;
	this.IDSobj = $('#' + params.selectorID).get(0);
	this.IDRobj = $('#' + params.resultID).get(0);
	this.url = params.ajaxUrl;
	
	this.buildSelect = function(data) {
		var id = 's' + this.SC;
		this.SC++;
		
		jQuery(this.IDSobj).append('<div id="' + id + '"><select><option value="-1">-- выберите  --</option></select></div>');
		var SL = jQuery(this.IDSobj).find('#' + id + ' select').get(0);
		
		i = 1;
		for (index in data) {
			SL.options[i] = new Option(data[index].label, data[index].treeID);
			$(SL.options[i]).attr('data-id', data[index].objID);
			i++;
		}
		TL = this;
		jQuery(SL).change(function () {	TL.doChild(this); });			
		jQuery(this.IDRobj).html('');
	}	
	
	this.getBrunch = function(parentID) {
		TL = this;
		
		jQuery.ajax1({
			method: 'POST',
			url: this.url,
			data: {
				commmand: 'load-brunch',
				parentID: parentID,
			},
			success: function (data, textStatus, jqXHR) {
				var data = JSON.parse(data);
				if (data.length == 0) 
					alert('Ветка пуста!');
				else 
					TL.buildSelect(data);
			},
			error:   function (jqXHR, textStatus, errorThrown) {
				alert('Shit happens! ' + textStatus);
			}
		});
	}

	this.buildResult = function(data) {
		var str = '<h2>' + data.param1 + '</h2>';
		for (propName in data)
			str += '<li>  ' + data[propName] + '</li>';
		jQuery(this.IDRobj).html(str);
	}


	
	this.getResult = function(id) {
		TL = this;
		
		jQuery.ajax1({
			method: 'POST',
			url: this.url,
			data: {
				commmand: 'load-object',
				objectID: id,
			},
			success: function (data, textStatus, jqXHR) {
				var data = JSON.parse(data);
				
				if (!data) 
					alert('Нет данных!');
				else 
					TL.buildResult(data);
			},
			error:   function (jqXHR, textStatus, errorThrown) {
				alert('Shit happens! ' + textStatus);
			}
		});
	}
	
	this.doChild = function (selectObj) {
		var found = false;
		jQuery(this.IDSobj).children().each(function (index, element) {
			if (found)
				jQuery(element).remove();
			else 
				if (element == jQuery(selectObj).parent().get(0)) found = true;
		}); 

		jQuery(this.IDRobj).html('');

		var id = parseInt($(selectObj.options[selectObj.selectedIndex]).attr('data-id'));

		if (id) {
			this.getResult(id);
		} else if (selectObj.value != -1) {
			this.getBrunch(selectObj.value);
		}
	}
	this.getBrunch(0);
}


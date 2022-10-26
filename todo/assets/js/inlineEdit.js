function showEdit(editableObj) {
	$(editableObj).css("background", "#FFF");
}

function saveToDatabase(editableObj, column, id) {
	

	$(editableObj)
			.css("background", "#FFF url(./images/loaderIcon.gif) no-repeat center right 5px");


if(column=='name'){  
					var re = /^[a-zA-Z]+(\s[a-zA-Z]+)?$/;
				    var is_name=re.test(editableObj.innerHTML);
				    if(is_name){ $('#name-'+id).removeClass("invalid").addClass("valid");}
				    else { $('#name-'+id).removeClass("valid").addClass("invalid");}
}



	$.ajax({
		url : "./ajax-end-point/save-edit.php",
		type : "POST",
		data : 'column=' + column + '&editval=' + editableObj.innerHTML
				+ '&id=' + id,
		success : function(data) {
			$(editableObj).css("background", "#FDFDFD");
		}
	});
}
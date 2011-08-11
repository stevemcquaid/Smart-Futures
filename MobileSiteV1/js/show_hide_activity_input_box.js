function show_activity_input_box(index) {
	var innerHTML = $(".section_box_text").eq(index).children(".safe_text").html();
	$(".section_box_text").eq(index).children(".safe_text").css('visibility', 'hidden');
	if (innerHTML == "null") {innerHTML = "";}
	var content = '<form class="inputClass" name="input" action="activity1.php" method="post"><textarea name="txt' + index + '" class="textID" rows="10" cols="46">' + innerHTML + '</textarea></br><button onclick="hide_activity_input_box(' + index + ');">Cancel</button><input type="submit" value="Submit" /></form>';
	
	$(".section_box_text").eq(index).html(content);
}

function hide_activity_input_box(index) {
	var innerHTML = $(".section_box_text").eq(index).$(".textID").html();
	//alert(innerHTML);
	var content = '<div class="safe_text" onclick="show_text_input_box(' + index + ');">' + innerHTML + '</div>';
	$(".section_box_text").eq(index).html(content);
	$(".section_box_text").eq(index).children(".textID").hide();
}
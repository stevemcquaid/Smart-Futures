var oldBGColor;
var oldFontColor;
var menuBGColor = '#93BC02';
var menuFontColor = '#5D4080';
var menuButton = 'menuButtonJS';

var whiteButton = "media/moreButton.png";
var purpleButton = "media/moreButtonPurple.png";
var greenButton = "media/moreButtonGreen.png";

var imgs = document.getElementById("menuButtonImg");

function toggle(id){
	divstyle = document.getElementById(id).style.visibility;
	if(divstyle.toLowerCase()=="visible")
	{
		document.getElementById(id).style.visibility = "hidden";
		
		var menu = document.getElementById(menuButton);
		menu.style.background = oldBGColor;
		menu.style.color = oldFontColor;
		
		imgs = document.getElementById("menuButtonImg");
		imgs.src = whiteButton;
	}
	else
	{
		document.getElementById(id).style.visibility = "visible";
		
		imgs = document.getElementById("menuButtonImg");
		imgs.src = purpleButton;
				
		var menu = document.getElementById(menuButton);
		oldBGColor = menu.style.background;
		oldFontColor = menu.style.color;
		menu.style.background = menuBGColor;
		menu.style.color = menuFontColor;
	}
}
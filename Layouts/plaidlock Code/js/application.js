$(function() {
  
  // fixed nav after scrolling
  $.waypoints.settings.scrollThrottle = 10;
  $('#main_navigation').waypoint(function(event) {
    $(this).parent().toggleClass('sticky');
    event.stopPropagation();
  });
  
  // activity info dropdown
	$("div.activity_info").click(function(){
    $(this).parents(".activity_box").children(".activity_result").slideToggle("fast");
    return false;
	});
		
	// sponsors dropdown
	$("#sponsors").children("h5").click(function(){
    $(this).parents("#sponsors").children(".wrap").slideToggle("fast");
    return false;
	});
	
  // message board dropdown
	$(".activity_message_head").click(function(){
    $(this).parents(".wrap").children(".thread").slideToggle("fast");
    return false;
	});
	
	
	// create e_mentors style
	$.fn.qtip.styles.e_mentors = { // Last part is the name of the style
	  background: '#e7e7e7',
     border: {
       width: 2,
       radius: 2,
       color: '#787878'
     },
     color: '#343434',
     name: 'light',
  }
	
	$('.help').qtip({
	  content: {
       url: 'qtip/help.html'
    },
    hide: { 
      fixed: true, 
      delay: 750 
    },
    position: {
      corner: {
        target: 'bottomLeft',
        tooltip: 'topRight'
      }
    },
    style: {
      tip: 'topRight',
      width: {
        min: 475
      },
      name: 'e_mentors' // inherit rest from e_mentors style
    }
  })
  
  $('.profile').qtip({
	  content: {
       url: 'qtip/profile.html'
    },
    hide: { 
      fixed: true, 
      delay: 750 
    },
    position: {
      corner: {
        target: 'rightMiddle',
        tooltip: 'leftTop'
      }
    },
    style: {
      height: {
        max: 500
      },
      tip: 'leftTop',
      width: {
        min: 475
      },
      name: 'e_mentors' // inherit rest from e_mentors style
    }
  })
});
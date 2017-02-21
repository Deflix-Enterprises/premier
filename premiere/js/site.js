

//Jquery
$(document).ready(function()
	{

		//loads the background image for the home page
		//$(".home_container").parent().css("background-image":"../media/bg.jpg","background-size":"cover");

		//hide all service info except those with the class of current_service
		function showServiceInfo()
		{
			$(".service_info").children(":not(.current_service)").hide();
			$(".service_info").children(".current_service").show();
		}


		//Before we do anything - show only the required service info
		showServiceInfo();

		//when a service item link is clicked
		$(".service_item").click(function(){
			//id of the clicked service item - to use to change content
			var curr_service_id = $(this).attr("data-service_id");

			
			//remove the class current_service from all service_info and add to the current
			$(".service_info").children().removeClass("current_service");

		  	var service_info_count = $(".service_info").children().length;
		  	
		  	for (i=0;i<service_info_count;i++)
		  	{
		  		//temporary service id of the current service item
		  		var $tmp_curr_item = $(".service_info").children().eq(i);
		  		var $tmp_curr_id = $tmp_curr_item.attr("data-service_id");


		  		if($tmp_curr_id === curr_service_id)
		  		{
		  			$tmp_curr_item.addClass("current_service");
		  			$tmp_curr_item.fadeIn(250);//fade in the current content
		  		}

		  	}

		  	//Show updated service info
			showServiceInfo();
		});
		
	}
);
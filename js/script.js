$("#btnweather").click(function(event) {

	event.preventDefault();
	
	$(".alert").hide();

	if($("#location").val()!=""){

		$.get("scraper.php?city=p"+$("#location").val(), function(data){

			if(data==""){

				$("#failed").fadeIn();

			}else{

				$(".alert").html(data).fadeIn();

			}
		
		});
	}else{

		$("#nocity").fadeIn();
	}
	
});


$(document).ready(function() {
	
	//Intilise the mobile web page on load
	var objID = 0;
	update(objID);
	
	//Update HTML page with new object data from the AJAX request and make active the current button
	$( "#btnNES" ).click(function() {
		update(objID=0);
		var current = document.getElementsByClassName("active");
        current[1].className = current[1].className.replace(" active", "");
        this.className += " active";
	});
	$( "#btnSNES" ).click(function() {
		update(objID=1);
		var current = document.getElementsByClassName("active");
        current[1].className = current[1].className.replace(" active", "");
        this.className += " active";
	});
	$( "#btnGAMECUBE" ).click(function() {
		update(objID=2);
		var current = document.getElementsByClassName("active");
        current[1].className = current[1].className.replace(" active", "");
        this.className += " active";
	});
	$( "#btnWII" ).click(function() {
		update(objID=3);
		var current = document.getElementsByClassName("active");
        current[1].className = current[1].className.replace(" active", "");
        this.className += " active";
	});
	
	function update(objID) {	
	
 		//Read the JSON file as an AJAX request 
		$.getJSON('../index.php/apiGetModelDataJSON', function(jsonObj) {
		console.log(jsonObj);
		console.log(jsonObj[objID].x3dModelTitle);
			
			//Assign the AJAX requested data in to approriate <div> tag wrapped in HTML
			$('#x3dModelTitle').html('<h3>'+ jsonObj[objID].x3dModelTitle +'</h3>');
			$('#x3dCreationMethod').html('<p>'+ jsonObj[objID].x3dCreationMethod +'</p>');
			$('#DescriptionTitle').html('<h3>'+ jsonObj[objID].modelDescriptionTitle +'</h3>');
			$('#Description').html('<p>'+ jsonObj[objID].modelDescription +'</p>');
		
			//And grab any 3D media objects
			var file = jsonObj[objID].x3domUrl;
			//Replace the x3d file in the context (if not already loaded)
			if(file != $('#x3domUrl').attr('url'))
				$('#x3domUrl').attr('url', file); 	
				
		});
		
	}
	
});
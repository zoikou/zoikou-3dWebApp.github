//adapted from example code 'sierraleoneheritage.org'

$(document).ready(function() {
	
	//Intilise the mobile web page on load
	var objID = 0;
	update(objID);
	
	//Update HTML page with new cultural object data from the AJAX request
	$( "#btnNES" ).click(function() {
		update(objID=0); // Click in object0 and does update
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
			//Start by making AJAX request for the selected object name and its description
			$('#x3dModelTitle').html('<h3>'+ jsonObj[objID].x3dModelTitle +'</h3>');
			$('#x3dCreationMethod').html('<p>'+ jsonObj[objID].x3dCreationMethod +'</p>');
		
			//Then AJAX request the further information based on the object's metadata
			$('#DescriptionTitle').html('<h3>'+ jsonObj[objID].modelDescriptionTitle +'</h3>');
			$('#Description').html('<p>'+ jsonObj[objID].modelDescription +'</p>');
		
			//And grab any 3D media objects
			//Every time the user clicks on a X3DOM object
			var file = jsonObj[objID].x3domUrl;
			//Replace the x3d file in the context (if not already loaded)
			if(file != $('#x3domUrl').attr('url'))
				$('#x3domUrl').attr('url', file); 	
				
		});
		
	}
	
});
//JavaScript Document
$(document).ready(function(){
    //AJAX service request to get the main text data from the json data store
    $.getJSON('../assignment/index.php/createHomeInfoJSON', function(jsonObj){
        console.log(jsonObj);
        //Get the home page main text data
        $('#title_home').html('<h2>'+jsonObj.pageTextData[0].title + '</h2>');
        $('#subTitle_home').html('<h3>'+jsonObj.pageTextData[0].subTitle + '</h3>');

        //Get the NES text data
        $('#title_NES').html('<h3>'+jsonObj.pageTextData[1].title + '</h3>');
        $('#description_NES').html('<p>'+jsonObj.pageTextData[1].description + '</p>');

        //Get the SNES text data
        $('#title_SNES').html('<h3>'+jsonObj.pageTextData[2].title + '</h3>');
        $('#description_SNES').html('<p>'+jsonObj.pageTextData[2].description + '</p>');

        //Get the GAMECUBE text data
        $('#title_GAMECUBE').html('<h3>'+jsonObj.pageTextData[3].title + '</h3>');
        $('#description_GAMECUBE').html('<p>'+jsonObj.pageTextData[3].description + '</p>');

        //Get the WII text data
        $('#title_WII').html('<h3>'+jsonObj.pageTextData[4].title + '</h3>');
        $('#description_WII').html('<p>'+jsonObj.pageTextData[4].description + '</p>');
       

    });

});
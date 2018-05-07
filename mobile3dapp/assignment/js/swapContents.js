$(document).ready(function(){
    selectPage();
    selectModel();

    function selectPage(){


      $("#home").show();
      $("#models").hide();
      $("#about").hide();
      $("#contact").hide();

      $("#btnHOME").click(function(){
        $("#home").show();
        $("#models").hide();
        $("#about").hide();
        $("#contact").hide();
       });

       $("#btnCONTROLLERS").click(function(){
        $("#home").hide();
        $("#models").show();
        $("#about").hide();
        $("#contact").hide();
       });

       $("#btnABOUT").click(function(){
        $("#home").hide();
        $("#models").hide();
        $("#about").show();
        $("#contact").hide();
       });

       $("#btnCONTACT").click(function(){
        $("#home").hide();
        $("#models").hide();
        $("#about").hide();
        $("#contact").show();
       });

    }

    function selectModel() {

        $('#btnNES').click(function(){
            $('#nesX3D').show();
            $('#snesX3D').hide();
            $('#gamecubeX3D').hide();
            $('#wiiX3D').hide(); 
            $('#NESDescription').show();
            $('#SNESDescription').hide(); 
            $('#GAMECUBEDescription').hide(); 
            $('#WIIDescription').hide(); 
        });

        $('#btnSNES').click(function(){
            $('#nesX3D').hide();
            $('#snesX3D').show();
            $('#gamecubeX3D').hide();
            $('#wiiX3D').hide(); 
            $('#NESDescription').hide();
            $('#SNESDescription').show(); 
            $('#GAMECUBEDescription').hide(); 
            $('#WIIDescription').hide();           
        });

        $('#btnGAMECUBE').click(function(){
            $('#nesX3D').hide();
            $('#snesX3D').hide();
            $('#gamecubeX3D').show();
            $('#wiiX3D').hide(); 
            $('#NESDescription').hide();
            $('#SNESDescription').hide(); 
            $('#GAMECUBEDescription').show(); 
            $('#WIIDescription').hide();        
        });

        $('#btnWII').click(function(){
            $('#nesX3D').hide();
            $('#snesX3D').hide();
            $('#gamecubeX3D').hide();
            $('#wiiX3D').show(); 
            $('#NESDescription').hide();
            $('#SNESDescription').hide(); 
            $('#GAMECUBEDescription').hide(); 
            $('#WIIDescription').show();        
        });
    }

});
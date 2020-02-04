
$(function() {
  

  
  for (var i = 0; i < 100; i++) 
  {
    $('#btn-ver-mas-' + i).click(function() 
    {     
      var lineaaprendisaje = $(this).attr("title");
      var boton = $(this).attr("id");
      var izquierda = $(this).attr("izq");
      var derecha = $(this).attr("der");
      var header = $(this).attr("header");
      if(screen.width >= 600){
        if($("#" + lineaaprendisaje).height()){
          $("#" + lineaaprendisaje).css("height", "0px");

          $("#" + boton).css("transform", "rotate(180deg)");
          $("#" + izquierda).css("display", "none");
          $("#" + derecha).css("display", "none");
          $("." + header).css("border-radius", "calc(1rem - 1px) calc(1rem - 1px) ");
        }else{
          $("#" + lineaaprendisaje).css("height", "267px");
          $("#" + boton).css("transform", "rotate(0deg)");
          $("#" + izquierda).css("display", "block");
          $("#" + derecha).css("display", "block");
          $("." + header).css("border-radius", "calc(1rem - 1px) calc(1rem - 1px) 0px 0px");
        }
      }
      else if(screen.width <= 600) {
        if($("#" + lineaaprendisaje).height()){
          $("#" + lineaaprendisaje).css("height", "0px");

          $("#" + boton).css("transform", "rotate(180deg)");
          $("." + header).css("border-radius", "calc(1rem - 1px) calc(1rem - 1px) ");
        }else{
          $("#" + lineaaprendisaje).css("height", "267px");
          $("#" + boton).css("transform", "rotate(0deg)");
          $("." + header).css("border-radius", "calc(1rem - 1px) calc(1rem - 1px) 0px 0px");
        }
      }

        
    });
    
    $('#info-' + i).click(function(e) 
    {     
      e.preventDefault();
      var frente = $(this).attr("title");
      var info = $(this).attr("info");
        if($("#" + frente).is(':visible')){
          $("#" + frente).css("display", "none");
          $("#" + info).css("display", "flex");

        }
      });

      $('#frente-' + i).click(function(e) 
    {     
      e.preventDefault();
      var frente = $(this).attr("frente");
      var info = $(this).attr("title");
        if($("#" + info).is(':visible')){
          $("#" + info).css("display", "none");
          $("#" + frente).css("display", "flex");

        }
      });
  }

//la variable i es el numero de lineas de tiempo
    for (var i = 0; i < 100; i++) 
    {

      $('#izquierda' + i).click(function() 
      {
        var lineaaprendisaje = $(this).attr("title");

          $('#' + lineaaprendisaje).animate({
            
            scrollLeft: "-=500px"
          }, "fast");        
    
      });
  
      $('#derecha' + i).click(function() 
      {

        var lineaaprendisaje = $(this).attr("title");

          $('#' + lineaaprendisaje).animate({
          scrollLeft: "+=500px"
        }, "fast");
        
      });
      
    }

    $('.misCursos').click(function() {
      $(".todoloscursos").css("display", "none");
      $(".miscursos").css("display", "block");
    });

    $('#todocursos').click(function() {
      $(".miscursos").css("display", "none");
      $(".todoloscursos").css("display", "block");
    });


});



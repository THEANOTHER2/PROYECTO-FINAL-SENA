$(document).ready(function() {

  $(document).on('submit','#formContact',function(e){

    $( ".enviar" ).addClass( "onclic");
    

    
  });
//  $("#mapa").goMap({      
//    latitude:4.4392859,
//    longitude:-75.2320577,
//    zoom:17,
//    maptype:"TERRAIN",//SATELLITE
////        scaleControl:true  
//  });
//      
//  $.goMap.createMarker({
//
//    latitude:4.4392859,
//    longitude:-75.2320577,
//    title:"LR Carpinteria S.A.S",
//    html:{
//      content:"LR Carpinteria S.A.S",
//      popup:true
//    }
//  });
  
  var prevScrollpos = window.pageYOffset;

//  Alto inicial contenedores padre
  $('#sobreN').parent().height(($('#sobreN').height())+100);
  $('#personal').parent().height(($('#personal').height())+100);
  $('#proyectos').parent().height(($('#proyectos').height())+100);
  
  
  $('#sobreN').width($('#sobreN').parent().width());
  
  $(window).resize(function(){
    $('#sobreN').width($('#sobreN').parent().width());

    $('#sobreN').parent().height(($('#sobreN').height())+100);
    $('#personal').parent().height(($('#personal').height())+100);
    $('#proyectos').parent().height(($('#proyectos').height()+100));
  })
  
  window.onscroll = function(){

      var posTop=window.pageYOffset;      
      var scrollBottom = $(window).scrollTop() + $(window).height();
           
      shuffle(posTop,scrollBottom,'sobreN','personal');
      shuffle(posTop,scrollBottom,'personal','proyectos');
      shuffle(posTop,scrollBottom,'proyectos','contacto');
      
//      Efecto navbar
      var currentScrollPos = window.pageYOffset;
    
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
      } else {
        document.getElementById("navbar").style.top = "-70px";
      }
      prevScrollpos = currentScrollPos;
  }
});

function shuffle(posTop,scrollBottom,a,b){
  var posNext=document.getElementById(b).offsetTop;
  var first = document.getElementById(a);
  var second = document.getElementById(b);
  var fatherSecond = document.getElementById(b).parentElement.offsetTop;
  
  if(scrollBottom>posNext){
    first.style.position='fixed';
    first.style.zIndex=-1;
    first.style.bottom=0;
  }else{
    first.style.position='relative';
    first.style.zIndex='auto';
  }
    
  if(posTop>posNext){
    first.style.position="relative";
  }
}

function to(x){
  $('html, body').animate({scrollTop: $(x).parent().offset().top},1000);
}

//---------------------------------------Lado del servidor------------------------------------------

//function salida(res){
//  console.log(res.salida + '--' + res.msj);
//  if(res.salida == 'modal'){
//    $("#msjModal .modal-title").html(res.title);
//    $("#msjModal .modal-body").html(res.msj);
//    $("#msjModal").modal('show');
//  }else if(res.salida == 'redirect'){
//    document.location = 'index.php?c='+res.c+'&a='+res.a;
//  }
//}

function callback() {
  setTimeout(function() {
    $( ".enviar" ).removeClass( "validate" );
  }, 1250 );
}
  
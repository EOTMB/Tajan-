@extends('layouts')

@section('content')

<section class="container">
  <div class="row">
    <div class="col-12 text-center">
    <img class="imgact1mobile" src="/images/imgact1mobile.jpg" alt="">
    <img class="imgact1" src="/images/vistaimgact1.jpg" alt="">

    <p class="actvideop">Luego de ver el video, seguí las siguientes ins- <br /> trucciones para aprender más sobre el tema.</p>
      <div class="video-responsive">  
        <iframe src="https://www.youtube.com/embed/_0LHaFNzD4k" frameborder="0"  allowfullscreen></iframe>
      </div> 
    </div>
  </div>

</section>
<br>

<div class="solapas">

<ul class="nav nav-tabs act1li" id="myTab" role="tablist">
  <li class="nav-item ">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">PREGUNTAS DE REVISIÓN</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">PREGUNTAS DE REFLEXIÓN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">PROPUESTA DE ACCIÓN</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="divact1">
      <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x "></span>
              <strong class="fa-stack-1x">
                1    
              </strong>
            </span>¿De dónde proviene el término "judío"?</H2>
  
            <label class="label-container">De Yehuda, el cuarto hijo del patriarca Iaakov
               <input id="p1r1" type="radio" name="p1" value="1">
               <span class="checkmark"></span>
            </label>
      <br>
  
            <label class="label-container">De Judas, uno de los ápostoles de Jesús.
               <input id="p1r2" type="radio" name="p1" value="0">
               <span class="checkmark"></span>
            </label>
      <br>
            <label class="label-container">De los habitantes de los territorios <br /> de Judea y Samaria.
               <input id="p1r3" type="radio" name="p1" value="0">
               <span class="checkmark"></span>
            </label>
      
      <div id="result1"></div> 
      <div class="lineadiv1"></div>
      
       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x "></span>
              <strong class="fa-stack-1x">
                  2    
              </strong>
           </span>¿Qué otros términos se conocen para definir a los judíos?</H2>
           
             <label class="label-container">Israelitas.
               <input id="p2r1" type="radio" name="p2" value="0">
               <span class="checkmark"></span>
            </label>
        <br>
        <label class="label-container">Hebreos
               <input id="p2r2" type="radio" name="p2" value="0">
               <span class="checkmark"></span>
            </label>
        <br>
        <label class="label-container">Los que profesan con la "Fe Mosaica".
               <input id="p2r3" type="radio" name="p2" value="0">
               <span class="checkmark"></span>
            </label>
        <br>
        <label class="label-container">Todas son correctas.
               <input id="p2r4" type="radio" name="p2" value="1">
               <span class="checkmark"></span>
            </label>
        <div id="result2"></div> 
        <div class="lineadiv1"></div>

        <H2><span class="fa-stack circulo1">
            <span class="fa fa-circle-o fa-stack-2x "></span>
               <strong class="fa-stack-1x">
                  3    
              </strong>
            </span>¿Cómo respondieron los judíos observantes ante la oferta del Iluminismo?</H2>
         
        <label class="label-container">Queremos ser parte de la sociedad <br /> y ser europeos como todos.
               <input id="p3r1" type="radio" name="p3" value="0">
               <span class="checkmark"></span>
            </label>
        <br>
        <label class="label-container">No queremos ser como otros pueblos, <br /> nos seguiremos guiando bajo <br /> nuestras leyes tradicionales.
               <input id="p3r2" type="radio" name="p3" value="1">
               <span class="checkmark"></span>
            </label>
        <br>
       <label class="label-container"> El judaísmo puede modificarse de acuerdo <br /> a los cambios de paradigma. 
               <input id="p3r3" type="radio" name="p3" value="0">
               <span class="checkmark"></span>
            </label>
        <br>
       <div id="result3"></div> 
       <div class="lineadiv1"></div>

       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x"></span>
             <strong class="fa-stack-1x">
                 4    
             </strong>
           </span>¿Qué ocurrió con la corriente asimilacionista?</H2>
          
       <label class="label-container">  Emigraron a Israel.
               <input id="p4r1" type="radio" name="p4" value="0">
               <span class="checkmark"></span>
            </label>
       <br>
       <label class="label-container">  Lucharon para seguir siendo Judíos <br /> en la modernidad.
               <input id="p4r2" type="radio" name="p4" value="0">
               <span class="checkmark"></span>
            </label>
       
       <br>
       <label class="label-container"> Abandonaron sus tradiciones y tras algunas <br /> generaciones dejaron de ser parte de <br /> las comunidades judías.
               <input id="p4r3" type="radio" name="p4" value="1">
               <span class="checkmark"></span>
            </label>
       <br>
       <div id="result4"></div> 
       <div class="lineadiv1"></div>

                       <H2> <span class="fa-stack circulo1">
                       <span class="fa fa-circle-o fa-stack-2x "></span>
                       <strong class="fa-stack-1x">
                        5    
                       </strong>
                       </span>¿Cuál fue la respuesta de Hertzl ante el antisemitismo?</H2>
                       
                       <label class="label-container">  Planteó como solución la creación de <br /> un Estado judío.
                        <input id="p5r1" type="radio" name="p5" value="1">
                         <span class="checkmark"></span>
                      </label>
                       <br>
                       <label class="label-container"> Propuso abandonar las prácticas      religiosas.
                        <input id="p5r2" type="radio" name="p5" value="0">
                         <span class="checkmark"></span>
                      </label>
                       <br>
                       <label class="label-container">  Declaró la independencia de los judíos <br /> del mundo.
                        <input id="p5r3" type="radio" name="p5" value="0">
                         <span class="checkmark"></span>
                      </label>
                       <br>
                       <div id="result5"></div> 
                       <div class="lineadiv1"></div>

                       <H2> <span class="fa-stack circulo1"> 
                       <span class="fa fa-circle-o fa-stack-2x "></span>
                       <strong class="fa-stack-1x">
                        6   
                       </strong>
                       </span>¿Qué es el sionismo?</H2>
                       
                       <label class="label-container">  Sentir amor por Sion-Jerusalén. 
                        <input id="p6r1" type="radio" name="p6" value="0">
                         <span class="checkmark"></span>
                      </label>
                       <br>
                       <label class="label-container"> Sostener que los judíos como pueblo <br /> tienen derecho a un Estado propio.
                        <input id="p6r2" type="radio" name="p6" value="1">
                         <span class="checkmark"></span>
                      </label>
                       <br>
                       <label class="label-container">  Es un movimiento estudiantil judío. 
                        <input id="p6r3" type="radio" name="p6" value="0">
                         <span class="checkmark"></span>
                      </label>
                       <br>
                       <div id="result6"></div> 
                       <br> 
                       <div class="divrespuestas">
                         <button type="button" onclick="resultado()"> 
                            Ver Respuestas
                         </button>
                       
                         <button id="botonrespuesta" style="display: none;" type="button" onclick="reiniciar()">
                            Reiniciar
                         </button>
                      </div>
     </div>
    </div>


  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="text-center reflexion">
      
      <h2 class="reflexionh2">  <span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        1    
      </strong>
      </span>Como se observa en el video, existen distintos tipos de sionismo: Sionismo Político, Sionismo Revisionista, Sionismo Sintético, Sionismo Espiritual. ¿Qué podemos concluir respecto de la identidad judía si tenemos en cuenta la multiplicidad de significados al interior del término?</h2>
      <div class="lineadiv"></div>
      <h2><span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        2    
      </strong>
      </span>Poniendo el foco en las distintas respuestas que dieron los judíos al Iluminismo, ¿te sentís identificado/a con alguna de ellas? </h2>
      <ul class="reflexionul" >
        <li>Podrás reflexionar más sobre estas preguntas y compartir tus respuestas en el encuentro por Zoom. <span style="color: rgba(139, 55, 107, 1)"> Ponete en contacto con tu coordinador/a para conocer fecha y hora de la clase. </span> </li> 
      </ul>
    </div>
  </div>

<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <div class="actividadindividual">
      
      <h2 class="actividadh2">Actividad Individual</h2>
      <h3> <span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        1    
      </strong>
      </span>Elegí tres personas de tu entorno más cercano (pueden ser familiares o amigos)para hacerle las siguientes preguntas: </h3>
      <ul class="individualul">
        <li>¿Qué signfica para vos ser judío/a?</li>
        <li>¿Esa definición siempre fue así o fue cambiando a lo largo de las experiencias vividas?</li>
        <li>Si pudieras describir tu identidad judía a través de uno o más objetos, <br /> ¿cuáles serían y por qué?</li>
      </ul>
      <div class="lineadiv2"></div>
      <h3 class="actividadh3mobile"> <span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        2    
      </strong>
      </span>Hacé un registro documental y fotográfico <br /> -de las respuestas y objetos seleccionados- y subílo en formato PDF al drive. No olvides escribir tu nombre y apellido. </h3>
      
      <h3 class="actividadh3"> <span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        2    
      </strong>
      </span>Hacé un registro documental y fotográfico -de las respuestas y objetos seleccionados- y subílo en formato PDF al drive. No olvides escribir tu nombre y apellido. </h3>


      <div class="divsubarchivo">
      <a href="http://" class="subirarchivo">Subir Archivo</a>
       </div>
    </div>
 </div>
</div>

</div>
                     
<script src="{{ asset('js/act1.js') }}" defer></script>

@endsection('content')
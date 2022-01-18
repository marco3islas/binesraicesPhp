<?php
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = false);
    ?>
 <main class="contenedor seccion contenido-centrado">
     <h1>Casa en Venta frente al bosque</h1>

     <picture>
       <source srcset="build/img/destacada.webp" type="image/webp" >
       <source srcset="build/img/destacada.jpg" type="image/jpeg" >
       <img loading="lazy" src="build/img/destacada.jpg" alt="Foto de la casa ferte a un bosque"/>
     </picture>

       <div class="resumen-propiedad">

         <p class="precio">$3,000,000</p>
         <ul class="iconos-caracteristicas">
           
           <li>
             <img class="icono" src="build/img/icono_wc.svg" alt="Icono de banos">
             <p>3</p>
           </li>
           <li>
             <img class="icono" src="build/img/icono_dormitorio.svg" alt="Icono de recamaras">
             <p>3</p>
           </li>
           <li>
             <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Icono de estacionamiento">
             <p>4</p>
           </li>
         </ul>
         <p>
          
Casa ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

Departamento ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

Coches  ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

         </p>
         
       </div>
 </main>
<?php
    incluirTemplate('footer');
?>

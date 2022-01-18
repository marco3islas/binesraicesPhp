<?php
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = false);
    ?>
 <main class="contenedor seccion contenido-centrado">
     <h1>Guia para la decoracion de tu Hogar.</h1>


     <picture>
       <source srcset="build/img/destacada2.webp" type="image/webp" >
       <source srcset="build/img/destacada2.jpg" type="image/jpeg" >
       <img loading="lazy" src="build/img/destacada2.jpg" alt="Foto de la entrada del blog"/>
     </picture>
     <p class="informacion-meta">Escrito el: <span>20/10/2022</span>por: <span>Admin</span></p>

       <div class="resumen-propiedad">

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

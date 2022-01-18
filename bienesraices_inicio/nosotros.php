<?php
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = false);
    ?>

 <main class="contenedor seccion">
     <h1>Nosotros</h1>
     <article>
       <div class="imagen">
         <picture>
           <source srcset="build/img/nosotros.webp" type="image/webp">
           <source srcset="build/img/nosotros.jpg" type="image/jpeg">
             <img src="build/img/nosotros.jpg" alt="Foto del interior de una casa" loading="lazy">
         </picture>

       </div>
       <div class="texto">
         <blockquote>25 años de Experiencia</blockquote>
         <p>
           Amet quisquam adipisicing quia quam eligendi officiis? Dolor eveniet voluptates autem iusto consequuntur inventore, earum Quia corporis a placeat incidunt est sunt Dignissimos magni fugiat earum cumque at sunt. Labore repellendus quisquam assumenda nisi iste Beatae iure est inventore eaque iste! Animi ab fuga officia iste quod Hic quidem perspiciatis!
         </p>
         <p>
         Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et.
         </p>

       </div>
     </article>
     <div class="iconos">
      <div class="icono">
        <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
        <h3>Seguridad</h3>
        <p>
          Amet animi illum quidem corrupti iure Architecto voluptatum expedita non laboriosam beatae cumque Quasi obcaecati distinctio veniam id dignissimos voluptatibus
        </p>
      </div>
      <div class="icono">
        <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
        <h3>Mejores Precios</h3>
        <p>
          Amet animi illum quidem corrupti iure Architecto voluptatum expedita non laboriosam beatae cumque Quasi obcaecati distinctio veniam id dignissimos voluptatibus
        </p>
      </div>
      <div class="icono">
        <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
        <h3>A tiempo</h3>
        <p>
          Amet animi illum quidem corrupti iure Architecto voluptatum expedita non laboriosam beatae cumque Quasi obcaecati distinctio veniam id dignissimos voluptatibus
        </p>
      </div>
       
     </div>
 </main>
<?php
    incluirTemplate('footer');
    ?>

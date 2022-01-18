<!DOCTYPE HTML>
<html lang="en">

<?php
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
    ?>

 <main class="contenedor seccion">
   <h2>Mas Sobre Nosotros</h2>
 <div class="iconos-nosotros">
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
 <section class="seccion contenedor">
   <h2>Casas y Depas en Venta</h2>
   <div class="contenedor-anuncios">
     <div class="anuncio">
       <picture>
         <source srcset="build/img/anuncio1.webp" type="image/webp">
         <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
           <img src="build/img/anuncio1.jpg" loading="lazy" alt="Foto anuncio casa">
       </picture>
       <div class="contenido-anuncio">
         <h3>Casas de Lujo en el Lago</h3>
         <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
         <p class="precio">$3,000,000</p>
         <ul class="iconos-caracteristicas">
           
           <li>
             <img src="build/img/icono_wc.svg" alt="Icono de banos">
             <p>3</p>
           </li>
           <li>
             <img src="build/img/icono_dormitorio.svg" alt="Icono de recamaras">
             <p>3</p>
           </li>
           <li>
             <img src="build/img/icono_estacionamiento.svg" alt="Icono de estacionamiento">
             <p>4</p>
           </li>
         </ul>

         <a href="anuncios.php" class="boton boton-amarillo-block">Ver Propiedad</a>
       </div>
     </div>
     <div class="anuncio">
       <picture>
         <source srcset="build/img/anuncio2.webp" type="image/webp">
         <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
           <img src="build/img/anuncio2.jpg" loading="lazy" alt="Foto anuncio casa">
       </picture>
       <div class="contenido-anuncio">
         <h3>Casa Acabados de Lujo</h3>
         <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
         <p class="precio">$3,000,000</p>
         <ul class="iconos-caracteristicas">
           
           <li>
             <img src="build/img/icono_wc.svg" alt="Icono de banos">
             <p>3</p>
           </li>
           <li>
             <img src="build/img/icono_dormitorio.svg" alt="Icono de recamaras">
             <p>3</p>
           </li>
           <li>
             <img src="build/img/icono_estacionamiento.svg" alt="Icono de estacionamiento">
             <p>4</p>
           </li>
         </ul>

         <a href="anuncios.php" class="boton-amarillo-block">Ver Propiedad</a>
       </div>
     </div>
     <div class="anuncio">
       <picture>
         <source srcset="build/img/anuncio3.webp" type="image/webp">
         <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
           <img src="build/img/anuncio3.jpg" loading="lazy" alt="Foto anuncio casa">
       </picture>
       <div class="contenido-anuncio">
         <h3>Casa con Alberca</h3>
         <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
         <p class="precio">$3,000,000</p>
         <ul class="iconos-caracteristicas">
           
           <li>
             <img src="build/img/icono_wc.svg" alt="Icono de banos">
             <p>3</p>
           </li>
           <li>
             <img src="build/img/icono_dormitorio.svg" alt="Icono de recamaras">
             <p>3</p>
           </li>
           <li>
             <img src="build/img/icono_estacionamiento.svg" alt="Icono de estacionamiento">
             <p>4</p>
           </li>
         </ul>

         <a href="anuncios.php" class="boton boton-amarillo-block">Ver Propiedad</a>
       </div>
     </div>
   </div>
   <div class="alinear-derecha">
     <a href="anuncios.php" class="boton boton-verde">Ver Todas</a>
   </div>
 </section>
 <section class="imagen-contacto">
   <h2>Encuentra la casa de tus Suenos.</h2>
   <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad.</p>
   <a class="boton-amarillo" href="contacto.php">Contacto</a>
 </section>
 <div class="contenedor seccion seccion-inferior">
   <section class="blog">
     <h3>Nuestro Blog</h3>
     <article class="entrada-blog">
       <div class="imagen">
         <picture>
           <source srcset="build/img/blog1.webp" type="image/webp">
           <source srcset="build/img/blog1.jpg" type="image/jepg">
             <img src="build/img/blog1.jpg" loading="lazy" alt="Entrada blog foto de una casa">
         </picture>

       </div>
       <div class="texto-entrada">
         <a href="entrada.php">
           <h4>Terraza en el techo de tu casa.</h4>
           <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span></p>

           <p>
             Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.
           </p>
         </a>
       </div>
     </article>
     <article class="entrada-blog">
       <div class="imagen">
         <picture>
           <source srcset="build/img/blog2.webp" type="image/webp">
           <source srcset="build/img/blog2.jpg" type="image/jepg">
             <img src="build/img/blog2.jpg" loading="lazy" alt="Entrada blog foto de una casa">
         </picture>

       </div>
       <div class="texto-entrada">
         <a href="entrada.php">
           <h4>Guia para la decoracion de tu hogar.</h4>
           <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span></p>

           <p>
             Maximiza el espacio en tu hogar con esta guia aprende a combinar muebles y colores para darle vida a tu espacio.
           </p>
         </a>
       </div>
     </article>
   </section>
   <section class="testimoniales">
     <h3>Testimonales</h3>
      <div class="testimonial">
        <blockquote>
          El personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrecieron cumple con todas mis espectativas.
        </blockquote>
        <p>
          - Pedro de Alarcon
        </p>
      </div>

   </section>
 </div>
<?php
    incluirTemplate('footer');
?>

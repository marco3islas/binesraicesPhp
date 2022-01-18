<?php
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = false);
    ?>
 <main class="contenedor seccion">
     <h1>Contacto</h1>
     <picture> 
       <source srcset="build/img/destacada3.webp" type="image/webp">
       <source srcset="build/img/destacada3.jpg" type="image/jpeg">
       <img src="build/img/destacada.jpg" alt="Foto para la seccion de Contacto"/>
     </picture>

     <h2>Llene el formulario de Contacto.</h2>

     <form action="contacto_submit" class="formulario" method="get" accept-charset="utf-8">

       <fieldset id="informacion_personal" class="">
         <legend>Informacion Personal</legend>
         <label id="nombre" for="nombre">Nombre:</label>
         <input type="text"  placeholder="Escribe tu nombre" name="nombre" id="nombre"/>
         <label id="email" for="email">Email:</label>
         <input type="mail"  placeholder="Escribe tu email" name="email" id="email"/>
         <label id="telefono" for="telefono">Telefono:</label>
         <input type="tel" placeholder="Escribe tu telefono" name="telefono" id="telefono"/>

         <label for="mensaje">Mensaje</label>
         <textarea name="mensaje" id="mensaje"></textarea>
         
       </fieldset>

       <fieldset id="informacion_sobre_propiedad" class="">
         <legend>Informacion sobre Propiedad</legend>

         <label class="opciones">Vende, Compra o Renta ?</label>
         <select id="opciones">
           <option value="" disabled selected>-- Seleccione --</option>
           <option value="compra">Compra</option>
           <option value="vende">Vende</option>
           <option value="renta">Renta</option>
        </select>
         <label id="presupuesto" for="presupuesto">Precio o Presupuesto:</label>
         <input type="number" placeholder="Escribe tu Precio o Presupuesto" name="presupuesto" id="presupuesto"/>
       </fieldset>
       
       <fieldset id="contacto" class="">
         <legend>Contacto</legend>
         
         <p>Como desea ser contactado?</p>

         <div class="forma-contacto"> 
           <label for="contactar-telefono">Telefono</label>
           <input name="contacto" type="radio" value="telefono"  id="contactar-telefono">

           <label for="contactar-email">E-mail</label>
           <input name="contacto" type="radio" value="email"  id="contactar-email">

           <label for="contactar-whats">Whatsapp</label>
           <input name="contacto" type="radio" value="whats" id="contactar-whats">
           </div>

           <p>Si eligio telefono, elija la fecha y la hora para ser contactado</p>
         
           <label for="fecha">Fecha</label>
           <input name="fecha" type="date" id="fecha">

           <label for="Hora">Hora</label>
           <input name="hora" type="time" name="hora" id="hora" min="09:00" max="18:00">
       </fieldset>

       <input class="boton-verde" type="submit" name="enviar" id="enviar" value="Enviar">
       
     </form>
 </main>
<?php
    incluirTemplate('footer');
    ?>

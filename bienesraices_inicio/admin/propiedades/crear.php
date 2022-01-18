<?php
    // Base de datos

        require '../../includes/config/database.php';
        $db = conectarDB();

        // Cosultar para obtener vendedores

        $consulta = "SELECT * FROM vendedores";
        $resultado = mysqli_query($db, $consulta);

        // Arreglo con mensajes de errores

        $errores = [];

            $titulo = '';
            $precio = '';
            $descripcion ='';
            $habitaciones = '';
            $wc = '';
            $estacionamiento = '';
            $vendedorId = '';
            $creado = date('Y/m/d');

        // Ejecutar el codigo despues que el usuario envia el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            $titulo = mysqli_real_escape_string( $db,  $_POST['titulo']);
            $precio = mysqli_real_escape_string($db,  $_POST['precio']);
            $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
            $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
            $wc = mysqli_real_escape_string($db, $_POST['wc']);
            $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
            $vendedorId = mysqli_real_escape_string($db,  $_POST['vendedorId']);
            $creado = date('Y/m/d');

            //Asignar files a una variable
            $imagen = $_FILES['imagen'];

            if(!$titulo){
                $errores[] = "Debes anadir un titulo";
                
            }
            if(!$precio){
                $errores[] = "El precio es Obligatorio";
                
            }
            if(strlen( $descripcion ) < 50 ){
                $errores[] = "La descripcion debe tener al menos 50 caracteres.";
                
            }
            if(!$habitaciones){
                $errores[] = "El numero de habitaciones es obligatorio";
                
            }
            if(!$wc){
                $errores[] = "El numero de baños es obligatorio";
                
            }
            if(!$estacionamiento){
                $errores[] = "El numero de estacionamientos es obligatorio";
                
            }
            if(!$vendedorId){
                $errores[] = "El id del vendedor(a) es obligatorio";
                
            }

            if(!$imagen['name']){
                $errores = 'La imagen es obligatoria';
            }

            // validar por tamano


            //echo "<pre>";
            //    var_dump($errores);

            //echo "</pre>";

            // Insertar en la base de datos

            // Revisar que el arreglo de errores este vacio

            if(empty($errores)){
                $query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado','$vendedorId')";

            
            echo $query;
            $resultado = mysqli_query($db, $query);

            if($resultado){
                header("Location: /admin");
            }
            }
        }




        require '../../includes/funciones.php';
        incluirTemplate('header');
?>
 <main class="contenedor seccion">

     <h1> Agregar nueva propiedad </h1>

     <a href="/admin" class="boton boton-verde">Regresar</a> 

    <?php foreach($errores as $error): ?>
        
    <div class = "alerta error">
        <?php echo $error; ?>
    </div>

    <?php endforeach; ?>


    <form method="POST" action="/admin/propiedades/crear.php" class="formulario" enctype="multipart/form-data">
         <fieldset> 
            <legend>Informacion General</legend> 
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo;?>">

        <label for="precio">Precio</label>
        <input type="number" name="precio" id="precio" value=" <?php echo $precio;?> "placeholder="Precio">

        <label for="imagen">Imagen</label>
        <input type="file" name="imagen"  id="imagen" value=" <?php echo $imagen;?> "accept="image/jpeg, image/png" >

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion">
             <?php echo $descripcion;?>
        </textarea>

    </fieldset>
    <fieldset>
        <legend> Informacion de la Propiedad</legend>

        <label for="habitaciones">Habitaciones</label>
        <input type="number" 
               name="habitaciones" 
               id="habitaciones" 
               value=" <?php echo $habitaciones;?> "placeholder="Cuantas habitaciones tiene la propiedad ?" min="0" max="20">

        <label for="wc">Baños</label>
        <input type="number" 
               name="wc" 
               id="wc" 
               placeholder="Cuantos baños tiene la propiedad ?" 
               value=" <?php echo $wc;?> "
               min="0" 
               max="20">

        <label for="estacionamiento">Estacionamiento</label>
        <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Cuantos estacionamientos tiene la propiedad ?" value=" <?php echo $estacionamiento;?> "min="0" max="20">

    </fieldset>
    <fieldset>
        <legend>Vendedor</legend>
        <select name="vendedorId" value=" <?php echo $vendedorId;?> ">
                <option value="">-- Seleccione --</option>
                <?php
                    while($column = mysqli_fetch_assoc($resultado)):
                        ?>
                        <option <?php echo $vendedorId === $column['idvendedores'] ? 'selected' : ''; ?> value="<?php echo $column['idvendedores']; ?>"> <?php echo $column['nombre']. " ". $column["apellido"]; ?> </option>
                <?php endwhile  ?>
        </select>
    </fieldset>
<input type="submit" value="Guardar" class="boton boton-amarillo">
</form>
</main>

<?php
    incluirTemplate('footer');

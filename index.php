
<?php
require('./controlador/login1.php');


if(isset($_SESSION['id'])){/*si el usuario esta logeado me direcciona al form principal */
    header('location: panel.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<?php require_once "head.php"
?>
<body>
    
  <section>
       <div class="titulo">
           <h1>Login</h1>
       </div>
    <form action="" class="formulario"   method="post"> 
    <?php if(count($error)>0):?>
                <div class="alert">
                <?php foreach($error as $e): ?>
                <li><?php  echo $e;?> </li>
                <?php endforeach;/*un foreach para recorrer los errores de del array*/?>
                  </div>
    <?php endif;?>
        <label>Usuario</label>
        <input type="text" name="usuario">
      
        <label>Contraseña</label>
        <input type="password" name="contraseña">
        <button type="submit" name="ingresar">Ingresar</button>
    </form>
    </section>
 
</body>
</html>
<?php
/** @version 1.0
 * @copyright Elemental Software 2012
 * @author Jeyson Alvarez Alvarez
 */
 include 'header.php';
 ?>
 <!--Body-->
<div  class="contentPag">
 <header class="Encabezado">
 	<h1>Darrow | Pedidos</h1>
 </header>
 <section>
 	<article>
 		<fieldset id="registrousuario">
<form id="sesion" method="post" action="">
<legend>Inicio Sesion</legend>
<label for="user">Usuario:</label>
<input class="texto" name="username " type="text" size="20" />
<label for="pass">Contraseña:</label>
<input class="texto" name="password" type="password" size="20" />
<br /> 
<input class="botonenviar" name="insert" type="submit" value="Enviar" class="enviar"/> 
</form> 
</fieldset>
 	</article>
 
 </section>
 <?php
 include 'footer.php';
 ?>	
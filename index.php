<HTML>
<HEAD>
</HEAD>
<BODY>


<form name='mi_formulario' action='ejercicio_2.php' method='post'>
<!-- Pueden incluirse textos dentro del formulario -->
Escribe un numero N entero:
<input type='number' name='numero' min="1" max="9999999" step="1" value='1'  required="required"><br>




<input type="hidden" name='oculto' value='Esto ir�a oculto'><br>

<input type="submit" value="enviar">
<!-- El <input type='reset'>
	   permite borrar todos los contenidos
	   del formulario y reestablecer los valores
	   por defecto de cada campo //-->

<input type="reset" value="borrar">
<!-- La etiqueta </form>
	   es la etiqueta de cierre del formulario   //-->
</FORM>
</BODY>
</HTML>
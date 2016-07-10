<?php

// Forma dinamica

//$dbh = mysql_connect("localhost", $user, $pass);
//$db = mysql_select_db($bbdd);

//$consulta = "SELECT * from tabla WHERE id_padre = ".$_GET['id'];
//$query = mysql_query($consulta);
//while ($fila = mysql_fetch_array($query)) {
 //   echo '<option value="'.$fila['id'].'">'.$fila['nombre'].'</option>';
//};

//Forma estatica
if ($_GET['id']==1) {
	echo 
'<option value="">AMERICAN SCHOOL OF SANTO DOMINGO</option>'.
'<option value="">BABEQUE PRIMARIA</option>'.
'<option value="">BABEQUE SECUNDARIA</option>'.
'<option value="">CAROL MORGAN SCHOOL</option>'.
'<option value="">CENTRO EDUCATIVO LOS PRADOS</option>'.
'<option value="">COLEGIO AMADOR</option>'.
'<option value="">COLEGIO BILINGUE NEW HORIZONS</option>'.
'<option value="">COLEGIO CALASANZ</option>'.
'<option value="">COLEGIO DEL APOSTOLADO DEL SAGRADO CORAZON</option>'.
'<option value="">COLEGIO DOMINICANO DE LA SALLE</option>'.
'<option value="">COLEGIO DOMINICO-AMERICANO</option>'.
'<option value="">COLEGIO DON BOSCO</option>'.
'<option value="">COLEGIO INSTITUTO MONTESSORI</option>'.
'<option value="">COLEGIO LUIS MUÑOZ RIVERA</option>'.
'<option value="">COLEGIO LUX MUNDI</option>'.
'<option value="">COLEGIO MARIA MONTESSORI</option>'.
'<option value="">COLEGIO NUESTRA SEÑORA DE LA ALTAGRACIA</option>'.
'<option value="">COLEGIO SAN JUDAS TADEO</option>'.
'<option value="">COLEGIO SAN JUAN BAUTISTA</option>'.
'<option value="">COLEGIO SANTA TERESITA</option>'.
'<option value="">COLEGIO SANTO DOMINGO</option>'.
'<option value="">COLEGIO SERAFIN DE ASIS DE SANTO DOMINGO</option>'.
'<option value="">COMUNIDAD EDUCATIVA CONEXUS</option>'.
'<option value="">KING&acute;S CHRISTIAN SCHOOL</option>'.
'<option value="">MC SCHOOL</option>'.
'<option value="">MUNDO MARIA MONTESSORI</option>'.
'<option value="">NOTRE DAME SCHOOL</option>'.
'<option value="">PRIMARIA MONTESSORI DE SANTO DOMINGO</option>'.
'<option value="">SAINT GEORGE SCHOOL</option>'.
'<option value="">SAINT JOSEPH SCHOOL</option>'.
'<option value="">SAINT THOMAS SCHOOL</option>'.
'<option value="">ST. MICHAEL&acute;S SCHOOL</option>'.
'<option value="">ST. PATRICK SCHOOL</option>'.
'<option value="">THE AMERICA&acute;S BICULTURAL ACADEMY</option>'.
'<option value="">THE ASHTON SCHOOL</option>'.
'<option value="">THE COMMUNITY FOR LEARNING</option>'.
'<option value="">OTRO</option>';
}
if ($_GET['id']==2) {
	echo 
	'<option value="1">COLEGIO DE SANTIAGO</option>'.
	'<option value="">OTRO</option>';
}
?>
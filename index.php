<?php
// error_reporting(0);
// require 'database.php';
// if(!isset($_POST['preguntatres'])){ echo "¡¡¡¡¡NO ESTOY RECIBIENDO EL INPUT!!!!!!";}
// else { echo "SI ESTOY RECIBIENDO EL INPUT"; }

// if(!isset($_POST['submit'])) {}
if( !empty($_POST['vacio2']) && !empty($_POST['email']) && !empty($_POST['telefono']) && isset($_POST['vacio']) && isset($_POST['vacio1']) && isset($_POST['vacio2']) && isset($_POST['telefono'])&& isset($_POST['email']) && isset($_POST['pregunta0']) && isset($_POST['pregunta1']) && isset($_POST['pregunta2']) && isset($_POST['pregunta3']) && isset($_POST['pregunta4']) && isset($_POST['pregunta5']) && isset($_POST['pregunta6']) && isset($_POST['pregunta7']) && isset($_POST['pregunta8'])){
    $copropiedad = $_POST['vacio'];
    $numerounidad = $_POST['vacio1'];
    $nombre = $_POST['vacio2'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $pregunta0 = $_POST['pregunta0'];
    $pregunta1 = $_POST['pregunta1'];
    $pregunta2 = $_POST['pregunta2'];
    $pregunta3 = $_POST['pregunta3'];
    $pregunta4 = $_POST['pregunta4'];
    $pregunta5 = $_POST['pregunta5'];
    $pregunta6 = $_POST['pregunta6'];
    $pregunta7 = $_POST['pregunta7'];
    $pregunta8 = $_POST['pregunta8'];


    $datac = [
        'copropiedad'=> $copropiedad,
        'numerounidad'=> $numerounidad,
        'nombre'=> $nombre,
        'telefono'=> $telefono,
        'email'=> $email,
        'preguntacero' => $pregunta0,
        'preguntauno' => $pregunta1,
        'preguntados' => $pregunta2,
        'preguntatres' => $pregunta3,
        'preguntacuatro' => $pregunta4,
        'preguntacinco' => $pregunta5,
        'preguntaseis' => $pregunta6,
        'preguntasiete' => $pregunta7,
        'preguntaocho' => $pregunta8
    ];

    $sql2 = "INSERT INTO encuesta (copropiedad,numerounidad,nombre,telefono,correo,pregunta0,pregunta1,pregunta2,pregunta3,pregunta4,pregunta5,pregunta6,pregunta7,pregunta8) VALUES (:copropiedad, :numerounidad, :nombre, :telefono, :email, :preguntacero, :preguntauno, :preguntados, :preguntatres, :preguntacuatro, :preguntacinco, :preguntaseis, :preguntasiete, :preguntaocho)";
    // $sql2 = "INSERT INTO encuesta (copropiedad,numerounidad,nombre,telefono,correo,pregunta0,pregunta1,pregunta2,pregunta3) VALUES (:copropiedad, :numerounidad, :nombre, :telefono, :email, :preguntacero, :preguntauno, :'preguntados', :'preguntatres')";
    $stmt2= $conn->prepare($sql2);
    $stmt2->execute($datac);

    echo '<script>alert("Su información ha sido enviada. Muchas gracias");</script>';

}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>administraciónes Gj</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1,maximum-scale=1, minimum-scale=1">
		<link rel="stylesheet" href="index.css">
    </head>

    <body>
		<div class="contenedor">
            <div class="titulo">
                <div class="logo">
                    <img src="img/calificanos-logo-web.png">
                    <img src="img/logo GJ-11.svg" >
                    <h1>Encuesta <br>
                    <b>de satisfacción</b> </h1>
                </div>
            </div>

			<form action="index.php" method="post" id="formulario">
                <div class="formularios">
                    <div class="datospersonales">
                        <div class="datatitulo">
                            <h3>Información <br>
                            <b>Copropietario</b></h3>
                            <p>Campos obligatorios*</p>
                        </div>
                        <div class="preguntas">
                            <div class="formulario__grupo-input" id="grupo__vacio">
                                <input style="margin-top: 15px;" type="text"  class="formulario__input"  name="vacio" placeholder="Nombre Copropiedad*" >
                            </div>
                            <div class="formulario__grupo-input" id="grupo__vacio1">
                                <input style="margin-top: 15px;" type="text"  class="formulario__input" name="vacio1" placeholder="Numero unidad*">
                            </div>
                                <p>(apartamento, casa, oficina, local, consultorio, lote…..)</p>
                            <div class="formulario__grupo-input" id="grupo__vacio2">
                                <input style="margin-top: 15px;" type="text"  class="formulario__input" name="vacio2" placeholder="Nombres y Apellidos*">
                            </div>
                            <div class="formulario__grupo" id="grupo__telefono">
                                <div class="formulario__grupo-input">
                                    <input style="margin-top: 15px;" type="number"  class="formulario__input" name="telefono" placeholder="Teléfono/Móvil">
                                </div>
                                <p>Ejemplo: 301 555 4433</p>
                                <p>e</p>
                            </div>
                            <div class="formulario__grupo" id="grupo__email">
                                <div class="formulario__grupo-input">
                                    <input style="margin-top: 15px;" type="email"  class="formulario__input" name="email" placeholder="Correo">
                                </div>
                                <p>Ejemplo: example@outlook.com</p>
                                <p style="margin-top: 20px; color: rgb(3, 94, 231);">El teléfono y el correo nos ayudaran a notificarle rápidamente en caso de ganarse el premio.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="seleccionRadio">
                        <div class="pregunta2">
                            <div class="preguntaText2">
                                <h2>Califique su nivel de satisfacción</h2>
                                <p>Califica de 1 a 5, donde 1 es la calificación minima y 5 la calificación máxima <br>
                                <br>
                                <br>
                                    N: No sabe, no responde.
                                </p>
                            </div>
                            <div class="opcionestext2 " style="padding: 0;margin:0;font-size: 1rem; font-family: 'Poppins', sans-serif;">
                                <p > 1  </p>
                                <p> 2 </p>
                                <p> 3 </p>
                                <p> 4 </p>
                                <p> 5 </p>
                                <p> N </p>
                            </div>
                        </div>
                        
                        <div class="pregunta">
                            <div class="preguntaText">
                                <p><b style=" font-family: 'Poppins', sans-serif;">1. </b> Nivel de satisfacción general con los servicios de Administraciones GJ</p>
                            </div>
                            <div class="opcionestext">
                                <input type="radio" value="1" name="pregunta1">
                                <input type="radio" value="2" name="pregunta1">
                                <input type="radio" value="3" name="pregunta1">
                                <input type="radio" value="4" name="pregunta1">
                                <input type="radio" value="5" name="pregunta1">
                                <input type="radio" value="No sabe/responde" name="pregunta1">
                            </div>
                        </div>
                        <div class="pregunta" style=" font-family: 'Poppins', sans-serif;">
                            <div class="preguntaText" style=" font-family: 'Poppins', sans-serif;">
                            </div>
                            <div class="opcionestext" style="padding: 0;margin: 0;font-size: 1rem; font-family: 'Poppins', sans-serif;">
                            <p > 1  </p>
                                <p> 2 </p>
                                <p> 3 </p>
                                <p> 4 </p>
                                <p> 5 </p>
                                <p> N </p>
                            </div>
                        </div>
                        <div class="pregunta">
                            <div class="preguntaText">
                                <p><b style=" font-family: 'Poppins', sans-serif;">2.</b> Amabilidad y disposición del personal de la administración</p>
                            </div>
                            <div class="opcionestext">
                                <input type="radio"  value="1" name="pregunta2">
                                <input type="radio"  value="2" name="pregunta2">
                                <input type="radio"  value="3" name="pregunta2">
								<input type="radio"  value="4" name="pregunta2">
                                <input type="radio"  value="5" name="pregunta2">
                                <input type="radio"  value="No sabe/no responde" name="pregunta2">
                            </div>
                        </div>
                        <div class="pregunta" style=" font-family: 'Poppins', sans-serif;">
                            <div class="preguntaText" style=" font-family: 'Poppins', sans-serif;">
                            </div>
                            <div class="opcionestext" style="padding: 0;margin: 0;font-size: 1rem; font-family: 'Poppins', sans-serif;">
                            <p > 1  </p>
                                <p> 2 </p>
                                <p> 3 </p>
                                <p> 4 </p>
                                <p> 5 </p>
                                <p> N </p>
                            </div>
                        </div>
                        <div class="pregunta">
                            <div class="preguntaText">
                                <p><b style=" font-family: 'Poppins', sans-serif;">3.</b> Transparencia en el manejo de los recursos</p>
                            </div>
                            <div class="opcionestext">
                                <input type="radio"  value="1" name="pregunta3">
                                <input type="radio"  value="2" name="pregunta3">
                                <input type="radio"  value="3" name="pregunta3">
                                <input type="radio"  value="4" name="pregunta3">
                                <input type="radio"  value="5" name="pregunta3">
                                <input type="radio"  value="No sabe/responde" name="pregunta3">
                            </div>
                        </div>
                        <div class="pregunta" style=" font-family: 'Poppins', sans-serif;">
                            <div class="preguntaText" style=" font-family: 'Poppins', sans-serif;">
                            </div>
                            <div class="opcionestext" style="padding: 0;margin: 0;font-size: 1rem; font-family: 'Poppins', sans-serif;">
                            <p > 1  </p>
                                <p> 2 </p>
                                <p> 3 </p>
                                <p> 4 </p>
                                <p> 5 </p>
                                <p> N </p>
                            </div>
                        </div>
                        <div class="pregunta">
                            <div class="preguntaText">
                                <p><b style=" font-family: 'Poppins', sans-serif;">4.</b> Atención oportuna a sus requerimientos</p>
                            </div>
                            <div class="opcionestext">
                                <input type="radio"  value="1" name="pregunta4">
                                <input type="radio"  value="2" name="pregunta4">
                                <input type="radio"  value="3" name="pregunta4">
                                <input type="radio"  value="4" name="pregunta4">
                                <input type="radio"  value="5" name="pregunta4">
                                <input type="radio"  value="No sabe/no responde" name="pregunta4">
                            </div>
                        </div>
                        <div class="pregunta" style=" font-family: 'Poppins', sans-serif;">
                            <div class="preguntaText" style=" font-family: 'Poppins', sans-serif;">
                            </div>
                            <div class="opcionestext" style="padding: 0;margin: 0;font-size: 1rem; font-family: 'Poppins', sans-serif;">
                            <p > 1  </p>
                                <p> 2 </p>
                                <p> 3 </p>
                                <p> 4 </p>
                                <p> 5 </p>
                                <p> N </p>
                            </div>
                        </div>
                        <div class="pregunta">
                            <div class="preguntaText">
                                <p><b style=" font-family: 'Poppins', sans-serif;">5.</b> Comunicación de los asuntos de la copropiedad</p>
                            </div>
                                <div class="opcionestext">
                                    <input type="radio"  value="1" name="pregunta5">
                                    <input type="radio"  value="2" name="pregunta5">
                                    <input type="radio"  value="3" name="pregunta5">
                                    <input type="radio"  value="4" name="pregunta5">
                                    <input type="radio"  value="5" name="pregunta5">
                                    <input type="radio"  value="No sabe/responde" name="pregunta5">
                                </div>
                        </div>
                        <div class="pregunta" style=" font-family: 'Poppins', sans-serif;">
                            <div class="preguntaText" style=" font-family: 'Poppins', sans-serif;">
                            </div>
                            <div class="opcionestext" style="padding: 0;margin: 0;font-size: 1rem; font-family: 'Poppins', sans-serif;">
                            <p > 1  </p>
                                <p> 2 </p>
                                <p> 3 </p>
                                <p> 4 </p>
                                <p> 5 </p>
                                <p> N </p>
                            </div>
                        </div>
                        <div class="pregunta">
                            <div class="preguntaText">
                                <p><b style=" font-family: 'Poppins', sans-serif;">6.</b> Funcionalidad de los equipos. </p>
                                <h3>(ascensores, puertas electricas, Planta eléctrica, Bombas..)</h3>
                            </div>
                            <div class="opcionestext">
                                <input type="radio"  value="1" name="pregunta6">
                                <input type="radio"  value="2" name="pregunta6">
                                <input type="radio"  value="3" name="pregunta6">
                                <input type="radio"  value="4" name="pregunta6">
                                <input type="radio"  value="5" name="pregunta6">
                                <input type="radio"  value="No sabe/responde" name="pregunta6">
                            </div>
                        </div>
                        <div class="pregunta" style=" font-family: 'Poppins', sans-serif;">
                            <div class="preguntaText" style=" font-family: 'Poppins', sans-serif;">
                            </div>
                            <div class="opcionestext" style="padding: 0;margin: 0;font-size: 1rem; font-family: 'Poppins', sans-serif;">
                            <p > 1  </p>
                                <p> 2 </p>
                                <p> 3 </p>
                                <p> 4 </p>
                                <p> 5 </p>
                                <p> N </p>
                            </div>
                        </div>
                        <div class="pregunta">
                            <div class="preguntaText">
                                <p><b style=" font-family: 'Poppins', sans-serif;">7.</b> Las zonas comunes tienen una adecuada presentación. </p>
                                <h3>(Jardines, pintura, estética, orden..)</h3>
                            </div>
                            <div class="opcionestext">
                                <input type="radio"  value="1" name="pregunta7">
                                <input type="radio"  value="2" name="pregunta7">
                                <input type="radio"  value="3" name="pregunta7">
                                <input type="radio"  value="4" name="pregunta7">
                                <input type="radio"  value="5" name="pregunta7">
                                <input type="radio"  value="No sabe/responde" name="pregunta7">
                            </div>
                        </div>
                        <div class="pregunta" style=" font-family: 'Poppins', sans-serif;">
                            <div class="preguntaText" style=" font-family: 'Poppins', sans-serif;">
                            </div>
                            <div class="opcionestext" style="padding: 0;margin: 0;font-size: 1rem; font-family: 'Poppins', sans-serif;">
                            <p > 1  </p>
                                <p> 2 </p>
                                <p> 3 </p>
                                <p> 4 </p>
                                <p> 5 </p>
                                <p> N </p>
                            </div>
                        </div>
                        <div class="pregunta">
                            <div class="preguntaText">
                                <p><b style=" font-family: 'Poppins', sans-serif;">8.</b> Aseo de las zonas comunes</p>
                            </div>
                            <div class="opcionestext">
                                <input type="radio"  value="1" name="pregunta8">
                                <input type="radio"  value="2" name="pregunta8">
                                <input type="radio"  value="3" name="pregunta8">
                                <input type="radio"  value="4" name="pregunta8">
                                <input type="radio"  value="5" name="pregunta8">
                                <input type="radio"  value="No sabe/responde" name="pregunta8">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mostrar" style="color: red; margin-left:-3%; display:none;">Debe llenar todos los campos.</div>

                <label for="w3review" style="margin-top:1.5rem;">Comentario adicional sobre nuestros servicios(opcional):</label>
                <textarea id="w3review" name="pregunta0" rows="4" cols="50" style="margin-top:1rem; font-size:1.2rem;">
                </textarea>

				<input type="submit" id="into1" name="submit" value="Enviar" >
			</form>
				
		<script src="js.js"></script>
		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</header> 
</html>
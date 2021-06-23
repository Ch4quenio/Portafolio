<?php
// $destinatario = "lisandrogomez732@gmail.com"
// $nombre = _$POST["nombre"];
// $email = _$POST["email"];
// $asunto = _$POST["asunto"];
// $mensaje = _$POST["mensaje"];
//
// $header = "Enviado desde la página de Lisandro Gómez: Desarrollador profesional";
// $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
// mail($destinatario,$asunto,$mensajeCompleto,$header);
// echo "<script>alert("correo enviado exitosamente")"
if(isset($_POST["POST"])){
  require "phpmailer/PHPMailerAutoload.php";
  $mail  = new PHPMailer;
  $mail->isSMTP();
  $mail->Host="smtp.gmail.com";
  $mail->Port=587;
  $mail->SMTPAuth=true;
  $mail->SMTPSecure="tls";
  $mail->Username="lisandrogomez732@gmail.com";
  $mail->Password ="Vijeeter123";
  $mail->setFrom($_POST["email"],$_POST["nombre"]);
  $mail->addAddres("lisandrogomez732@gmail.com");
  $mail->addReplyTo($_POST["email"],$_POST["nombre"]);

  $mail->isHTML(true);
  $mail->Subject="Enviado por ".$_POST["nombre"];
  $mail->Body = "<h1> align=center>Nombre: ".$_POST["nombre"]."<br>Email: " $_POST["email"]."<br>Mensaje: ".$_POST["mensaje"]. "<h1>" ;
    if(!email->send()){
      $result = "algo salio mal"
    }
    else{
 $result = "Gracias sos un pija larga asdasd";
 echo "<script> setTimeout(\"location.href= "index.html"\") </script>";

    }
}




?>

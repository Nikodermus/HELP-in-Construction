<?php 
if(isset($_POST['email'])) {
$email_to= "comunicaciones.fundacionhelp@gmail.com";   
$email_subject = "Persona interesada en Fundación HELP";
$email_from ="noreply@helpfundacion.org";

$email_message = "Detalles del formulario, página en construcción:\n\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
 
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
}
?>
    <?php if (isset($_POST['send'])) { ?>

        <script>
            $('.thankyou').text('Estaremos pronto en contacto').append('<br>¡Gracias!');
        </script>
        <?php  }?>
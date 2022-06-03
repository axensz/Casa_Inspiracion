<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../../phpmailer/src/PHPMailer.php';
    require '../../phpmailer/src/SMTP.php';
    require '../../phpmailer/src/Exception.php';
    require 'conexion_be.php';
    

    //Generando clave aleatoria
    $logitudPass = 4;
    $miPassword  = substr( md5(microtime()), 1, $logitudPass);
    $clave       = $miPassword;

    $correo             = trim($_REQUEST['correo_olvidar']); //Quitamos algun espacion en blanco
    $consulta           = ("SELECT * FROM db_login WHERE correo ='".$correo."'");
    $queryconsulta      = mysqli_query($mysqli, $consulta);
    $cantidadConsulta   = mysqli_num_rows($queryconsulta);
    $dataConsulta       = mysqli_fetch_array($queryconsulta);

    echo $cantidadConsulta;
    if($cantidadConsulta == 0){ 
        header("Location:../../login.php?error_olvidar=1");
        exit;
    }else{
        $updateClave    = ("UPDATE db_login SET password='$clave' WHERE correo='".$correo."' ");
        $queryResult    = mysqli_query($mysqli,$updateClave); 
        $destinatario = $correo;

        $mail = new PHPMailer(true);

        try {
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'casainspiracion111@gmail.com';
            $mail->Password = 'tmobkoarjjdkrydg';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('casainspiracion111@gmail.com', 'Casa Inspiracion');
            $mail->addAddress($destinatario, "");
            //$mail->addCC('concopia@gmail.com');

            //$mail->addAttachment('docs/dashboard.png', 'Dashboard.png');

            $mail->isHTML(true);
            $mail->Subject = 'Clave Temporal';
            $mail->Body = 'clave temporal: <b>'.$clave.'';
            $mail->send();
            echo 'Correo enviado', 
                 '
                    <script>
                        alert("Recuerda Cambiar tu contraseña");
                    </script>
                 ';
            header('Location: ../../login.php?error_f=1');
        } catch (Exception $e) {
            echo 'Mensaje ' . $mail->ErrorInfo;
        }
        
    }


?>
<?php
// ---------------------------------------
final class Email{

    // ---------------------------------------

    /**
     * Inicia la conexión de PHPMailer
     *
     * @param $smtp - Indica si es necesaria la configuracion SMTP (En local no es necesaria)
     *
     * @return Objeto de PHPMailer
     */

    final private function phpmail_init($smtp = true){
        $mail = new PHPMailer;
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'quoted-printable';
        if ($smtp) {
            $mail->isSMTP();
            $mail->Host = PHPM_HOST;
            $mail->SMTPAuth = true;
            $mail->Username = PHPM_USER;
            $mail->Password = PHPM_PASS;
            $mail->SMTPSecure = 'ssl';
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->Port = PHPM_PORT;
        }else{
            $mail->isSendmail();
        }
        return $mail;
    }

    // ---------------------------------------

    final public static function send($destinatarios, $contenido, $asunto, $smtp = true, $files = []){
        $mail = self::phpmail_init($smtp);
        $mail->setFrom(PHPM_USER,TITLE);
        foreach ($destinatarios as $dest => $name) {
            $mail->addAddress($dest,$name);
        }
        $mail->isHTML(true);
        $mail->Subject = $asunto;
        $mail->Body = $contenido;

        if (sizeof($files)) {
            foreach ($files as $f) {
                $mail->addAttachment($f);
            }
        }

        if (!$mail->send()) {
            return $mail->ErrorInfo;
        }

        return true;
    }

    // ---------------------------------------
    
    final public static function html($contenido, $title = 'Mensaje'){
        return '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <title>'.$title.'</title>
        </head>
        <body>
            '.$contenido.'
        </body>
        </html>';
    }

}
?>

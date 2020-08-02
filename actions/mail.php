<?php
    include_once('../phpmailer/PHPMailer.php'); 
    include_once('../phpmailer/SMTP.php'); 
    include_once('../phpmailer/Exception.php');
    include_once('../db.php');
    include_once('../config.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    if ($_POST) {
        $db = new DB();
        $user = $db->getUserByEmail($_POST['txtEmail']);

        if (!isset($user)) {
            header('Location: ../?p=3-2');
            exit();
        }

        $link = DOMAIN.'?p=3&u='.$user['id'];
        MailSender::mail($user['email'], $user['name'], $link);
        header('Location: ../?p=2-1');
    }

    class MailSender {
        public static function mail($to_mail, $to_name, $link) {
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Username = MAIL_USN;
            $mail->Password = MAIL_PWD;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 25;
            $mail->CharSet = 'UTF-8';
            $mail->IsHTML(true);
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    
            $mail->setFrom(MAIL_USN, 'Aptech');
            $mail->addAddress($to_mail, $to_name);
    
            $mail->Subject = 'Aptech | Dự đoán điểm thi 2020';
            $mailContent = "Link điền điểm thi thực tế:<br><a href='$link'>$link</a>";
            $mail->Body = $mailContent;
    
            if ($mail->send()) {
                return true;
            } else {
                error_log($mail->ErrorInfo);
                return false;
            }
        }
    }
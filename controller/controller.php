<?php
    require_once '../vendor/autoload.php';

    $bdd = new PDO('mysql:host=localhost;dbname=mdj;charset=utf8', 'root', '');

    class Controller {

        public function getNews($theme){
            global $bdd;

            $re_getNews = $bdd->prepare('SELECT * FROM news WHERE theme = :theme ORDER BY post_date ASC');
            $re_getNews->bindValue(':theme', $theme);

            if($re_getNews->execute()){
                return $re_getNews->fetchall(PDO::FETCH_ASSOC);
            }
            else{
                throw new Exception($re_getNews->errorInfo()[2]);
            }
        }

        public function getAgenda($theme_Agenda){
             global $bdd;

             $re_getAgenda = $bdd->prepare('SELECT * FROM agenda WHERE theme = :theme ORDER BY post_date ASC');
             $re_getAgenda->bindValue(':theme', $theme_Agenda);

             if($re_getAgenda->execute()){
                 return $re_getAgenda->fetchall(PDO::FETCH_ASSOC);
             }
             else{
                 throw new Exception($re_getAgenda->errorInfo()[2]);
             }
        }

        public function addNewsletterSub($email){
            global $bdd;

            $result = [];
            $result['success'] = false;
            $result['errors'] = [];

            $re_emailExiste = $bdd->prepare('SELECT * FROM newsletter WHERE email = :email');
            $re_emailExiste->bindValue(':email', $email);

            if($re_emailExiste->execute()){
                if($re_emailExiste->rowCount() > 0){
                    $result['errors'][] = 'L\'email existe déja';
                    return $result;
                }
            }
            else{
                throw new Exception($re_emailExiste->errorInfo()[2]);
            }

            $re_addNewsletterSub = $bdd->prepare('INSERT INTO newsletter (email) VALUES (:email)');
            $re_addNewsletterSub->bindValue(':email', $email);

            if($re_addNewsletterSub->execute()){
                $result['success'] = true;
            }
            else{
                throw new Exception($re_addNewsletterSub->errorInfo()[2]);
            }
            return $result;
        }

        public function sendMail($email, $msg){
            $result = [];
            $result['success'] = false;
            $result['errors'] = [];

            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host = 'smtp.live.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'user@example.com';
            $mail->Password = 'secret';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom($email);
            $mail->addAddress('joe@example.net');

            $mail->isHTML(true);

            $mail->Subject = 'contact MDJ';
            $mail->Body    = '<p>'.$msg.'</p>';
            $mail->AltBody = $msg;

            if(!$mail->send()) {
                $result['errors'][] = $mail->ErrorInfo;
                return $result;
            } else {
                $result['success'] = true;
            }
            return $result;
        }
    }
?>

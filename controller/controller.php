<?php
    require_once 'http://localhost/LesMotsdeJossy/vendor/autoload.php';

    $bdd = new PDO('mysql:host=localhost;dbname=mdj;charset=utf8', 'root', '');

    class Controller {

        public function getActivites($theme){
            global $bdd;

            $re_getActivites = $bdd->prepare('SELECT * FROM activites WHERE theme = :theme ORDER BY post_date ASC');
            $re_getActivites->bindValue(':theme', $theme);

            if($re_getActivites->execute()){
                return $re_getActivites->fetchall(PDO::FETCH_ASSOC);
            }
            else{
                throw new Exception($re_getActivites->errorInfo()[2]);
            }
        }

        public function getNews($theme){
            global $bdd;

            $re_getNews = $bdd->prepare('SELECT * FROM news WHERE theme = :theme AND hide = 0 ORDER BY post_date ASC');
            $re_getNews->bindValue(':theme', $theme);

            if($re_getNews->execute()){
                return $re_getNews->fetchall(PDO::FETCH_ASSOC);
            }
            else{
                throw new Exception($re_getNews->errorInfo()[2]);
            }
        }

        public function getPartenaires(){
             global $bdd;

             $re_getPartenaires = $bdd->prepare('SELECT * FROM partenaires');

             if($re_getPartenaires->execute()){
                 return $re_getPartenaires->fetchall(PDO::FETCH_ASSOC);
             }
             else{
                 throw new Exception($re_getPartenaires->errorInfo()[2]);
             }
        }

        public function getAmis(){
             global $bdd;

             $re_getAmis = $bdd->prepare('SELECT * FROM amis');

             if($re_getAmis->execute()){
                 return $re_getAmis->fetchall(PDO::FETCH_ASSOC);
             }
             else{
                 throw new Exception($re_getAmis->errorInfo()[2]);
             }
        }

        public function addNewsletterSub($email){
            global $bdd;

            $result = [];
            $result['success'] = false;
            $result['errors'] = false;

            $re_emailExiste = $bdd->prepare('SELECT * FROM newsletter WHERE email = :email');
            $re_emailExiste->bindValue(':email', $email);

            if($re_emailExiste->execute()){
                if($re_emailExiste->rowCount() > 0){
                    $result['errors'] = true;
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
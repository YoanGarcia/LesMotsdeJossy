<?php
    session_start();
    //require_once '../../vendor/autoload.php';

    $bdd = new PDO('mysql:host=localhost;dbname=mdj;charset=utf8', 'root', '');

    class Controller {

        public function connect($id, $pswd){
            global $bdd;

            $re_connect = $bdd->prepare('SELECT * FROM users WHERE email = :email');
            $re_connect->bindValue(':email', $id);

            if($re_connect->execute()){
                $user = $re_connect->fetch();

                if($pswd == $user['password'] && $user != NULL){
                    $_SESSION['connected'] = true;
                    return true;
                }
                else{
                    unset($_SESSION['connected']);
                    return false;
                }
            }
            else{
                throw new Exception($re_connect->errorInfo()[2]);
            }
        }

        public function isConnect(){
            if(!isset($_SESSION['connected'])){
                return false;
            }
            else{
                return true;
            } 
        }

        public function auth(){
            if(!isset($_SESSION['connected'])){
                header('Location: index.php'); 
            }
            else{
                return true;
            } 
        }

        public function getActivites($theme){
            global $bdd;

            $re_getActivite = $bdd->prepare('SELECT * FROM activites WHERE theme = :theme ORDER BY post_date ASC');
            $re_getActivite->bindValue(':theme', $theme);

            if($re_getActivite->execute()){
                return $re_getActivite->fetchall(PDO::FETCH_ASSOC);
            }
            else{
                throw new Exception($re_getActivite->errorInfo()[2]);
            }
        }

        public function addPartenaire($name, $img){
            global $bdd;

            $re_addPartenaire = $bdd->prepare('INSERT INTO partenaires (name, img) VALUES (:name, :img)');
            $re_addPartenaire->bindValue(':name', $name);
            $re_addPartenaire->bindValue(':img', $img);

            if($re_addPartenaire->execute()){
                return true;
            }
            else{
                throw new Exception($re_addPartenaire->errorInfo()[2]);
            }
        }

        public function addActivites($title, $link, $theme, $type){
            global $bdd;

            $re_addActivites = $bdd->prepare('INSERT INTO news (title, link, post_date, theme, type) VALUES (:title, :link, :post_date, :theme, :type)');
            $re_addActivites->bindValue(':title', $title);
            $re_addActivites->bindValue(':link', $link);
            $re_addActivites->bindValue(':post_date', date('W F Y', time()));
            $re_addActivites->bindValue(':theme', $theme);
            $re_addActivites->bindValue(':type', $type);

            if($re_addActivites->execute()){
                return true;
            }
            else{
                throw new Exception($re_addActivites->errorInfo()[2]);
            }
        }

        public function delete($table, $id){
            global $bdd;

            $re_del = $bdd->prepare('DELETE FROM '.$table.' WHERE id = :id');
            $re_del->bindValue(':id', $title);

            if($re_addActivites->execute()){
                return true;
            }
            else{
                throw new Exception($re_addActivites->errorInfo()[2]);
            }
        }

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

        public function addNews($img_link, $content, $theme){
            global $bdd;

            $re_addNews = $bdd->prepare('INSERT INTO news (img_link, content, theme) VALUES(:img_link, :content, :theme)');
            $re_addNews->bindValue(':img_link', $img_link);
            $re_addNews->bindValue(':content', $content);
            $re_addNews->bindValue(':theme', $theme);

            if($re_addNews->execute()){
                return true;
            }
            else{
                throw new Exception($re_getNews->errorInfo()[2]);
            }
        }

        public function updateNews($img_link, $content, $visible, $id){
            global $bdd;                     

            $re_updateNews = $bdd->prepare('UPDATE news SET img_link = :img_link, content = :content, hide = :hide WHERE id = :id');
            $re_updateNews->bindValue(':img_link', $img_link);
            $re_updateNews->bindValue(':content', $content);
            $re_updateNews->bindValue(':hide', $visible);
            $re_updateNews->bindValue(':id', $id);

            if($re_updateNews->execute()){
                return true;
            }
            else{
                throw new Exception($re_updateNews->errorInfo()[2]);
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

        public function getNewsletterSub(){
            global $bdd;

            $re_getNewsletterSub = $bdd->prepare('SELECT * FROM newsletter');

            if($re_getNewsletterSub->execute()){
                return $re_getNewsletterSub->fetchall(PDO::FETCH_ASSOC);
            }
            else{
                throw new Exception($re_getNewsletterSub->errorInfo()[2]);
            }
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

            $mail->setFrom('lesmotsdejossy@asso.fr');
            $mail->addAddress($email);

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

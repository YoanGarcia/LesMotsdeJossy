<?php
    $bdd = new PDO('mysql:host=localhost;dbname=mdj;charset=utf8', 'root', '');

    class Controller {

        /**
         * Récupere les news du theme indiqué
         * @param  string $theme Theme
         * @return Les news du theme indiqué
         */
        public function getNews($theme = string){
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

        /**
         * Récupére l'agenda' du theme indiqué
         * @param string $theme Theme
         * @return Agenda du theme indiqué
         */
         public function getAgenda($theme){
             global $bdd;

             $re_getAgenda = $bdd->prepare('SELECT * FROM agenda WHERE theme = :theme ORDER BY post_date ASC');
             $re_getAgenda->bindValue(':theme', $theme);

             if($re_getAgenda->execute()){
                 return $re_getAgenda->fetchall(PDO::FETCH_ASSOC);
             }
             else{
                 throw new Exception($re_getAgenda->errorInfo()[2]);
             }
         }

         public function addNewsletterSub($email){
             global $bdd;

             $re_addNewsletterSub = $bdd->prepare('INSERT INTO newsletter email = :email');
             $re_addNewsletterSub->bindValue(':email', $email);

             if($re_addNewsletterSub->execute()){
                 return true;
             }
             else{
                 throw new Exception($re_addNewsletterSub->errorInfo()[2]);
             }
         }
    }

    $c = new Controller();
    
    mail('meunier_33@live.fr', 'test', 'azeazeazeazeazeazeazeazeazeazeaze');
    echo '<br><br>';
    var_dump($c->getNews('test'));
    echo '<br><br>';
    var_dump($c->getAgenda('testa'));

?>

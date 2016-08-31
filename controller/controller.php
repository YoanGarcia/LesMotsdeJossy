<?php
    $bdd = new PDO('mysql:host=localhost;dbname=mdj;charset=utf8', 'root', '');
    $test = 'testazeazeaze';


    class Controller {

        /**
         * Récupere les news du theme indiqué
         * @param  string $theme Theme
         * @return Les news du theme indiqué
         */
        public function getNews($theme = string){
            global $bdd;

            $re_getNews = $bdd->prepare('SELECT * FROM news WHERE theme = :theme ORDER BY post_date ASC'); // requete pour récuperer toutes les news
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

             $re_getNews = $bdd->prepare('SELECT * FROM agenda WHERE theme = :theme ORDER BY post_date ASC'); // requete pour récuperer toutes les news
             $re_getNews->bindValue(':theme', $theme);

             if($re_getNews->execute()){
                 return $re_getNews->fetchall(PDO::FETCH_ASSOC);
             }
             else{
                 throw new Exception($re_getNews->errorInfo()[2]);
             }
         }

    }

    $c = new Controller();

    var_dump($c->getNews('test'));
    echo '<br><br>';
    var_dump($c->getAgenda('testa'));

?>

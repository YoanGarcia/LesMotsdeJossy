<?php 
    require_once 'controller.php';

    $controller = new Controller();

    $controller->auth();

    if(!empty($_POST)){
        $post = array_map('trim', array_map('strip_tags', $_POST));

        if(isset($post['form'])){
            if($post['form'] == 'addActivite'){
                $type = 'image';
                $imageFinale = '';
                $folder = '../img/activites/'.$post['theme'].'/';

                if(!empty($_FILES)){
                    if(isset($_FILES['picture']) && $_FILES['picture']['error'] == UPLOAD_ERR_OK) {
                        $fileName = $_FILES['picture']['name']; // Nom de mon image
                        $fileTemp = $_FILES['picture']['tmp_name']; // Image temporaire

                        $newFileName = explode('.', $fileName);
                        $fileExtension = end($newFileName); // Récupère l'extension du fichier

                        $finalFileName = $post['theme'].'-'.time().'.'.$fileExtension;

                        if(move_uploaded_file($fileTemp, $folder.$finalFileName)) {
                            // Ici je suis sur que mon image est au bon endroit
                            $imageFinale = 'img/activites/'.$post['theme'].'/'.$finalFileName;
                        }
                    }
                }

                if(isset($post['video'])){
                    if($post['video'] == 'video'){
                        $type = 'video';
                    }
                }

                if($type == 'image'){
                    $link = $imageFinale;
                }
                elseif($type == 'video'){
                    $link = $post['link'];
                }

                $controller->addActivites($post['title'], $link, $post['theme'], $type);
            }
        }
    }
?>
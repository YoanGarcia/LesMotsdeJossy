<?php 
	require_once 'controller.php';

	$controller = new Controller();	

	$controller->auth();

	$imageFinale = 'aze';

	if(!empty($_POST)){
        $post = array_map('trim', array_map('strip_tags', $_POST));
        $folder = '../img/amis/';
        
        if(isset($post['form'])){
            if($post['form'] == 'add'){
                if(!empty($_FILES)){
                    if(isset($_FILES['picture']) && $_FILES['picture']['error'] == UPLOAD_ERR_OK) {
                        $fileName = $_FILES['picture']['name']; // Nom de mon image
                        $fileTemp = $_FILES['picture']['tmp_name']; // Image temporaire

                        $newFileName = explode('.', $fileName);
                        $fileExtension = end($newFileName); // Récupère l'extension du fichier

                        $finalFileName = $post['nom'].'-'.time().'.'.$fileExtension;

                        if(move_uploaded_file($fileTemp, $folder.$finalFileName)) {
                            // Ici je suis sur que mon image est au bon endroit
                            $imageFinale = 'img/amis/'.$finalFileName;
                        }
                    }
                }

                $controller->addAmis($post['nom'], $imageFinale, $post['site']);
            }
            if($post['form'] == 'delete'){
                $controller->delete('amis', $post['id']);
            }
        }

    }
?>
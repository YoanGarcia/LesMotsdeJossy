<?php
    require_once 'controller.php';

    $controller = new Controller();

    $errors = [];
    $errors['contact'] = [];
    $errors['newsletter'] = [];

    $success = [];
    $success['contact'] = false;
    $success['newsletter'] = false;

    $partenaires = $controller->getPartenaires();

    if(!empty($_POST)){
        $post = array_map('trim', array_map('strip_tags', $_POST));

        if(isset($post['form'])){

            // Gestion formulaire newsletter
            if($post['form'] == 'newsletter_form'){

                if(isset($post['newsletter_email'])){
                    if(preg_match('#^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$#', $post['ct_email']) == 0){
                        $errors['newsletter'][] = 'Votre email n\'est pas valide';
                    }
                }

                if(count($errors['newsletter']) == 0){
                    $newsletterAdd = $controller->addNewsletterSub($post['newsletter_email']);

                    if($newsletterAdd['success']){
                        $success['newsletter'] = true;
                    }
                    else{
                        $errors['newsletter'] = array_merge($errors['newsletter'], $newsletterAdd['success']);
                    }
                }
            }
            // /Gestion formulaire newsletter

            // Gestion formulaire de contact
            if($post['form'] == 'contact_form'){

                if(isset($post['contact_firstname'])){
                    if(preg_match('#^[A-Za-z0-9.-_]{3,20}$#', $post['ct_firstname']) == 0){
                        $errors['contact'][] = 'Votre nom doit comporter minimum 3 caractères';
                    }
                }

                if(isset($post['contact_lastname'])){
                    if(preg_match('#^[A-Za-z0-9.-_]{3,20}$#', $post['ct_lastname']) == 0){
                        $errors['contact'][] = 'Votre prénom doit comporter minimum 3 caractères';
                    }
                }

                if(isset($post['contact_email'])){
                    if(preg_match('#^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$#', $post['ct_email']) == 0){
                        $errors['contact'][] = 'Votre email n\'est pas valide';
                    }
                }

                if(isset($post['contact_phone'])){
                    if(preg_match('#^[0-9]{10}$#', $post['ct_email']) == 0){
                        $errors['contact'][] = 'Votre numéro de téléphone n\'est pas valide';
                    }
                }

                if(isset($post['contact_msg'])){
                    if(preg_match('#^.{1,}$#', $post['ct_msg']) == 0){
                        $errors['contact'][] = 'Votre message ne doit pas être vide';
                    }
                }

                if(count($errors['contact']) == 0){
                    $sendMail = $controller->sendMail($post['contact_email'], $post['contact_msg']);

                    if($sendMail['success']){
                        $success['contact'] = true;
                    }
                    else{
                        $errors['contact'] = array_merge($errors['contact'], $sendMail['success']);
                    }
                }
            }
            // /Gestion formulaire de contact
        }
    }
?>

<?php
    if(!empty($_POST)){
        $post = array_map('trim', array_map('strip_tags', $_POST));

        if(isset($post['form'])){
            if($post['form'] == 'newsletter_form'){

            }
            if($post['form'] == 'contact_form'){

            }
        }
    }
?>

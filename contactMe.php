
   
    <?php 
        if(isset(($_POST['message'])){
            $retour = mail('njoplieumo@gmail.com', 'Envoi depuis la page contact',$_POST['message'], '' . "\r\n" . 'Reply-to: ' . $_POST['email']);
            if($retour){
                echo '<p> Meesage envoyé avec succès</p>';
            }

        })
    ?>
    

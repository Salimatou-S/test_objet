<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Introduction php objet </h1>
    <h2>Instanciation</h2>
    <?php
        function my_var_dump($var){//creation d'une fonction var_dump pour les appeller en cas de besoin            echo "<pre style ='background-color:blue'>"; 
            echo "<pre>";
            var_dump($var);
            echo "</pre>";
        }
        include_once("user.class.php");
        $user1 = new User ("dupont","email@mail.com","DUP");
        //var_dump($user1);
        $user2 = new User ("durand","email2@email.com","DUR");
        //var_dump($user1, $user2);
        $user3 = new User ("dubois","email3@email.com","DUB");
        $user4 = new User ("lojed","email4@email.com","loj");

        //$user1->pseudo ="Dupont"; si la propriété était publique
        $user1->setPseudo ("Dupont");//on passe par un setter car la propriété est privée
        $user1->setEmail ("dupont@gmail.com");
        $user2->setPseudo("Durand");
        $user3->setPseudo ("Dubois");
        $user4->setPseudo ("lojed");// doit retourner pseudo trop

        if($user1->envoyerEmail('le titre','le texte du mail')){
            echo'<p>mail envoyé </p>';
        }else {
            //echo '<p> mail non envoyé</p>';
        }       
        
       
        my_var_dump($user1);
        
        $user1->bloquer();
       
        my_var_dump($user1);
        my_var_dump($user2);
        my_var_dump($user3);
        my_var_dump($user4);
        
        /* var_dump($user2);
        var_dump($user3);
        var_dump($user4);  */
    ?>

    <h2>Heritage</h2>
    <?php
    include_once("admin.class.php");
    $admin1 = new Admin("Admin1","","");
    my_var_dump($admin1);
    ?>
</body>
</html>
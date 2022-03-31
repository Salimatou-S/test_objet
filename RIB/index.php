<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>RIB</h1>
    <?php 
     function my_var_dump($var){//creation d'une fonction var_dump pour les appeller en cas de besoin            echo "<pre style ='background-color:blue'>"; 
        echo "<pre>";
        var_dump($var);
        /* print_r($var); */
        echo "</pre>";
    }
    include_once("rib.class.php");
    $validator =new RIBvalidator("13454","65786","0007424abc","45");
    my_var_dump($validator);
    if ($validator->isValid()){
        echo "ce rib est valide";
    }
    else{
        echo "pas valide";
    };
    ?>
</body>
</html>
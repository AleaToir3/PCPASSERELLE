<?php
$tab = [ 'fraise','chocolat','banane']; 
$tab2 = array('fraise','chocolat','banane');

var_dump($tab);
echo "<br>";
var_dump($tab2);
echo "<br>";
echo $tab[2];
echo "<br>";
echo "<hr>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau</title>
</head>
<body>
    

<?php
for ($i=0; $i < count($tab); $i++) { 
    echo $tab[$i];
    echo "<br>";
}
echo "<hr>";

$tabKey = array('Fruit' => 'fraise','Gout' => 'chocolat','key' => 'banane');

foreach ($tabKey as $key => $value) {
    echo $key. "&nbsp; &nbsp; &nbsp;" .$value;
    echo "<br>";

}
echo "<hr>";

$form = [];



if(!empty($_GET)){
    $prenom = $_GET['prenom'];
    $nom = $_GET['nom'];
    $password = $_GET['password'];
    $email = $_GET['email'];
    $error = [];
    $okoupas = false;
    
    // if(isset($nom) && isset($prenom) && isset($email) && isset($password)){
    //     echo ' tout est ok !';
    // }else{
    //     echo 'il manque des champs !';
    // }




    // 1ER FACON !!!
//     if($prenom){
//         if($nom){
//             if($email){
//                 echo ' tout est ok !';
//             }else  $error[] ='il manque le l\'email !';
//         }else  $error[] ='il manque le nom !';
//     }else  $error[] ='il manque le prenom !';
//     foreach ($error as $msg) {
//         echo $msg;
//     }
// }

// 2EME FACON !

    if($nom){
        $okoupas =true;
    }else{
        $okoupas =false;
        $error[] ='il manque le nom !';
    }

    if($prenom){
        $okoupas =true;
    }else{
        $error[] ='il manque le prenom !';
        $okoupas =false;
    }

    if($email){
        $okoupas =true;
    }else{
        $error[] ='il manque le email !';
        $okoupas =false;
    }
    if($password){
        $okoupas =true;
    }else{
        $error[] ='il manque le password !';
        $okoupas =false;
    }
}
echo "<hr>";
echo "<hr>";


// $tata = [];
// $tata[] ='alo';
// $tata[] ='non';
// $tata[] ='oui';
// var_dump($tata) ;


// echo "<hr>";
// echo "<hr>";

    
    ?>
    <br>
<a href="j2.php">Accueil</a>
<br>

<form action="#" method="get">
    <input type="text" name="nom" id=""placeholder="Entre votre nom">
    <br>
    <input type="text" name="prenom" id=""placeholder="Entre votre Prenom">
    <br>
    <input type="password" name="password" id="" placeholder="Entre le Password">
    <br>
    <input type="email" name="email" id="email" placeholder="Entre Email">
    <br>
    <input type="submit" value="Valider">
    <br>
<?php 
if(!empty($error)){

    for ($i=0; $i < count($error) ; $i++) { 
        echo $error[$i]. '<br>';
    }
}
?>
</form>
</body>
</html>
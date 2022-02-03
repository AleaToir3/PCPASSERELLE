<?php
      // Pour récupérer les informations d'un formulaire, nous avons deux outils (protocole HTTP):
            // 01 : $_GET
            // 02 : $_POST
      // Si la method="" du formulaire est en get ou s'il n'y a rien de précisé (get par défaut), les informations sont transmises à l'url
      // Si la method="" est post, les informations sont transmises directement au serveur et ne seront pas visibles dans l'url 

      // informations get dans l'url :
      // http://www.monsite.fr?indice1=valeur1&indice2=valeur2&indice3=valeur3& ...
      // le ? représente la fin de l'url ensuite on retrouve les informations provenants du formulaire indice=valeur
      // $_GET et $_POST sont des superglobales (disponibles dans l'espace global & local naturellement)
      // $_GET et $_POST sont des tableaux array qui existent toujours (car liés au protocole http) mais par défaut vides. On retrouve ensuite les informations du formulaire lors de la validation du form. 

?>
<!DOCTYPE html>
<html lang="fr">
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

      <title>Recherche</title>
</head>
<body>
      <div class="container">
            <div class="row">
                  <div class="col-4 mx-auto mt-5">
                        <form method="POST" action="#" enctype="multipart/form-data" class="border p-3">
                              <div class="input-group">
                                    <input type="text" name="recherche" id="recherche" class="form-control" value="">
                              </div>
                              <div class="input-group mt-3">
                                    <input type="submit" value="Rechercher" class="w-100 btn btn-primary">
                              </div>
                        </form>

                        <hr>

                        <div>
                              <h2>Résultat</h2>
                              <?php 
                              
                              // on vérifie le contenu de $_GET
                              // echo '<pre>'; print_r($_GET); echo '</pre>';

                              // Afficher la saisie du formulaire lors de la validation proprement avec un echo
                              // exemple : Votre recherche : ...

                              if(isset($_POST['recherche']) && !empty($_POST['recherche'])) {
                                    var_dump($_POST);
                                    echo 'Votre recherche : ' . htmlentities($_POST['recherche'], ENT_QUOTES) . '<hr>';
                                    // le htmlentites() permet de transformer certains caractères en entités html
                                    // https://alexandre.alapetite.fr/doc-alex/alx_special.html
                                    // Pour éviter les injections XSS 
                                    // https://fr.wikipedia.org/wiki/Cross-site_scripting
                              } else {
                                    echo 'Veuillez lancer votre recherche !';
                              }

                              

                              ?>
                        </div>
                  </div>
            </div>            
      </div>
</body>
</html>

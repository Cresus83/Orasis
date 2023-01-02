<?PHP

// Récuperation des valeurs indiquer dans le formulaire
@$nom = $_POST['nom'];
@$prenom = $_POST['prenom'];
@$mail = $_SESSION['mail'];
@$title = $_POST['titre'];
@$resumer= $_POST['resume'];
@$validerBtn = $_POST['valider'];
$messageValid = "";
$script ="";


if (isset($validerBtn)) {

    
  /**
   * function formatFileName
   * @access public
   * @param string - nom de fichier à formater
   * @param int - longueur maximale autorisée pour le nom de fichier
   * @return string - nom de fichier formaté
   * @desc Tronque éventuellement le nom de fichier, le convertit en minuscules et
   *           y élimine les caractères potentiellement dangereux.
   */         
  function formatFileName($FileName, $aMaxLength = 50) {
    $FileName = strToLower(subStr($FileName, 0, $aMaxLength));
    $FileName = preg_replace('|\\\\tmp\\\\([A-Za-z0-9]+)|', '_', $FileName);
     
    return $FileName;
  } // end of function formatFileName() /2


    /* PARAMETRES DE CONFIGURATION DU SCRIPT
    */
   
   // chemin d'accès au répertoire d'upload (vers où le fichier uploadé temporaire sera transféré)
   // ce répertoire doit EXISTER et être ACCESSIBLE EN ECRITURE !!
   $destination_dir = '/home/u486829848/domains/rayan-hachani.fr/public_html/Orasis2023/assets/articles';
   
   // taille maximale en octets du fichier à uploader
   $file_max_size = 3000000;
   
   // extensions de fichiers autorisées
   $authorized_extensions = array('pdf');

    /* TRAITEMENT PRINCIPAL
    */   
    
   // vérifie l'existence du répertoire de destination
   if (!is_dir($destination_dir)) {
    echo 'Veuillez indiquer un r&eacute;pertoire destination correct !';
    die(); 
  }

  // vérifie que répertoire de destination a des droits en écriture
  if (!is_writeable($destination_dir)) {
    echo 'Veuillez spécifier des droits en écriture pour le r&eacute;pertoire destination !';
    die();      
  }   
  
  // réception du formulaire
  if (isset($_FILES['files_article'])) {
 

    // vérifie qu'un fichier a bien été soumis
    if (isset($_FILES) && is_array($_FILES)) {
  
      // pas d'erreur lors de l'upload
      if ($_FILES['files_article']['error'] == UPLOAD_ERR_OK) {
        
        // vérifie la taille en octets
        if ($_FILES['files_article']['size'] <= $file_max_size) {

          // vérifie l'extension du fichier recu
          // il est aussi possible (et sans doute mieux) de se baser sur $_FILES['aFile']['type']
          // qui retourne le type MIME correspondant (par exemple: image/pjpeg)         
          $lastPos = strRChr($_FILES['files_article']['name'], ".");
          if ($lastPos !== false && in_array(strToLower(subStr($lastPos, 1)), $authorized_extensions)) {
  
            // définit un nom de fichier destination unique à partir du nom du fichier original formaté
            $destination_file = formatFileName($_FILES['files_article']['name']);            
            if (file_exists($destination_dir.DIRECTORY_SEPARATOR.$destination_file)){
                $messageValid = "<p style='color:red;margin:2% auto;text-align:center;'>Un fichier du même nom est déjà existant, veuillez le modifier.</p>"; 
                $script = 0;
            }
            else {
                    // déplace le fichier uploadé du répertoire temporaire
                    // vers les répertoire/fichier destination spécifiés
                    if (move_uploaded_file($_FILES['files_article']['tmp_name'],
                                                $destination_dir.DIRECTORY_SEPARATOR.$destination_file)) {
                                                    
                    
                    $script = 1; 

                    } else { // error sur move_uploaded_file
                        $messageValid = "<p style='color:red;margin:2% auto;text-align:center;'>Le fichier n'a pas pu être envoyé, merci de nous contacter.</p>";
                    $script = 0;
                    }
                    }

          } else { // pas d'extension ou mauvaise extension
            $messageValid = "<p style='color:red;margin:2% auto;text-align:center;'>Veuillez modifier l'extension de votre article, seul le format PDF est autorisé.</p>";
            $script = 0;
          }      
        } else { // Taille maximale dépassée
            $messageValid = "<p style='color:red;margin:2% auto;text-align:center;'>Le fichier est trop volumineux, maximum 3 Mo</p>";
          $script = 0;
        }
      } else { // Erreur lors de l'upload
        switch ($_FILES['files_article']['error']){
          case UPLOAD_ERR_INI_SIZE:
             echo 'Le fichier upload&eacute; d&eacute;passe la valeur sp&eacute;cifi&eacute;e 
                      pour upload_max_filesize dans php.ini.';
                      $script = 0;
          case UPLOAD_ERR_FORM_SIZE:
             echo 'Le fichier upload&eacute; d&eacute;passe la valeur sp&eacute;cifi&eacute;e
                      pour MAX_FILE_SIZE dans le formulaire d\'upload.';
                      $script = 0;
          case UPLOAD_ERR_PARTIAL:
             echo 'Le fichier n\'a &eacute;t&eacute que partiellement upload&eacute;.';
             $script = 0;                            
          default:
             echo 'Aucun fichier n\'a &eacute;t&eacute upload&eacute;.';
             $script = 0;
        } // switch
      }   
    } else { // aucun fichier reçu
        $messageValid = "<p style='color:red;margin:2% auto;text-align:center;'>Vous n'avez pas séléctionnez de fichier.</p>";
      $script = 0;
    }
  } // fin de réception de formulaire

    //* Script SQL ajout article
if ($script == 1) {
            try {
                require_once("linkBDD.php");
                $req= $pdo->prepare(
                "INSERT INTO `articles`
                (`id_article`,`titre_article`,`resumer_article`,`fichier_article`,`date_soumission`)
                VALUES (DEFAULT, :title_art, :resumer, :fichier, :date_soum)");
                
                $req->execute(array(
                    'title_art'=> $title,
                    'resumer'=> $resumer,
                    'fichier'=> $_FILES['files_article']['name'],
                    'date_soum'=> date('Y-m-d')
                ));

                $req->closeCursor();   
                
            //*Script pour récupérer l'id de l'user connecté
                $recupId= $pdo->prepare(
                    "SELECT * FROM utilisateurs WHERE email_user = :mail_user");
                    
                    $recupId->bindParam(':mail_user', $mail, PDO::PARAM_STR);
                    $recupId->execute();
                    
                    $userId = $recupId->fetchAll();
                    
                    $user_id = $userId[0]['id_user'];
                    


            //*Script pour récupérer l'id de l'article'
                    $recupArticle= $pdo->prepare(
                        "SELECT * FROM articles WHERE titre_article = :title");
                        
                        $recupArticle->bindParam(':title', $title, PDO::PARAM_STR);
                        $recupArticle->execute();
                        $articleId = $recupArticle->fetchAll();
                        
                        $article_id = $articleId[0]['id_article'];

                        
            //* Requête pour stocké la preuve de soummission d'article
                $reqSoumettre= $pdo->prepare(
                    "INSERT INTO `soumettre`
                    (`id_article`,`id_user`,`soumettre_date_ecriture`,`soumettre_statut`,`soumission_id`)
                    VALUES (:identif_art, :identif_user, :soumis, :statut_soumis, DEFAULT)");
                    
                    $reqSoumettre->execute(array(
                        'identif_art'=> $article_id ,
                        'identif_user'=> $user_id,
                        'soumis'=> date('Y-m-d'),
                        'statut_soumis'=> 'En cours'
                    ));
    
                    $reqSoumettre->closeCursor();   
                    
                    header("Location: reussie.php");
                    
                    }
                catch (Exception $e) {
                  header("Location: erreur.php");
                   
                    //print_r($req->errorInfo());
                }
            }
            else {
                
            }
        }

	?>
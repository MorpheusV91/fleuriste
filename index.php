<?php

session_start();

require __DIR__ .'/functions.php';



if (!empty($_GET['route'])) $route = $_GET['route'];
else $route = 'home';


switch ($route) {
    
    case'home':
        require __DIR__ .'/controllers/home-controllers.php';
            break;

            case'list-fleurs':
                require __DIR__ .'/controllers/list-fleurs-controllers.php';
            break;
            
            case'ajouter-fleur':
                require __DIR__ .'/controllers/ajouter-fleur-controllers.php';
                ajouter();
                break;
                
                case'details-fleur':
                    require __DIR__ .'/controllers/details-fleur-controllers.php';
                    break;
                    
                    case'update-fleur':
                        require __DIR__ .'/controllers/update-fleur-controllers.php';
                        modifier();
                        break;
                        
                        case'delete-fleur':
                            require __DIR__ .'/controllers/delete-fleur-controllers.php';
                            supprimerFleur();
                            break;
                            
                            case'connexion-fleur':
            require __DIR__ .'/controllers/authentication/connexion-fleur-controllers.php';
            oneUser();
            break;
            
            case'deconnexion-fleur':
            require __DIR__ .'/controllers/authentication/deconnexion-fleur-controllers.php';
            deconnexion();
            break;
            
            
            default:
            error(404);

 }
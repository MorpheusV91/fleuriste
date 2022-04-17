<?php
require_once __DIR__ .'/config.php';

function url(string $route) {
    return 'index.php?route=' . $route;
}


function connexion(): PDO {

    try {
         return new PDO('mysql:host=' . DATABASE_HOST .';dbname=' . DATABASE_NAME , DATABASE_USER , DATABASE_PASSWORD );
        } catch (Exception $e) {
            error(500);
        }
    }
    

function redirection(string $route) {
    header('Location: ' . url($route));
    die;
}

// function model(string $nom) {
//     return __DIR__ . '/models/' . $nom . '.php';
// }

// function controller(string $nom) {
//     return __DIR__ . '/controllers/' . $nom . '-controller.php';
// }

function view(string $nom) {
    return __DIR__ . '/views/' . $nom . '.php';
}

function error(int $code = 500) {
    if (file_exists(view('errors/' . $code))) require_once view('errors/' . $code);
    else require_once view('errors/500');

    die();
}

function validerUrl(string $url): bool {
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}

function validerDate(string $date): bool {
    return date_create_from_format('Y-m-d', $date) !== false;
}

function erreursFormulaire(array $errors) {
    foreach ($errors as $error) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?= $error ?>
        </div>
<?php }
}



function formaterDate(object $fleurs) {
    $datetime = date_create_from_format('Y-m-d', $fleurs->date_cueillette);
    return $datetime->format('d/m/Y');
}

function dd($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die;
}

function resume(object $fleurs, int $taille = 240): string {
    if (strlen($fleurs->contenu) > $taille) return substr($fleurs->contenu, 0, $taille) . '...';
    else return $fleurs->contenu;
}

function creationToken(): string{

         $_SESSION['csrf_token'] = hash('sha256', random_bytes(32));
         return $_SESSION['csrf_token'];
}

function verificationToken(string $token): Bool {

   return !empty($_SESSION['csrf_token']) && $_SESSION['csrf_token'] == $token;

}


<?php

require_once('db.php');

// Classe pour la gestion des utilisateurs
class User {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function register($nom, $prenom, $numero, $email, $password,$confirm) {

        if($password !== $confirm){
            return "mot de passe ne correspondes pas";
        }
        // Hashage du mot de passe
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Enregistrement de l'utilisateur
        $query = "INSERT INTO users (nom, mail, pass, tel) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->connect()->prepare($query);
        $stmt->execute([$nom, $prenom, $numero, $email, $password_hash]);

        $message = "Salut $nom, votre mot de passe est $password et votre email est $email. Confirmez la création de votre compte en cliquant sur ce lien : <a href='UD-FacScience.com'>UD-FacScience.com</a>";
        $numero_tel = '678065506';
    }
}

// Récupération des informations du formulaire
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $numero = $_POST['tel'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    // Création d'une instance de la classe Database
    $db = new Database('localhost', 'root', ' ', 'universite');

    // Création d'une instance de la classe User
    $user = new User($db);

    // Enregistrement de l'utilisateur
    $message = $user->register($nom, $prenom, $numero, $email, $password,$confirm);

    // Affichage du message
    echo '<div class="alert">' . $message . '</div>';
}
?>


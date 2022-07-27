 <?php
//echo 'page-post-contact.php';

/* echo '<pre>';
    var_dump($_POST);
echo '</pre>'; */

$errors = [];

if(!array_key_exists('firstname', $_POST) || $_POST['firstname'] == '')
 {
    $errors['firstname'] = "vous n'avez pas renseignez votre Nom";
 }
 if(!array_key_exists('lastname', $_POST) || $_POST['lastname'] == '')
 {
    $errors['lastname'] = "vous n'avez pas renseignez votre Prénom";
 }
 if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
 {
    $errors['email'] = "vous n'avez pas renseignez votre email";
 }
 if(!array_key_exists('message', $_POST) || $_POST['message'] == '')
 {
    $errors['message'] = "vous n'avez pas renseignez votre message";
 }

/*  echo '<pre>';
    var_dump($errors);
    die();
    echo '</pre>';  */

session_start();

if(!empty($errors))
 {
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: /contact/');
 } 
 else 
 {
    $_SESSION['success'] = 1;
    $message = $_POST['message'];
    $headers = 'FROM: site@local.dev';
    mail('janick.deneux@gmail.com', 'Formulaire de contact', $message, $headers);
    header('Location: /contact/');
 }




// Alix soluce
/* $to = $this->mail;
        $subject = 'Confirmation formulaire MMF SANTE';
        $message = 
        '<html>' .
            '<head>' . '<style type="text/css" media="screen">' . 'p {color: #263238 !important}' . '</style>' . '</head>' .
            '<body>' .
                '<p>Bonjour ' . $this->firstname . ',' . '</p>' .
                '<p>Nous avons bien reçu votre formulaire, nous vous contacterons dans les plus brefs délais.</p>' .
                '<p>A très bientôt.</p>' .
                '<br>' .
                '<p>' . "<strong>MMF SANTE</strong>" . ' | Un médecin tous les jours' . '</p>' .
            '</body>'.
        '</html>';
        $headers = [
            'From' => 'adresse@gmail.com', 
            'Reply-To' => 'adresse@gmail.com',
            'MIME-Version' => '1.0',
            'Content-type' => 'text/html; charset=UTF-8'
        ];
        mail($to, $subject, $message, $headers); */ 
 ?>
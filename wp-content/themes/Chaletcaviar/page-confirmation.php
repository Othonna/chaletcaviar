<?php
 /* 
 $name = $_POST['name'];
 $message = $_POST['inputmessage'];
 $to = "chalet-caviar@othonnarecords.com";
 $headers = "Content-type: text/html; charset=UTF-8\r\n";
 $headers .= $_POST ['email'];
 */
 ?>

 <?php
//echo 'page-post-contact.php';

/* echo '<pre>';
    var_dump($_POST);
echo '</pre>'; */


$errors = [];
if(!array_key_exists('username', $_POST) | $_POST['username'] == '')
 {
    $errors['username'] = "vous n'avez pas rensigner votre nom";
 }
 if(!array_key_exists('email', $_POST) | $_POST['email'] == '' )
 {
    $errors['email'] = "vous n'avez pas renseignez votre email";
 }
 if(!array_key_exists('message', $_POST) | $_POST['message'] == '')
 {
    $errors['message'] = "vous n'avez pas renseignez votre email";
 }
 echo '<pre>';
    var_dump($errors);
    die();
echo '</pre>';

if(!empty($errors))
 {
    header('Location: /contact.php/');
 } 
 else 
 {
    $message = $_POST['inputmessage'];
    $headers = 'FROM: site@local.dev';
    mail('janick.deneux@gmail.com', 'Formulaire de contact', $message, $headers);
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
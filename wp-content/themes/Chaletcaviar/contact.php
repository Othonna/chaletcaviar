<?php   include_once ('inc.php');
        session_start(); 
        get_header(); /* Template Name: Contact Page */ 
        require_once ('class/Navbar.php')?>

        <?php if(array_key_exists('errors', $_SESSION)): ?> 
              <div class="alert alert-danger">
                <?= implode('<br>', $_SESSION['errors']); ?>
              </div>
        <?php endif;?>

        <?php if(array_key_exists('success', $_SESSION)): ?> 
              <div class="alert alert-success">
                Votre email est arrivé chez nous, nous vous recontacterons au plus vite ! 
              </div>
        <?php endif;?>
                  
          <!-- Ne pas mettre le préfixe page , ni de mot interdit comme contact dans l'url action -->
          <div class="contain-form">
                 <div class="shape"></div>
                 <div class="shape"></div>
             </div>
         <form class="form-contact-container" action="/confirmation/" method="POST">
             <?php $form = new Form();?>
                 <h3 class="title-form-contact text-gray-color">Contactez-nous</h3>

                 <?= $form->text('firstname', 'Nom *'); ?>
                 <?= $form->text('lastname', 'Prénom *'); ?>
                 <?= $form->email('email', 'Email *'); ?>

                 <label for="message">Message *</label>
                 <textarea name="message" id="form_message" class="input-name" placeholder="Ecrivez votre message." wrap="hard"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
                 <button type="submit" class="btn-contact" value="Envoyer">Envoyer</button>
         </form>
         <?php
      
         /* 
          dump($_POST);
        $message = $_POST['message'];
        $headers = 'FROM: site@local.net';

        wp_mail('janick.deneux@gmail.com', 'formulaire de contact', $message, $headers) */
        ?>
<?php 
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>

<?php get_footer(); ?>
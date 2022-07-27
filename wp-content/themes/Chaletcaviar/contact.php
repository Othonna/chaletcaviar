<?php include_once ('inc.php')?>
<?php session_start(); ?>
<?php get_header(); /* Template Name: Contact Page */ ?>

<?php get_header(); /* Template Name: Contact Page */ ?>

 <div class="container">
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

        <div class=" text-center mt-5 ">
            <h1 >Contactez-nous</h1>      
        </div>
            <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                    <div class = "container">
                         <!-- Ne pas mettre le préfixe page , ni de mot interdit comme contact dans l'url action -->
                        <form action="/confirmation/" method="POST">
                            <?php $form = new Form();?>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                       <?= $form->text('firstname', 'Nom *'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Prénom *</label>
                                            <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="SVP entrez votre Prénom *" value="<?= isset($_SESSION['inputs']['lastname']) ? $_SESSION['inputs']['lastname'] : ''; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <?= $form->email('email', 'Email *'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_service">Choissisez le service voulu *</label>
                                            <select id="form_service" name="service" class="form-control" data-error="Please specify your need.">
                                                <option value="" selected disabled>--Selectionner votre demande--</option>
                                                <option value="0">J'aimerai acheter</option>
                                                <option value="1">J'aimerai réserver</option>
                                                <option value="2">J'ai une réclamation</option>
                                                <option value="3">Renseignement</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_message">Message *</label>
                                            <textarea  name="message" id="form_message" class="form-control text-form" placeholder="Ecrivez votre message." wrap="hard"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
                                            </div>
                                        </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-success btn-send pt-2 btn-block" value="Envoyer"> 
                                    </div>
                                </div>
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

<?php 
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>
 
<?php get_footer(); ?>
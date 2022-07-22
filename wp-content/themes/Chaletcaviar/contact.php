<?php include_once ('inc.php')?>
<?php session_start(); ?>
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
                                            <input required="required" id="form_lastname" type="text" name="lastname" class="form-control" placeholder="SVP entrez votre Prénom *" value="<?= isset($_SESSION['inputs']['lastname']) ? $_SESSION['inputs']['lastname'] : ''; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_email">Email *</label>
                                            <input required="required" id="form_email" type="email" name="email" class="form-control" placeholder="SVP entrez votre Mail *" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_service">Choissisez le service voulu *</label>
                                            <select id="form_service" name="service" class="form-control" required="required" data-error="Please specify your need.">
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
                                            <textarea required="required" name="message" id="form_message" class="form-control text-form" placeholder="Ecrivez votre message." wrap="hard"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
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

<!-- <div class="container">
    <div class="starter-template">
        <form action="/confirmation/" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="username">Votre Nom</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="exemple: Doe"
                        value="<?= isset($_SESSION['inputs']['username']) ? $_SESSION['inputs']['username'] : ''; ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Votre Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="exemple: monemail@gmail.com"
                        value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="inputservice">Service</label>
                        <select name="service" id="inputservice">
                            <option value="">Contact</option>
                            <option value="">Achat</option>
                            <option value="">Location</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="form_message">Votre message</label>
                        <textarea name="message" id="form_message" class="form-control text-form" placeholder="Ecrivez votre message." wrap="hard"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </div> 
        </form>
    </div>
</div> -->

<?php 
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>
 
<?php get_footer(); ?>
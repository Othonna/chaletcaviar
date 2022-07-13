<?php get_header(); 
/* Template Name: Contact Template */?>
<div class="container">
        <div class=" text-center mt-5 ">
            <h1 >Contactez-nous</h1>      
        </div>
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
            <div class = "container">
                             <form id="contact-form" role="form">
            <div class="controls">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Nom *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="SVP entrez votre Nom *" required="required" data-error="Firstname is required.">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Prénom *</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="SVP entrez votre Prénom *" required="required" data-error="Lastname is required.">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="SVP entrez votre Mail *" required="required" data-error="Valid email is required.">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Please specify your need *</label>
                            <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Selectionner votre demande--</option>
                                <option >J'aimerai acheter</option>
                                <option >J'aimerai réserver</option>
                                <option >J'ai une réclamation</option>
                                <option >Autre</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Ecrivez votre message." rows="4" required="required" data-error="Please, leave us a message."></textarea
                                >
                            </div>
                        </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Envoyer" > 
                </div>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
        <!-- /.8 -->
    </div>
    <!-- /.row-->
</div>
</div>


   
<?php get_footer(); ?>
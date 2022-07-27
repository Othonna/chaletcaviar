<?php 
    
class Form {

    public function text($firstname, $label) {
       return 
       "<div class=\"form-group\">
            <label for=\"form_name\">Nom *</label>
            <input id=\"form_name\" type=\"text\" name=\"firstname\" class=\"form-control\" placeholder=\"SVP entrez votre Nom *\" value=\"\">
        </div>";
    }

    public function email($email, $label) {
        return 
        "<div class=\"form-group\">
             <label for=\"form_email\">Email *</label>
             <input id=\"form_email\" type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"SVP entrez votre Email *\" value=\"\">
         </div>";
     }
}
<?php 
    
class Form {

    public function text($firstname, $label) {
       return 
       "<div class=\"form-group\">
            <label for=\"form_name\">Nom *</label>
            <input required=\"required\" id=\"form_name\" type=\"text\" name=\"firstname\" class=\"form-control\" placeholder=\"SVP entrez votre Nom *\" value=\"\">
        </div>";
    }
}
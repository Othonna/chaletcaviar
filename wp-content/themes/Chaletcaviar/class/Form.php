<?php 
    
class Form {

    private function input($type, $name, $label) {
       return 
       "<div class=\"form-group\">
            <label for=\"form_$name\">$label</label>
            <input id=\"form_$name\" type=\"$type\" name=\"$name\" class=\"form-control\" placeholder=\"SVP entrez votre Nom *\" value=\"\">
        </div>";
    }

    public function text($firstname, $label) {
       return $this->input('text', $name, $label);
    }

    public function email($email, $label) {
        return $this->input('email', $name, $label);
     }
} 
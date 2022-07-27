<?php 
    
class Form {

    private function input($type, $name, $label) {
        if($type == 'textarea'){
            $input = "<textarea required name=\"$name\" class=\"form-control text-form\" id=\"form_$name\" placeholder=\"Ecrivez votre message.\" wrap=\"hard\"></textarea>";
        } else {
            $input = "<input required name=\"$name\" class=\"form-control\" id=\"form_$name\" placeholder=\"Ecrivez votre $label\"></input>";
        }
        return 
        "<div class=\"form-group\">
                <label for=\"form_$name\">$label</label>
                $input
            </div>";
    }

    public function text($name, $label) {
       return $this->input('text', $name, $label);
    }

    public function email($email, $label) {
        return $this->input('email', $name, $label);
     }

     public function textarea($name, $label) {
        return $this->input('textarea', $name, $label);
     }

     public function submit($label) {
        return
        '<button type="submit" class="btn btn-primary">' . $label . '</button';
     }
} 
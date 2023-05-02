<?php
function display_error($validation, $field){
    if( $validation->hasError($field) ){
        return '<div class="alert alert-danger">' . $validation->getError($field) . '</div>';
    }else{
        return false;
    }
}

?>
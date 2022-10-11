<?php 
function checkIcon($value){
    if($value){
        return "fa-check green-sign";
    }
    
    return "fa-times-circle red-sign";
}
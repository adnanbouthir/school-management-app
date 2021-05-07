<?php
//  simple redirect page function 
function redirect($page) {
    header('location:' . URLROOT . $page);

}
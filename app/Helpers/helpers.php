<?php

if (! function_exists('activeMainLink')) {
    function activeMainLink() {
        if(request()->is('/')) {
            return 'active';
        }
        return '';
    }
}

if (! function_exists('activeTourLink')) {
    function activeTourLink (){
        if((request()->is('tours') or request()->is('tour/*'))) {
            return 'active';
        }
        return '';
    }
}

if (! function_exists('true_wordform')) {

    function true_wordform($num, $form_for_0, $form_for_1, $form_for_2, $form_for_5){
        $num = abs($num) % 100;
        $num_x = $num % 10;
        if ($num == 0)
            return $form_for_0;
        if ($num > 10 && $num < 20)
            return $form_for_5;
        if ($num_x > 1 && $num_x < 5)
            return $form_for_2;
        if ($num_x == 1)
            return $form_for_1;
        return $form_for_5;
    }
}

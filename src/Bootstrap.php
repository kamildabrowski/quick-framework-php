<?php namespace app;

use \App\FormHero as FormHero;
class Bootstrap {
    public static function run() {

        $form = new FormHero\Form();
        $selct = $form->select('form-test');
        $selct->setSelected([true, false]);
        $selct->setClass('active');


        echo 'works';
    }
}
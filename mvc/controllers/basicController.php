<?php

class basicController extends Controller {
    function test () {
        echo "Class Conrtoller is working!!!<br>";
    }

    function actionAbout() {
        echo "actionAbout is working!!!<br>";
    }

    function About() {
        echo "About is working!!!<br>";
    }

    function actionClassNameNP () {
        echo $this->classNameNP();
    }
}

?>
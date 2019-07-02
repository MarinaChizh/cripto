<?php

class childController extends Controller {
    function test () {
        echo "Class childConrtoller is working!!!<br>";
    }

    function actionAbout() {
        echo "childActionAbout is working!!!<br>";
    }

    function About() {
        echo "childAbout is working!!!<br>";
    }

    function actionClassNameNP () {
        echo $this->classNameNP();
    }

    function actionCurrentActionNameNP () {
        echo $this->currentActionNameNP();
    }

}

?>
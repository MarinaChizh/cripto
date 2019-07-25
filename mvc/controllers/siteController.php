<?php
 class siteController extends Controller{
     function actionhome(){
        $this->render("home", [
            'title' => "home",
            'table' => "Добро пожаловать"]);
     }
    
    function actionAbout(){
        $this->render("about", [
            'title' => "About Us"
        ]);
    }
}
 

 



















?>
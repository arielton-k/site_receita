<?php
    namespace app\site\controller;

    class AboutController
    {
        public function __construct()
        {
           
        }

        public function index(){
            echo "Estamos na index About";
        }

        public function teste($name = '')
        {
            echo $name . "<<< em teste about!!!!";
        }
    }

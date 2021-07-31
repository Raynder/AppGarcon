<?php

    class Url{

        public static function redirect($url = ""){
            if($url != ""){
                header("location: ".URL.DIRECTORY_SEPARATOR.$url);
            }
            else{
                header("Location: ".URL);
            }
        }
    }
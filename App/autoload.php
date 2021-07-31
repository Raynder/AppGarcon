<?php

    spl_autoload_register(function($class){
        $directorys = [
            "Libraries",
            "Models/Defaut",
            "Models",
            "Helpers"
        ];

        foreach($directorys as $directory){
            $arquivo = __DIR__.DIRECTORY_SEPARATOR.$directory.DIRECTORY_SEPARATOR.$class.".php";
            if(file_exists($arquivo)){
                require_once($arquivo);
            }
        }

    });
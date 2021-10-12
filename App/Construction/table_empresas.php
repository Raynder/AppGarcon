<?php

class Table_empresas{

    private $db;

    public function __construct(){
        $this->db = new Database();

        $query = "CREATE TABLE `epiz_29913172_easydb`.`empresas` ( `id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(32) NOT NULL , `cnpj` VARCHAR(32) NOT NULL , `senha` VARCHAR(32) NOT NULL , `hr_inicio` VARCHAR(11) NOT NULL , `hr_fim` VARCHAR(11) NOT NULL , `categoria` VARCHAR(256) NOT NULL , PRIMARY KEY (`id`));";

        $this->db->query($query);
    }

}
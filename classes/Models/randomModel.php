<?php

namespace Models;

class randomModel {

    public function random()
    {
        $sql = \Mysql::conectar()->prepare("SELECT `id` FROM `poesias`");
        $sql->execute();
        $ids = $sql->fetchAll();

        $possibilidades = count($ids) - 1;

        $index = rand(0,$possibilidades);

        $id = $ids[$index]['id'];
        
        $sql = \Mysql::conectar()->prepare("SELECT * FROM `poesias` WHERE `id` = ?");
        $sql->execute(array($id));
        $poesia = $sql->fetch();

        return $poesia;

    }

}

?>
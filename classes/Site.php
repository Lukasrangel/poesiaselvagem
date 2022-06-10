<?php

class Site {


    public static function listar_home($page){
        //conta total de linhas
        $total = Mysql::conectar()->prepare("SELECT COUNT(*) FROM `poesias`");
        $total->execute();
        $total = $total->fetch()[0];

        $por_pagina = 15;
        $queryPG = ($page - 1); 

        $total_pages = ceil($total / $por_pagina);

        //pega poemas
        $sql = Mysql::conectar()->prepare("SELECT * FROM `poesias` ORDER BY id DESC LIMIT $queryPG,$por_pagina");
        $sql->execute();
        $poesias = $sql->fetchAll();

        $poesias['total_paginas'] = $total_pages;
        return $poesias;
    }


    public static function postar_poesia($post,$imagem){
        $poesia = $post['poesia'];
        $nick = $post['nick'];
        $titulo = $post['titulo'];
        $imagem = $imagem;

        $ok = false;
        if($imagem['name'] == ''){
            $imagem_to_save = 'poesia-selvagem.png';
            $ok = true;
        } else {
            if(self::verificar_imagem($imagem)){
                //upload da imagem
                $imagem_to_save = self::upload_img($imagem);
                if($imagem_to_save != false){
                    $ok = true;
                }
            } else {
                return 'Imagem inválida.';
            }

        }

        if($ok){
            $sql = Mysql::conectar()->prepare("INSERT INTO `poesias` VALUES (null,?,?,?,?)");
            $titulo = strip_tags($titulo);
            $nick = strip_tags($nick);
            $sql->execute(array($titulo, $poesia,$nick,$imagem_to_save));

            return 'Poesia salva com sucesso';
        }
    } 

    public static function verificar_imagem($imagem){
        if($imagem['type'] == 'image/png' || $imagem['type'] == 'image/jpeg' || $imagem['type'] == 'image/jpg'){
            return true;
        } else {
            return false;
        }
    }

    public static function upload_img($img){
        $nome_unico = uniqid();
        $extensao = pathinfo($img['name'], PATHINFO_EXTENSION);
        $imagem_to_save = $nome_unico . ".$extensao";
        $dir =  'imgs/';
        
        move_uploaded_file($img['tmp_name'], $dir . $imagem_to_save);

        return $imagem_to_save;
    }

   

}

?>
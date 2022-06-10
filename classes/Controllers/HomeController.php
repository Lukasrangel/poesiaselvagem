<?php

namespace Controllers;

class HomeController {

    private $View;
    private $Model;

    
    //chamar página home
    public function index(){
        $page = $_GET['page'] ? $_GET['page'] : 1;
        $this->View = new \Views\MainView('home.php');
        $this->View->setParam(\Site::listar_home($page));
        $this->View->render();
    }


    //chamar pagina postar
    public function post(){
        $this->View = new \Views\MainView('post.php');
        $this->View->render();
    }

    //chamar página random
    public function random(){
        $this->Model = new \Models\randomModel();
        $this->View = new \Views\MainView('random.php');
        $this->View->setParam($this->Model->random());
        $this->View->render();
    }

    //chamar página manifesto
    public function manifesto(){
        $this->View = new \Views\MainView('manifesto.php');
        $this->View->render();
    }

    //postar poesia
    public function postar($post,$file){
        if(isset($post['poesia'])){
            $mensagem = \Site::postar_poesia($post,$file['foto']);
            return $mensagem;
         }
    }

    //página 404
    public function page_404(){
        $this->View = new \Views\MainView('404.php');
        $this->View->render();
    }

}

?>
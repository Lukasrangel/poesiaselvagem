<?php
include('config.php');

$controller = new \Controllers\HomeController();

//postar
Router::post('/post',function() use ($controller){
    $mensagem = $controller->postar($_POST,$_FILES);
    echo "<script>alert('$mensagem')</script>";
    $controller->index();
});

//pagina home
Router::get('/',function() use ($controller){
    $controller->index();
});

//pagina para postar
Router::get('/post',function() use ($controller){
    $controller->post();
});

//poema aleatorio
Router::get('/random',function() use ($controller){
    $controller->random();
});

//manifesto
Router::get('/manifesto',function() use ($controller){
    $controller->manifesto();
});

if(!Router::isExecuted()){
    //página 404
    $controller->page_404();
}


?>
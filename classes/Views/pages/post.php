<section class="post">
    <div class="center">
        <h1> Poste sua poesia!</h1>

        <p> Atenção, depois de postar não é possível editar!!</p>
    <form method='post' enctype="multipart/form-data">

    <span> Imagem (opcional) </span>
    <input type='file' name='foto'>
 
    <br><br>

    <span>Titulo:</span>
    <input type='text' name='titulo' required>

    <br><br>

    <span> Poesia: </span>
    <textarea id='tinymce' rows='20' name='poesia'></textarea>

    <br><br>

    <span> Escrito por:</span>
    <input type='text' name='nick'>

    <br><br>

    <input type='submit' name='postar' value="Postar!">

    </form>

    </div><!--center-->
</section><!--post-->


<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init(
            {
                selector:'#tinymce' 
                
                });
                
</script>
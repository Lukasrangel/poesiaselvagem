<section class='random'>
    <div class="center">
        <h1 class='tittle'> Seu poema aleatorio do dia! </h1>

        <?php
            $poema = $this->param;
        ?>
        <div class="poesia-single">
            <div class="cabeca">
                <img src='<?php echo INITIAL_PATH ?>/imgs/<?php echo $poema['imagem']; ?>'>
            </div><!--cabeca-->
            <p style='text-align:center;font-weight:bold;margin-bottom: 8px;color:#b71c1c;'> <?php echo $poema['titulo']; ?> </p>
            <p style='font-weight: bolder;margin-left:2%;color: #b71c1c;'> Escrito por: <span> <?php echo $poema['nick'] ?> </span></p>

            <div class="poesia">
            <?php echo $poema['poesia']; ?>
            </div><!--poesia-->
        </div><!--poesia-single-->



    </div>
</section><!--random-->

<div class="listagem-poesias">
    <div class="center">

    <?php
        
        $poesias = $this->param;
        $total_paginas = $poesias['total_paginas'];
        unset($poesias['total_paginas']);

        foreach($poesias as $poesia){
    ?>
        <div class="poesia-single left" anime-data=up>
            <div class="cabeca">
                <img src='<?php echo INITIAL_PATH ?>/imgs/<?php echo $poesia['imagem']; ?>'>
            </div><!--cabeca-->
            <p style='text-align:center;font-weight:bold;margin-bottom: 8px;'> <?php echo $poesia['titulo']; ?></p>
            <p style='font-weight: bolder;margin-left:2%;'> Escrito por: <span> <?php echo $poesia['nick']; ?> </span></p>

            <div class="poesia">
                <?php
                    echo $poesia['poesia'];
                ?>
            </div><!--poesia-->
        </div><!--poesia-single-->
    
    <?php
        }
    ?>
        <div class="clear"></div>

    </div><!--center-->
</div><!--listagem-poesias-->

<div class="paginator">
    <div class="center">

    <?php
    for($i = 0;$i < $total_paginas; $i++){
    ?>
        <span> <a href='<?php echo INITIAL_PATH . '?page=' . $i + 1; ?>'> <?php echo $i + 1; ?> </a> </span>
        

    <?php
    }
    ?>
    </div>
</div><!--paginator-->
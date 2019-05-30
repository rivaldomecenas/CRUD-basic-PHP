<?php 
    if(isset($_SESSION['errors'])):
        foreach($_SESSION['errors'] as $error):
?>
    <div class="alert alert-danger" role="alert">
        <?= $error['mensagem'] ?>
    </div>
<?php endforeach; 
    endif;
    
    if (isset($_SESSION['alert'])):
?>
    <div class="alert alert-<?=$_SESSION['alert']['type']?>" role="alert">
        <?=$_SESSION['alert']['message']?>
    </div>
<?php
endif;
?>

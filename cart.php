<?php require 'inc/head.php'; ?>
<?php
    session_start();
    var_dump($_SESSION['name']);
?>
<section class="cookies container-fluid">
    <div class="row">
        
        <p> <?=$_SESSION['cookieName']; ?> </p>
        <?php
            var_dump($_SESSION);     
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

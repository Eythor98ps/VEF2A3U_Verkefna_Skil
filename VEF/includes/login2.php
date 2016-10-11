<?php
    session_start(); 
 ?>
<?php include'./title.php';?>
<!DOCTYPE html>
<?php  include("./head.php");?>
<body>
    <?php include("./header.php") ?>
<div class="containall">
    <?php include("./menu.php") ?>
    <main>
        <?php include("./loginform.php") ?>
    </main>
</div>
<?php include("./footer.php") ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>
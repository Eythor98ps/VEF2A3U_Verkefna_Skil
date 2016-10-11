<?php
//Velur random mynd í header
   /* $dir = 'img/header/';
    if (isset($_SESSION["files"]) == false || count($_SESSION["files"]) == 0) {
        $_SESSION["files"] = glob("{$dir}*.{jpg,png,gif,jpeg}", GLOB_BRACE);
    }
    shuffle($_SESSION["files"]);
    $imgpath = $_SESSION["files"][0];
    unset($_SESSION["files"][0]);*/

      $images = [
    ['file'    => '6869080-cityscape',
     'caption' => 'Bla'],
    ['file'    => '6879736-cityscape',
     'caption' => 'Aftur Bla'],
    ['file'    => 'cityscape-011',
     'caption' => 'That View'],
    ['file'    => 'cityscape-945432_960_720',
     'caption' => 'Daim'],
    
    ];
    $i = rand(0, count($images)-1);
    $selectedImage = "indexZ/{$images[$i]['file']}.jpg";
    $caption = $images[$i]['caption'];
    if (file_exists($selectedImage) && is_readable($selectedImage)) {
    $imageSize = getimagesize($selectedImage);
    }

    $qoutes = array("wow." , "Look at that View" , "Mundi þér langa að búa þarna" );
    shuffle($qoutes);
  ?>
<header class="custom-wrapper pure-g" id="menu" style="background-image: url('<?php echo $selectedImage; ?>')">
    <div>
        <a href="index.php" class="headerlink"><h1 class="_i_myndun"><<?php echo "caption"; ?></i></h1></a><br>
    </div>
    <div class="quote">
        <p>-<?php echo $qoutes[0]; ?></p>
    </div>
</header>
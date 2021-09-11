<?php
$fileList = glob('*');
echo '<ul class="navbar-nav ms-auto">';
  echo '<li class="nav-item">';
    echo ("<a class='nav-link' href=index.php> Main </a>");
  echo '</li>';
foreach($fileList as $filename){
  if(is_file($filename)){
      if($filename == "README.md" or $filename == "style.css" or $filename == "index.php" or $filename == "index.html"){
      }else{
        $tmp_fname = ucwords($filename);
        $withoutExt = ucwords(preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename));
        echo '<li class="nav-item">';
          echo ("<a class='nav-link' href=$filename> $withoutExt </a>");
        echo '</li>';
      }

  }
}
echo '</ul>';
?>

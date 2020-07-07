<?php
require "App/Config.inc.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php require "include-meta-tags.php"; ?>
</head>

<body>
  <?php
  // header
  require "./{$theme_path}/header.php";
  ?>

  <main>
    <?php
    // front-controler
    if (file_exists("./{$theme_path}/{$configUrl[0]}.php") && !is_dir("./{$theme_path}/{$configUrl[0]}.php")) {
      // theme root
      require "./{$theme_path}/{$configUrl[0]}.php";
    } elseif (!empty($configUrl[1]) && file_exists("./{$theme_path}/{$configUrl[0]}/{$configUrl[1]}.php") && !is_dir("./{$theme_path}/{$configUrl[0]}/{$configUrl[1]}.php")) {
      // theme folder
      require "./{$theme_path}/{$configUrl[0]}/{$configUrl[1]}.php";
    } else {
      if (file_exists("./{$theme_path}/404.php") && !is_dir("./{$theme_path}/404.php")) {
        require "./{$theme_path}/404.php";
      } else {
        echo "Erro: 404";
      }
    }
    ?>
  </main>
  <?php
  // footer
  require "./{$theme_path}/footer.php";
  ?>

  <?php require "include-scripts.php"; ?>
</body>

</html>
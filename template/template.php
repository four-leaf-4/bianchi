<!DOCTYPE html>
<html>
  <head>
    <!-- head meta style sheet -->
    <?php
    include ($_SERVER['DOCUMENT_ROOT']."/simple-php/template/template-parts/head.php");
    ?>
  </head>
  <body>
    <?php
    include ($_SERVER['DOCUMENT_ROOT']."/simple-php/template/template-parts/variable.php");
    ?>

    <!-- header -->
    <?php
    include ($_SERVER['DOCUMENT_ROOT']."/simple-php/template/template-parts/header.php");
    ?>

    <!-- contents -->
    <div id="main">
      <?php pageContent(); ?>
    </div>

    <!-- footer -->
    <?php
    include ($_SERVER['DOCUMENT_ROOT']."/simple-php/template/template-parts/footer.php");
    ?>

    <!-- SCRIPTS -->
    <script src="/bianchi/js/jquery-3.2.1.min.js"></script>
    <script src="/bianchi/js/script.js"></script>
  </body>
</html>

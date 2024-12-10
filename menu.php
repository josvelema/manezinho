<?php
include "includes/db.php";
session_start();
include "admin/functions.php";
include "includes/header.html";

echo '<link rel="stylesheet" href="assets/css/menuStyle24.css?v=241">';

include "includes/nav.html";
?>
<main class="menu-main">
  <header class="menu-header">
    <h1>Menu</h1>
    <h4>
      <a href="menu?lang=pt" class="lang portuguese" title="See menu in Portuguese" data-lang-active="true">Portuguese</a>
      <a href="menu?lang=en" class="lang english" title="See menu in English" data-lang-active="false">English</a>
    </h4>

    <?php
    if (isset($_GET['lang']) && $_GET['lang'] == 'en') {
      include "includes/menuEnglish.html";
    } elseif (isset($_GET['lang']) && $_GET['lang'] == 'pt') {
      include "includes/menuPortuguese.html";
    } else {
      include "includes/menuPortuguese.html";
    }
    ?>
    <script>
      // Get the language from the URL
      let url = window.location.href;
      // check if the url has a language parameter
      let lang = url.includes('?lang=') ? url.split('?lang=')[1] : 'pt';

      console.log(lang);
      if (lang == 'en') {
        document.querySelector('.english').setAttribute('data-lang-active', 'true');
        document.querySelector('.portuguese').setAttribute('data-lang-active', 'false');
      } else {
        document.querySelector('.english').setAttribute('data-lang-active', 'false');
        document.querySelector('.portuguese').setAttribute('data-lang-active', 'true');
      }
    </script>
    <?php
    include "includes/footer.html";


    ?>
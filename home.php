<?php
	include "php/includes/config.php";
	include "php/includes/sessionUtils.php";
	
	$session = new sessionUtils();
	
	$session->checkSession($_SESSION["user_regno"]);
	$id = $_SESSION["user_id"];
	$regno = $_SESSION["user_regno"];
	$year = $_SESSION["user_year"];
	$sec = $_SESSION["user_sec"];
	$sem = $_SESSION["user_sem"];
	
	$db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_BASE) or die("Cannot connect to db..");
	
	$subject_arr = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM subject WHERE year = $year AND semester = $sem"), MYSQL_ASSOC);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Feedback System</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='//fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
      <header class="demo-header mdl-layout__header mdl-layout__header--scroll mdl-color--grey-100 mdl-color-text--grey-800">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Material Design Lite</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="exit_to_app">
	            <a href="php/logout.php" class="material-icons">exit_to_app</a>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
        </div>
      </header>
      <div class="demo-ribbon"></div>
      <main class="demo-main mdl-layout__content">
        <div class="demo-container mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
            <div class="demo-crumbs mdl-color-text--grey-500">
	            <a href="home.php">Home</a> &gt; Material Design Lite &gt; How to install MDL
            </div>
            <h3>Answer all the questions.</h3>
	          <p class="mdl-color-text--red">* Required</p>
	          <h5>slkdjflkdsjflkjlskdjflaksjdflkjalskjdflkajsdnkjasdkjasdknaskndfkjasndkfnaksjndfka?</h5>
	          <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
		          <thead>
		          <tr>
			          <th class="mdl-data-table__cell--non-numeric">Subjects</th>
			          <th class="mdl-data-table__cell--non-numeric">C01</th>
			          <th class="mdl-data-table__cell--non-numeric">C02</th>
			          <th class="mdl-data-table__cell--non-numeric">C03</th>
			          <th class="mdl-data-table__cell--non-numeric">C04</th>
			          <th class="mdl-data-table__cell--non-numeric">C05</th>
			          <th class="mdl-data-table__cell--non-numeric">C06</th>
		          </tr>
		          </thead>
		          <tbody>
		          <tr>
			          <td class="mdl-data-table__cell--non-numeric mdl-typography--font-bold">ADC</td>
			          <td>
					        <input type="radio" id="c01" class="mdl-radio__button" name="c01" value="1">
					        <input type="radio" id="c01" class="mdl-radio__button" name="c01" value="2">
					        <input type="radio" id="c01" class="mdl-radio__button" name="c01" value="3">
			          </td>
			          <td>
				          <input type="radio" id="c02" class="mdl-radio__button" name="c02" value="1">
				          <input type="radio" id="c02" class="mdl-radio__button" name="c02" value="2">
				          <input type="radio" id="c02" class="mdl-radio__button" name="c02" value="3">
			          </td>
			          <td>
				          <input type="radio" id="c03" class="mdl-radio__button" name="c03" value="1">
				          <input type="radio" id="c03" class="mdl-radio__button" name="c03" value="2">
				          <input type="radio" id="c03" class="mdl-radio__button" name="c03" value="3">
			          </td>
			          <td>
				          <input type="radio" id="c04" class="mdl-radio__button" name="c04" value="1">
				          <input type="radio" id="c04" class="mdl-radio__button" name="c04" value="2">
				          <input type="radio" id="c04" class="mdl-radio__button" name="c04" value="3">
			          </td>
			          <td>
				          <input type="radio" id="c05" class="mdl-radio__button" name="c05" value="1">
				          <input type="radio" id="c05" class="mdl-radio__button" name="c05" value="2">
				          <input type="radio" id="c05" class="mdl-radio__button" name="c05" value="3">
			          </td>
			          <td>
				          <input type="radio" id="c06" class="mdl-radio__button" name="c06" value="1">
				          <input type="radio" id="c06" class="mdl-radio__button" name="c06" value="2">
				          <input type="radio" id="c06" class="mdl-radio__button" name="c06" value="3">
			          </td>
		          </tr>
		          </tbody>
	          </table>
          </div>
        </div>
        <footer class="demo-footer mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            <ul class="mdl-mini-footer--link-list">
              <li><a href="#">Help</a></li>
              <li><a href="#">Privacy and Terms</a></li>
              <li><a href="#">User Agreement</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <script src="js/material.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </body>
</html>

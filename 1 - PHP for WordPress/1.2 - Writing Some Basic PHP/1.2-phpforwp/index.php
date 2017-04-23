<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP for WordPress</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="/wp-content/themes/1.2-phpforwp/style.css">
  </head>
  <body>

    <header id="masthead">
    	<h1><a href="#">PHP for WordPress</a></h1>
    </header>

    <div id="content">

    	<?php

        // A variable for saving your name
    		$name = "Enter your name";

    	?>

    	<h2>Welcome!</h2>

    	<p>My name is "<?php echo $name; ?>."</p>


    	<h2>My Latest Post:</h2>

    	<?php

        // Calling the custom display_post function
    		display_post( 'Hello PHP!', 'Lorem ipsum content' );

        // A custom function for displaying posts
    		function display_post( $title, $content ) {

    			echo "<h3><a href=\"#\">$title</a></h3>";
    			echo "<div>$content</div>";

    		}

    	?>

    </div>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP for WordPress</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="/wp-content/themes/1.2-phpforwp-completed/style.css">
  </head>
  <body>

    <header id="masthead">
    	<h1><a href="#">PHP for WordPress</a></h1>
    </header>

    <div id="content">

    	<?php

        // Create a variable called $name and assign it your name
    		$name = "Enter your name";

    	?>

    	<h2>Welcome!</h2>

    	<p>My name is "<?php echo $name; ?>."</p>


    	<h2>My Latest Post:</h2>

    	<?php

        // Call the custom display_post function
        // Pass it the title and content of the post as parameters
    		display_post( 'Hello PHP!', '<p>Lorem ipsum content</p>' );

        // Write a custom function called display_post
        // Have it accept a $title and $content parameter
    		function display_post( $title, $content ) {

          // Echo out the $title in an <h3> tag
    			echo "<h3>$title</h3>";
          // Echo out the $content in an <div> tag
    			echo "<div>$content</div>";

    		}

    	?>

    </div>
  </body>
</html>

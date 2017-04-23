<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP for WordPress</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
		<link rel="stylesheet" href="/wp-content/themes/1.04-phpforwp-completed/style.css">
	</head>
  <body>

    <header id="masthead">
    	<h1><a href="#">PHP for WordPress</a></h1>
    </header>

    <div id="content">

			<h2>A Post Object</h2>

			<?php

				// Create a new object and save as $post
				// Assign a title and content property to $post
				$post = new stdClass;
				$post->title = "Hello PHP!";
				$post->content = "Post content goes here";

				// Use pre_export to display the $post
				pre_export( $post );

			?>


			<h2>Array of Post Objects</h2>

			<?php

				/**
				 * Custom function for creating post objects
				 *
				 * @param string $title Title for the post
				 * @param string $content Content for the post with HTML
				 * @return object Post object
				 */
				function create_post( $title, $content ) {

					// Create a new object and save as $post
					// Assign a $title and $content as property to $post
					$post = new stdClass;
					$post->title = $title;
					$post->content = $content;

					// Return the $post
					return $post;

				}

				// Create an array of post objects using the create_post function
				$posts = array(
					create_post( 'Hello World', '<p>Content goes here.</p>' ),
					create_post( 'PHP for WordPress', '<p>Lorem to the ipsum.</p>' ),
					create_post( 'WP Development', '<p>Learn more about it.</p>')
				);

				// Use pre_export to display the $posts
				pre_export( $posts );

			?>

			<h2>Displaying Post Objects</h2>


			<?php

				// Loop through array of posts and display each one on the page
				foreach( $posts as $post ) {

					// Call the display_post function and pass it the $post
					display_post( $post );

				}

				/**
				 * Custom function for displaying the title and content for a post
				 *
				 * @param object $post The post to be displayed
				 */
				function display_post( $post ) {

					// Echo an <h3> tag with the $post->title inside
					echo "<h3><a href=\"#\">$post->title</a></h3>";
					// Echo a <div> tag with the $post->content inside
					echo "<div>$post->content</div>";

				}

			?>


			<?php


			/**
			 * Helper function for var_exporting objects wrapped in <pre> tags
			 *
			 * @param object|array $content The content to be var_exported
			 */
			function pre_export( $content ) {

					echo "<pre>";
					var_export( $content );
					echo "</pre>";

			}

			?>


		</div>

	</body>
</html>

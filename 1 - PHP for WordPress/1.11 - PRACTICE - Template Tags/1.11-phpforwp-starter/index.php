<link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="/wp-content/themes/1.4-phpforwp/style.css">


<header id="masthead">
	<h1><a href="#">PHP for WordPress</a></h1>
</header>

<div id="content">

	<h2>A Post Object</h2>

	<?php

		// Creating a post object and assigning properties
		$post = new stdClass;
		$post->title = "Hello PHP!";
		$post->content = "Post content goes here";

		pre_export( $post );

	?>


	<!-- <h2>Array of Post Objects</h2>

	<?php

		/**
		 * Custom function for creating post objects
		 *
		 * @param string $title Title for the post
		 * @param string $content Content for the post with HTML
		 * @return object Post object
		 */
		function create_post( $title, $content ) {

			$post = new stdClass;
			$post->title = $title;
			$post->content = $content;

			return $post;

		}

		// Creating an array of post objects using the create_post function
		$posts = array(
			create_post( 'Hello World', '<p>Content goes here.</p>' ),
			create_post( 'PHP for WordPress', '<p>Lorem to the ipsum.</p>' ),
			create_post( 'WP Development', '<p>Learn more about it.</p>')
		);

		pre_export( $posts );

	?> -->

	<!-- <h2>Displaying Post Objects</h2>


	<?php

		// Loop through array of posts and display each one on the page
		foreach( $posts as $post ) {

			display_post( $post );

		}

		/**
		 * Custom function for displaying the title and content for a post
		 *
		 * @param object $post The post to be displayed
		 */
		function display_post( $post ) {

			echo "<h3><a href=\"#\">$post->title</a></h3>";
			echo "<div>$post->content</div>";

		}

	?> -->


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

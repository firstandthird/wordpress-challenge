<?php
	function ft_estimated_reading_time($post_id) {

		// get the content
		$the_content = get_the_content($post_id);

		// count the number of words
		$words = str_word_count( strip_tags( $the_content ) );

		// rounding off and deviding per 200 words per minute
		$minute = floor( $words / 200 );

		// rounding off to get the seconds
		$second = floor( $words % 200 / ( 200 / 60 ) );

		// calculate the amount of time needed to read
		$estimate = $minute . ' min' . ( $minute == 1 ? '' : 's' ) . ', ' . $second . ' second' . ( $second == 1 ? '' : 's' );

		// create output
		$output = $minute == 0
			? $second . ' sec'
			: $minute . ' min';
		$estimate;

		// return the estimate
		return $output;
	}
?>
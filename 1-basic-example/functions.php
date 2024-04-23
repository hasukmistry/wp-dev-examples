<?php

add_filter( 'wp_dev_load_services', function( array $service_aliases ): array {
	return array_merge( $service_aliases, array( 'helloWorldRestApi' ) );
});

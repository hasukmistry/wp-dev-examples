<?php
/**
 * HelloWorld class to register and render rest route.
 *
 * @package WpDevExample\Wp\RestApi
 */

declare(strict_types=1);

namespace WpDevExample\Wp\RestApi;

/**
 * HelloWorld class
 *
 * @since 1.0.0
 */
class Hello_World {
	/**
	 * Magic method to initialize WordPress.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function __invoke(): void {
		add_action( 'rest_api_init', array( $this, 'register_route' ) );
	}

	/**
	 * Register the rest route.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function register_route(): void {
		register_rest_route(
			'wp-dev/v1',
			'/hello-world',
			array(
				'methods'  => 'GET',
				'callback' => array( $this, 'render' ),
			)
		);
	}

	/**
	 * Render the rest route.
	 *
	 * @since 1.0.0
	 *
	 * @return \WP_REST_Response
	 */
	public function render(): \WP_REST_Response {
		return new \WP_REST_Response( array( 'message' => '[WpDevExample]: Hello World!' ) );
	}
}

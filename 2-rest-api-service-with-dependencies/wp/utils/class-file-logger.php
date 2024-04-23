<?php
/**
 * FileLogger class to add logs to a file.
 *
 * @package WpDevExample\Wp\Utils
 */

declare(strict_types=1);

namespace WpDevExample\Wp\Utils;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;

/**
 * Class File_Logger
 *
 * @package WpDevExample\Wp\Utils
 */
class File_Logger extends Logger implements LoggerInterface {
	/**
	 * File_Logger constructor.
	 *
	 * @since 1.0.0
	 *
	 * @param string $name Name of the logger.
	 * @param string $path Path to the log file.
	 */
	public function __construct( string $name, string $path ) {
		parent::__construct( $name );

		$this->pushHandler( new StreamHandler( $path ) );
	}
}

<?php
/**
 * This file is part of the "Easy System" package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Damon Smith <damon.easy.system@gmail.com>
 */
namespace Es;

/**
 * Constant for internal use.
 *
 * @const string
 */
define('_ES_', 'Easy System');

/**
 * The correct directory separator for this platform.
 *
 * @const string
 */
defined('PHP_DS')
    || define('PHP_DS', DIRECTORY_SEPARATOR);

/**
 * The smallest integer supported in this build of PHP.
 *
 * @const int
 */
defined('PHP_INT_MIN')
    || define('PHP_INT_MIN', ~PHP_INT_MAX);

<?php

/**
 * Orchestra: A minimalist object-oriented superset for WordPress using Phalcon.
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE and is available through
 * the world-wide-web at the following URI:
 * http://opensource.org/licenses/MIT
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the web, please send a note to the author so
 * he can mail you a copy immediately.
 *
 * @copyright   Akufen Atelier Creatif
 * @author      Nicholas Charbonneau <nicholas@akufen.ca>
 * @license     http://opensource.org/licenses/MIT
 * @version     0.1.0
 * @link        https://github.com/akufenstudio/orchestra
 */

if (!function_exists('get_template_directory')) {
    function get_template_directory()
    {
        return __DIR__;
    }
}

if (!function_exists('get_post_type')) {
    function get_post_type()
    {
        return 'page';
    }
}

require_once __DIR__ . '/assets/wp-config.php';

require_once __DIR__ . '/../vendor/autoload.php';
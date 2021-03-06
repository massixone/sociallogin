<?php
/**
 * @package   AkeebaSocialLogin
 * @copyright Copyright (c)2016-2017 Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

// Protect from unauthorized access
defined('_JEXEC') or die();

/**
 * Exception thrown when a login error occurs. The application must go through the failed login user plugin handlers.
 */
class SocialLoginFailedLoginException extends RuntimeException {}
<?php
/**
 * <pre>
 * Invision Power Services
 * IP.Board v3.3.4
 * Main public executable wrapper.
 * Set-up and load module to run
 * Last Updated: $Date: 2012-06-12 10:14:49 -0400 (Tue, 12 Jun 2012) $
 * </pre>
 *
 * @author 		$Author: bfarber $
 * @copyright	(c) 2001 - 2009 Invision Power Services, Inc.
 * @license		http://www.invisionpower.com/company/standards.php#license
 * @package		IP.Board
 * @link		http://www.invisionpower.com
 * @version		$Rev: 10914 $
 *
 */	

define( 'IPB_THIS_SCRIPT', 'public' );
require_once( './initdata.php' );/*noLibHook*/

require_once( IPS_ROOT_PATH . 'sources/base/ipsRegistry.php' );/*noLibHook*/
require_once( IPS_ROOT_PATH . 'sources/base/ipsController.php' );/*noLibHook*/

ipsController::run();

exit();
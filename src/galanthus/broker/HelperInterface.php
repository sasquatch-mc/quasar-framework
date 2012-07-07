<?php
/**
 * Galanthus Framework © 2012
 * Copyright © 2012 Sasquatch <Joan-Alexander Grigorov>
 *                              http://bgscripts.com
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License v3
 * that is bundled with this package in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @category   Galanthus
 * @package    Galanthus Broker
 * @copyright  Copyright (c) 2012 Sasquatch, Elegance Team
 */

namespace galanthus\broker;

/**
 * Helpers interface
 *
 * @author     Joan-Alexander Grigorov http://bgscripts.com
 * @category   Galanthus
 * @package    Galanthus Broker
 * @copyright  Copyright (c) 2012 Sasquatch, Elegance Team
 */
interface HelperInterface
{
    
    /**
     * Implementing the strategy pattern
     * 
     * @return mixed|void
     */
    public function direct();
    
}
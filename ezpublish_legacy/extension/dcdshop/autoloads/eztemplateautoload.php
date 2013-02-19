<?php
/**
 * DCD Shop Template operators
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version 5.0.0
 */

$eZTemplateOperatorArray = array();
$eZTemplateOperatorArray[] = array( 'class' => 'dcdShopOperators',
                                    'operator_names' => array( 'get_enrolled_amount', 'get_enrolments_info', 'get_product_enrolments', 'get_product_orders', 'status_name' ) );

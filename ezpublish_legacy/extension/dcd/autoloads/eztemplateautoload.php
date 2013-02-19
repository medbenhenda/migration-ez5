<?php
/**
 * DCDPro Template operators
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version 5.0.0-alpha1
 */

$eZTemplateOperatorArray = array();
$eZTemplateOperatorArray[] = array( 'class' => 'dcdTools',
                                    'operator_names' => array( 'get_courses', 'get_moodle_session', 'fully_booked', 'get_country_code', 'get_visitor_country', 'get_course_entity', 'moodle_user', 'xml_to_array' ) );

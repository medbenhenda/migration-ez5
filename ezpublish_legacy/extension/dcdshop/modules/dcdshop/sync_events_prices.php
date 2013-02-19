<?php
/**
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.8
 * @package kernel
 */

echo "Updating events prices";

$result = eZShopFunctions::updateAutoRates();

//$result = eZExecuteShellCommand( 'php runcronjobs.php sync' );

var_dump($result);

eZExecution::cleanExit();

?>
<?php
/**
 * Description of eztemplateautoload
 *
 * @author mohamed Benhenda <benhenda.med@gmail.com>
 */
$eZTemplateOperatorArray = array();

$eZTemplateOperatorArray[] = array(
    'script' => 'extension/dcdgroup/autoloads/getImage.php',
    'class' => 'GeTImage',
    'operator_names' => array(
        'return_image'
    ));
$eZTemplateOperatorArray[] = array( 'script' => 'extension/dcdgroup/autoloads/dcdfeedreader.php',
                                    'class' => 'dcdFeedReader',
                                    'operator_names' => array( 'dcdfeedreader' ) );
$eZTemplateOperatorArray[] = array( 'script' => 'extension/dcdgroup/autoloads/dcdgetitems.php',
                                    'class' => 'dcdGetItems',
                                    'operator_names' => array( 'dcdgetitems' ) );
$eZTemplateOperatorArray[] = array( 'script' => 'extension/dcdgroup/autoloads/feedreader_datacenter.php',
		'class' => 'feedReaderDatacenter',
		'operator_names' => array( 'feedreader_datacenter' ) );
?>

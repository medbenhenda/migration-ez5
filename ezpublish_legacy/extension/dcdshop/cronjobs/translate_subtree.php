<?php
/**
 * DCD - Add Translation to subtree
 * 
 * This script will translate a subtree into a target language
 * 
 * @params language, parent, object
 */

$script = eZScript::instance( array( 'description' => ( "DCD add translation.\n\n" .
														"Translate basic objects into target language"),
														'use-session'       => false,
														'use-modules'       => true,
														'use-extensions'    => true,
														'debug-output'      => true,
														'debug-message'     =>true,
														'remove-all-events-before-import' =>false) );

$script->startup();

$options = $script->getOptions( "[language:][parent:][class-filter-array:][depth:][offset:][limit:][fetch-language:]",
		"",
		array( 'language' => 'Language Chosen for synchronisation' ,
		 	   'parent' => 'Parent Node ID: Default is the event',
		 	   'class-filter-array' => 'Restrict to Type of objects, sperate each type with ","',
		 	   'depth' => 'Depth',
		 	   'limit' => 'Limit',
		 	   'offset' => 'Offset',
		 	   'fetch-language' => 'Language authorised in the fetch: default is "false"'  ) );

$script->initialize();

$cli = eZCLI::instance();

$target_language = isset( $options['language'] ) ? $options['language'] : 'esl-ES';
$parentNodeID = isset($options['parent']) ? $options['parent'] : '769';

$ClassFilterArray  = array('folder');
if( isset($options['class-filter-array']) ){
	$ClassFilterArray =  explode( ',', $options['class-filter-array']);
}

$depth  = isset($options['depth']) ? $options['depth'] : 1;
$offset = isset($options['offset']) ? $options['offset'] : 0;
$limit  = isset($options['limit']) ? $options['limit'] : false;
$fetchLanguage  = isset($options['fetch-language']) ? $options['fetch-language'] : false;

	$params = array('Limit'			=> $limit,
					'Depth'			=> $depth,
					'Language'		=> $fetchLanguage,
					'Offset'		=> $offset,
					'ClassFilterArray' => $ClassFilterArray,
					'ClassFilterType'          => 'include');

	$nodes = eZContentObjectTreeNode::subTreeByNodeID( $params, $parentNodeID );
	
	$count = eZContentObjectTreeNode::subTreeCountByNodeID( $params, $parentNodeID );
foreach($nodes as $id => $node)
{
	$contentObject = eZContentObject::fetch( $node->attribute('contentobject_id') );
	
	$available_languages = $contentObject->attribute( 'available_languages' );
	
	if(in_array($target_language, $available_languages) ){
		$cli->output( '===========================' );
		$cli->output( ( $id + 1) . "/$count: Already translated " .  $node->attribute( 'name' ) );
		continue;
	}
	
	$params = array(
			'remote_id'  => md5( microtime( true ) ),
			'language'   => $target_language,
			'attributes' => array(
					'title' => $contentObject->attribute('name'),
			)
	
	);
	
	eZContentFunctions::updateAndPublishObject( $contentObject, $params );
	
		if ( $node )
		{
			$cli->output( '===========================' );
			$cli->output( ( $id + 1) . "/$count: " .  $node->attribute( 'node_id' ) );
			$cli->output( "Name: ".  $node->attribute( 'name' ) );
			$cli->output( "Language: ".  $contentObject->attribute( 'current_language' ) . " -> ". $target_language);
			$cli->output( "URL: ".  $node->attribute( 'url_alias' ) );
		}
		eZContentObject::clearCache();
}


?>
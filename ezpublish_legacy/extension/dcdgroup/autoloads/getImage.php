<?php
/**
 * Description of getImage
 *
 * @author mohamed Benhenda <benhenda.med@gmail.com>
 */
class GetImage {
    function GetImage()
    {
        $this->Operators = array(
            'return_image'
        );
    }

    function &operatorList()
    {
        return $this->Operators;
    }

    function namedParameterPerOperator()
    {
        return true;
    }

    function namedParameterList()
    {
        return array(
            'return_image' => array(
                'bloc_text' => array(
                    'type' => 'string',
                    'required' => true,
                    'default' => ''
                )
            )
        );
    }

    function modify( &$tpl, &$operatorName,
                     &$operatorParameters,
                     &$rootNamespace,
                     &$currentNamespace,
                     &$operatorValue,
                     &$namedParameters )
    {
        switch ( $operatorName )
        {
            case 'return_image':
            {
                $operatorValue = $this->return_image(
                    $namedParameters['bloc_text']
                );
            }
            break;
        }
    }

    function return_image( $bloc_texte )
    {
        $regexp = '/(src=".*")/i';
        $output = preg_match_all($regexp, $bloc_texte, $matches);
        $first_img = $matches [1][0];
        $regexp2 = '/(src)/i';
        return $first_img;
    }

    var $Operators;
}
?>

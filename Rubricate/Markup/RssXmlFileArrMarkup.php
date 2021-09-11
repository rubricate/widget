<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/markup
 * 
 */

namespace Rubricate\Markup;

use Rubricate\Element\IGetElement;

class RssXmlFileArrMarkup implements IGetElement
{

    private $e = array();



    public function __construct(array $file)
    {
        self::init($file);
    }



    public function getElement()
    {
        return implode('', $this->e);
    } 



    private function init(array $file)
    {
        foreach ($file as $f) {
            $element    = new RssXmlFileMarkup($f);
            $this->e[]  = $element->getElement();
        }
        
    } 
    


}


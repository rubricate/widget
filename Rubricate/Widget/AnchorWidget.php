<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/widget
 * @copyright   2017 
 * 
 */

namespace Rubricate\Widget;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class AnchorWidget implements IGetElement
{
    private $e;
    
    public function __construct($href, $inner)
    {
        $this->e = new CreateElement('a');
        $this->e->setAttribute('href', $href);
        $this->e->addInnerText($inner);
    }






    public function setAttribute($name, $value = null) 
    { 
        if($name == 'href') {
            throw new \Exception(
                ''
                .'setting Attribute other than: '
                .'href'
                . PHP_EOL 
            );
        }

        $this->e->setAttribute($name, $value);
        return $this;
    } 






    public function getElement()
    {
        return $this->e->getElement();
    } 
    



    
    
}


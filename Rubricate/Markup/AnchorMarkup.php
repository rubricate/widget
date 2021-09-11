<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/markup
 * 
 */

namespace Rubricate\Markup;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;
use Rubricate\Element\StrElement;

class AnchorMarkup implements IGetElement
{
    private $e;



    public function __construct($href, $inner)
    {
        $this->e = new CreateElement('a');
        $this->e->setAttribute('href', $href);
        $this->e->addChild(new StrElement($inner));
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


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

class DivInnerJoinWidget implements IGetElement
{
    private $e;
    
    public function __construct(IGetElement $element)
    {
        $this->e = new CreateElement('div');
        $this->e->addInnerJoin($element);
    }






    public function setAttribute($name, $value = null) 
    { 
        $this->e->setAttribute($name, $value);
        return $this;
    } 






    public function getElement()
    {
        return $this->e->getElement();
    } 
    



    
    
}


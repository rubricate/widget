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

class ParagraphInnerJoinWidget implements IGetElement
{
    private $e;
    
    public function __construct(IGetElement $element)
    {
        $this->e = new CreateElement('p');
        $this->e->addInnerJoin($element);
    }






    public function setAttribute($name, $value = NULL) 
    { 
        $this->e->setAttribute($name, $value);
        return $this;
    } 






    public function getElement()
    {
        return $this->e->getElement();
    } 
    



    
    
}


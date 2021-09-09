<?php

/*
 * @package     RubricatePHP
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/el
 * 
 */

namespace Rubricate\El;

use Rubricate\Element\IGetElement;

class AnchorIfEl implements IGetElement
{

    private $if;
    private $e;
    


    public function __construct($if, $href, $inner)
    {
        $this->e  = new AnchorEl($href, $inner);
        $this->if = $if;
    }



    public function setAttribute($name, $value = null) 
    { 
        $this->e->setAttribute($name, $value);
        return $this;
    } 



    public function getElement()
    {
        return (!$this->if)? null: $this->e->getElement();
    } 



}


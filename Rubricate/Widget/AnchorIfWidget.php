<?php

/*
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/widget
 * @copyright   2017 
 * 
 */

namespace Rubricate\Widget;

use Rubricate\Element\IGetElement;

class AnchorIfWidget implements IGetElement
{
    private $if;
    private $e;
    

    public function __construct($if, $href, $inner)
    {
        $this->e  = new AnchorWidget($href, $inner);
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


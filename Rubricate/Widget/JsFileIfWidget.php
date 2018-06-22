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

class JsFileIfWidget implements IGetElement
{

    private $if;
    private $e;
    
    

    public function __construct($if, $file)
    {
        $this->if = $if;
        $this->e = new JsFileWidget($file);
    }



    public function getElement()
    {
        return (!$this->if)? null: $this->e->getElement();
    } 



}


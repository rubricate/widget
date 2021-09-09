<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/el
 * 
 */

namespace Rubricate\El;

use Rubricate\Element\IGetElement;

class CssFileIfEl implements IGetElement
{

    private $if;
    private $e;
    
    

    public function __construct($if, $file)
    {
        $this->if = $if;
        $this->e  = new CssFileEl($file);
    }



    public function getElement()
    {
        return (!$this->if)? null: $this->e->getElement();
    } 



}


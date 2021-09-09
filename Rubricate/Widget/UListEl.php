<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/el
 * 
 */

namespace Rubricate\El;

use Rubricate\Element\IGetElement;

class UListEl implements IGetElement
{

    private $e;



    public function __construct(array $listArr) 
    {
        $this->e = new ParentChildEl('ul', 'li', $listArr);
    }



    public function setAttribute($name, $value = null)
    {
        $this->e->setAttribute($name, $value);
    } 



    public function getElement()
    {
        return $this->e->getElement();
    } 
    


}


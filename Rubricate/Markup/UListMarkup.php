<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/markup
 * 
 */

namespace Rubricate\Markup;

use Rubricate\Element\IGetElement;

class UListMarkup implements IGetElement
{

    private $e;



    public function __construct(array $listArr) 
    {
        $this->e = new ParentChildMarkup('ul', 'li', $listArr);
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


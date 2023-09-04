<?php 

namespace Rubricate\Widget;

use Rubricate\Element\IGetElement;

class OListWidget implements IGetElement
{
    private $e;

    public function __construct(array $listArr)
    {
        $this->e = new ParentChildWidget('ol', 'li', $listArr);
    }

    public function setAttribute($key, $value = null)
    {
        $this->e->setAttribute($key, $value);
        return $this;
    } 

    public function getElement()
    {
        return $this->e->getElement();
    } 

}


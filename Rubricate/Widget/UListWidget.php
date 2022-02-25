<?php 

namespace Rubricate\Widget;

use Rubricate\Element\IGetElement;

class UListWidget implements IGetElement
{
    private $e;

    public function __construct(array $listArr) 
    {
        $this->e = new ParentChildWidget('ul', 'li', $listArr);
    }

    public function setAttribute($key, $value = null): void
    {
        $this->e->setAttribute($key, $value);
    } 

    public function getElement(): string
    {
        return $this->e->getElement();
    } 
}


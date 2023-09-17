<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\IGetElement;

class OListWidget implements IGetElement
{
    private $e;

    public function __construct(array $listArr)
    {
        $this->e = new ParentChildWidget('ol', 'li', $listArr);
    }

    public function setAttribute($key, $value = null): object
    {
        $this->e->setAttribute($key, $value);
        return $this;
    } 

    public function getElement(): string
    {
        return $this->e->getElement();
    } 

}


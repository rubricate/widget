<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\IGetElement;

class UListWidget implements IGetElement
{
    private readonly ParentChildWidget $e;

    public function __construct(array $listArr) 
    {
        $this->e = new ParentChildWidget('ul', 'li', $listArr);
    }

    public function setAttribute(string $name, mixed $value = null): self
    {
        $this->e->setAttribute($name, $value);
        return $this;
    } 

    public function getElement(): string
    {
        return $this->e->getElement();
    } 
}

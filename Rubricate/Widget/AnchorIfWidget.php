<?php

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\IGetElement;

class AnchorIfWidget implements IGetElement
{
    private readonly AnchorWidget $e;
    private readonly bool $condition;

    public function __construct(mixed $if, string $href, mixed $text = null)
    {
        $this->e = new AnchorWidget($href, $text);
        
        $this->condition = is_callable($if) 
            ? (bool) $if() 
            : (bool) $if;
    }

    public function setAttribute(string $name, mixed $value = null): self
    { 
        $this->e->setAttribute($name, $value);
        return $this;
    } 

    public function addChild(IGetElement $e): self
    {
        $this->e->addChild($e);
        return $this;
    } 

    public function getElement(): ?string
    {
        return $this->condition ? $this->e->getElement() : null;
    } 
}

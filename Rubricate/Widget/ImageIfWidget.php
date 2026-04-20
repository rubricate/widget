<?php

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\IGetElement;

class ImageIfWidget implements IGetElement
{
    private readonly ImageWidget $e;
    private readonly bool $condition;

    public function __construct(mixed $if, string $file, string $alt = '')
    {
        $this->e = new ImageWidget($file, $alt);
        $this->condition = is_callable($if) ? (bool) $if() : (bool) $if;
    }

    public function setAttribute(string $name, mixed $value = null): self
    { 
        $this->e->setAttribute($name, $value);
        return $this;
    } 

    public function getElement(): ?string
    {
        return $this->condition ? $this->e->getElement() : null;
    } 
}

<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\IGetElement;

class JsFileIfWidget implements IGetElement
{
    private readonly JsFileWidget $e;
    private readonly bool $condition;

    public function __construct(mixed $if, string $file)
    {
        $this->e = new JsFileWidget($file);
        $this->condition = is_callable($if) ? (bool) $if() : (bool) $if;
    }

    public function getElement(): ?string
    {
        return $this->condition ? $this->e->getElement() : null;
    } 
}


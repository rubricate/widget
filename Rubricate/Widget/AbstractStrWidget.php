<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;
use Rubricate\Element\StrElement;

abstract class AbstractStrWidget implements IGetElement
{
    private readonly CreateElement $e;
    private readonly StrElement $str;

    public function __construct(
        protected readonly string $tagName,
        mixed $text = null
    ) {
        $this->e   = new CreateElement($this->tagName);
        $this->str = new StrElement($text);
    }

    public function setAttribute(string $name, mixed $value = null): self
    { 
        $this->e->setAttribute($name, $value);
        return $this;
    } 

    public function add(mixed $value): self
    {
        $this->str->add($value);
        return $this;
    } 

    public function getElement(): string
    {
        $this->e->addChild($this->str);

        return $this->e->getElement();
    } 
}

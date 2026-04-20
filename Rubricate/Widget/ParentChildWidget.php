<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;
use Rubricate\Element\StrElement;

class ParentChildWidget implements IGetElement
{
    private readonly CreateElement $e;

    public function __construct(
        string $parentTagname, 
        string $childTagname, 
        array $contentArr
    ) {
        $this->e = new CreateElement($parentTagname);

        foreach ($contentArr as $content) {
            $child = new CreateElement($childTagname);
            $child->addChild(new StrElement($content));

            $this->e->addChild($child);
        }
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

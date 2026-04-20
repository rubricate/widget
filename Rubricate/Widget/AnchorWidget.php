<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Exception;
use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;
use Rubricate\Element\StrElement;

class AnchorWidget implements IGetElement
{
    private readonly CreateElement $e;

    public function __construct(string $href, mixed $text = null)
    {
        $this->e = new CreateElement('a');
        $this->e->setAttribute('href', $href);
        
        if ($text !== null) {
            $this->e->addChild(new StrElement($text));
        }
    }

    public function setAttribute(string $name, mixed $value = null): self
    { 
        if ($name === 'href') {
            throw new Exception(
                "The 'href' attribute is already defined in the constructor."
            );
        }

        $this->e->setAttribute($name, $value);
        return $this;
    } 

    public function addChild(IGetElement $e): self
    {
        $this->e->addChild($e);
        return $this;
    } 

    public function getElement(): string
    {
        return $this->e->getElement();
    } 
}


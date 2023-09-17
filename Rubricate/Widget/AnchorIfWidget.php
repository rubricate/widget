<?php

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\IGetElement;

class AnchorIfWidget implements IGetElement
{
    private $if;
    private $e;

    public function __construct($if, $href, $text)
    {
        $this->e  = new AnchorWidget($href, $text);
        $this->if = $if;
    }

    public function setAttribute($key, $value = null): object
    { 
        $this->e->setAttribute($key, $value);
        return $this;
    } 

    public function addChild(IGetElement $e): object
    {
        $this->e->addChild($e);

        return $this;
    } 

    public function getElement(): ?string
    {
        return (!$this->if)? null: $this->e->getElement();
    } 

}


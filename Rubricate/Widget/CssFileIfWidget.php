<?php 

namespace Rubricate\Widget;

use Rubricate\Element\IGetElement;

class CssFileIfWidget implements IGetElement
{
    private $if;
    private $e;

    public function __construct($if, $file): void
    {
        $this->if = $if;
        $this->e  = new CssFileWidget($file);
    }

    public function getElement(): ?string
    {
        return (!$this->if)? null: $this->e->getElement();
    } 
}


<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\IGetElement;

class CssFileIfWidget implements IGetElement
{
    private $if;
    private $e;

    public function __construct($if, $file)
    {
        $this->if = $if;
        $this->e  = new CssFileWidget($file);
    }

    public function getElement(): ?string
    {
        return (!$this->if)? null: $this->e->getElement();
    } 
}


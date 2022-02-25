<?php 

namespace Rubricate\Widget;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class CssFileWidget implements IGetElement
{
    private $e;

    public function __construct($file)
    {
        $this->e = new CreateElement('link');
        $this->e->setAttribute('rel', 'stylesheet');
        $this->e->setAttribute('type', 'text/css');
        $this->e->setAttribute('href', $file);
    }

    public function getElement(): string
    {
        return $this->e->getElement();
    } 

}


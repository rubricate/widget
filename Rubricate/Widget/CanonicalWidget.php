<?php 

namespace Rubricate\Widget;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class CanonicalWidget implements IGetElement
{
    private $e;

    public function __construct($url)
    {
        $this->e = new CreateElement('link');
        $this->e->setAttribute('rel', 'canonical');
        $this->e->setAttribute('href', $url);
    }

    public function getElement()
    {
        return $this->e->getElement();
    } 
}


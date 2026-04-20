<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class CanonicalWidget implements IGetElement
{
    private readonly CreateElement $e;

    public function __construct(string $url)
    {
        $this->e = new CreateElement('link');
        $this->e->setAttribute('rel', 'canonical');
        $this->e->setAttribute('href', $url);
    }

    public function getElement(): string
    {
        return $this->e->getElement();
    } 
}


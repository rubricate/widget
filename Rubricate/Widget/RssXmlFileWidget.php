<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class RssXmlFileWidget implements IGetElement
{
    private readonly CreateElement $e;

    public function __construct(string $file, string $title = '')
    {
        $this->e = new CreateElement('link');
        $this->e->setAttribute('rel', 'alternate');
        $this->e->setAttribute('type', 'application/rss+xml');

        if ($title !== '') {
            $this->e->setAttribute('title', $title);
        }

        $this->e->setAttribute('href', $file);
    }

    public function getElement(): string
    {
        return $this->e->getElement();
    } 
}


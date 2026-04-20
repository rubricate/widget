<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\IGetElement;

class RssXmlFileIfWidget implements IGetElement
{
    private readonly RssXmlFileWidget $e;
    private readonly bool $condition;

    public function __construct(mixed $if, string $file, string $title = '')
    {
        $this->e = new RssXmlFileWidget($file, $title);
        $this->condition = is_callable($if) ? (bool) $if() : (bool) $if;
    }

    public function getElement(): ?string
    {
        return $this->condition ? $this->e->getElement() : null;
    } 
}


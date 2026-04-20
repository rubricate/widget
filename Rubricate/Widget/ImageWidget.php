<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Exception;
use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class ImageWidget implements IGetElement
{
    private readonly CreateElement $e;

    public function __construct(string $file, string $alt = '')
    {
        $this->e = new CreateElement('img');
        $this->e->setAttribute('src', $file);
        $this->e->setAttribute('alt', $alt);
    }    

    public function setAttribute(string $name, mixed $value = null): self
    { 
        if (in_array($name, ['src', 'alt'], true)) {
            throw new Exception(
                "Attributes 'src' and 'alt' are already defined in the constructor." . PHP_EOL
            );
        }

        $this->e->setAttribute($name, $value);
        return $this;
    } 

    public function getElement(): string
    {
        return $this->e->getElement();
    } 
}

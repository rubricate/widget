<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\IGetElement;

class JsFileArrWidget implements IGetElement
{
    private array $e = [];

    public function __construct(array $files)
    {
        foreach ($files as $file) {
            $this->e[] = (new JsFileWidget($file))->getElement();
        }
    }

    public function getElement(): string
    {
        return implode('', $this->e);
    } 
}


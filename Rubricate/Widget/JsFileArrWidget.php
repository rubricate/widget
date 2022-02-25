<?php 

namespace Rubricate\Widget;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class JsFileArrWidget implements IGetElement
{
    private $e = array();

    public function __construct(array $file)
    {
        self::init($file);
    }

    public function getElement(): string
    {
        return implode('', $this->e);
    } 

    private function init(array $file): void
    {
        foreach ($file as $f)
        {
            $element   = new JsFileWidget($f);
            $this->e[] = $element->getElement();
        }
    } 
}


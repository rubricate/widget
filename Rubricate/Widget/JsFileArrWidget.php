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

    public function getElement()
    {
        return implode('', $this->e);
    } 

    private function init(array $file)
    {
        foreach ($file as $f)
        {
            $element   = new JsFileWidget($f);
            $this->e[] = $element->getElement();
        }
    } 
}


<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\IGetElement;

class RssXmlFileArrWidget implements IGetElement
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
        foreach ($file as $f) {
            $element    = new RssXmlFileWidget($f);
            $this->e[]  = $element->getElement();
        }
        
    } 
}


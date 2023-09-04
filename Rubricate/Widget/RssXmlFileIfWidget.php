<?php 

namespace Rubricate\Widget;

use Rubricate\Element\IGetElement;

class RssXmlFileIfWidget implements IGetElement
{
    private $if;
    private $e;

    public function __construct($if, $file, $title)
    {
        $this->if = $if;
        $this->e = new RssXmlFileWidget($file, $title);
    }

    public function getElement()
    {
        return (!$this->if)? null: $this->e->getElement();
    } 
}


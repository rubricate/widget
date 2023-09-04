<?php 

namespace Rubricate\Widget;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;
use Rubricate\Element\StrElement;

class ParentChildWidget implements IGetElement
{
    private $e;

    public function __construct(
        $parentTagname, $childTagname, array $contentArr
    ) {
        self::init(
            $parentTagname, $childTagname, $contentArr
        );
    }

    public function setAttribute($key, $value = null)
    {
        $this->e->setAttribute($key, $value);
        return $this;
    } 

    public function getElement()
    {
        return $this->e->getElement();
    } 

    private function init($parentTagname, $childTagname, $contentArr)
    {
        $this->e = new CreateElement($parentTagname);

        foreach ($contentArr as $content) {

            $child = new CreateElement($childTagname);
            $child->addChild(new StrElement($content));

            $this->e->addChild($child);
        }
    } 
}


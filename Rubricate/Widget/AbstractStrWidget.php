<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;
use Rubricate\Element\StrElement;

class AbstractStrWidget implements IGetElement
{
    private $e, $str;
    protected $tagName;

    public function __construct($text = '')
    {
        $this->e   = new CreateElement($this->tagName);
        $this->str = new StrElement($text);
    }

    public function setAttribute($key, $value = null): object
    { 
        $this->e->setAttribute($key, $value);
        return $this;
    } 

    public function setParam($arg): object
    {
        $this->str->setParam($arg);
        return $this;
    } 

    public function getElement(): string
    {
        $this->e->addChild($this->str);

        return $this->e->getElement();
    } 
}


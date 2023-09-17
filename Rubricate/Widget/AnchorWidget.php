<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;
use Rubricate\Element\StrElement;

class AnchorWidget implements IGetElement
{
    private $e;

    public function __construct($href, $text = '')
    {
        $this->e = new CreateElement('a');
        $this->e->setAttribute('href', $href);
        $this->e->addChild(new StrElement($text));
    }

    public function setAttribute($key, $value = null): object
    { 
        if($key == 'href') {
            throw new \Exception(''
                ."The 'href' attribute was used on the instance"
                . PHP_EOL 
            );
        }

        $this->e->setAttribute($key, $value);
        return $this;
    } 

    public function addChild(IGetElement $e): object
    {
        $this->e->addChild($e);

        return $this;
    } 

    public function getElement(): string
    {
        return $this->e->getElement();
    } 
    
}


<?php 

namespace Rubricate\Widget;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class ImageWidget implements IGetElement
{
    private $e;
    private $file;

    public function __construct(string $file, string $alt = '')
    {
        $this->e = new CreateElement('img');
        $this->e->setAttribute('src', $file);
        $this->e->setAttribute('alt', $alt);
    }    

    public function setAttribute($key, $value = null)
    { 
        if(in_array($key, array('src', 'alt'))) {
            throw new \Exception( ''
                .'setting Attribute other than: '
                .'src and alt'
                . PHP_EOL 
            );
        }

        $this->e->setAttribute($key, $value);
        return $this;
    } 

    public function getElement()
    {
        return $this->e->getElement();
    } 
}


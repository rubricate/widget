<?php 

namespace Rubricate\Widget;

class HeadingStrWidget extends AbstractStrWidget
{
    public function __construct($text, $level = 1)
    {
        self::setLevel($level);
        parent::__construct($text);
    }

    private function setLevel($level): void
    {
        $this->tagName = 'h' . $level;    
    } 
}


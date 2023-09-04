<?php 

namespace Rubricate\Widget;

class HeadingWidget extends AbstractStrWidget
{
    public function __construct($text, $level = 1)
    {
        self::setLevel($level);
        parent::__construct($text);
    }

    private function setLevel($level)
    {
        if(!in_array($level, [1, 2, 3, 4, 5, 6])){

            throw new \Exception(PHP_EOL 
                . '"Second Invalid Argument: '
                . 'use 1, 2, 3, 4, 5 or 6"'
                . PHP_EOL
            );
        }

        $this->tagName = 'h' . $level;    
    } 
}


<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/widget
 * @copyright   2017 - 2018
 * 
 */

namespace Rubricate\Widget;


class HeadingStrWidget extends AbstractStrWidget
{

    public function __construct($text, $level = 1)
    {
        self::setLevel($level);
        parent::__construct($text);
    }


    private function setLevel($level)
    {
        $this->tagName = 'h' . $level;    
    } 
}


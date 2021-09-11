<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/markup
 * 
 */

namespace Rubricate\Markup;


class HeadingStrMarkup extends AbstractStrMarkup
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


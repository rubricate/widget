<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/el
 * 
 */

namespace Rubricate\El;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class JsFileArrEl implements IGetElement
{

    private $e = array();
    


    public function __construct(array $file)
    {
        self::init($file);
    }



    public function getElement()
    {
        return implode('', $this->e);
    } 



    private function init(array $file)
    {
        foreach ($file as $f)
        {
            $element   = new JsFileEl($f);
            $this->e[] = $element->getElement();
        }
    } 



}


<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/widget
 * @copyright   2017 
 * 
 */

namespace Rubricate\Widget;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class RootChildWidget implements IGetElement
{

    private $e;



    public function __construct($rootTagName, $childTagName, array $contentArr) 
    {
        $this->e = new CreateElement($rootTagName);
        self::init($childTagName, $contentArr);
    }



    public function setAttribute($name, $value = null)
    {
        $this->e->setAttribute($name, $value);
    } 



    public function getElement()
    {
        return $this->e->getElement();
    } 



    private function init($childTagName, $contentArr)
    {
        foreach ($contentArr as $content) {

            $child = new CreateElement($childTagName);
            $child->addInnerText($content);

            $this->e->addInnerJoin($child);
        }

        return $this;
    } 



}


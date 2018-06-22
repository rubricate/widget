<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/widget
 * @copyright   2017 - 2018
 * 
 */

namespace Rubricate\Widget;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

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



    public function setAttribute($name, $value = null)
    {
        $this->e->setAttribute($name, $value);
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
            $child->addInnerText($content);

            $this->e->addInnerJoin($child);
        }

        return $this;
    } 
    

}


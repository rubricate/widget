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



    public function __construct(
        $parentTagname, $childTagname, array $contentArr
    ) {
        $this->e = new ParentChildWidget(
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



}


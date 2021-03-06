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
use Rubricate\Element\StrElement;

class AbstractStrWidget implements IGetElement
{

    private $e, $str;
    protected $tagName;


    

    public function __construct($text)
    {
        $this->e   = new CreateElement($this->tagName);
        $this->str = new StrElement($text);
    }




    public function setAttribute($name, $value = null) 
    { 
        $this->e->setAttribute($name, $value);
        return $this;
    } 



    public function setParam($arg)
    {
        $this->str->setParam($arg);

        return $this;
    } 



    public function getElement()
    {
        $this->e->addChild($this->str);

        return $this->e->getElement();
    } 
    

    
}


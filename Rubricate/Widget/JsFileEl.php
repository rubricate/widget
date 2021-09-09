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
use Rubricate\Element\StrElement;

class JsFileEl implements IGetElement
{

    private $e;



    public function __construct($file)
    {
        $this->e = new CreateElement('script');
        $this->e->setAttribute('type', 'text/javascript');
        $this->e->setAttribute('src',  $file);
        $this->e->addChild(new StrElement(''));
    }



    public function getElement()
    {
        return $this->e->getElement();
    } 



}


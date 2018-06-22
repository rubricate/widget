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

class JsFileWidget implements IGetElement
{

    private $e;



    public function __construct($file)
    {
        $this->e = new CreateElement('script');
        $this->e->setAttribute('type', 'text/javascript');
        $this->e->setAttribute('src',  $file);
        $this->e->addInnerText('');
    }



    public function getElement()
    {
        return $this->e->getElement();
    } 



}


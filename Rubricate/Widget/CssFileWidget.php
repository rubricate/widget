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

class CssFileWidget implements IGetElement
{

    private $e;



    public function __construct($file)
    {
        $this->e = new CreateElement('link');
        $this->e->setAttribute('rel', 'stylesheet');
        $this->e->setAttribute('type', 'text/css');
        $this->e->setAttribute('href', $file);
    }



    public function getElement()
    {
        return $this->e->getElement();
    } 
    


}


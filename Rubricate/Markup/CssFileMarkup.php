<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/markup
 * 
 */

namespace Rubricate\Markup;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class CssFileMarkup implements IGetElement
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


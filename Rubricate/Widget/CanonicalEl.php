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

class CanonicalEl implements IGetElement
{

    private $e;



    public function __construct($url)
    {
        $this->e = new CreateElement('link');
        $this->e->setAttribute('rel', 'canonical');
        $this->e->setAttribute('href', $url);
    }



    public function getElement()
    {
        return $this->e->getElement();
    } 
    

    
}


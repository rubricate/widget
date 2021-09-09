<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/el
 * 
 */

namespace Rubricate\El;

use Rubricate\Element\IGetElement;

class RssXmlFileIfEl implements IGetElement
{

    private $if;
    private $e;
    
    

    public function __construct($if, $file, $title)
    {
        $this->if = $if;
        $this->e = new RssXmlFileEl($file, $title);
    }



    public function getElement()
    {
        return (!$this->if)? null: $this->e->getElement();
    } 



}


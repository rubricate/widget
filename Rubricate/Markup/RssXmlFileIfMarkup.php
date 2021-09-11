<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/markup
 * 
 */

namespace Rubricate\Markup;

use Rubricate\Element\IGetElement;

class RssXmlFileIfMarkup implements IGetElement
{

    private $if;
    private $e;
    
    

    public function __construct($if, $file, $title)
    {
        $this->if = $if;
        $this->e = new RssXmlFileMarkup($file, $title);
    }



    public function getElement()
    {
        return (!$this->if)? null: $this->e->getElement();
    } 



}


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

class RssXmlFileEl implements IGetElement
{

    private $e;



    public function __construct($file, $title = '')
    {
        $this->e = new CreateElement('link');
        $this->e->setAttribute('rel', 'alternate');
        $this->e->setAttribute('type', 'application/rss+xml');

        if(!empty($title)) {
            $this->e->setAttribute('title', $title);
        }

        $this->e->setAttribute('href', $file);
    }



    public function getElement()
    {
        return $this->e->getElement();
    } 
    

    
}


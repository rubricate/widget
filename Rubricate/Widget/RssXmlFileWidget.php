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

class RssXmlFileWidget implements IGetElement
{
    private $e;

    public function __construct($file, $title = '')
    {
        $this->e = new CreateElement('link');
        $this->e->setAttribute('rel', 'alternate');
        $this->e->setAttribute('type', 'application/rss+xml');

        if($title) {
        $this->e->setAttribute('title', $title);
        }

        $this->e->setAttribute('href', $file);
    }

    




    public function getElement()
    {
        return $this->e->getElement();
    } 
    
}



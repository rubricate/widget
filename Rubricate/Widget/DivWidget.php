<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

class DivWidget extends AbstractStrWidget
{
    public function __construct(mixed $text = null)
    {
        parent::__construct('div', $text);
    }
}

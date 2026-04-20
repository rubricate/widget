<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

class ParagraphWidget extends AbstractStrWidget
{
    public function __construct(mixed $text = null)
    {
        parent::__construct('p', $text);
    }
}

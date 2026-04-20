<?php 

declare(strict_types=1);

namespace Rubricate\Widget;

use Exception;

class HeadingWidget extends AbstractStrWidget
{
    public function __construct(mixed $text = null, int $level = 1)
    {
        parent::__construct($this->resolveLevel($level), $text);
    }

    private function resolveLevel(int $level): string
    {
        if (!in_array($level, [1, 2, 3, 4, 5, 6], true)) {
            throw new Exception(
                sprintf('Invalid heading level: %d. Use 1, 2, 3, 4, 5 or 6.', $level)
            );
        }

        return 'h' . $level;
    }
}

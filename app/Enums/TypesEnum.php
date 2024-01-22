<?php

namespace App\Enums;

use Closure;
use \Spatie\Enum\Enum;

/**
 * @method static self draft()
 * @method static self Published()
 * @method static self archived()
 * @method static self other()
 * @method static self more()
 */
class TypesEnum extends Enum
{


    protected static function values(): Closure
    {
        return function (string $name): string|int {
            return mb_strtolower($name);
        };
    }


    protected static function labels(): array
    {
        return [
            'draft' => 'my draft label',
            'Published' => 'my Published label',
        ];
    }
}

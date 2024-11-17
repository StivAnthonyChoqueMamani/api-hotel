<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class BookingStatus extends Enum
{
    const PENDING = 'Pendiente';
    const CONFIRMED = 'Confirmado';
    const CHECK_IN = 'Check in';
    const CHECK_OUT = 'Check out';
    const CANCELLED = 'Cancelado';
}

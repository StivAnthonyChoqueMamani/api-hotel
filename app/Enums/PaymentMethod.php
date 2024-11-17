<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PaymentMethod extends Enum
{
    const CASH = 'Efectivo';
    const YAPE = 'Yape';
    const CREDIT_CARD = 'targeta de credito';
}

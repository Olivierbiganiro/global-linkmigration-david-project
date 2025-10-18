<?php

namespace App\Enums;

enum UserRole: string
{
    case ADMIN = 'ADMIN';
    case USER = 'USER';

    public static function getValues(): array
    {
        return [self::ADMIN->value, self::USER->value];
    }
}

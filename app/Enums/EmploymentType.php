<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum EmploymentType: string implements HasColor, HasLabel
{
    case FullTime = 'full_time';
    case PartTime = 'part_time';
    case Contract = 'contract';
    case Temporary = 'temporary';
    case Internship = 'internship';
    case Remote = 'remote';

    public function getLabel(): string
    {
        return match ($this) {
            self::FullTime => 'Full-time',
            self::PartTime => 'Part-time',
            self::Contract => 'Contract',
            self::Temporary => 'Temporary',
            self::Internship => 'Internship',
            self::Remote => 'Remote',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::FullTime => 'success',
            self::PartTime => 'info',
            self::Contract => 'warning',
            self::Temporary => 'gray',
            self::Internship => 'primary',
            self::Remote => 'teal',
        };
    }
}

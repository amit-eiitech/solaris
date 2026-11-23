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
            self::FullTime => __('filament.enums.employment_type.full_time'),
            self::PartTime => __('filament.enums.employment_type.part_time'),
            self::Contract => __('filament.enums.employment_type.contract'),
            self::Temporary => __('filament.enums.employment_type.temporary'),
            self::Internship => __('filament.enums.employment_type.internship'),
            self::Remote => __('filament.enums.employment_type.remote'),
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

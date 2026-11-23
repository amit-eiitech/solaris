<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum JobPostStatus: string implements HasColor, HasLabel
{
    case Draft = 'draft';
    case Published = 'published';
    case Closed = 'closed';

    public function getLabel(): string
    {
        return match ($this) {
            self::Draft => __('filament.enums.job_post_status.draft'),
            self::Published => __('filament.enums.job_post_status.published'),
            self::Closed => __('filament.enums.job_post_status.closed'),
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::Draft => 'gray',
            self::Published => 'success',
            self::Closed => 'warning',
        };
    }
}

<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum FormSubmissionStatus: string implements HasColor, HasLabel
{
    case New = 'new';
    case Read = 'read';
    case Replied = 'replied';
    case Archived = 'archived';

    public function getLabel(): string
    {
        return match ($this) {
            self::New => __('filament.enums.form_submission_status.new'),
            self::Read => __('filament.enums.form_submission_status.read'),
            self::Replied => __('filament.enums.form_submission_status.replied'),
            self::Archived => __('filament.enums.form_submission_status.archived'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::New => 'danger',
            self::Read => 'info',
            self::Replied => 'success',
            self::Archived => 'gray',
        };
    }
}

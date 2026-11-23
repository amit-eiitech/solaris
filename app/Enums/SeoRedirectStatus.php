<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum SeoRedirectStatus: int implements HasColor, HasLabel
{
    case MovedPermanently = 301;
    case Found = 302;
    case TemporaryRedirect = 307;
    case PermanentRedirect = 308;
    case Gone = 410;

    public function getLabel(): string
    {
        return match ($this) {
            self::MovedPermanently => __('filament.enums.seo_redirect_status.moved_permanently'),
            self::Found => __('filament.enums.seo_redirect_status.found'),
            self::TemporaryRedirect => __('filament.enums.seo_redirect_status.temporary_redirect'),
            self::PermanentRedirect => __('filament.enums.seo_redirect_status.permanent_redirect'),
            self::Gone => __('filament.enums.seo_redirect_status.gone'),
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::MovedPermanently, self::PermanentRedirect => 'success',
            self::Found, self::TemporaryRedirect => 'warning',
            self::Gone => 'danger',
        };
    }

    /**
     * Short label for compact contexts (table columns, badges).
     */
    public function getShortLabel(): string
    {
        return match ($this) {
            self::MovedPermanently => __('filament.enums.seo_redirect_status.moved_permanently_short'),
            self::Found => __('filament.enums.seo_redirect_status.found_short'),
            self::TemporaryRedirect => __('filament.enums.seo_redirect_status.temporary_redirect_short'),
            self::PermanentRedirect => __('filament.enums.seo_redirect_status.permanent_redirect_short'),
            self::Gone => __('filament.enums.seo_redirect_status.gone_short'),
        };
    }

    /**
     * Whether search engines should treat the source URL as permanently gone/moved.
     */
    public function isPermanent(): bool
    {
        return match ($this) {
            self::MovedPermanently, self::PermanentRedirect, self::Gone => true,
            self::Found, self::TemporaryRedirect => false,
        };
    }
}

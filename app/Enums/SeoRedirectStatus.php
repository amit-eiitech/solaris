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
            self::MovedPermanently => '301 - Moved Permanently (Recommended for SEO & page migrations)',
            self::Found => '302 - Found (Temporary redirect)',
            self::TemporaryRedirect => '307 - Temporary Redirect (Preserves HTTP request method)',
            self::PermanentRedirect => '308 - Permanent Redirect (Preserves HTTP request method)',
            self::Gone => '410 - Gone (Resource permanently deleted and removed from index)',
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
            self::MovedPermanently => '301 - Moved Permanently',
            self::Found => '302 - Found',
            self::TemporaryRedirect => '307 - Temporary Redirect',
            self::PermanentRedirect => '308 - Permanent Redirect',
            self::Gone => '410 - Gone',
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

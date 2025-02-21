<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum Role: string implements HasLabel, HasColor, HasIcon
{
    case DEFAULT = 'default';
    case ADMIN = 'admin';

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::DEFAULT => 'success',
            self::ADMIN => 'danger',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::DEFAULT => 'heroicon-o-user-group',
            self::ADMIN => 'heroicon-o-shield-check',
        };
    }

    public function getLabel(): ?string
    {
        return match ($this) {
            self::DEFAULT => 'Default',
            self::ADMIN => 'Admin',
        };
    }
}

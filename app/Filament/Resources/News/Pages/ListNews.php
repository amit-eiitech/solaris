<?php

namespace App\Filament\Resources\News\Pages;

use App\Filament\Resources\News\NewsResource;
use Eii\FilamentLucideIcons\Enums\LucideIcon;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNews extends ListRecords
{
    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label(__('filament.actions.create'))->icon(LucideIcon::CirclePlus),
        ];
    }
}

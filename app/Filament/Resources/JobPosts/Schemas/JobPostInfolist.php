<?php

namespace App\Filament\Resources\JobPosts\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Enums\TextSize;

class JobPostInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('filament.sections.job_details'))
                    ->icon('heroicon-o-briefcase')
                    ->columns(3)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('title')
                            ->label(__('filament.fields.title'))
                            ->columnSpanFull()
                            ->weight(FontWeight::Bold)
                            ->extraAttributes(['style' => 'font-size: 32px; line-height: 1.2;']),

                        TextEntry::make('department')
                            ->label(__('filament.fields.department'))
                            ->placeholder(__('filament.fields.no_value'))
                            ->color('primary'),

                        TextEntry::make('employment_type')
                            ->label(__('filament.fields.employment_type'))
                            ->badge()
                            ->placeholder(__('filament.fields.no_value')),

                        TextEntry::make('location')
                            ->label(__('filament.fields.location'))
                            ->placeholder(__('filament.fields.no_value')),

                        TextEntry::make('salary_range')
                            ->label(__('filament.fields.salary_range'))
                            ->placeholder(__('filament.fields.no_value'))
                            ->size(TextSize::Large)
                            ->weight(FontWeight::Bold),

                        TextEntry::make('status')
                            ->label(__('filament.fields.status'))
                            ->badge(),

                        TextEntry::make('description')
                            ->label(__('filament.fields.description'))
                            ->html()
                            ->placeholder(__('filament.fields.no_value'))
                            ->columnSpanFull(),

                        TextEntry::make('requirements')
                            ->label(__('filament.fields.requirements'))
                            ->listWithLineBreaks()
                            ->bulleted()
                            ->placeholder(__('filament.fields.no_value'))
                            ->columnSpanFull(),

                        TextEntry::make('application_url')
                            ->label(__('filament.fields.application_url'))
                            ->placeholder(__('filament.fields.no_value'))
                            ->columnSpanFull(),

                        TextEntry::make('application_closes_at')
                            ->label(__('filament.fields.application_closes_at'))
                            ->dateTime()
                            ->placeholder(__('filament.fields.no_value'))
                            ->weight(FontWeight::Bold),
                    ]),

                Section::make(__('filament.sections.publishing'))
                    ->icon('heroicon-o-arrow-up-tray')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('slug')
                            ->label(__('filament.fields.slug'))
                            ->copyable(),

                        TextEntry::make('published_at')
                            ->label(__('filament.fields.published_at'))
                            ->dateTime()
                            ->placeholder(__('filament.fields.no_value')),
                    ]),

                Section::make(__('filament.sections.record_history'))
                    ->icon('heroicon-o-clock')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('created_at')
                            ->label(__('filament.fields.created_at'))
                            ->dateTime(),
                        TextEntry::make('updated_at')
                            ->label(__('filament.fields.updated_at'))
                            ->dateTime(),
                    ]),
            ]);
    }
}

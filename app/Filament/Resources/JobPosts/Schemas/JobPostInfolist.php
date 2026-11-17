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
                Section::make('Job details')
                    ->icon('heroicon-o-briefcase')
                    ->columns(3)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('title')
                            ->columnSpanFull()
                            ->weight(FontWeight::Bold)
                            ->extraAttributes(['style' => 'font-size: 32px; line-height: 1.2;']),

                        TextEntry::make('department')
                            ->placeholder('-')
                            ->color('primary'),

                        TextEntry::make('employment_type')
                            ->badge()
                            ->placeholder('-'),

                        TextEntry::make('location')
                            ->placeholder('-'),

                        TextEntry::make('salary_range')
                            ->placeholder('-')
                            ->size(TextSize::Large)
                            ->weight(FontWeight::Bold),

                        TextEntry::make('status')
                            ->badge(),

                        TextEntry::make('description')
                            ->html()
                            ->placeholder('-')
                            ->columnSpanFull(),

                        TextEntry::make('requirements')
                            ->listWithLineBreaks()
                            ->bulleted()
                            ->placeholder('-')
                            ->columnSpanFull(),

                        TextEntry::make('application_url')
                            ->placeholder('-')
                            ->columnSpanFull(),

                        TextEntry::make('application_closes_at')
                            ->dateTime()
                            ->placeholder('-')
                            ->weight(FontWeight::Bold),
                    ]),

                Section::make('Publishing')
                    ->icon('heroicon-o-arrow-up-tray')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('slug')
                            ->copyable(),

                        TextEntry::make('published_at')
                            ->dateTime()
                            ->placeholder('-'),
                    ]),

                Section::make('Record history')
                    ->icon('heroicon-o-clock')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('created_at')
                            ->dateTime(),
                        TextEntry::make('updated_at')
                            ->dateTime(),
                    ]),
            ]);
    }
}

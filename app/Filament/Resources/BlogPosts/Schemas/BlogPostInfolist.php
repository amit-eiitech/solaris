<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Enums\FontWeight;

class BlogPostInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('filament.sections.post_content'))
                    ->icon('heroicon-o-document-text')
                    ->columns(3)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('title')
                            ->label(__('filament.fields.title'))
                            ->columnSpanFull()
                            ->weight(FontWeight::Bold)
                            ->extraAttributes(['style' => 'font-size: 32px; line-height: 1.2;']),

                        TextEntry::make('author_name')
                            ->label(__('filament.fields.author_name'))
                            ->placeholder(__('filament.fields.no_value'))
                            ->color('primary'),

                        TextEntry::make('status')
                            ->label(__('filament.fields.status'))
                            ->badge(),

                        ImageEntry::make('featured_image')
                            ->hiddenLabel()
                            ->alt(__('filament.sections.featured_image_alt'))
                            ->columnSpanFull()
                            ->placeholder(__('filament.sections.no_image')),

                        TextEntry::make('excerpt')
                            ->label(__('filament.fields.excerpt'))
                            ->placeholder(__('filament.fields.no_value'))
                            ->columnSpanFull(),

                        TextEntry::make('content')
                            ->label(__('filament.fields.content'))
                            ->html()
                            ->placeholder(__('filament.fields.no_value'))
                            ->columnSpanFull(),
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

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
                Section::make('Post content')
                    ->icon('heroicon-o-document-text')
                    ->columns(3)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('title')
                            ->columnSpanFull()
                            ->weight(FontWeight::Bold)
                            ->extraAttributes(['style' => 'font-size: 32px; line-height: 1.2;']),

                        TextEntry::make('author_name')
                            ->placeholder('-')
                            ->color('primary'),

                        TextEntry::make('status')
                            ->badge(),

                        ImageEntry::make('featured_image')
                            ->hiddenLabel()
                            ->alt('Blog post featured image')
                            ->columnSpanFull()
                            ->placeholder('No image'),

                        TextEntry::make('excerpt')
                            ->placeholder('-')
                            ->columnSpanFull(),

                        TextEntry::make('content')
                            ->html()
                            ->placeholder('-')
                            ->columnSpanFull(),
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

<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BlogPostInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Post overview')
                    ->icon('heroicon-o-document-text')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('title')
                            ->columnSpanFull(),
                        TextEntry::make('slug')
                            ->copyable(),
                        TextEntry::make('author_name')
                            ->placeholder('-'),
                        TextEntry::make('status')
                            ->badge(),
                    ]),
                Section::make('Content')
                    ->icon('heroicon-o-pencil-square')
                    ->schema([
                        TextEntry::make('excerpt')
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('content')
                            ->html()
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ]),
                Section::make('Publishing & media')
                    ->icon('heroicon-o-photo')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('published_at')
                            ->dateTime()
                            ->placeholder('-'),
                        ImageEntry::make('featured_image')
                            ->alt('Blog post featured image')
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

<?php

namespace App\Filament\Resources\News\Schemas;

use App\Enums\ContentStatus;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make()
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Details')
                            ->icon('heroicon-o-tag')
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull()
                                    ->helperText('The headline of the news article'),

                                TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255)
                                    ->helperText('URL-friendly identifier (auto-generated from title if empty)'),

                                Select::make('categories')
                                    ->relationship('categories', 'name')
                                    ->multiple()
                                    ->preload()
                                    ->helperText('Assign one or more categories to this news article'),

                                Textarea::make('excerpt')
                                    ->maxLength(65535)
                                    ->columnSpanFull()
                                    ->rows(4)
                                    ->helperText('Brief summary shown in listings and social shares'),
                            ]),

                        Tab::make('Content')
                            ->icon('heroicon-o-pencil-square')
                            ->schema([
                                FileUpload::make('featured_image')
                                    ->image()
                                    ->directory('news')
                                    ->columnSpanFull()
                                    ->helperText('Main image displayed with the article'),

                                RichEditor::make('content')
                                    ->columnSpanFull(),
                            ]),

                        Tab::make('Publishing')
                            ->icon('heroicon-o-arrow-up-tray')
                            ->schema([
                                Select::make('status')
                                    ->options(ContentStatus::class)
                                    ->default(ContentStatus::Draft)
                                    ->required()
                                    ->helperText('Draft articles are not visible to the public'),

                                DateTimePicker::make('published_at')
                                    ->native(false)
                                    ->helperText('Leave empty to publish immediately when status is "Published", or schedule for later'),
                            ]),
                    ]),
            ]);
    }
}

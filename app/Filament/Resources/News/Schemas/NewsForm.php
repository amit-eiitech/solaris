<?php

namespace App\Filament\Resources\News\Schemas;

use App\Enums\ContentStatus;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
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
                        Tab::make(__('filament.tabs.details'))
                            ->icon('heroicon-o-tag')
                            ->schema([
                                TextInput::make('title')
                                    ->label(__('filament.fields.title'))
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull()
                                    ->helperText(__('filament.helpers.news.title')),

                                TextInput::make('slug')
                                    ->label(__('filament.fields.slug'))
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255)
                                    ->helperText(__('filament.helpers.news.slug')),

                                Select::make('categories')
                                    ->label(__('filament.fields.categories'))
                                    ->relationship('categories', 'name')
                                    ->multiple()
                                    ->preload()
                                    ->helperText(__('filament.helpers.news.categories')),

                                Textarea::make('excerpt')
                                    ->label(__('filament.fields.excerpt'))
                                    ->maxLength(65535)
                                    ->columnSpanFull()
                                    ->rows(4)
                                    ->helperText(__('filament.helpers.news.excerpt')),
                            ]),

                        Tab::make(__('filament.tabs.content'))
                            ->icon('heroicon-o-pencil-square')
                            ->schema([
                                FileUpload::make('featured_image')
                                    ->label(__('filament.fields.featured_image'))
                                    ->image()
                                    ->directory('news')
                                    ->columnSpanFull()
                                    ->helperText(__('filament.helpers.news.featured_image')),

                                RichEditor::make('content')
                                    ->label(__('filament.fields.content'))
                                    ->columnSpanFull(),
                            ]),

                        Tab::make(__('filament.tabs.publishing'))
                            ->icon('heroicon-o-arrow-up-tray')
                            ->schema([
                                Select::make('status')
                                    ->label(__('filament.fields.status'))
                                    ->options(ContentStatus::class)
                                    ->default(ContentStatus::Draft)
                                    ->required()
                                    ->helperText(__('filament.helpers.news.status')),

                                DateTimePicker::make('published_at')
                                    ->label(__('filament.fields.published_at'))
                                    ->native(false)
                                    ->helperText(__('filament.helpers.news.published_at')),
                            ]),
                    ]),
            ]);
    }
}

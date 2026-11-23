<?php

namespace App\Filament\Resources\Events\Schemas;

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

class EventForm
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
                                    ->helperText(__('filament.helpers.events.title')),

                                TextInput::make('slug')
                                    ->label(__('filament.fields.slug'))
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255)
                                    ->helperText(__('filament.helpers.events.slug')),

                                Select::make('categories')
                                    ->label(__('filament.fields.categories'))
                                    ->relationship('categories', 'name')
                                    ->multiple()
                                    ->preload()
                                    ->helperText(__('filament.helpers.events.categories')),

                                Textarea::make('excerpt')
                                    ->label(__('filament.fields.excerpt'))
                                    ->maxLength(65535)
                                    ->columnSpanFull()
                                    ->rows(3)
                                    ->helperText(__('filament.helpers.events.excerpt')),

                                TextInput::make('registration_url')
                                    ->label(__('filament.fields.registration_url'))
                                    ->maxLength(255)
                                    ->url()
                                    ->columnSpanFull()
                                    ->helperText(__('filament.helpers.events.registration_url')),
                            ]),

                        Tab::make(__('filament.tabs.schedule'))
                            ->icon('heroicon-o-calendar-days')
                            ->schema([
                                DateTimePicker::make('starts_at')
                                    ->label(__('filament.fields.starts_at'))
                                    ->required()
                                    ->native(false)
                                    ->helperText(__('filament.helpers.events.starts_at')),

                                DateTimePicker::make('ends_at')
                                    ->label(__('filament.fields.ends_at'))
                                    ->native(false)
                                    ->after('starts_at')
                                    ->helperText(__('filament.helpers.events.ends_at')),

                                TextInput::make('location')
                                    ->label(__('filament.fields.location'))
                                    ->maxLength(255)
                                    ->columnSpanFull()
                                    ->placeholder(__('filament.fields.location_placeholder'))
                                    ->helperText(__('filament.helpers.events.location')),
                            ]),

                        Tab::make(__('filament.tabs.content'))
                            ->icon('heroicon-o-pencil-square')
                            ->schema([
                                FileUpload::make('featured_image')
                                    ->label(__('filament.fields.featured_image'))
                                    ->image()
                                    ->directory('events')
                                    ->columnSpanFull(),

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
                                    ->helperText(__('filament.helpers.events.status')),

                                DateTimePicker::make('published_at')
                                    ->label(__('filament.fields.published_at'))
                                    ->native(false)
                                    ->helperText(__('filament.helpers.events.published_at')),
                            ]),
                    ]),
            ]);
    }
}

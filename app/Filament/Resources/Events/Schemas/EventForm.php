<?php

namespace App\Filament\Resources\Events\Schemas;

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

class EventForm
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
                                    ->helperText('The display title of the event'),

                                TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255)
                                    ->helperText('URL-friendly identifier (auto-generated if empty)'),

                                Select::make('categories')
                                    ->relationship('categories', 'name')
                                    ->multiple()
                                    ->preload()
                                    ->helperText('Assign one or more categories to this event'),

                                Textarea::make('excerpt')
                                    ->maxLength(65535)
                                    ->columnSpanFull()
                                    ->rows(3)
                                    ->helperText('Brief summary for listings and previews'),

                                TextInput::make('registration_url')
                                    ->maxLength(255)
                                    ->url()
                                    ->columnSpanFull()
                                    ->helperText('External registration link'),
                            ]),

                        Tab::make('Schedule')
                            ->icon('heroicon-o-calendar-days')
                            ->schema([
                                DateTimePicker::make('starts_at')
                                    ->required()
                                    ->native(false)
                                    ->helperText('Start date and time'),

                                DateTimePicker::make('ends_at')
                                    ->native(false)
                                    ->after('starts_at')
                                    ->helperText('End date and time'),

                                TextInput::make('location')
                                    ->maxLength(255)
                                    ->columnSpanFull()
                                    ->placeholder('Tokyo Big Sight')
                                    ->helperText('Event venue or location'),
                            ]),

                        Tab::make('Content')
                            ->icon('heroicon-o-pencil-square')
                            ->schema([
                                FileUpload::make('featured_image')
                                    ->image()
                                    ->directory('events')
                                    ->columnSpanFull(),

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
                                    ->helperText('Publication status'),

                                DateTimePicker::make('published_at')
                                    ->native(false)
                                    ->helperText('Schedule publication for a future date'),
                            ]),
                    ]),
            ]);
    }
}

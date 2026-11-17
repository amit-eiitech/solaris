<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Question & Answer')
                    ->description('The inquiry and its helpful resolution')
                    ->schema([
                        TextInput::make('question')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->helperText('The common question asked by users or clients'),

                        RichEditor::make('answer')
                            ->required()
                            ->columnSpanFull()
                            ->helperText('Clear, structured answer explaining the solution or procedure'),
                    ]),

                Section::make('Categorization & Ordering')
                    ->description('Organize FAQ display and ordering on the website')
                    ->columns(2)
                    ->schema([
                        TextInput::make('category')
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->helperText('Topic grouping (e.g. Account, Billing, Services, Technical)'),

                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0)
                            ->required()
                            ->helperText('Display priority within its category; lower numbers appear first (e.g. 0, 10, 20)'),

                        Toggle::make('is_published')
                            ->label('Visible to Public')
                            ->default(true)
                            ->inline(false)
                            ->helperText('When enabled, this FAQ is published and visible on the website'),
                    ]),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Category Information')
                    ->description('Categorization taxonomies shared across content types')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, callable $set) {
                                // ONLY auto-generate slug when creating a new record
                                if ($operation === 'create') {
                                    $slug = preg_replace('/[[:space:]]+/', '-', trim($state));
                                    $slug = preg_replace('/[^\p{L}\p{N}\-]+/u', '', $slug);
                                    $set('slug', $slug);
                                }
                            })
                            ->columnSpanFull()
                            ->helperText('Public category name, e.g. Corporate News, Product Launch, Company Events'),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            // Always validate English, Japanese, and numbers. Block spaces/slashes.
                            ->regex('/^[\p{L}\p{N}\p{Nd}\-]+$/u')
                            ->validationAttribute('slug')
                            ->helperText('URL slug for this category archive page. Only lowercase letters, numbers, and hyphens are allowed. No spaces or slashes.')
                            ->unique(ignoreRecord: true),

                        Select::make('scope')
                            ->options([
                                'news' => 'News',
                                'events' => 'Events',
                                'blog' => 'Blog',
                            ])
                            ->default('news')
                            ->required()
                            ->helperText('The content module this taxonomy applies to'),

                        Textarea::make('description')
                            ->maxLength(65535)
                            ->rows(3)
                            ->columnSpanFull()
                            ->helperText('Optional description displayed on the category archive page or in meta descriptions'),
                    ]),
            ]);
    }
}

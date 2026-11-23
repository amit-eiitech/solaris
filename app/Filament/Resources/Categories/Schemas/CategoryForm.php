<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('filament.resources.categories.section_title'))
                    ->description(__('filament.resources.categories.section_description'))
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->label(__('filament.fields.name'))
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
                            ->helperText(__('filament.fields.name_helper')),

                        TextInput::make('slug')
                            ->label(__('filament.fields.slug'))
                            ->required()
                            ->maxLength(255)
                            // Always validate English, Japanese, and numbers. Block spaces/slashes.
                            ->regex('/^[\p{L}\p{N}\p{Nd}\-]+$/u')
                            ->validationAttribute('slug')
                            ->helperText(__('filament.fields.slug_helper'))
                            ->unique(ignoreRecord: true),

                        Select::make('scope')
                            ->label(__('filament.fields.scope'))
                            ->options([
                                'news' => __('filament.scopes.news'),
                                'events' => __('filament.scopes.events'),
                                'blog' => __('filament.scopes.blog'),
                            ])
                            ->default('news')
                            ->required()
                            ->helperText(__('filament.fields.scope_helper')),

                        Textarea::make('description')
                            ->label(__('filament.fields.description'))
                            ->maxLength(65535)
                            ->rows(3)
                            ->columnSpanFull()
                            ->helperText(__('filament.fields.description_helper')),
                    ]),
            ]);
    }
}

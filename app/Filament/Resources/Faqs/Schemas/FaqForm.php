<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('filament.sections.faq_question_answer'))
                    ->description(__('filament.sections.faq_question_answer_description'))
                    ->schema([
                        TextInput::make('question')
                            ->label(__('filament.fields.question'))
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->helperText(__('filament.helpers.faqs.question')),

                        RichEditor::make('answer')
                            ->label(__('filament.fields.answer'))
                            ->required()
                            ->columnSpanFull()
                            ->helperText(__('filament.helpers.faqs.answer')),
                    ]),

                Section::make(__('filament.sections.faq_categorization'))
                    ->description(__('filament.sections.faq_categorization_description'))
                    ->columns(2)
                    ->schema([
                        TextInput::make('category')
                            ->label(__('filament.fields.category'))
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->helperText(__('filament.helpers.faqs.category')),

                        TextInput::make('sort_order')
                            ->label(__('filament.fields.sort_order'))
                            ->numeric()
                            ->default(0)
                            ->required()
                            ->helperText(__('filament.helpers.faqs.sort_order')),

                        Toggle::make('is_published')
                            ->label(__('filament.fields.visible_to_public'))
                            ->default(true)
                            ->inline(false)
                            ->helperText(__('filament.helpers.faqs.is_published')),
                    ]),
            ]);
    }
}

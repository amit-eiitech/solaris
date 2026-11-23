<?php

namespace App\Filament\Resources\Faqs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FaqsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sort_order')
                    ->label(__('filament.fields.row_number'))
                    ->numeric()
                    ->sortable()
                    ->width('60px'),

                TextColumn::make('question')
                    ->label(__('filament.fields.question'))
                    ->searchable()
                    ->limit(60),

                TextColumn::make('category')
                    ->label(__('filament.fields.category'))
                    ->badge()
                    ->color('gray')
                    ->sortable()
                    ->searchable(),

                IconColumn::make('is_published')
                    ->label(__('filament.fields.is_published'))
                    ->boolean()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label(__('filament.fields.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label(__('filament.fields.updated_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('sort_order', 'asc')
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()->label(__('filament.actions.edit')),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    // DeleteBulkAction::make(),
                ]),
            ]);
    }
}

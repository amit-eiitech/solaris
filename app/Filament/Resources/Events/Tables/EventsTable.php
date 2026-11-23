<?php

namespace App\Filament\Resources\Events\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label(__('filament.fields.row_number')),

                ImageColumn::make('featured_image')
                    ->label(__('filament.fields.featured_image'))
                    ->square(),

                TextColumn::make('title')
                    ->label(__('filament.fields.title'))
                    ->searchable(),

                TextColumn::make('categories.name')
                    ->label(__('filament.fields.category'))
                    ->badge()
                    ->color('info'),

                TextColumn::make('slug')
                    ->label(__('filament.fields.slug'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('location')
                    ->label(__('filament.fields.location'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('registration_url')
                    ->label(__('filament.fields.registration_url'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('starts_at')
                    ->label(__('filament.fields.starts_at'))
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('ends_at')
                    ->label(__('filament.fields.ends_at'))
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('status')
                    ->label(__('filament.fields.status'))
                    ->badge()
                    ->sortable(),

                TextColumn::make('published_at')
                    ->label(__('filament.fields.published_at'))
                    ->dateTime()
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
            ->defaultSort('created_at', 'desc')
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

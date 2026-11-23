<?php

namespace App\Filament\Resources\JobPosts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class JobPostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(__('filament.fields.title'))
                    ->searchable(),

                TextColumn::make('slug')
                    ->label(__('filament.fields.slug'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('department')
                    ->label(__('filament.fields.department'))
                    ->badge()
                    ->searchable(),

                TextColumn::make('employment_type')
                    ->label(__('filament.fields.employment_type'))
                    ->badge()
                    ->sortable(),

                TextColumn::make('location')
                    ->label(__('filament.fields.location'))
                    ->searchable(),

                TextColumn::make('salary_range')
                    ->label(__('filament.fields.salary_range'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('application_url')
                    ->label(__('filament.fields.application_url'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('application_closes_at')
                    ->label(__('filament.fields.application_closes_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

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
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make()->label(__('filament.actions.view')),
                EditAction::make()->label(__('filament.actions.edit')),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    // DeleteBulkAction::make(),
                ]),
            ]);
    }
}

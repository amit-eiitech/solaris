<?php

namespace App\Filament\Resources\BlogPosts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BlogPostsTable
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

                TextColumn::make('author_name')
                    ->label(__('filament.fields.author_name'))
                    ->searchable(),

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

<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

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

class BlogPostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make()
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make(__('filament.tabs.details'))
                            ->columns(2)
                            ->icon('heroicon-o-tag')
                            ->schema([
                                TextInput::make('title')
                                    ->label(__('filament.fields.title'))
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull()
                                    ->helperText(__('filament.helpers.blog_posts.title')),

                                TextInput::make('slug')
                                    ->label(__('filament.fields.slug'))
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255)
                                    ->columnSpanFull()
                                    ->helperText(__('filament.helpers.blog_posts.slug')),

                                TextInput::make('author_name')
                                    ->label(__('filament.fields.author_name'))
                                    ->maxLength(255)
                                    ->helperText(__('filament.helpers.blog_posts.author_name')),

                                Select::make('categories')
                                    ->label(__('filament.fields.categories'))
                                    ->relationship('categories', 'name')
                                    ->multiple()
                                    ->preload()
                                    ->helperText(__('filament.helpers.blog_posts.categories')),

                                Textarea::make('excerpt')
                                    ->label(__('filament.fields.excerpt'))
                                    ->maxLength(65535)
                                    ->columnSpanFull()
                                    ->rows(3)
                                    ->helperText(__('filament.helpers.blog_posts.excerpt')),
                            ]),

                        Tab::make(__('filament.tabs.content'))
                            ->icon('heroicon-o-pencil-square')
                            ->schema([
                                FileUpload::make('featured_image')
                                    ->label(__('filament.fields.featured_image'))
                                    ->image()
                                    ->directory('blog')
                                    ->columnSpanFull()
                                    ->helperText(__('filament.helpers.blog_posts.featured_image')),

                                RichEditor::make('content')
                                    ->label(__('filament.fields.content'))
                                    ->columnSpanFull()
                                    ->helperText(__('filament.helpers.blog_posts.content')),
                            ]),

                        Tab::make(__('filament.tabs.publishing'))
                            ->icon('heroicon-o-arrow-up-tray')
                            ->schema([
                                Select::make('status')
                                    ->label(__('filament.fields.status'))
                                    ->options(ContentStatus::class)
                                    ->default(ContentStatus::Draft)
                                    ->required()
                                    ->helperText(__('filament.helpers.blog_posts.status')),

                                DateTimePicker::make('published_at')
                                    ->label(__('filament.fields.published_at'))
                                    ->native(false)
                                    ->helperText(__('filament.helpers.blog_posts.published_at')),
                            ]),
                    ]),
            ]);
    }
}

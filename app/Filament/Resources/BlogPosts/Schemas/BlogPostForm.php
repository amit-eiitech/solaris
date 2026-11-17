<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

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

class BlogPostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make()
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Details')
                            ->columns(2)
                            ->icon('heroicon-o-tag')
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull()
                                    ->helperText('The title/headline of the blog post'),

                                TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255)
                                    ->columnSpanFull()
                                    ->helperText('URL slug for this post (e.g. insights-into-tech-trends)'),

                                TextInput::make('author_name')
                                    ->maxLength(255)
                                    ->helperText('Name of the author or byline displayed publicly'),

                                Select::make('categories')
                                    ->relationship('categories', 'name')
                                    ->multiple()
                                    ->preload()
                                    ->helperText('Select relevant categories for this article'),

                                Textarea::make('excerpt')
                                    ->maxLength(65535)
                                    ->columnSpanFull()
                                    ->rows(3)
                                    ->helperText('Short introductory summary shown on blog list cards and social snippets'),
                            ]),

                        Tab::make('Content')
                            ->icon('heroicon-o-pencil-square')
                            ->schema([
                                FileUpload::make('featured_image')
                                    ->image()
                                    ->directory('blog')
                                    ->columnSpanFull()
                                    ->helperText('Header or card thumbnail image for this post (16:9 recommended)'),

                                RichEditor::make('content')
                                    ->columnSpanFull()
                                    ->helperText('Main body content of the blog post with rich formatting'),
                            ]),

                        Tab::make('Publishing')
                            ->icon('heroicon-o-arrow-up-tray')
                            ->schema([
                                Select::make('status')
                                    ->options(ContentStatus::class)
                                    ->default(ContentStatus::Draft)
                                    ->required()
                                    ->helperText('Draft posts are not visible on the public blog'),

                                DateTimePicker::make('published_at')
                                    ->native(false)
                                    ->helperText('Publication timestamp; leave blank to publish immediately upon saving as Published'),
                            ]),
                    ]),
            ]);
    }
}

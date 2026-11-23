<?php

namespace App\Filament\Resources\BlogPosts;

use App\Filament\Resources\BlogPosts\Pages\CreateBlogPost;
use App\Filament\Resources\BlogPosts\Pages\EditBlogPost;
use App\Filament\Resources\BlogPosts\Pages\ListBlogPosts;
use App\Filament\Resources\BlogPosts\Pages\ViewBlogPost;
use App\Filament\Resources\BlogPosts\Schemas\BlogPostForm;
use App\Filament\Resources\BlogPosts\Schemas\BlogPostInfolist;
use App\Filament\Resources\BlogPosts\Tables\BlogPostsTable;
use App\Models\BlogPost;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Override;
use UnitEnum;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    protected static ?string $recordTitleAttribute = 'title';

    #[Override]
    public static function getNavigationGroup(): string|UnitEnum|null
    {
        return __('filament.navigation.groups.content');
    }

    #[Override]
    public static function getNavigationLabel(): string|Htmlable
    {
        return __('filament.resources.blog_posts.navigation_label');
    }

    #[Override]
    public static function getModelLabel(): string
    {
        return __('filament.resources.blog_posts.model_label');
    }

    #[Override]
    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.blog_posts.plural_model_label');
    }

    // protected static string | UnitEnum | null $navigationGroup = 'Content';

    // protected static ?string $navigationLabel = 'Blog';

    // protected static ?string $modelLabel = 'Blog Post';

    // protected static ?string $pluralModelLabel = 'Blog Posts';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return BlogPostForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BlogPostInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BlogPostsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBlogPosts::route('/'),
            'create' => CreateBlogPost::route('/create'),
            'view' => ViewBlogPost::route('/{record}'),
            'edit' => EditBlogPost::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\JobPosts;

use App\Filament\Resources\JobPosts\Pages\CreateJobPost;
use App\Filament\Resources\JobPosts\Pages\EditJobPost;
use App\Filament\Resources\JobPosts\Pages\ListJobPosts;
use App\Filament\Resources\JobPosts\Pages\ViewJobPost;
use App\Filament\Resources\JobPosts\Schemas\JobPostForm;
use App\Filament\Resources\JobPosts\Schemas\JobPostInfolist;
use App\Filament\Resources\JobPosts\Tables\JobPostsTable;
use App\Models\JobPost;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class JobPostResource extends Resource
{
    protected static ?string $model = JobPost::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBriefcase;

    protected static ?string $recordTitleAttribute = 'title';

    protected static string | UnitEnum | null $navigationGroup = 'Recruitment';

    protected static ?string $navigationLabel = 'Job Openings';

    protected static ?string $modelLabel = 'Job Opening';

    protected static ?string $pluralModelLabel = 'Job Openings';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return JobPostForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return JobPostInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JobPostsTable::configure($table);
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
            'index' => ListJobPosts::route('/'),
            'create' => CreateJobPost::route('/create'),
            'view' => ViewJobPost::route('/{record}'),
            'edit' => EditJobPost::route('/{record}/edit'),
        ];
    }
}

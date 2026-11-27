<?php

namespace App\Filament\Resources\JobPosts\Schemas;

use App\Enums\EmploymentType;
use App\Enums\JobPostStatus;
use Eii\FilamentLucideIcons\Enums\LucideIcon;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class JobPostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make()
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make(__('filament.tabs.details'))
                            ->icon(LucideIcon::Tag)
                            ->columns(2)
                            ->schema([
                                TextInput::make('title')
                                    ->label(__('filament.fields.title'))
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull()
                                    ->helperText(__('filament.helpers.job_posts.title')),

                                TextInput::make('slug')
                                    ->label(__('filament.fields.slug'))
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255)
                                    ->columnSpanFull()
                                    ->helperText(__('filament.helpers.job_posts.slug')),

                                TextInput::make('department')
                                    ->label(__('filament.fields.department'))
                                    ->maxLength(255)
                                    ->helperText(__('filament.helpers.job_posts.department')),

                                Select::make('employment_type')
                                    ->label(__('filament.fields.employment_type'))
                                    ->options(EmploymentType::class)
                                    ->helperText(__('filament.helpers.job_posts.employment_type')),

                                TextInput::make('location')
                                    ->label(__('filament.fields.location'))
                                    ->maxLength(255)
                                    ->helperText(__('filament.helpers.job_posts.location')),

                                TextInput::make('salary_range')
                                    ->label(__('filament.fields.salary_range'))
                                    ->maxLength(255)
                                    ->helperText(__('filament.helpers.job_posts.salary_range')),
                            ]),

                        Tab::make(__('filament.sections.role'))
                            ->icon(LucideIcon::BriefcaseBusiness)
                            ->schema([
                                RichEditor::make('description')
                                    ->label(__('filament.fields.description'))
                                    ->columnSpanFull()
                                    ->helperText(__('filament.helpers.job_posts.description')),

                                TagsInput::make('requirements')
                                    ->label(__('filament.fields.requirements'))
                                    ->columnSpanFull()
                                    ->placeholder(__('filament.fields.requirements_placeholder'))
                                    ->helperText(__('filament.helpers.job_posts.requirements')),
                            ]),

                        Tab::make(__('filament.sections.application'))
                            ->icon(LucideIcon::ClipboardList)
                            ->schema([
                                TextInput::make('application_url')
                                    ->label(__('filament.fields.application_url'))
                                    ->url()
                                    ->maxLength(255)
                                    ->columnSpanFull()
                                    ->helperText(__('filament.helpers.job_posts.application_url')),

                                DateTimePicker::make('application_closes_at')
                                    ->label(__('filament.fields.application_closes_at'))
                                    ->native(false)
                                    ->helperText(__('filament.helpers.job_posts.application_closes_at')),
                            ]),

                        Tab::make(__('filament.sections.publishing'))
                            ->icon(LucideIcon::Upload)
                            ->schema([
                                Select::make('status')
                                    ->label(__('filament.fields.status'))
                                    ->options(JobPostStatus::class)
                                    ->default(JobPostStatus::Draft)
                                    ->required()
                                    ->helperText(__('filament.helpers.job_posts.status')),

                                DateTimePicker::make('published_at')
                                    ->label(__('filament.fields.published_at'))
                                    ->native(false)
                                    ->helperText(__('filament.helpers.job_posts.published_at')),
                            ]),
                    ]),
            ]);
    }
}

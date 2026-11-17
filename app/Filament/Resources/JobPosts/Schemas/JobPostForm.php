<?php

namespace App\Filament\Resources\JobPosts\Schemas;

use App\Enums\EmploymentType;
use App\Enums\JobPostStatus;
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
                        Tab::make('Details')
                            ->icon('heroicon-o-tag')
                            ->columns(2)
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull()
                                    ->helperText('The job title as it will appear publicly, e.g. Senior Software Engineer'),

                                TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255)
                                    ->columnSpanFull()
                                    ->helperText('URL-friendly identifier for the careers page (auto-generated if empty)'),

                                TextInput::make('department')
                                    ->maxLength(255)
                                    ->helperText('Organizational department or team, e.g. Engineering, Sales, Marketing'),

                                Select::make('employment_type')
                                    ->options(EmploymentType::class)
                                    ->helperText('Contract and employment arrangement'),

                                TextInput::make('location')
                                    ->maxLength(255)
                                    ->helperText('Workplace location or arrangement, e.g. Tokyo HQ / Hybrid / Remote'),

                                TextInput::make('salary_range')
                                    ->maxLength(255)
                                    ->helperText('Estimated salary or compensation range, e.g. ¥6,000,000 - ¥9,000,000'),
                            ]),

                        Tab::make('Role')
                            ->icon('heroicon-o-briefcase')
                            ->schema([
                                RichEditor::make('description')
                                    ->label('Job description')
                                    ->columnSpanFull()
                                    ->helperText('In-depth description of responsibilities, day-to-day work, and team culture'),

                                TagsInput::make('requirements')
                                    ->columnSpanFull()
                                    ->placeholder('Add a requirement and press Enter')
                                    ->helperText('Key qualifications, skills, and prerequisites (one per tag)'),
                            ]),

                        Tab::make('Application')
                            ->icon('heroicon-o-clipboard-document-list')
                            ->schema([
                                TextInput::make('application_url')
                                    ->url()
                                    ->maxLength(255)
                                    ->columnSpanFull()
                                    ->helperText('External application URL or dedicated ATS portal link'),

                                DateTimePicker::make('application_closes_at')
                                    ->native(false)
                                    ->helperText('Optional deadline after which applications will no longer be accepted'),
                            ]),

                        Tab::make('Publishing')
                            ->icon('heroicon-o-arrow-up-tray')
                            ->schema([
                                Select::make('status')
                                    ->options(JobPostStatus::class)
                                    ->default(JobPostStatus::Draft)
                                    ->required()
                                    ->helperText('Draft jobs are hidden from the careers page; Closed positions cannot receive applications'),

                                DateTimePicker::make('published_at')
                                    ->native(false)
                                    ->helperText('Publication date and time; leave empty to publish immediately upon saving as Published'),
                            ]),
                    ]),
            ]);
    }
}

<?php

namespace App\Models;

use App\Enums\EmploymentType;
use App\Enums\JobPostStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class JobPost extends Model
{
    protected $table = 'job_posts';

    protected $fillable = [
        'title',
        'slug',
        'department',
        'employment_type',
        'location',
        'salary_range',
        'description',
        'requirements',
        'application_url',
        'application_closes_at',
        'status',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'requirements' => 'array',
            'employment_type' => EmploymentType::class,
            'application_closes_at' => 'datetime',
            'published_at' => 'datetime',
            'status' => JobPostStatus::class,
        ];
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published')->whereNotNull('published_at')->where('published_at', '<=', now());
    }
}

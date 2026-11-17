<?php

namespace Database\Seeders;

use App\Enums\EmploymentType;
use App\Enums\JobPostStatus;
use App\Models\JobPost;
use Illuminate\Database\Seeder;

class JobPostSeeder extends Seeder
{
    public function run(): void
    {
        JobPost::updateOrCreate(
            ['slug' => 'senior-laravel-developer'],
            [
                'title' => 'Senior Laravel Developer',
                'department' => 'Engineering',
                'employment_type' => EmploymentType::FullTime,
                'location' => 'Remote',
                'salary_range' => '$120,000 – $160,000',
                'description' => 'We are looking for a senior Laravel developer to lead backend development of our SaaS platform. You will work closely with product and design to ship features that delight our customers.',
                'requirements' => [
                    '5+ years of PHP and Laravel experience',
                    'Strong understanding of RESTful API design',
                    'Experience with queue systems (Redis, SQS)',
                    'Familiarity with testing (Pest, PHPUnit)',
                ],
                'application_url' => 'https://example.com/apply/senior-laravel',
                'application_closes_at' => now()->addDays(30),
                'status' => JobPostStatus::Published,
                'published_at' => now()->subDays(3),
            ],
        );

        JobPost::updateOrCreate(
            ['slug' => 'frontend-engineer-react'],
            [
                'title' => 'Frontend Engineer (React)',
                'department' => 'Engineering',
                'employment_type' => EmploymentType::FullTime,
                'location' => 'Austin, TX',
                'salary_range' => '$100,000 – $140,000',
                'description' => 'Join our frontend team to build beautiful, accessible interfaces using React and TypeScript. You will collaborate with designers and backend engineers to deliver seamless user experiences.',
                'requirements' => [
                    '3+ years of React and TypeScript experience',
                    'Experience with modern CSS (Tailwind, CSS Modules)',
                    'Understanding of accessibility standards (WCAG)',
                    'Bonus: experience with Filament or Livewire',
                ],
                'application_url' => 'https://example.com/apply/frontend-engineer',
                'application_closes_at' => now()->addDays(21),
                'status' => JobPostStatus::Published,
                'published_at' => now()->subDays(5),
            ],
        );

        JobPost::updateOrCreate(
            ['slug' => 'marketing-intern'],
            [
                'title' => 'Marketing Intern',
                'department' => 'Marketing',
                'employment_type' => EmploymentType::Internship,
                'location' => 'New York, NY',
                'salary_range' => '$20/hour',
                'description' => 'We are looking for a marketing intern to support our content and social media efforts. This is a great opportunity to gain hands-on experience in a fast-paced startup environment.',
                'requirements' => [
                    'Currently pursuing a degree in Marketing or Communications',
                    'Strong writing and communication skills',
                    'Familiarity with social media platforms',
                    'Eagerness to learn and take initiative',
                ],
                'application_url' => 'https://example.com/apply/marketing-intern',
                'application_closes_at' => now()->addDays(14),
                'status' => JobPostStatus::Published,
                'published_at' => now()->subDays(1),
            ],
        );

        JobPost::updateOrCreate(
            ['slug' => 'devops-engineer-contract'],
            [
                'title' => 'DevOps Engineer (Contract)',
                'department' => 'Infrastructure',
                'employment_type' => EmploymentType::Contract,
                'location' => 'Remote',
                'salary_range' => '$80 – $110/hour',
                'description' => 'We need an experienced DevOps engineer for a 6-month contract to help us migrate our infrastructure to Kubernetes and improve our CI/CD pipelines.',
                'requirements' => [
                    '5+ years of DevOps or SRE experience',
                    'Strong Kubernetes and Docker expertise',
                    'Experience with AWS or GCP',
                    'CI/CD pipeline design (GitHub Actions, GitLab CI)',
                ],
                'application_url' => 'https://example.com/apply/devops-contract',
                'application_closes_at' => now()->addDays(10),
                'status' => JobPostStatus::Published,
                'published_at' => now()->subDays(2),
            ],
        );
    }
}

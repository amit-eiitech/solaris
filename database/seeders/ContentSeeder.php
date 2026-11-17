<?php

namespace Database\Seeders;

use App\Enums\ContentStatus;
use App\Models\BlogPost;
use App\Models\Category;
use App\Models\Event;
use App\Models\News;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        // --- Categories ---
        $newsCategory = Category::updateOrCreate(
            ['slug' => 'company-news', 'scope' => 'news'],
            ['name' => 'Company News', 'description' => 'Latest updates from our company'],
        );

        $industryCategory = Category::updateOrCreate(
            ['slug' => 'industry', 'scope' => 'news'],
            ['name' => 'Industry', 'description' => 'Industry trends and insights'],
        );

        $techCategory = Category::updateOrCreate(
            ['slug' => 'technology', 'scope' => 'blog'],
            ['name' => 'Technology', 'description' => 'Tech tips and tutorials'],
        );

        $communityCategory = Category::updateOrCreate(
            ['slug' => 'community', 'scope' => 'blog'],
            ['name' => 'Community', 'description' => 'Community events and stories'],
        );

        $conferenceCategory = Category::updateOrCreate(
            ['slug' => 'conferences', 'scope' => 'event'],
            ['name' => 'Conferences', 'description' => 'Industry conferences and summits'],
        );

        $workshopCategory = Category::updateOrCreate(
            ['slug' => 'workshops', 'scope' => 'event'],
            ['name' => 'Workshops', 'description' => 'Hands-on workshops and training'],
        );

        // --- News ---
        $news1 = News::updateOrCreate(
            ['slug' => 'acme-corp-launches-new-platform'],
            [
                'title' => 'Acme Corp Launches New Platform',
                'excerpt' => 'We are thrilled to announce the launch of our brand-new platform designed to streamline workflows.',
                'content' => '<p>We are thrilled to announce the launch of our brand-new platform designed to streamline workflows and boost productivity across teams of all sizes.</p><p>The platform includes real-time collaboration, advanced analytics, and seamless integrations with your favorite tools.</p>',
                'status' => ContentStatus::Published,
                'published_at' => now()->subDays(5),
            ],
        );
        $news1->categories()->sync([$newsCategory->id]);

        $news2 = News::updateOrCreate(
            ['slug' => 'q3-earnings-report-highlights'],
            [
                'title' => 'Q3 Earnings Report Highlights',
                'excerpt' => 'Our Q3 results exceeded expectations with a 24% increase in revenue year-over-year.',
                'content' => '<p>Our Q3 results exceeded expectations with a 24% increase in revenue year-over-year. Key highlights include expanded market share in Asia-Pacific and a growing subscriber base.</p>',
                'status' => ContentStatus::Published,
                'published_at' => now()->subDays(12),
            ],
        );
        $news2->categories()->sync([$industryCategory->id]);

        $news3 = News::updateOrCreate(
            ['slug' => 'partnership-with-green-tech-initiative'],
            [
                'title' => 'Partnership with Green Tech Initiative',
                'excerpt' => 'We have partnered with the Green Tech Initiative to reduce our carbon footprint by 40% by 2027.',
                'content' => '<p>We have partnered with the Green Tech Initiative to reduce our carbon footprint by 40% by 2027. This includes migrating our data centers to renewable energy sources.</p>',
                'status' => ContentStatus::Published,
                'published_at' => now()->subDays(20),
            ],
        );
        $news3->categories()->sync([$newsCategory->id, $industryCategory->id]);

        $news4 = News::updateOrCreate(
            ['slug' => 'new-office-opening-in-berlin'],
            [
                'title' => 'New Office Opening in Berlin',
                'excerpt' => 'We are expanding our European presence with a new office in Berlin, opening next month.',
                'content' => '<p>We are expanding our European presence with a new office in Berlin, opening next month. The office will house our engineering and sales teams.</p>',
                'status' => ContentStatus::Draft,
                'published_at' => null,
            ],
        );
        $news4->categories()->sync([$newsCategory->id]);

        // --- Events ---
        $event1 = Event::updateOrCreate(
            ['slug' => 'annual-tech-summit-2025'],
            [
                'title' => 'Annual Tech Summit 2025',
                'excerpt' => 'Join us for our flagship technology conference featuring keynotes, panels, and networking.',
                'content' => '<p>Join us for our flagship technology conference featuring keynotes from industry leaders, hands-on panels, and unparalleled networking opportunities.</p><p>Early-bird registration is now open.</p>',
                'location' => 'San Francisco Convention Center, CA',
                'registration_url' => 'https://example.com/register/tech-summit',
                'starts_at' => now()->addDays(30),
                'ends_at' => now()->addDays(32),
                'status' => ContentStatus::Published,
                'published_at' => now()->subDays(10),
            ],
        );
        $event1->categories()->sync([$conferenceCategory->id]);

        $event2 = Event::updateOrCreate(
            ['slug' => 'laravel-workshop-series'],
            [
                'title' => 'Laravel Workshop Series',
                'excerpt' => 'A 3-day intensive workshop covering advanced Laravel patterns, testing, and deployment.',
                'content' => '<p>A 3-day intensive workshop covering advanced Laravel patterns, testing strategies, and deployment best practices. Suitable for intermediate to senior developers.</p>',
                'location' => 'Online (Zoom)',
                'registration_url' => 'https://example.com/register/laravel-workshop',
                'starts_at' => now()->addDays(14),
                'ends_at' => now()->addDays(16),
                'status' => ContentStatus::Published,
                'published_at' => now()->subDays(7),
            ],
        );
        $event2->categories()->sync([$workshopCategory->id]);

        $event3 = Event::updateOrCreate(
            ['slug' => 'community-meetup-monthly'],
            [
                'title' => 'Community Meetup — Monthly',
                'excerpt' => 'Our monthly community meetup with lightning talks and open discussions.',
                'content' => '<p>Our monthly community meetup with lightning talks and open discussions. Everyone is welcome — bring your questions and ideas!</p>',
                'location' => 'WeWork Downtown, Austin TX',
                'starts_at' => now()->addDays(7),
                'ends_at' => now()->addDays(7)->addHours(2),
                'status' => ContentStatus::Published,
                'published_at' => now()->subDays(3),
            ],
        );
        $event3->categories()->sync([$communityCategory->id]);

        // --- Blog Posts ---
        $blog1 = BlogPost::updateOrCreate(
            ['slug' => 'getting-started-with-our-api'],
            [
                'title' => 'Getting Started with Our API',
                'excerpt' => 'A quick guide to integrating with our REST API, including authentication and common endpoints.',
                'content' => '<p>A quick guide to integrating with our REST API. We cover authentication via API keys, common endpoints, rate limiting, and error handling.</p><p>By the end of this post you will be able to make your first authenticated request in under 5 minutes.</p>',
                'author_name' => 'Jane Developer',
                'status' => ContentStatus::Published,
                'published_at' => now()->subDays(2),
            ],
        );
        $blog1->categories()->sync([$techCategory->id]);

        $blog2 = BlogPost::updateOrCreate(
            ['slug' => '5-tips-for-remote-team-productivity'],
            [
                'title' => '5 Tips for Remote Team Productivity',
                'excerpt' => 'Practical strategies we use internally to keep our distributed team aligned and productive.',
                'content' => '<p>Practical strategies we use internally to keep our distributed team aligned and productive. From async standups to shared dashboards, these tips have made a real difference for us.</p>',
                'author_name' => 'Alex Manager',
                'status' => ContentStatus::Published,
                'published_at' => now()->subDays(9),
            ],
        );
        $blog2->categories()->sync([$communityCategory->id]);

        $blog3 = BlogPost::updateOrCreate(
            ['slug' => 'why-we-migrated-to-laravel-12'],
            [
                'title' => 'Why We Migrated to Laravel 12',
                'excerpt' => 'Our journey migrating a large application to Laravel 12 — the wins, the gotchas, and the lessons learned.',
                'content' => '<p>Our journey migrating a large application to Laravel 12. We share the wins, the gotchas, and the lessons learned along the way.</p><p>Spoiler: the new caching improvements alone were worth the upgrade.</p>',
                'author_name' => 'Jane Developer',
                'status' => ContentStatus::Published,
                'published_at' => now()->subDays(18),
            ],
        );
        $blog3->categories()->sync([$techCategory->id]);

        $blog4 = BlogPost::updateOrCreate(
            ['slug' => 'upcoming-features-roadmap-2025'],
            [
                'title' => 'Upcoming Features — Roadmap 2025',
                'excerpt' => 'A sneak peek at what we have planned for the rest of the year, including AI-powered search.',
                'content' => '<p>A sneak peek at what we have planned for the rest of the year. Highlights include AI-powered search, a redesigned dashboard, and expanded webhook support.</p>',
                'author_name' => 'Alex Manager',
                'status' => ContentStatus::Draft,
                'published_at' => null,
            ],
        );
        $blog4->categories()->sync([$techCategory->id, $communityCategory->id]);
    }
}

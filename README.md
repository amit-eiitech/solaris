# Solaris
![Solaris - A business website starter kit for Laravel and Filament](docs/images/solaris.png)

Solaris is a Laravel starter kit for the content-management backend of a business website. It gives you a Filament admin panel, data models, and database migrations for common business content so you can focus on building the public website around it.

## What’s included

- **News** — articles with excerpts, publishing status, dates, and categories.
- **Events** — event details, location, dates, registration links, and categories.
- **Blog posts** — article content, author, featured image, publishing status, and categories.
- **Recruitment** — job listings with department, employment type, location, salary, requirements, and application details.
- **FAQs** — questions and answers with categories, publishing visibility, and display order.
- **Categories** — reusable content categories for news, events, and blog posts.
- **Filament admin panel** — manage content at `/admin`.
- **Sample data** — optional seeders for previewing the admin resources.

> **Scope:** Solaris provides the content-management backend, not a finished public-facing website. The root route currently displays Laravel’s welcome page; public pages, APIs, and frontend designs still need to be built and connected to the content models.

## Requirements

- PHP 8.3 or later
- Composer
- Node.js and npm
- SQLite by default, or another database supported by Laravel

## Getting started

After cloning the repository, run these commands from the project directory:

```sh
# Create the SQLite database file if it does not exist.
php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"

# Install PHP and frontend dependencies, prepare .env, generate the app key,
# run migrations, and build frontend assets.
composer run setup

# Start the local application and development processes.
composer run dev
```

Open the application at `http://localhost:8000` and visit `/admin` to sign in. The default database connection is SQLite. To use another database, update the `DB_*` values in `.env` before running setup.

### Optional sample content

Populate the database with example news, events, blog posts, FAQs, job posts, categories, and a local administrator:

```sh
php artisan db:seed
```

The local demo account created by the seeder is:

- **Email:** `admin@eii.com`
- **Password:** `solaris`

These are development credentials only. Change or remove them before deploying, and do not seed this account into a production database.

## Development

Run the automated test suite with:

```sh
php artisan test
```

Useful commands:

```sh
php artisan migrate       # Apply database migrations
php artisan db:seed       # Add or refresh example content
php artisan route:list    # Inspect registered routes
npm run build             # Build frontend assets
```

## Project layout

```text
app/
  Enums/                   Content and workflow statuses
  Filament/Resources/      Admin resources and their forms, tables, and views
  Models/                  Eloquent models for managed content
database/
  migrations/              Content and application schema
  seeders/                 Optional administrator and example content
resources/                 Frontend assets and Blade views
routes/                    Application routes
```

The admin panel discovers resources under `app/Filament/Resources`. Add public routes, controllers, views, or API endpoints as needed for your website.

## Built with

- Laravel 13
- Filament 5
- PHP 8.3+
- Vite and Tailwind CSS

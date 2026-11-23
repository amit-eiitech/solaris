<?php

return [

    'switch_language' => 'Switch Language',

    'navigation' => [
        'groups' => [
            'content' => 'Content',
            'recruitment' => 'Recruitment',
            'administration' => 'Administration',
            'settings' => 'Settings',
        ],
    ],

    'resources' => [
        'categories' => [
            'navigation_label' => 'Categories',
            'model_label' => 'Category',
            'plural_model_label' => 'Categories',
            'section_title' => 'Category Information',
            'section_description' => 'Categorization taxonomies shared across content types',
        ],
        'blog_posts' => [
            'navigation_label' => 'Blog',
            'model_label' => 'Blog Post',
            'plural_model_label' => 'Blog Posts',
        ],
        'events' => [
            'navigation_label' => 'Events',
            'model_label' => 'Event',
            'plural_model_label' => 'Events',
        ],
        'faqs' => [
            'navigation_label' => 'FAQs',
            'model_label' => 'FAQ',
            'plural_model_label' => 'FAQs',
        ],
        'job_posts' => [
            'navigation_label' => 'Job Posts',
            'model_label' => 'Job Post',
            'plural_model_label' => 'Job Posts',
        ],
        'news' => [
            'navigation_label' => 'News',
            'model_label' => 'News',
            'plural_model_label' => 'News',
        ],
    ],

    'fields' => [
        'name' => 'Name',
        'name_helper' => 'Public category name, e.g. Corporate News, Product Launch, Company Events',
        'slug' => 'Slug',
        'slug_helper' => 'URL slug for this category archive page. Only lowercase letters, numbers, and hyphens are allowed.',
        'scope' => 'Scope',
        'scope_helper' => 'The content module this taxonomy applies to',
        'description' => 'Description',
        'description_helper' => 'Optional description displayed on the category archive page or in meta descriptions',
        'title' => 'Title',
        'status' => 'Status',
        'author_name' => 'Author Name',
        'created_at' => 'Created At',
        'updated_at' => 'Updated At',
    ],

    'scopes' => [
        'news' => 'News',
        'events' => 'Events',
        'blog' => 'Blog',
    ],

    'tabs' => [
        'details' => 'Details',
        'seo' => 'SEO',
        'media' => 'Media',
    ],

    'actions' => [
        'create' => 'Create',
        'edit' => 'Edit',
        'delete' => 'Delete',
    ],

];

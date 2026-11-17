<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        Faq::updateOrCreate(
            ['question' => 'How do I create an account?'],
            [
                'answer' => 'Click the "Sign Up" button on the homepage, fill in your details, and verify your email address. You will be ready to go in under a minute.',
                'category' => 'Getting Started',
                'sort_order' => 1,
                'is_published' => true,
            ],
        );

        Faq::updateOrCreate(
            ['question' => 'What payment methods do you accept?'],
            [
                'answer' => 'We accept all major credit cards (Visa, Mastercard, American Express), PayPal, and bank transfers for annual plans.',
                'category' => 'Billing',
                'sort_order' => 2,
                'is_published' => true,
            ],
        );

        Faq::updateOrCreate(
            ['question' => 'Can I cancel my subscription at any time?'],
            [
                'answer' => 'Yes, you can cancel your subscription at any time from your account settings. Your access will continue until the end of the current billing period.',
                'category' => 'Billing',
                'sort_order' => 3,
                'is_published' => true,
            ],
        );

        Faq::updateOrCreate(
            ['question' => 'Do you offer a free trial?'],
            [
                'answer' => 'Yes, we offer a 14-day free trial with full access to all features. No credit card required to start.',
                'category' => 'Getting Started',
                'sort_order' => 4,
                'is_published' => true,
            ],
        );
    }
}

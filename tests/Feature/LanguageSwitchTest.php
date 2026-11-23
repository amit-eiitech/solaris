<?php

namespace Tests\Feature;

use Tests\TestCase;

class LanguageSwitchTest extends TestCase
{
    public function test_panel_uses_the_locale_selected_from_the_switch_route(): void
    {
        $switchResponse = $this
            ->from('/admin/login')
            ->get('/locale/es');

        $switchResponse->assertRedirect('/admin/login');
        $switchResponse->assertSessionHas('locale', 'es');

        $panelResponse = $this->get('/admin/login');

        $panelResponse->assertOk();
        $this->assertSame('es', app()->getLocale());
    }
}

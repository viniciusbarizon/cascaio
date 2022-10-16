<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomepageTest extends DuskTestCase
{
    public function testHomepage(): void
    {
        $weHelpYou = __('Te ajudamos gratuitamente a organizar suas despesas');

        $this->browse(function (Browser $browser) use($weHelpYou) {
            $browser->visit('/')
                ->assertTitle('Cascaio: ' . $weHelpYou)
                ->assertVisible('@elephant')
                ->assertVisible('@cascaio')
                ->assertSee($weHelpYou)
                ->assertButtonEnabled('login')
                ->assertButtonEnabled('register')
                ->assertSee(__('Fale com a gente:'))
                ->assertSee(env('MAIL_FROM_ADDRESS'));
        });
    }
}

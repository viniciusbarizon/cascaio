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
                ->assertAttributeContains('@main', 'class', 'bg-lime-400')
                ->assertAttributeContains('@main', 'class', 'text-black')
                ->assertVisible('@elephant')
                ->assertVisible('@cascaio')
                ->assertSee($weHelpYou)
                ->assertButtonEnabled('@login')
                ->assertAttributeContains('@login', 'class', 'bg-white')
                ->assertAttributeContains('@login', 'class', 'hover:bg-black')
                ->assertAttributeContains('@login', 'class', 'hover:text-white')
                ->assertSee(__('Entrar'))
                ->assertButtonEnabled('@register')
                ->assertAttributeContains('@register', 'class', 'hover:bg-black')
                ->assertAttributeContains('@register', 'class', 'hover:text-white')
                ->assertSee(__('Registrar'))
                ->assertSee(__('Fale com a gente:'))
                ->assertSeeLink(env('MAIL_FROM_ADDRESS'))
                ->clickAndWaitForReload('@login')
                ->assertPathIs('/login');

            $browser->visit('/')
                ->clickAndWaitForReload('@register')
                ->assertPathIs('/register');
        });
    }
}

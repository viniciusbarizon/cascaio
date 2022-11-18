<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomepageTest extends DuskTestCase
{
    public function testHomepage(): void
    {
        $weHelpYou = __('Te ajudamos gratuitamente a organizar suas despesas.');

        $this->browse(function (Browser $browser) use ($weHelpYou) {
            $browser->visit('/')
                ->assertAttributeContains('@guest', 'class', 'bg-lime-400')
                ->assertTitle('Cascaio: '.$weHelpYou)
                ->assertAttributeContains('@main', 'class', 'text-black')
                ->with('@logo', function ($logo) {
                    $logo->assertVisible('@elephant')
                        ->assertVisible('@cascaio');
                })
                ->assertSee($weHelpYou)
                ->with('@login-and-register', function ($loginAndRegister) {
                    $loginAndRegister->assertButtonEnabled('@login')
                        ->assertAttributeContains('@login', 'class', 'bg-white')
                        ->assertAttributeContains('@login', 'class', 'font-semibold')
                        ->assertAttributeContains('@login', 'class', 'hover:bg-black')
                        ->assertAttributeContains('@login', 'class', 'hover:text-white')
                        ->assertSee(__('Entrar'))
                        ->assertButtonEnabled('@register')
                        ->assertAttributeContains('@register', 'class', 'bg-white')
                        ->assertAttributeContains('@register', 'class', 'font-semibold')
                        ->assertAttributeContains('@register', 'class', 'hover:bg-black')
                        ->assertAttributeContains('@register', 'class', 'hover:text-white')
                        ->assertSee(__('Registrar'));
                })
                ->with('@talk-to-us', function ($taskToUs) {
                    $taskToUs->assertSee(__('Fale com a gente:'))
                        ->assertAttributeContains('@talk-to-us-text', 'class', 'font-bold')
                        ->assertSeeLink(env('MAIL_FROM_ADDRESS'))
                        ->assertAttributeContains('@mail', 'class', 'hover:text-gray-600');
                })
                ->with('@login-and-register', function ($loginAndRegister) {
                    $loginAndRegister->clickAndWaitForReload('@login')
                        ->assertPathIs('/login');
                });

            $browser->visit('/')
                ->with('@login-and-register', function ($loginAndRegister) {
                    $loginAndRegister->clickAndWaitForReload('@register')
                        ->assertPathIs('/register');
                });
        });
    }
}

<?php

namespace Tests\Browser\Expense;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateTest extends DuskTestCase
{
    const INPUT_COUNTRY_NAME = 'country-id';
    const INPUT_CREATE_NAME = 'create-expense';

    public function testCreateExpense()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                ->visit('/dashboard')
                ->assertSee(_('Nova despesa'))
                ->assertInputPresent('category')
                ->assertInputPresent('description')
                ->assertInputPresent('made-at')
                ->assertInputPresent(self::INPUT_COUNTRY_NAME)
                ->assertSelectHasOptions(self::INPUT_COUNTRY_NAME, [1, 2])
                ->assertInputPresent('price')
                ->assertInputPresent(self::INPUT_CREATE_NAME)
                ->assertInputValue(self::INPUT_CREATE_NAME, _('Criar'));
        });
    }
}

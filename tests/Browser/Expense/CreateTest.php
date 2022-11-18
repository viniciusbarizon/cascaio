<?php

namespace Tests\Browser\Expense;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateTest extends DuskTestCase
{
    public function testCreateExpense()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                ->visit('/dashboard')
                ->assertSee(_('Nova despesa'))
                ->assertInputPresent('category')
                ->assertInputPresent('description')
                ->assertInputPresent('made-at')
                ->assertInputPresent('country-id')
                ->assertInputPresent('price')
                ->assertInputPresent('create-expense');
        });
    }
}

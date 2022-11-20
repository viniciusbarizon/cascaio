<?php

namespace Tests\Browser\Expense;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreationTest extends DuskTestCase
{
    const INPUT_COUNTRY_NAME = 'country-id';

    const INPUT_CREATE_NAME = 'create-expense';

    const INPUT_DESCRIPTION_NAME = 'description';

    const INPUT_MADE_AT_NAME = 'made-at';

    const INPUT_PRICE_NAME = 'price';

    public function testCreateExpense()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                ->visit('/dashboard')
                ->assertSee(_('Nova despesa'))

                ->assertInputPresent('category')

                ->assertInputPresent(self::INPUT_DESCRIPTION_NAME)
                ->assertAttribute('@'.self::INPUT_DESCRIPTION_NAME, 'type', 'text')

                ->assertInputPresent(self::INPUT_MADE_AT_NAME)
                ->assertAttribute('@'.self::INPUT_MADE_AT_NAME, 'type', 'date')

                ->assertInputPresent(self::INPUT_COUNTRY_NAME)
                ->assertSelectHasOptions(self::INPUT_COUNTRY_NAME, [1, 2])

                ->assertInputPresent(self::INPUT_PRICE_NAME)
                ->assertAttribute('@'.self::INPUT_PRICE_NAME, 'type', 'number')
                ->assertAttribute('@'.self::INPUT_PRICE_NAME, 'min', '0.01')
                ->assertAttribute('@'.self::INPUT_PRICE_NAME, 'step', '0.01')

                ->assertInputPresent(self::INPUT_CREATE_NAME)
                ->assertInputValue(self::INPUT_CREATE_NAME, _('Criar'));
        });
    }
}

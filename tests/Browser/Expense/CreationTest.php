<?php

namespace Tests\Browser\Expense;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreationTest extends DuskTestCase
{
    const INPUT_CATEGORY_NAME = 'category';

    const INPUT_COUNTRY_NAME = 'country_id';

    const INPUT_CREATE_NAME = 'create-expense';

    const INPUT_DESCRIPTION_NAME = 'description';

    const INPUT_MADE_AT_NAME = 'made_at';

    const INPUT_PRICE_NAME = 'price';

    public function testCreateExpense()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                ->visit('/dashboard')
                ->assertSee(_('Nova despesa'))

                ->assertInputPresent(self::INPUT_CATEGORY_NAME)
                ->assertAttribute('@'.self::INPUT_CATEGORY_NAME, 'wire:model', self::INPUT_CATEGORY_NAME)

                ->assertInputPresent(self::INPUT_DESCRIPTION_NAME)
                ->assertAttribute('@'.self::INPUT_DESCRIPTION_NAME, 'type', 'text')
                ->assertAttribute('@'.self::INPUT_DESCRIPTION_NAME, 'wire:model', self::INPUT_DESCRIPTION_NAME)

                ->assertInputPresent(self::INPUT_MADE_AT_NAME)
                ->assertAttribute('@'.self::INPUT_MADE_AT_NAME, 'type', 'date')
                ->assertAttribute('@'.self::INPUT_MADE_AT_NAME, 'wire:model', self::INPUT_MADE_AT_NAME)

                ->assertInputPresent(self::INPUT_COUNTRY_NAME)
                ->assertSelectHasOptions(self::INPUT_COUNTRY_NAME, [1, 2])
                ->assertAttribute('@'.self::INPUT_COUNTRY_NAME, 'wire:model', self::INPUT_COUNTRY_NAME)

                ->assertInputPresent(self::INPUT_PRICE_NAME)
                ->assertAttribute('@'.self::INPUT_PRICE_NAME, 'type', 'number')
                ->assertAttribute('@'.self::INPUT_PRICE_NAME, 'min', '0.01')
                ->assertAttribute('@'.self::INPUT_PRICE_NAME, 'step', '0.01')
                ->assertAttribute('@'.self::INPUT_PRICE_NAME, 'wire:model', self::INPUT_PRICE_NAME)

                ->assertInputPresent(self::INPUT_CREATE_NAME)
                ->assertInputValue(self::INPUT_CREATE_NAME, _('Criar'));
        });
    }
}

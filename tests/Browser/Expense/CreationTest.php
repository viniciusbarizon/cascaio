<?php

namespace Tests\Browser\Expense;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreationTest extends DuskTestCase
{
    const INPUT_CATEGORY_NAME = 'category';

    const INPUT_CATEGORY_DUSK = '@'.self::INPUT_CATEGORY_NAME;

    const INPUT_COUNTRY_NAME = 'country_id';

    const INPUT_COUNTRY_DUSK = '@'.self::INPUT_COUNTRY_NAME;

    const INPUT_CREATE_NAME = 'create-expense';

    const INPUT_DESCRIPTION_NAME = 'description';

    const INPUT_DESCRIPTION_DUSK = '@'.self::INPUT_DESCRIPTION_NAME;

    const INPUT_MADE_AT_NAME = 'made_at';

    const INPUT_MADE_AT_DUSK = '@'.self::INPUT_MADE_AT_NAME;

    const INPUT_PRICE_NAME = 'price';

    const INPUT_PRICE_DUSK = '@'.self::INPUT_PRICE_NAME;

    public function testCreateExpense()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                ->visit('/dashboard')
                ->assertSee(_('Nova despesa'))

                ->assertInputPresent(self::INPUT_CATEGORY_NAME)
                ->assertAttribute(self::INPUT_CATEGORY_DUSK, 'maxlength', 50)
                ->assertAttribute(self::INPUT_CATEGORY_DUSK, 'wire:model.lazy', self::INPUT_CATEGORY_NAME)

                ->assertInputPresent(self::INPUT_COUNTRY_NAME)
                ->assertSelectHasOptions(self::INPUT_COUNTRY_NAME, [1, 2])
                ->assertAttribute(self::INPUT_COUNTRY_DUSK, 'wire:model', self::INPUT_COUNTRY_NAME)

                ->assertInputPresent(self::INPUT_DESCRIPTION_NAME)
                ->assertAttribute(self::INPUT_DESCRIPTION_DUSK, 'maxlength', '255')
                ->assertAttribute(self::INPUT_DESCRIPTION_DUSK, 'type', 'text')
                ->assertAttribute(self::INPUT_DESCRIPTION_DUSK, 'wire:model.lazy', self::INPUT_DESCRIPTION_NAME)

                ->assertInputPresent(self::INPUT_MADE_AT_NAME)
                ->assertAttribute(self::INPUT_MADE_AT_DUSK, 'type', 'date')
                ->assertAttribute(self::INPUT_MADE_AT_DUSK, 'wire:model.lazy', self::INPUT_MADE_AT_NAME)

                ->assertInputPresent(self::INPUT_PRICE_NAME)
                ->assertAttribute(self::INPUT_PRICE_DUSK, 'type', 'number')
                ->assertAttribute(self::INPUT_PRICE_DUSK, 'min', '0.01')
                ->assertAttribute(self::INPUT_PRICE_DUSK, 'step', '0.01')
                ->assertAttribute(self::INPUT_PRICE_DUSK, 'wire:model.lazy', self::INPUT_PRICE_NAME)

                ->assertInputPresent(self::INPUT_CREATE_NAME)
                ->assertInputValue(self::INPUT_CREATE_NAME, _('Criar'));
        });
    }
}

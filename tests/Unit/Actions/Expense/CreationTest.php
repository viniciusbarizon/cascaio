<?php

use App\Actions\Expense\CreationAction;

use function Pest\Faker\faker;

it('can create an expense with a new category', function () {
    $category = faker()->word;

    $expenseId = (new CreationAction)->create(
        category: faker()->word,
        countryId: 1,
        description: faker()->word,
        madeAt: faker()->date,
        price: faker()->randomFloat(2)
    );
});

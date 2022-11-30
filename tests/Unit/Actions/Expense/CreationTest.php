<?php

use App\Actions\Expense\CreationAction;
use App\Models\Category;
use App\Models\Expense;
use App\Models\User;

use function Pest\Faker\faker;

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

it('can create an expense with a new category', function () {
    $category = faker()->word;

    $expenseId = (new CreationAction)->create(
        category: faker()->word,
        countryId: 1,
        description: faker()->word,
        madeAt: faker()->date,
        price: faker()->randomFloat(2)
    );

    expect(Expense::find($expenseId)
        ->where('user_id', auth()->user()->id)
        ->exists()
    )->toBe(true);

    expect(Category::where('name', $category)->exists())->toBe(true);
});

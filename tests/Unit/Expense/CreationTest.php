<?php

use function Pest\Faker\faker;
use function Pest\Livewire\livewire;

uses()->group('expense');

it('can be created', function () {
    livewire(Creation::class)
        ->set('category', faker()->word)
        ->set('description', faker()->word)
        ->set('made-at', faker()->date)
        ->set('country-id', 1)
        ->set('price', faker()->randomFloat(2))
        ->call('create');
});

it('can set initial category', function () {
    $category = faker()->word;

    livewire(Expense\Creation::class, ['initialCategory' => $category])
        ->actingAs(User::factory()->create())
        ->assertSet('category', $category);
});

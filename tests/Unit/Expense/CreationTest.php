<?php

use App\Models\User;

use function Pest\Faker\faker;
use function Pest\Livewire\livewire;

uses()->group('expense');

it('can be created', function () {
    $this->actingAs(User::factory()->create());

    livewire('expense.creation')
        ->set('category', faker()->word)
        ->set('country_id', 1)
        ->set('description', faker()->word)
        ->set('made_at', faker()->date)
        ->set('price', faker()->randomFloat(2))
        ->call('create');
});

it('can set initial category', function () {
    $category = faker()->word;

    $this->actingAs(User::factory()->create());

    livewire('expense.creation', ['initialCategory' => $category])
        ->assertSet('category', $category);
});

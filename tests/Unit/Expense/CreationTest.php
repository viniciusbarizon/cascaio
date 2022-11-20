<?php

use App\Models\User;

use function Pest\Faker\faker;
use function Pest\Livewire\livewire;

uses()->group('expense');

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

it('can be created')
    ->livewire('expense.creation')
    ->set('category', faker()->word)
    ->set('country_id', 1)
    ->set('description', faker()->word)
    ->set('made_at', faker()->date)
    ->set('price', faker()->randomFloat(2))
    ->call('create');

it('can set initial category', function () {
    $category = faker()->word;

    livewire('expense.creation', ['category' => $category])
        ->assertSet('category', $category);
});

it('can set initial country id', function () {
    $countryId = 1;

    livewire('expense.creation', ['country_id' => $countryId])
        ->assertSet('country_id', $countryId);
});

it('can set initial description', function () {
    $description = faker()->word;

    livewire('expense.creation', ['description' => $description])
        ->assertSet('description', $description);
});

it('can set initial made at', function () {
    $madeAt = faker()->date;

    livewire('expense.creation', ['made_at' => $madeAt])
        ->assertSet('made_at', $madeAt);
});

it('can set initial price', function () {
    $price = faker()->randomFloat(2);

    livewire('expense.creation', ['price' => $price])
        ->assertSet('price', $price);
});

it('returns error if category is missing')
    ->livewire('expense.creation')
    ->call('create')
    ->assertHasErrors(['category' => 'required']);

it('returns error if country is missing')
    ->livewire('expense.creation')
    ->call('create')
    ->assertHasErrors(['country_id' => 'required']);

it('returns error if made at is missing')
    ->livewire('expense.creation')
    ->call('create')
    ->assertHasErrors(['made_at' => 'required']);

it('returns error if price is missing')
    ->livewire('expense.creation')
    ->call('create')
    ->assertHasErrors(['price' => 'required']);

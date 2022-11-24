<?php

use App\Models\User;

use function Pest\Faker\faker;
use function Pest\Livewire\livewire;

uses()->group('expense');

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

it('can be created', function () {
    livewire('expense.creation')
        ->set('category', faker()->word)
        ->set('country_id', 1)
        ->set('description', faker()->word)
        ->set('made_at', faker()->date)
        ->set('price', faker()->randomFloat(2))
        ->call('create');

    //expect()
});

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

it('returns error if category has length more than 50')
    ->livewire('expense.creation', ['category' => faker()->paragraph])
    ->call('create')
    ->assertHasErrors(['category' => 'max']);

it('returns error if country is missing')
    ->livewire('expense.creation')
    ->call('create')
    ->assertHasErrors(['country_id' => 'required']);

it('returns error if country is less than 1')
    ->livewire('expense.creation', ['country_id' => 0])
    ->call('create')
    ->assertHasErrors(['country_id' => 'min']);

it('returns error if description has length more than 255')
    ->livewire('expense.creation', ['description' => faker()->text(400)])
    ->call('create')
    ->assertHasErrors(['description' => 'max']);

it('returns error if made at is missing')
    ->livewire('expense.creation')
    ->call('create')
    ->assertHasErrors(['made_at' => 'required']);

it('returns error if made at is not a date')
    ->livewire('expense.creation', ['made_at' => faker()->word])
    ->call('create')
    ->assertHasErrors(['made_at' => 'date']);

it('returns error if made at does not have the format Y-m-d')
    ->livewire('expense.creation', ['made_at' => faker()->unixTime])
    ->call('create')
    ->assertHasErrors(['made_at' => 'date_format']);

it('returns error if price is missing')
    ->livewire('expense.creation')
    ->call('create')
    ->assertHasErrors(['price' => 'required']);

it('returns error if price is less than 0.01')
    ->livewire('expense.creation', ['price' => 0])
    ->call('create')
    ->assertHasErrors(['price' => 'min']);

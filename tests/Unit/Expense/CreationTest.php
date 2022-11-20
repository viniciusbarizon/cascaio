<?php

use function Pest\Faker\faker;
use function Pest\Livewire\livewire;

it('can be created', function () {
    livewire(Creation::class)
        ->set('category', faker()->word)
        ->set('description', faker()->word)
        ->set('made-at', faker()->date)
        ->set('country-id', 1)
        ->set('price', faker()randomFloat(2))
        ->call('create');
})->group('expense');

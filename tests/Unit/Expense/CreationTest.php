<?php

use function Pest\Livewire\livewire;

it('can be created', function () {
    livewire(Creation::class)
        ->set('title', 'foo')
        ->call('create')
})->group('expense');

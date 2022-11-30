<?php

namespace App\Actions\Expense;

use App\Models\Category;
use App\Models\Expense;

final class CreationAction
{
    private string $category;
    private int $countryId;
    private string $description;
    private string $madeAt;
    private float $price;

    public function create(string $category, int $countryId, string $description, string $madeAt, float $price): int
    {
        $this->category = $category;
        $this->countryId = $countryId;
        $this->description = $description;
        $this->madeAt = $madeAt;
        $this->price = $price;

        return $this->createAndReturnTheId();
    }

    private function createAndReturnTheId(): int
    {
        return Expense::create([
            'category_id' => $this->getCategoryId(),
            'country_id' => $this->countryId,
            'description' => $this->description,
            'made_at' => $this->madeAt,
            'price' => $this->price,
            'user_id' => auth()->user()->id
        ])->id;
    }

    private function getCategoryId(): int
    {
        $category = Category::where([
            'name' => $this->category,
            'user_id' => auth()->user()->id,
        ]);

        if ($category->exists()) {
            return $category->first()->id;
        }

        return Category::create([
            'name' => $category,
            'user_id' => auth()->user()->id,
        ])->id;
    }
}

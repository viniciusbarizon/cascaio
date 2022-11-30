<?php

use App\Models\Category;
use App\Models\Expense;

final class CreationAction
{
    private string $category;
    private string $countryId;
    private string $description;
    private string $madeAt;
    private string $price;

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
            'price' => $this->price
        ])->id;
    }

    private function getCategoryId(): int
    {
        $category = Category::where('name', $this->category);

        if ($category->exists()) {
            return $category->first()->id;
        }

        return Category::create(['name' => $category])->id;
    }
}

<?php

namespace App\Repositories;

use App\Models\Food;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class FoodRepository implements RepositoryInterface
{
    public function getAllFoods(): Collection
    {
        return Food::all();
    }

    public function getAllFoodsPaginate(int $size): LengthAwarePaginator
    {
        return Food::query()->paginate($size);
    }

    public function getFoodById(int $id): Food
    {
        return Food::query()->find($id)->get();
    }
}

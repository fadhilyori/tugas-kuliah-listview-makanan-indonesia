<?php

namespace App\Repositories;

use App\Models\Province;
use Illuminate\Database\Eloquent\Collection;

class ProvinceRepository implements RepositoryInterface
{
    public function getAllProvinces(): Collection
    {
        return Province::all();
    }

    public function getProvinceById(int $id): Province
    {
        return Province::query()->find($id)->get();
    }
}

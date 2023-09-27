<?php

namespace App\Repositories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Collection;

class CountryRepository implements RepositoryInterface
{
    public function getAllCountries(): Collection
    {
        return Country::all();
    }

    public function getCountryById(int $id): Country
    {
        return Country::query()->find($id)->get();
    }
}

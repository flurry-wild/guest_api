<?php

namespace App\Services;

use App\Models\Country;
use App\Models\Guest;
use Illuminate\Database\Eloquent\Collection;

class GuestService
{
    /**
     * @param array $data
     * @return Guest
     */
    public function create(array $data): Guest
    {
        if (empty($data['country'])) {
            $data['country'] = $this->getCountryFromPhone($data['phone']);
        }

        return Guest::create($data);
    }

    /**
     * @return Collection
     */
    public function list(): Collection
    {
        return Guest::all();
    }

    /**
     * @param int $id
     * @return Guest
     */
    public function one(int $id): Guest
    {
        return Guest::findOrFail($id);
    }

    /**
     * @param int $id
     * @param array $data
     * @return Guest
     */
    public function update(int $id, array $data): Guest
    {
        $guest = $this->one($id);
        $guest->update($data);
        return $guest;
    }

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        Guest::destroy($id);
    }

    /**
     * Определить страну по номеру телефона.
     *
     * @param string $phone
     * @return string|null
     */
    private function getCountryFromPhone(string $phone): ?string
    {
        if (str_starts_with($phone, '+')) {
            $phone = substr($phone, 1);
        }

        $countryCode = substr($phone, 0, 1);
        $country = Country::where('code', $countryCode)->first();

        if (empty($country)) {
            $countryCode = substr($phone, 0, 2);
            $country = Country::where('code', $countryCode)->first();
        }

        return $country ? $country->name : null;
    }
}

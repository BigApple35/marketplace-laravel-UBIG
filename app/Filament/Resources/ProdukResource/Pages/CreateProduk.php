<?php

namespace App\Filament\Resources\ProdukResource\Pages;

use App\Filament\Resources\ProdukResource;
use App\Models\Toko;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateProduk extends CreateRecord
{
    protected static string $resource = ProdukResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Retrieve the shop associated with the user
        $shop = Toko::where('user_id', $user->id)->first();

        // Add the shop ID to the form data if a shop is found
        if ($shop) {
            $data['toko_id'] = $shop->id;
        }

        return $data;
    }
}

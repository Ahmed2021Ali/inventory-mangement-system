<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ColorStoreResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return[
            'id'=>$this->id,
            'color'=>$this->name,
            'quantity'=>$this->pivot->store_quantity,

        ];
    }
}

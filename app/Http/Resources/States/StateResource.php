<?php

namespace App\Http\Resources\States;

use Illuminate\Http\Resources\Json\JsonResource;

class StateResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request) : array
    {
        return [
            'id' => $this["id"],
            'name' => $this["nome"]
        ];
    }
}

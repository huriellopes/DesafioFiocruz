<?php

namespace App\Http\Resources\People;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PeopleResourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}

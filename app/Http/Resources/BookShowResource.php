<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'book_id' => $this->book_id,
            'book_title' => $this->book_title,
            'description' => $this->description,
            'release_date' => date("d/m/Y", strtotime($this->release_date)),
            'author' => $this->author,
            'price' => $this->price
        ];
    }
}

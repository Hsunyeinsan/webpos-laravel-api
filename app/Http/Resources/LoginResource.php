<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    
    protected string $token;

    public function __construct($resource, string $token)
    {
        parent::__construct($resource);
        $this->token = $token;
    }

/**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'name'         => $this->name,
            'year'         => $this->year,
            'phone'        => $this->phone,
            'email'        => $this->email,
            'township'     => $this->township,
            'state_division'=> $this->state_division,
            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
        ];

    }
}

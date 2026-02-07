<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;

class LoginResource extends JsonResource
{
    protected string $token;

    public function __construct($resource,string $token)
    {
        parent::__construct($resource);
        $this->token = $token;

        Log::info('token is', ['token' => $this->token]);
    }

    public function toArray(Request $request): array
    {
        return [
            "token" => $this->token,
            "user" => [
                "id" => $this->id,
                "name" => $this->name,
                "email" => $this->email,
                "created_at" => $this->created_at,
            ]
        ];
    }
}


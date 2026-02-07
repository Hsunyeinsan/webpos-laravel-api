<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;

class RegisterResource extends JsonResource
{
 
    protected string $token;

    public function __construct($resource,string $token)
    {
        parent::__construct($resource);
        $this->token=$token;

        Log::info('token is', ['token' => $this->token]);
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'token'=>$this->token,
            'user'=>[
                'id'=>$this->id,
                'name'=>$this->name,
                'email'=>$this->email,
                'created_at'=>$this->created_at
            ]
        ];
    }
}

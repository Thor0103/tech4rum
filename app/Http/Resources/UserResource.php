<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        // return [
        //     'id_user' => $this->id_user,
        //     'username' => $this->username,
        //     'password' => $this->password,
        //     'phone' => $this->phone,
        //     'email' => $this->email,
        //     'score' => $this->score,

        // ];
    }
}

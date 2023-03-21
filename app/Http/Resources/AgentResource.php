<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AgentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'birthday'=> $this->birthday,
            'email' => $this->email,
            'description' => substr( $this-> description, 0, 50) . '...',
            'gender' =>$this->gender,
            'address' =>$this->address,
            'status' =>$this->status,
            'phone_number' =>$this->phone_number,
            'twitter' =>$this->twitter,
            'facebook' =>$this->facebook,
            'linkedin' =>$this->linkedin,
            'instagram' =>$this->instagram,
            'created_at' => $this->created_at->toDateString()
        ];
    }
}

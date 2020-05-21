<?php

namespace App\Http\Resources;

use App\Models\User;
use App\Models\Status;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Status as StatusResource;

class Task extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return array(
            'task_id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => new StatusResource(Status::find($this->status_id)),
            'responsible' => new UserResource(User::find($this->user_id)),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        );
    }
}

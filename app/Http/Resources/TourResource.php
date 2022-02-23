<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TourResource extends JsonResource
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
            'title' => $this->title,
            'img' => $this->img,
            'content' => $this->content,
            'created_at' => $this->createdAtForHumans(),
            'comments' => CommentResource::collection($this->whenLoaded('comments')),
            'groups' => TourGroupResource::collection($this->whenLoaded('groups')),
            'statistic' => new StateResource($this->whenLoaded('state')),
        ];
    }
}

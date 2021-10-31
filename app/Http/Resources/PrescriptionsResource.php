<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class PrescriptionsResource extends JsonResource
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
            'identify'      => $this->uuid,
            'clinic'        => $this->clinic,
            'physician'     => $this->physician,
            'patient'       => $this->patient,
            'text'          => $this->text,
            'created_date'  => Carbon::parse($this->created_at)->format('Y-m-d \\a\\t H:i:s'),
        ];
    }
}

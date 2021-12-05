<?php

namespace App\Http\Resources;
use App\Models\User;
use App\Http\Controllers\ReportsController;
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
        // return parent::toArray($request);
        return [
            "id"=> $this->id,
              "name"=> $this->getNameAtrriute(),
            "nataional_number" =>$this->nataional_number,
            "phone_number" =>$this->phone_numbe,
            "email" =>$this->email,
            "img_url" =>$this->img_url,
            "Reports_By_User" =>  ReportsController::getReportsByUSer($this->id)
        ];
    }
}

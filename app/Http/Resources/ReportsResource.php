<?php

namespace App\Http\Resources;

use App\Http\Controllers\civillianUSerController;
use Illuminate\Http\Resources\Json\JsonResource;

class ReportsResource extends JsonResource
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
        'UserInfo'=> civillianUSerController::findUser($this->userID),
        "description"=>$this->description,
        "Report_type"=>$this->Report_type,
        "Report_Loction"=> $this->Report_Loction,
        "Report_Level"=> $this->Report_Level,
        "coordinates"=> $this->coordinates,
        "status" =>$this->status,
        "Data_Time" =>$this->Data_Time,
        "created_at"=> $this->reated_at,
        "updated_at"=> $this->updated_at
        ];
    }
}

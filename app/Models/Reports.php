<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Reports
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Reports newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reports newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reports query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $userID
 * @property string|null $description
 * @property string $Report_type
 * @property string $Report_Loction
 * @property string $Report_Level
 * @property string $coordinates
 * @property string $Data-Time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ReportsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Reports whereCoordinates($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reports whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reports whereDataTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reports whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reports whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reports whereReportLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reports whereReportLoction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reports whereReportType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reports whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reports whereUserID($value)
 * @property int $status
 * @property string $Data_Time
 * @method static \Illuminate\Database\Eloquent\Builder|Reports whereStatus($value)
 */
class Reports extends Model
{
    use HasFactory;
    protected $guarded=[];
}

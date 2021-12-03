<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
	class Reports extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int $nataional_number
 * @property int $phone_number
 * @property string $email
 * @property string $password
 * @property int $is_admin
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNataionalNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|User civillian()
 * @method static \Illuminate\Database\Eloquent\Builder|User admins()
 * @property-read \Illuminate\Database\Eloquent\Collection|User[] $userNumber
 * @property-read int|null $user_number_count
 * @property string $img_url
 * @method static \Illuminate\Database\Eloquent\Builder|User whereImgUrl($value)
 */
	class User extends \Eloquent {}
}


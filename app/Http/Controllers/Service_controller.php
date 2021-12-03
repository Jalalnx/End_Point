<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reports;
use Illuminate\Http\Request;

class Service_controller extends Controller
{
    //
    public function getDbDetiales(){

       $Total_reports = Reports::all();
       $Total_users = User::all();
       $Reports_collection= collect($Total_reports);

       $userCollection = collect( $Total_users);
       $Reports_collection= collect($Total_reports);

       $userAdmin = $userCollection->whereIn('is_admin',0);
       $User_Agents = $userCollection->whereIn('is_admin',1);



       $Report_Padding = $Reports_collection->whereIn( 'status',1);
       $Report_open =  $Reports_collection->whereIn( 'status',2);
       $Report_Resolved = $Reports_collection->whereIn( 'status',3);
       $Report_Close =  $Reports_collection->whereIn( 'status',4);
          return  response()->json(
              [
                  'message' => 'Detalis List',
                  'error' => false,
                  'data'=>[
                    'Total_reports' => $Total_reports->count(), //count( array($Total_reports)) ,
                    'All_users' => $Total_users ->count(),
                    'Admins' =>$userAdmin->count(), //count(array($userAdmin)) ,
                    'Agents' =>$User_Agents->count(),//count( array($User_Agents)) ,
                    'Report_Padding' => $Report_Padding->count(),//count(array($Report_Padding)) ,
                    'Report_open' =>$Report_open ->count(),//count( array($Report_open)) ,
                    'Report_Resolved' => $Report_Resolved->count(),//count(array($Report_Resolved)) ,
                    'Report_Close' => $Report_Close->count()//count(array($Report_Close))
                  ]

              ]
          );
      }
}

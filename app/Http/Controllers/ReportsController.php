<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReportsResource;
use App\Models\Reports;
use Illuminate\Http\Request;
use Response;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ReportsByCatogery(Request $request)
    {
        return ReportsResource::collection(Reports::whereIn('status',$request->only('status'))->get());
    }

    public function index()
    {
        return ReportsResource::collection(Reports::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reports = Reports::created($request->only('id','iduser'));
        return response($reports,201);
    }

    public static function getReportsByUser($id){
        // return Reports::whereUserID($id)->get();
        return Reports::where('userID',$id)->get();
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function show(Reports $reports)
    {
        return $reports;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reports $reports)
    {
        $reports ->update($request->only('id','iduser'));
        return response($reports,202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reports $reports)
    {
        $reports->delete();
        return response(null,204);
    }
}

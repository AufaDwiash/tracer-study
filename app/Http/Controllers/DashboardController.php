<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StatusAlumni;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presentase_status = User::selectRaw('id_status_alumni, COUNT(*) as jumlah, (COUNT(*) / (SELECT COUNT(*) FROM users WHERE role = "alumni")) * 100 as persentase')
        ->groupBy('id_status_alumni')
        ->get();

        $label_status =[];
        $data_status =[];

        foreach($presentase_status as $ps){
            if($ps->id_status_alumni != null){
                $status = StatusAlumni::find($ps->id_status_alumni);
                $label_status[] = $status->status;
                $data_status[] = number_format($ps->persentase);
            }
        }

        $data_status = array_map('floatval', $data_status);//konveri ke angka

        $total_alumni = User::where('role', 'alumni')->get();


        return view('dashboard.index' , compact('label_status','data_status', 'total_alumni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}

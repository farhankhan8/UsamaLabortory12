<?php

namespace App\Http\Controllers\User;
Use App\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('room_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $events  = Patient::all();

        return view('admin.patient.index', compact('events'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Controllers\Controller;

use App\Room;
use App\Artical;
use App\AvailableTest;
use App\TestPerformed;
use App\AvailableTestPatient;
use Session;

use App\Catagory;

use App\Services\EventService;
use App\Patient;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PatientController extends Controller
{
    public function index()
    {
         abort_if(Gate::denies('room_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $events  = Patient::all();
        // dd($events);

        return view('admin.patient.index', compact('events'));
    }
    public function create()
    {
        //  abort_if(Gate::denies('room_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         $rooms = Catagory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');


        return view('admin.patient.create',compact('rooms'));
    }
 


    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:120',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:11|numeric',
            ]);
        $room = Patient::create($request->all());

        return redirect()->route('patient-list');


    }
    public function edit($id)
    {
        $room = Patient::findOrFail($id);

        // abort_if(Gate::denies('room_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.patient.edit', compact('room'));
    }
    
    public function update($id, Request $request)
{
    $task = Patient::findOrFail($id);



    $input = $request->all();

    $task->fill($input)->save();

    Session::flash('flash_message', 'Task successfully added!');

    return redirect()->route('patient-list');
}

    public function show($id)
    {
        // $rooms = AvailableTest::with('patient')->get();
        // dd($rooms);

        //  $rooms = Patient::findOrFail($id);
         $rooms = Patient::findOrFail($id);
         $a = $rooms->available_tests->pluck('name','testFee');
        //  dd($a);


        return view('admin.patient.show', compact('rooms','a'));
    }

    public function destroy($id)
    {
        $task = Patient::findOrFail($id);
    
        $task->delete();
    
        Session::flash('flash_message', 'Task successfully deleted!');
    
        return redirect()->route('patient-list');
    }

    public function massDestroy(MassDestroyEventRequest $request)
    {
        Event::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}

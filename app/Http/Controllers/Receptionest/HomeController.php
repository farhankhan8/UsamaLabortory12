<?php

namespace App\Http\Controllers\Receptionest;

use App\Event;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAvailableTestRequest;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\SoreAvailableTestRequest;
use App\Http\Requests\UpdateAvailableTestRequest;
use App\Room;
use App\AvailableTest;
use App\Tag;
use App\Artical;
use App\TestPerformed;
use Session;

use App\Catagory;

use App\Services\EventService;
use App\Patient;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('room_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $events  = Patient::all();

        return view('receptionest.patient.index', compact('events'));
    }
    public function create()
    {
        // dd("Fadfa");
        // abort_if(Gate::denies('room_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         $rooms = Catagory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');


        return view('receptionest.patient.create',compact('rooms'));
    }
 


    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'name' => 'required|max:120',
        //     'email' => 'required|email|unique:users',
        //     'phone' => 'required|min:11|numeric',
        //     ]);
        $room = Patient::create($request->all());

        return redirect()->route('patient-list');


    }
    public function edit($id)
    {
        $room = Artical::findOrFail($id);

        // abort_if(Gate::denies('room_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.patient.edit', compact('room'));
    }
    
    public function update($id, Request $request)
{
    $task = Artical::findOrFail($id);



    $input = $request->all();

    $task->fill($input)->save();

    Session::flash('flash_message', 'Task successfully added!');

    return redirect()->route('patient-list');
}

    public function show($id)
    {
        $rooms = Artical::findOrFail($id);

        return view('admin.patient.show', compact('rooms'));
    }

    public function destroy($id)
    {
        $task = Artical::findOrFail($id);
    
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

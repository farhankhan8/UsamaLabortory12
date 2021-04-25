<?php

namespace App\Http\Controllers;
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


class ReceptionestController extends Controller
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
        $this->validate($request,[
            'name' => 'required|max:120',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:11|numeric',
            ]);
        $room = Patient::create($request->all());

        return redirect()->route('receptionest.home');


    }
    public function edit($id)
    {
        $room = Patient::findOrFail($id);

        // abort_if(Gate::denies('room_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('receptionest.patient.edit', compact('room'));
    }
    
    public function update($id, Request $request)
{
    $task = Patient::findOrFail($id);



    $input = $request->all();

    $task->fill($input)->save();

    Session::flash('flash_message', 'Task successfully added!');

    return redirect()->route('receptionest.home');
}

    public function show($id)
    {
        $rooms = Patient::findOrFail($id);
        $a = $rooms->availableTest->pluck('name','testFee');
        return view('receptionest.patient.show', compact('rooms','a'));
    }

    public function destroy($id)
    {
        $task = Patient::findOrFail($id);
    
        $task->delete();
    
        Session::flash('flash_message', 'Task successfully deleted!');
    
        return redirect()->route('receptionest.home');
    }

    public function massDestroy(MassDestroyEventRequest $request)
    {
        Event::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}



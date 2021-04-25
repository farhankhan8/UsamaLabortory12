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
use App\TestPerformed;
use App\Artical;
use App\Tag;
use Session;

use App\Catagory;

use App\Services\EventService;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CatagoryController extends Controller
{
    public function index()
    {
       
         abort_if(Gate::denies('room_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $availableTests   = Catagory::all();

        return view('admin.catagory.index', compact('availableTests'));
    }
    public function create()
    {
         abort_if(Gate::denies('room_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         $rooms = Catagory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');


        return view('admin.catagory.create',compact('rooms'));
    }
 


    public function store(Request $request)
    {
        $input = $request->all();
        // dd($input);

        Catagory::create($input);
        return redirect()->route('catagory-list');




    }
    public function edit($id)
    {
        $room = Catagory::findOrFail($id);

         abort_if(Gate::denies('room_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.catagory.edit', compact('room'));
    }
    
    public function update($id, Request $request)
{
    $task = Catagory::findOrFail($id);



    $input = $request->all();

    $task->fill($input)->save();

    Session::flash('flash_message', 'Task successfully added!');

    return redirect()->route('catagory-list');
}

    public function show($id)
    {
        $rooms = Catagory::findOrFail($id);

        return view('admin.catagory.show', compact('rooms'));
    }

    public function destroy($id)
    {
        $task = Catagory::findOrFail($id);
    
        $task->delete();
    
        Session::flash('flash_message', 'Task successfully deleted!');
    
        return redirect()->route('catagory-list');
    }

    public function massDestroy(MassDestroyEventRequest $request)
    {
        Event::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}

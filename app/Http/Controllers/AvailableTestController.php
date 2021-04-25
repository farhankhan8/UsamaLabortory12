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
use Session;

use App\Catagory;

use App\Services\EventService;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AvailableTestController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('room_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $availableTests = AvailableTest::all();

        return view('admin.availableTests.index', compact('availableTests'));
    }
    public function create()
    {
        // abort_if(Gate::denies('room_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         $rooms = Catagory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');


        return view('admin.availableTests.create',compact('rooms'));
    }
 


    public function store(SoreAvailableTestRequest $request)
    {
        $room = AvailableTest::create($request->all());

        return redirect()->route('available-tests');


    }
    public function edit($id)
    {
        $room = AvailableTest::findOrFail($id);

        // abort_if(Gate::denies('room_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.availableTests.edit', compact('room'));
    }
    
    public function update($id, Request $request)
{
    $task = AvailableTest::findOrFail($id);



    $input = $request->all();

    $task->fill($input)->save();

    Session::flash('flash_message', 'Task successfully added!');

    return redirect()->route('available-tests');
}

    public function show($id)
    {
        $rooms = AvailableTest::findOrFail($id);

        return view('admin.availableTests.show', compact('rooms'));
    }

    public function destroy($id)
    {
        $task = AvailableTest::findOrFail($id);
    
        $task->delete();
    
        Session::flash('flash_message', 'Task successfully deleted!');
    
        return redirect()->route('available-tests');
    }

    public function massDestroy(MassDestroyEventRequest $request)
    {
        Event::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}

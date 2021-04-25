@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
    Edit Performed Test
    </div>

    <div class="card-body">



    <form method="POST" action="{{ route("performed-test-update", [$event->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
             <div class="form-row">
    <div class="col-md-4 mb-3">
    <div class="form-group">
                <label class="required" for="room_id">Select Test Name</label>
                <select class="form-control select2 {{ $errors->has('room') ? 'is-invalid' : '' }}" name="room_id" id="room_id" required>
                    @foreach($rooms as $id => $room)
                        <option value="{{ $id }}" {{ ($event->room ? $event->room->id : old('room_id')) == $id ? 'selected' : '' }}>{{ $room }}</option>
                    @endforeach
                </select>
                @if($errors->has('room'))
                    <div class="invalid-feedback">
                        {{ $errors->first('room') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.room_helper') }}</span>
            </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>


    <div class="col-md-4 mb-3">
    <div class="form-group">
                <label class="required" for="user_id">Select Patient Name</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id" required>
                    @foreach($users as $id => $user)
                        <option value="{{ $id }}" {{ ($event->user ? $event->user->id : old('user_id')) == $id ? 'selected' : '' }}>{{ $user }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.user_helper') }}</span>
            </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>



    <div class="col-md-4 mb-3">
           <div class="form-group">
                <label class="required" for="state">Update Test Status</label>
                <select class="form-control select2 {{ $errors->has('statuses') ? 'is-invalid' : '' }}" name="state" id="state" required>
                        <option value="Progressing" >Progressing</option>
                        <option value="Varified" > Varified</option>
                        <option value="Not Recived">Not Recived</option>
                        <option value="Cancelled">Cancelled</option>

                </select>
                @if($errors->has('statuses'))
                    <div class="invalid-feedback">
                        {{ $errors->first('statuses') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.user_helper') }}</span>
            </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>




    


    <div class="col-md-4 mb-3">
        <div class="form-group">
                @if($errors->has('capacity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('capacity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.capacity_helper') }}</span>
            </div>
    </div>
  </div>






  <div class="form-row">
    <div class="col-md-4 mb-3">
       <div class="form-group">
                @if($errors->has('capacity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('capacity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.capacity_helper') }}</span>
            </div>
      <div class="invalid-feedback">
      </div>
    </div>




    <div class="col-md-4 mb-3">
     <div class="form-group">
                @if($errors->has('hourly_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hourly_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.hourly_rate_helper') }}</span>
            </div>
      <div class="invalid-feedback">
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer05"></label>
      <!-- <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required> -->
      <div class="invalid-feedback">
        <!-- Please provide a valid zip. -->
      </div>
    </div>
  </div>

  <div class="col-md-3 mb-3">

<button class="btn btn-primary" type="submit">Submit form</button>
</div>
</form>


















<!-- 




        <form method="POST" action="{{ route("performed-test-update", [$event->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="room_id">Select Test Name</label>
                <select class="form-control select2 {{ $errors->has('room') ? 'is-invalid' : '' }}" name="room_id" id="room_id" required>
                    @foreach($rooms as $id => $room)
                        <option value="{{ $id }}" {{ ($event->room ? $event->room->id : old('room_id')) == $id ? 'selected' : '' }}>{{ $room }}</option>
                    @endforeach
                </select>
                @if($errors->has('room'))
                    <div class="invalid-feedback">
                        {{ $errors->first('room') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.room_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="user_id">Select Patient Name</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id" required>
                    @foreach($users as $id => $user)
                        <option value="{{ $id }}" {{ ($event->user ? $event->user->id : old('user_id')) == $id ? 'selected' : '' }}>{{ $user }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.user_helper') }}</span>
            </div> -->
            <!-- <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.event.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $event->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="start_time">{{ trans('cruds.event.fields.start_time') }}</label>
                <input class="form-control datetime {{ $errors->has('start_time') ? 'is-invalid' : '' }}" type="text" name="start_time" id="start_time" value="{{ old('start_time', $event->start_time) }}" required>
                @if($errors->has('start_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.start_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="end_time">{{ trans('cruds.event.fields.end_time') }}</label>
                <input class="form-control datetime {{ $errors->has('end_time') ? 'is-invalid' : '' }}" type="text" name="end_time" id="end_time" value="{{ old('end_time', $event->end_time) }}" required>
                @if($errors->has('end_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.end_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.event.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $event->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.description_helper') }}</span>
            </div> -->
            <!-- <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div> -->



@endsection
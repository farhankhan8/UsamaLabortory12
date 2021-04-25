@extends('layouts.receptionest')
@section('content')

<div class="card">
    <div class="card-header">
    Create New Test
        <!-- {{ trans('global.create') }} {{ trans('cruds.room.title_singular') }} -->
    </div>

    <div class="card-body">


    <form method="POST" action="{{ route("receptionest-patient-store") }}" enctype="multipart/form-data">
            @csrf 
            <div class="form-row">
    <div class="col-md-4 mb-3">
    <div class="form-group">
                <label class="required" for="name">Enter Patient Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>

                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
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
                <label class="required" for="email">Email</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', '') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.name_helper') }}</span>
            </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
    <div class="form-group">
                <label class="required" for="phone">Phone</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="number" name="phone" id="phone" value="{{ old('phone', '') }}" step="1"required>
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.capacity_helper') }}</span>
            </div>
    </div>
  </div>
  
  <div class="form-row">


  <div class="col-md-4 mb-3">
    <div class="form-group">
                <label class="required" for="start_time">Resgistration Date</label>
                <input class="form-control datetime {{ $errors->has('start_time') ? 'is-invalid' : '' }}" type="text" name="start_time" id="start_time" value="{{ old('start_time') }}" required>
                @if($errors->has('start_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.capacity_helper') }}</span>
            </div>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>





    <div class="col-md-4 mb-3">
    <div class="form-group">
                <label class="required" for="dob">Birthday</label>
                <input class="form-control {{ $errors->has('dob') ? 'is-invalid' : '' }}" type="date" name="dob" id="dob" value="{{ old('dob', '') }}"required>
                @if($errors->has('dob'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dob') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.capacity_helper') }}</span>
            </div>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>

    <div class="col-md-4 mb-3">
    <div class="form-group">
                <label class="required" for="catagory">Patient Catagory</label>
                <input class="form-control  {{ $errors->has('catagory') ? 'is-invalid' : '' }}" type="text" name="catagory" id="catagory" value="{{ old('catagory') }}" required>
                @if($errors->has('catagory'))
                    <div class="invalid-feedback">
                        {{ $errors->first('catagory') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.capacity_helper') }}</span>
            </div>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="form-group">
                                    <label for="gend" class= "col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="radio" name="gend" value="male">
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gend" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                                </div>

                        </div>
  <div class="form-group">
    <div class="form-check">
      <label class="form-check-label" for="invalidCheck3">
      </label>
      <div class="invalid-feedback">
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>








@endsection
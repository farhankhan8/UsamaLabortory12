@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
    Edit Test
    </div>

    <div class="card-body">


    <form method="POST" action="{{ route("availabel-tests-update", [$room->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
             <div class="form-row">
    <div class="col-md-4 mb-3">
    <div class="form-group">
                <label  for="name">Test Catagory</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $room->catagory->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
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
                <label  for="name">Test Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $room->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
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
                <label for="capacity">Test Fee</label>
                <input class="form-control {{ $errors->has('capacity') ? 'is-invalid' : '' }}" type="number" name="capacity" id="capacity" value="{{ old('capacity', $room->testFee) }}" step="1">
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
                <label for="capacity">First Normal Range</label>
                <input class="form-control {{ $errors->has('capacity') ? 'is-invalid' : '' }}" type="number" name="capacity" id="capacity" value="{{ old('capacity', $room->initialNormalValue) }}" step="1">
                @if($errors->has('capacity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('capacity') }}
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
                <label for="hourly_rate">Final Normal Range</label>
                <input class="form-control {{ $errors->has('hourly_rate') ? 'is-invalid' : '' }}" type="number" name="hourly_rate" id="hourly_rate" value="{{ old('hourly_rate', $room->finalNormalValue) }}" step="0.01">
                @if($errors->has('hourly_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hourly_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.hourly_rate_helper') }}</span>
            </div>
      <div class="invalid-feedback">
        Please provide a valid state.
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


















<!-- 




        <form method="POST" action="{{ route("availabel-tests-update", [$room->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.room.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $room->catagory->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.room.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $room->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="capacity">{{ trans('cruds.room.fields.capacity') }}</label>
                <input class="form-control {{ $errors->has('capacity') ? 'is-invalid' : '' }}" type="number" name="capacity" id="capacity" value="{{ old('capacity', $room->testFee) }}" step="1">
                @if($errors->has('capacity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('capacity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.capacity_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="capacity">{{ trans('cruds.room.fields.capacity') }}</label>
                <input class="form-control {{ $errors->has('capacity') ? 'is-invalid' : '' }}" type="number" name="capacity" id="capacity" value="{{ old('capacity', $room->initialNormalValue) }}" step="1">
                @if($errors->has('capacity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('capacity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.capacity_helper') }}</span>
            </div>
          
          
            <div class="form-group">
                <label for="hourly_rate">{{ trans('cruds.room.fields.hourly_rate') }}</label>
                <input class="form-control {{ $errors->has('hourly_rate') ? 'is-invalid' : '' }}" type="number" name="hourly_rate" id="hourly_rate" value="{{ old('hourly_rate', $room->finalNormalValue) }}" step="0.01">
                @if($errors->has('hourly_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hourly_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.hourly_rate_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>
 -->


@endsection
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
    Create New Test
        <!-- {{ trans('global.create') }} {{ trans('cruds.room.title_singular') }} -->
    </div>

    <div class="card-body">



    <form method="POST" action="{{ route("availale-tests-store") }}" enctype="multipart/form-data">
            @csrf  <div class="form-row">
    <div class="col-md-4 mb-3">
    <div class="form-group">
                <label class="required" for="room_id">Test Catagory</label>
                <select class="form-control select2 {{ $errors->has('room') ? 'is-invalid' : '' }}" name="catagory_id" id="room_id" required>
                    @foreach($rooms as $id => $room)
                        <option value="{{ $id }}" {{ old('room_id') == $id ? 'selected' : '' }}>{{ $room }}</option>
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
                <label class="required" for="name">Test Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
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
                <label class="required" for="testFee">Test Fee</label>
                <input class="form-control {{ $errors->has('testFee') ? 'is-invalid' : '' }}" type="number" name="testFee" id="testFee" value="{{ old('testFee', '') }}" step="1"required>
                @if($errors->has('testFee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('testFee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.capacity_helper') }}</span>
            </div>
    </div>
  </div>


  <div class="row">
  <div class="col-md-2">
                    <label class="required" for="initialNormalValue">First Normal Range</label>

                        <div class=''>
                            <input type='number' name="initialNormalValue" class="form-control" />
                             <span class="input-group-addon">
                                 <span class=""></span>
                             </span>
                        </div>
                    </div>

                    <div class="col-md-2">
                    <label class="required" for="initialNormalValue">Final Normal Range</label>

                        <div class='' id=''>
                            <input type='number' name="finalNormalValue" class="form-control" />
                             <span class="input-group-addon">
                                 <span class=""></span>
                             </span>
                        </div>
                    </div>


                    <div class="col-md-2">
                    <label class="required" for="initialNormalValue">First Critical Value</label>

                        <div class='' id=''>
                            <input type='number' name="firstCriticalValue" class="form-control" />
                             <span class="input-group-addon">
                                 <span class=" "></span>
                             </span>
                        </div>
                    </div>

                    <div class="col-md-2">
                    <label class="required" for="initialNormalValue">Final Critical Value</label>

                        <div class=' ' id=''>
                            <input type='number' name="finalCriticalValue" class="form-control" />
                             <span class="input-group-addon">
                                 <span class=" "></span>
                             </span>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
      <label for="validationServer05">Test Units</label>
      <input class="form-control {{ $errors->has('units') ? 'is-invalid' : '' }}" type="text" name="units" id="units" value="{{ old('name', '') }}" required>
      <div class="invalid-feedback">
        <!-- Please provide a valid zip. -->
      </div>
    </div>
  </div>
                    </div>
                    
                    <div class="card-body">

                    <div class="row">

                    <div class="col-md-3 mb-3">
  <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
  </div>
  </div>

</form>









@endsection
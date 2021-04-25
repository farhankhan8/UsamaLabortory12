@extends('layouts.receptionest')
@section('content')

<div class="card">
    <div class="card-header">
    Edit Patient
    </div>

    <div class="card-body">



    

    <form method="POST" action="{{ route("receptionest-patient-update", [$room->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
             <div class="form-row">
    <div class="col-md-4 mb-3">
    <div class="form-group">
                <label  for="name">Patient Name</label>
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
                <label for="email">Email</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="email" name="email" id="name" value="{{ old('email', $room->email) }}" required>
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
                <label for="phone">Phone</label>
                <input class="form-control {{ $errors->has('capacity') ? 'is-invalid' : '' }}" type="number" name="phone" id="phone" value="{{ old('phone', $room->phone) }}" step="1">
                @if($errors->has('capacity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('capacity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.capacity_helper') }}</span>
            </div>
            </div>
    </div>
  </div>





  <div class="col-md-3 mb-3">

  <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

























<!-- 


        <form method="POST" action="{{ route("patient-update", [$room->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">Patient Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $room->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">Email</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="email" name="email" id="name" value="{{ old('email', $room->email) }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input class="form-control {{ $errors->has('capacity') ? 'is-invalid' : '' }}" type="number" name="phone" id="phone" value="{{ old('phone', $room->phone) }}" step="1">
                @if($errors->has('capacity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('capacity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.capacity_helper') }}</span>
            </div> -->
            <!-- <div class="form-group">
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
            </div> -->
         
        </form>
    </div>
</div>



@endsection
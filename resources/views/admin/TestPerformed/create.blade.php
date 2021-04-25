@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
    Performed New Test of Patiance
    </div>

    <div class="card-body">



    <form method="POST" action="{{ route("test-performed") }}" enctype="multipart/form-data">
            @csrf
            
            
            <div class="form-row">
    <div class="col-md-4 mb-3">
    <div class="form-group">
                <label class="required" for="patient_id">Select Patient Name</label>
                <select class="form-control select2 {{ $errors->has('patients') ? 'is-invalid' : '' }}" name="patient_id" id="patient_id" required>
                    @foreach($users as $id => $user)
                        <option value="{{ $id }}" {{ old('patient_id') == $id ? 'selected' : '' }}>{{ $user }}</option>
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
                <label class="required" for="available_test_id">Select Test Name</label>
                <select class="form-control select2 {{ $errors->has('available_tests') ? 'is-invalid' : '' }}" name="available_test_id" id="available_test_id" required>
                    @foreach($availableTests as $id => $user)
                        <option value="{{ $id }}" {{ old('available_test_id') == $id ? 'selected' : '' }}>{{ $user }}</option>
                    @endforeach
                </select>
                @if($errors->has('available_tests'))
                    <div class="invalid-feedback">
                        {{ $errors->first('available_tests') }}
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
                <label class="required" for="state">Select Test Status</label>
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
                <label class="required" for="start_time">{{ trans('cruds.event.fields.start_time') }}</label>
                <input class="form-control datetime {{ $errors->has('start_time') ? 'is-invalid' : '' }}" type="text" name="start_time" id="start_time" value="{{ old('start_time') }}" required>
                @if($errors->has('start_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.start_time_helper') }}</span>
            </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="form-group">
                <label class="required" for="testResult">Test Result First Value</label>
                <input class="form-control  {{ $errors->has('testResult') ? 'is-invalid' : '' }}" type="number" name="testResult" id="testResult" value="{{ old('testResult') }}" required>
                @if($errors->has('testResult'))
                    <div class="invalid-feedback">
                        {{ $errors->first('testResult') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.start_time_helper') }}</span>
            </div>
    </div>


    <!-- <div class="col-md-4 mb-3">
        <div class="form-group">
                <label class="required" for="testResultFinalValue">Test Result Final Value</label>
                <input class="form-control  {{ $errors->has('testResultFinalValue') ? 'is-invalid' : '' }}" type="number" name="testResultFinalValue" id="testResultFinalValue" value="{{ old('testResultFinalValue') }}" required>
                @if($errors->has('testResultFinalValue'))
                    <div class="invalid-feedback">
                        {{ $errors->first('testResultFinalValue') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.start_time_helper') }}</span>
            </div>
    </div> -->
  </div>
  <div class="col-md-3 mb-3">
  <button class="btn btn-primary" type="submit">Submit form</button>
  </div> 
  </form>
@endsection
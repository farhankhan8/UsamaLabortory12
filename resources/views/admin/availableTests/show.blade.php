
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
    Test Deatail
    </div>

    <div class="card-body">            
            <div class="form-row">
    <div class="col-md-2 mb-3">
    <div class="form-group">
               <b> <label  for="user_id">Test Catagory</label></b>
              
            <p>{{ $rooms->catagory->name ?? '' }}</p>

            </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <!-- <div class="col-md-2 mb-3">
           <div class="form-group">
                <b><label  for="available_test_id">Test Catagory</label></b>
               


                <p>{{ $rooms->availableTest->catagory->name ?? '' }}</p>

            </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div> -->


    
    <div class="col-md-2 mb-3">
           <div class="form-group">
                <b><label  for="available_test_id">Test Name</label></b>
               <p> {{ $rooms->name ?? '' }}</p>


            </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>








    <div class="col-md-2 mb-3">
           <div class="form-group">
                <b><label  for="state">Test Fee</label></b>
             
<p>{{ $rooms->testFee }}</p>


            </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    <div class="col-md-2 mb-3">
        <div class="form-group">
                <b><label  for="start_time">Charged Amount</label></b>
           

                <p>{{ $rooms->testFee }}</p>


            </div>
    </div>



    

<div class="col-md-2 mb-3">
<div class="form-group">
    <b><label  for="available_test_id">Normal Range</label></b>
   
<p>  {{ $rooms->initialNormalValue }}{{ $rooms->units ?? '' }}-{{ $rooms->finalNormalValue }}{{ $rooms->units ?? '' }}</p>


</div>
<div class="valid-feedback">
Looks good!
</div>
</div>



<div class="col-md-2 mb-3">
<div class="form-group">
    <b><label  for="available_test_id">Units</label></b>
   
<p>  {{ $rooms->units }}</p>


</div>
<div class="valid-feedback">
Looks good!
</div>
</div>


    <!-- <div class="col-md-2 mb-3">
        <div class="form-group">
                <b><label  for="start_time">Status</label></b>
             <p>
                @if ($rooms->state =='Progressing')
                            <button class="btn btn-xs btn-info">{{ $rooms->state ?? '' }}</button>
                               @elseif ($rooms->state =='Varified')
                               <button class="btn btn-xs btn-primary">{{ $rooms->state ?? '' }}</button>
                          
                               @elseif ($rooms->state =='Not Recived')
                               <button class="btn btn-xs  btn-warning">{{ $rooms->state ?? '' }}</button>
                               @elseif ($rooms->state =='Cancelled')
                               <button class="btn btn-xs btn-danger">{{ $rooms->state ?? '' }}</button>
                             @else
                             I don't have any records!
                                 @endif
</p>

            </div>
    </div> -->



    
  </div>
  </div>


  <div class="card-body">



   
                
<!-- <div class="form-row">
<div class="col-md-2 mb-3">
<div class="form-group">
    <b><label  for="user_id">Test Time</label></b>
    <p>{{ $rooms->start_time }}</p>




</div>
<div class="valid-feedback">
Looks good!
</div>
</div> -->

<!-- 

<div class="col-md-2 mb-3">
<div class="form-group">
    <b><label  for="available_test_id">Reporting Time</label></b>
   
    <p>{{ $rooms->start_time }}</p>


</div>
<div class="valid-feedback">
Looks good!
</div>
</div>



<div class="col-md-2 mb-3">
<div class="form-group">
    <b><label  for="available_test_id">Normal Range</label></b>
   
<p>  {{ $rooms->initialNormalValue }}-{{ $rooms->finalNormalValue }}</p>


</div>
<div class="valid-feedback">
Looks good!
</div>
</div> -->









</div>
<div>


<div class="card-body">            
            <div class="form-row">
    <div class="col-md-2 mb-3">
    <div class="form-group">
              
            <!-- <p>{{ $rooms->name ?? '' }}</p> -->

            </div>
      <div class="valid-feedback">
      </div>
    </div>

   
            
            
<div class="form-row">
<div class="col-md-12 mb-5">
<div class="form-group">
    <b><label  for="user_id">Result</label></b>
    <div style="background-color:gray;color:white;padding:20px;">
  <p>London is the capital city of England.London is the capital city of England.London is the capital city of England.London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.
  </p>
</div> 




</div>
<div class="valid-feedback">
Looks good!
</div>
</div>


</div>

  <div class="col-md-3 mb-3">
  <button class="btn btn-primary">
  <a class="btn btn-primary" href="{{ route('available-tests') }}">
  Back
                </a>
  </button>
  </div> 




  
@endsection
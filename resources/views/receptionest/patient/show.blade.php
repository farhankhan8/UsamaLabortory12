
@extends('layouts.receptionest')
@section('content')

<div class="card">
    <div class="card-header">
    Test Deatail
    </div>

    <div class="card-body">            
            <div class="form-row">
    <div class="col-md-2 mb-3">
    <div class="form-group">
               <b> <label  for="user_id">Patient Name</label></b>
              
            <p>{{ $rooms->name ?? '' }}</p>

            </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>



    
    <div class="col-md-2 mb-3">
           <div class="form-group">
                <b><label  for="available_test_id">Phone</label></b>
               <p> {{ $rooms->phone ?? '' }}</p>


            </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>








    <div class="col-md-2 mb-3">
           <div class="form-group">
                <b><label  for="state">Email</label></b>
             
<p>{{ $rooms->email }}</p>


            </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    <div class="col-md-2 mb-3">
        <div class="form-group">
                <b><label  for="start_time">Charged Amount</label></b>
           

                <p>{{ $a }}</p>


            </div>
    </div>



    

<div class="col-md-2 mb-3">
<div class="form-group">
    <b><label  for="available_test_id">Register Date</label></b>
   
<p>  {{ $rooms->start_time }}</p>


</div>
<div class="valid-feedback">
Looks good!
</div>
</div>



<div class="col-md-2 mb-3">
<div class="form-group">
    <b><label  for="available_test_id">Units</label></b>
   
<p>  {{ $rooms->start_time }}</p>


</div>
<div class="valid-feedback">
Looks good!
</div>
</div>


 


  <!-- <div class="card-body"> -->





            <!-- <div class="form-row"> -->
    <div class="col-md-2 mb-3">
    <div class="form-group">
               <b> <label  for="user_id">Performed Test</label></b>
              
            <p>{{ $a }}</p>

            </div>
           
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

   
      </div>
      <div>      
            
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
  <a class="btn btn-primary" href="{{ route('patient-list') }}">
  Back
                </a>
  </button>
  </div> 




  
@endsection
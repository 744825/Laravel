@section('content')

<form method="post" action=" {{url('bookaccount/update')}} ">
  {!! csrf_field() !!}


              <input type="hidden" class="form-control" name="BOOKS_OF_A" value="{{$BookAcc->BOOKS_OF_A}}"/><br/><br/>

             <label >SECTION_ID:</label><br/><br/>
              <input type="text" class="form-control" name="SECTION_ID" value="{{$BookAcc->SECTION_ID}}"/><br/><br/>

              <label> BOOKS_OF_2:</label><br/><br/>
              <input type="text" class="form-control" name="BOOKS_OF_2" value="{{$BookAcc->BOOKS_OF_2}}"/><br/><br/>

              <label >INSTITUTE:</label><br/><br/>
              <input type="text" class="form-control" name="INSTITUTE" value="{{$BookAcc->INSTITUTE}}"/><br/><br/>

             <label >LOCATION:</label><br/><br/>
              <input type="text" class="form-control" name="LOCATION" value="{{$BookAcc->LOCATION}}"/><br/><br/>
<button type="submit" class="btn-btn" >Submit</button>
</form>


@section('content')

<form method="post" action=" {{url('bookaccount/addBookAccount')}} ">
      {!! csrf_field() !!}

              <label> BOOKS_OF_A:</label><br/><br/>
              <input type="text" class="form-control" name="BOOKS_OF_A"/><br/><br/>


              <label >SECTION_ID:</label><br/><br/>
              <input type="text" class="form-control" name="SECTION_ID"/><br/><br/>

              <label> BOOKS_OF_2:</label><br/><br/>
              <input type="text" class="form-control" name="BOOKS_OF_2"/><br/><br/>

              <label >INSTITUTE:</label><br/><br/>
              <input type="text" class="form-control" name="INSTITUTE"/><br/><br/>

             <label >LOCATION:</label><br/><br/>
              <input type="text" class="form-control" name="LOCATION"/><br/><br/>

<br/>
<button type="submit" class="btn-btn" >Submit</button>
</form>
 <script>
       document.querySelector('')
    </script>

<x-layout>
    @csrf
      <a href="{{url('bookaccount/create')}}" class="btn btn-success add-btn" >ADD</a>
 <div class="my-centre">
    <table class="table table-success table-hover table-striped my-child" >

        <thead>
            <tr>
                <th scope="col">BOOKS_OF_A</th>
                <th scope="col">SECTION_ID</th>
                <th scope="col">BOOKS_OF_2</th>
                <th scope="col">INSTITUTE</th>
                <th scope="col">LOCATION</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($bookAccount))
            @foreach($bookAccount as $i)
                <tr class="">
                <td scope="row">{{$i->BOOKS_OF_A}}</td>
                <td scope="row">{{$i->SECTION_ID}}</td>
                <td scope="row">{{$i->BOOKS_OF_2}}</td>
                <td scope="row">{{$i->INSTITUTE}}</td>
                <td scope="row">{{$i->LOCATION}}</td>
                <td scope="row" class="action-div">
             <a href="{{ url('/bookaccount/' . $i->BOOKS_OF_A . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                <form method="POST" action="{{ url('/bookaccount' . '/delete?id=' . $i->BOOKS_OF_A) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm mybgred " title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>

                </td>
            </tr>

            @endforeach
            @endif
        </tbody>
    </table>
 </div>
  <div class=" p-4">
    {{$bookAccount->links()}}
  </div>

</x-layout>



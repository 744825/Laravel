<x-layout>
  <x-tabledropdown>
    </x-tabledropdown>
    @csrf
      <a href="{{url($endpoint . '/create')}}" class="btn btn-success add-btn" >Add New</a>
 <div class="my-centre">
    <table class="table table-success table-hover table-striped my-child" >

        <thead>
            <tr>
            @foreach ( $colName as $col )
                <th scope="col">{{$col}}</th>
            @endforeach
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($recordList))
            @foreach($recordList as $i)
                <tr class="">
                @foreach ( $colName as $col)
                <td scope="row">{{$i->$col}}</td>
                @endforeach
                <td scope="row" class="action-div">
                @php
                $priKey = $colName[0];
                @endphp
             <a href="{{ url('/' . $endpoint . '/' . $i->$priKey . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                <form method="POST" action="{{ url('/'.  $endpoint  . '/delete?id=' . $i->$priKey) }}" accept-charset="UTF-8" style="display:inline">
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
    {{$recordList->links()}}
  </div>

</x-layout>



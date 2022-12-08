<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="{{URL::asset('css/app.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<body>
    @csrf
 <div class="table-responsive">
    <table class="table table-primary" border=1>



    </div>
    <a href="{{url('bookaccount/create')}}" class="btn btn-success" >ADD</a>
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
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>

                </td>
            </tr>

            @endforeach
            @endif
        </tbody>
    </table>
 </div>



</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<body>
    @csrf
 <div class="table-responsive">
    <table class="table table-primary" border=1>



    </div>
    <a href="{{url('add')}}" class="btn btn-success" >ADD</a>
        <thead>
            <tr>
                <th scope="col">CLASS_ID</th>
                <th scope="col">ACADEMIC_Y</th>
                <th scope="col">COURSE_ID</th>
                <th scope="col">CLASS</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($student))
            @foreach($student as $i)
                <tr class="">
                <td scope="row">{{$i->CLASS_ID}}</td>
                <td scope="row">{{$i->ACADEMIC_Y}}</td>
                <td scope="row">{{$i->COURSE_ID}}</td>
                <td scope="row">{{$i->CLASS}}</td>
                <td scope="row">
                    <a href="{{url('library/edit/'.$i->CLASS_ID)}}" class="btn btn-primary" >Edit</a>
                    <a href="{{url('library/delete/'.$i->CLASS_ID)}}" class="btn btn-danger" >Delete</a>

                </td>
            </tr>

            @endforeach
            @endif
        </tbody>
    </table>
 </div>



</body>
</html>

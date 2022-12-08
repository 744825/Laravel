<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <body class="antialiased">
        
        <form class="" action="{{url('data')}}" method="post">
            @csrf
            Name :<input type="text" name="sname" placeholder="enter name" value=""><br>
           <br>
           Conatct: <input type="text" name="contact"  placeholder="enter contact" value=""><br>
            <button type="Submit" name="submit" value="submit"></button>
            
        </form>
                
    </body>

</html>

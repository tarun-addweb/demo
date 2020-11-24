
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="POST">
        {{ csrf_field() }}
        <input type="date" name="date1" /> 
        <input type="date" name="date2" /> 
        <input type="submit">
    </form>
    <table>
              
@if (isset($Data))

    @foreach($Data as $value)
            <tr>
                <td>{{$value->name}}<td>
                <td>{{$value->created_at}}<td>
            </tr>
    @endforeach
@endif
            
        </table>
</body>
</html>
<!-- install libreary -->
<!-- composer require mews/captcha -->
<!-- create providers and alies -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>captcha</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</head>
<body>
<form  method="POST">
        {{ csrf_field() }}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <lable>email</lable>
        <input type="text" /><br>
        
        
        <lable>password</lable>
        <input type="password" /><br> 
        
        
        captcha:<span class="captcha_span">{!! captcha_img() !!}</span>
        <button type="button" class="btn-refresh"><i class="glyphicon glyphicon-refresh"></i></button><br>
        <input type="text" id="captcha" name="captcha" placeholder="enter captcha" /><br>
        
        
        <input type="submit">
    </form>



    <script type="text/javascript">
    $(".btn-refresh").click(function(){
        $.ajax({
            type:'GET',
            url:'refresh_captcha',
            success:function(data){
                $(".captcha_span").html(data.captcha);
            }
        });
    });
</script>
</body>

</html>
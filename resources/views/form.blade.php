<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</head>
<body>
    <form  method="POST">
        {{ csrf_field() }}
        <div class="row">
            <input type="text" name="details[]" placeholder="details" required/>
            <input name="amount[]" class="amount" id="amount[]" type="number" required/>
            <br>
        </div>
        <input type="button" class="addrow" value="add row"> 
        <input onclick() type="submit">
    </form>
    
Total : <input type="number" class="total" id="total" disabled >

<script>
$(document).ready(function(){
    $('.addrow').click(function () {
        $('.row').append('<div><input type="text" name="details[]" placeholder="details" required/> <input name="amount[]" id="amount[]" class="amount" type="number" required/> <button class="remouve">remouve</button><br><div>');
    });


    $('.row').on("click",".remouve",function(e){
        e.preventDefault();
        $(this).parent('div').remove();
        var sum = 0;
        $('.amount').each(function(index, element){
            var amount = parseInt($(this).val());
            sum += amount;
            $("#total").val(sum);
           
        })
    });


    $('.row').on("change",".amount",function(e){
        e.preventDefault();
        var sum = 0;
        $('.amount').each(function(index, element){
            var amount = parseInt($(this).val());
            sum += amount;
            $("#total").val(sum);
           
        })
    });
});
</script>


</body>
</html>
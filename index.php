<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
  $(document).ready(function() {

        $(".btn").click(function(){
            $(this).text(" DELUX HOTEL");
            $(this).css({"text-align":"center","padding":"10px","border":"3px outset #FF0000","margin-left":"auto"});

            $(".btn").click(function(){
                window.location.href="landing.php";
            })
        });

        $(".btn").dblclick(function(){
            location.reload();
        });

  })
</script>
</head>
<body>
<style>
    *{
        margin: 0px;
        padding: 0px;
    }
    .header{
        display:none;
    }
    .welcome{
        padding: 310px;
        background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);
    }
    .btn{
        position: absolute;
        font-size: 50px;
        font-weight: bold;
        font-family: serif;
        color: purple;
        border: 2px inset #FF0000;
        background-color:white;
    }
    .btn:hover{
        color: blue;
        outline: 1px inset #FF0000;
    }
    @media screen and (max-width:900px) and (min-width:200px){
        body{
        padding: 0px;
        margin: 0px;
        background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);
    }
        .welcome{
        padding: 0px;
        display: inline-block;
        background-image: none;
        align-items: center;
        width: 100%;
    }
        .btn{
        margin-left: auto;
        margin-top: auto;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
        font-weight: bold;
        font-family: serif;
        color: purple;
        outline: none;
        text-align: center;
        width: 100%;
        padding: 10px;
    }
}
</style>
<div class="welcome">
    <button class="btn">WELCOME TO DELUX HOTELS</button>
</div>


</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    <title>Document</title>
    <script>
        $(document).ready(function(){
          $('button').on("click",function(){  
        //$('button').not(this).removeClass();
        $(this).toggleClass('active');
        
        });
      });
    </script>
<style>
    .error{
        color: #FF0000;
    }
    .active{
        background-color:green;
    }
</style>

</head>
<body>  

<button>click</button>

<h1>Change</h1>

</body>
</html>
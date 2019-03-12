<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
    function gettingData()
    {
    var req =new XMLHttpRequest();
    req.onreadystatechange = function()
     {
      if(req.readyState == 4 && req.status == 200)
      {
          obj =JSON.parse(req.response);
          document.getArrayById("data").innerHTML= obj.Pakistan;
      }  
     } 
     req.open("POST","JSON.php",false);
     req.send();
    }
    </script>
</head>
<body>
     
    <button type="button" class="btn btn-default" onclick="gettingData();" >GET DATA</button>
    <p id="data"></p>
</body>
</html>
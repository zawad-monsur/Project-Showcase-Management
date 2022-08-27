<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<script>
function myFunction() {
  let room_no = document.getElementById("room").value; 
    console.log("GET","api/judge_api.php?room_no="+room_no);
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","api/judge_api.php?room_no="+room_no,true);
    xmlhttp.send();
  
}
</script>
</head>
<body>
<br>
<input type="int" id="room" name="room">
<button onclick = 'myFunction()'>asd</button>

<div id="txtHint"><b>Person info will be listed here...</b></div>
</body>
</html>
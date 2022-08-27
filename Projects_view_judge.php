<html>
<head>
<script>
function myFunction() {
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","api/judge_api.php",true);
    xmlhttp.send();
  
}
</script>
</head>
<body>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>
<button onclick="myFunction()">Click me</button>
</form>
</body>
</html>
</body>
</html>
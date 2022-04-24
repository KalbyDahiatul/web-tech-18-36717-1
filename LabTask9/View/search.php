
<!DOCTYPE html>
<html>
<head>
  
    
</head>
<body onload="search(document.getElementById('search').value)">


    
        <input type="text" id="search" name="search" placeholder="Search Jobs By Keyword" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {if(!empty($_POST["search"])){echo '$_POST["search"]';}}?>" onkeyup="search(this.value)" onblur="search(this.value)">
    
    </div>
    <div id="searchResults" style="width: 500px;height: 2px;border: none;">
    
    </div>

function search(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("searchResults").innerHTML = "";
    document.getElementById("searchResults").style.color = "red";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
   
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("searchResults").style.color = "";
       document.getElementById("searchResults").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../controller/searchfoodcheck.php?q="+str, true);
  xhttp.send();
}
</body>
</html>
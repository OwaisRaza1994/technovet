function showUser() {
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
        };
        xmlhttp.open("GET","Read.php",true);
        xmlhttp.send();
}
function DelUser(str) {
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
        };
        xmlhttp.open("GET","Delete.php?q="+str,true);
        xmlhttp.send();
}
function UpdateUser(str) {
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
        };
        xmlhttp.open("GET","UpdateForm.php?q="+str,true);
        xmlhttp.send();    
}




































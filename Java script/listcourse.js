
function go() {
    var course = document.getElementById("course").value; 

        document.getElementById("res").innerHTML += "<li>"+ course +"<br>";
        document.getElementById("course").value = ""; 
    }

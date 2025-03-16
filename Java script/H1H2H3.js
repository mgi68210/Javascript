function go() {
    var choix = document.getElementById("choix").value;
    var prenom = document.getElementById("prenom").value;
    document.getElementById("res").innerHTML = "<" + choix + ">" + prenom + "</" + choix + ">";
}


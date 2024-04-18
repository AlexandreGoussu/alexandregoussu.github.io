document.getElementById("monBouton").addEventListener("click", function() {
    document.getElementById("monTexte").style.display = "block";
    document.getElementById("monBouton").style.display = "none";
    document.getElementById("moinsBouton").style.display = "inline";
});

document.getElementById("moinsBouton").addEventListener("click", function() {
    document.getElementById("monTexte").style.display = "none";
    document.getElementById("monBouton").style.display = "inline";
    document.getElementById("moinsBouton").style.display = "none";
});

document.getElementById("mesBouton").addEventListener("click", function() {
    document.getElementById("mesTexte").style.display = "block";
    document.getElementById("mesBouton").style.display = "none";
    document.getElementById("moinsButton").style.display = "inline";
});

document.getElementById("moinsButton").addEventListener("click", function() {
    document.getElementById("mesTexte").style.display = "none";
    document.getElementById("mesBouton").style.display = "inline";
    document.getElementById("moinsButton").style.display = "none";
});

document.getElementById("mesB").addEventListener("click", function() {
    document.getElementById("mesT").style.display = "block";
    document.getElementById("mesB").style.display = "none";
    document.getElementById("moinsB").style.display = "inline";
});

document.getElementById("moinsB").addEventListener("click", function() {
    document.getElementById("mesT").style.display = "none";
    document.getElementById("mesB").style.display = "inline";
    document.getElementById("moinsB").style.display = "none";
});


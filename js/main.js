document.querySelector("#Bouton").onclick = function() {
    if (window.getComputedStyle(document.querySelector('#infoborne')).display=='none'){
    document.querySelector("#infoborne").style.display="block";
    } else { 
    document.querySelector("#infoborne").style.display="none";
    }
    }
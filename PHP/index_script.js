const mainTitle = document.querySelector("#mainTitle");
mainTitle.style.textAlign = "center";

mainTitle.addEventListener('click', function() {
    mainTitle.innerHTML = "PHP, HTML et JS";
    mainTitle.style.color = "violet";
    mainTitle.style.backgroundColor = "grey";
    mainTitle.style.fontSize = "34px";
    mainTitle.style.textAlign = "center";
});

mainTitle.addEventListener('dblclick', function() {
    mainTitle.innerHTML = "Exercices PHP et JS";
});
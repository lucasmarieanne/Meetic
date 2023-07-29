document.addEventListener('DOMContentLoaded', function () {


    let button = document.getElementsByTagName("button");
    let box = document.getElementsByClassName("lol");

    button[0].onclick = function popup () {
        box[0].style.backgroundColor = "yellow";
    };

    firstBtn.addEventListener('click', function () {
        let text = document.createElement('div');
        text.innerHTML = firstInputButton.value;
        firsrResult.appendChild(text);

        firstInputButton.value = "Bien ajouté !";
        firstInputButton.style.color = 'green';
        text.style.cursor = 'pointer';
        text.style.backgroundColor = 'black';
        text.style.color = 'white';
        text.style.padding = '10px';
        text.style.borderRadius = '10px';
    })    
});
var but1 = document.getElementById('easy');
var but2 = document.getElementById('med');
var but3 = document.getElementById('hard');
// var start = document.getElementById('start');
localStorage.setItem("Level", 1); //na to arxikopoiei panta sto easy

but1.addEventListener('click', function() {
    localStorage.setItem("Level", 1);
    but1.style.backgroundColor = 'green';
    but2.style.backgroundColor = '#b19b75';
    but3.style.backgroundColor = '#b19b75';
})
but2.addEventListener('click', function() {;
    localStorage.setItem("Level", 2);
    but1.style.backgroundColor = '#b19b75';
    but2.style.backgroundColor = 'green';
    but3.style.backgroundColor = '#b19b75';
})
but3.addEventListener('click', function() {
    localStorage.setItem("Level", 3);
    but1.style.backgroundColor = '#b19b75';
    but2.style.backgroundColor = '#b19b75';
    but3.style.backgroundColor = 'green';
})
function changeName() {
    var uname = document.getElementById('uname');

    uname.addEventListener('keyup', function() {
        checkName(uname.value);
    });

}

function changeEmail() {
    var email = document.getElementById('email');
    email.addEventListener('keyup', function() {
        checkEmail(email.value);
    });
}

var boll_check_name;
var boll_check_email;

function checkName(str) { //elegxei an yparxei to onoma se database
    var check_name = 'This name already exists'; //ayto epistrefetai apo php an yparxei
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('errorname').innerHTML = xmlhttp.responseText;
            boll_check_name = xmlhttp.responseText == check_name;
            checker();
        }
    }

    xmlhttp.open("GET", "check-name.php?user=" + str, true);
    xmlhttp.send();

}

function checker() {
    if (boll_check_email || boll_check_name) {
        document.getElementById('submit').disabled = true;
        document.getElementById('form').style.height = "35em";
        document.getElementById('submit').style.opacity = 0;
    } else {
        document.getElementById('submit').disabled = false;
        document.getElementById('submit').style.opacity = 100;
        document.getElementById('form').style.height = "30em";
    }
}

function checkEmail(str) { //elegxei an yparxei to email se database
    var check_name = 'This email already exists';
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //kane kati
            document.getElementById('erroremail').innerHTML = xmlhttp.responseText;
            boll_check_email = xmlhttp.responseText == check_name;
            checker();
        }
    }

    xmlhttp.open("GET", "check-email.php?email=" + str, true);
    xmlhttp.send();

}
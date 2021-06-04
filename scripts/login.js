// function login() {
//     xmlhttp = new XMLHttpRequest();

//     var user = document.getElementById('uname').value;
//     var pass = document.getElementById('psw').value;

//     xmlhttp.onreadystatechange = function() {
//         let check_name = "MPIKES"
//         if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//             let check = xmlhttp.responseText == check_name;
//             if (check) {
//                 console.log("KATI EGINE BRO");
//             }
//         }
//     }
//     var link = "usrlogin.php?uname=" + user + "&psw=" + pass;
//     // xmlhttp.open("GET", link, true);
//     xmlhttp.send();
// }
function uploadFile() {
  var files = document.getElementById("file").files;
  var text = document.getElementById("label_name");

  if (files.length > 0) {
    var formData = new FormData();
    formData.append("file", files[0]);
    if (files[0].name.length > 30) {
      document.getElementById("label_name").style.marginTop = "1%";
    }

    text.innerHTML = "";
    text.innerHTML = files[0].name;
  }
}

function checkName(){
   xmlhttp=new XMLHttpRequest();
   var uname= document.getElementById('uname');

   XMLHttpRequestUpload.onreadystatechange = function(){
      if(xmlhttp.readyState==4 && xmlhttp.status ==200){
         alert("mpika");
      }
   }
   xmlhttp.open("GET","check-name.php?user="+uname"&check="+check,true);
   xmlhttp.send();
}

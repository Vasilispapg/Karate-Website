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
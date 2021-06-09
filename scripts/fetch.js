function seeTheUsers() {

    var id = 0;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                var result = xmlhttp.responseText; //pairnw apantisi apo php
                var users = result.split('user'); //spaw toys xristes

                users = users.filter(Boolean); //katharizw ta kena poy yparxei apo to split !important

                users.forEach(element => {
                    var user = element.split('role'); //spaw alli mia fora gia na xwrisw ton role me to username 
                    createNewElement(id); //ftiaxnw ena neo span gia na valw tous users
                    document.getElementById('username' + id).innerHTML = "Username:" + user[0];

                    if (user[1] == 1) role = 'Member';
                    else if (user[1] == 2) role = 'Moderator';
                    else role = 'Admin';

                    document.getElementById('role' + id).innerHTML = "(" + role + ")";
                    document.getElementById('edit-link' + id).href = document.getElementById('edit-link' + id).href + user[0];
                    document.getElementById('delete-link' + id).href = document.getElementById('delete-link' + id).href + user[0];
                    id++;

                });
            }
        } //user[0]=username ||| user[1]=role

    xmlhttp.open("GET", "php/fetch_all_users.php", true);
    xmlhttp.send();
}



function createNewElement(id) {
    var span = document.createElement("span");
    span.className = 'user';
    span.id = id;

    user = document.createElement('div');
    role = document.createElement('div');
    img_div = document.createElement('div');

    img_div.className = 'col-12 edits';
    role.className = 'role';
    user.className = 'username';

    //Image
    img_icon = document.createElement('img');
    img_icon.src = 'media/edit.png';
    img_icon.id = 'edit-img';
    img_icon.className = 'edit-img';

    img_a = document.createElement('a');
    img_a.id = 'edit-link' + id;
    img_a.href = 'php/fetch_temp_user.php?username=';
    img_a.appendChild(img_icon);

    img_div.appendChild(img_a);

    //imagedel
    img_icon_del = document.createElement('img');
    img_icon_del.src = 'media/delete.png';
    img_icon_del.id = 'delete-img';
    img_icon_del.className = 'edit-img';

    img_a_del = document.createElement('a');
    img_a_del.id = 'delete-link' + id;
    img_a_del.href = 'php/delete.php?username=';
    img_a_del.appendChild(img_icon_del);

    img_div.appendChild(img_a_del);

    //username
    info_user = document.createElement('p');
    info_user.className = 'username';
    info_user.id = 'username' + id;
    user.appendChild(info_user);
    //username

    //role
    info_role = document.createElement('p');
    info_role.className = 'role';
    info_role.id = 'role' + id;
    role.appendChild(info_role);
    //role

    span.appendChild(img_div);
    span.appendChild(user);
    span.appendChild(role);
    document.getElementById('row').appendChild(span);
}
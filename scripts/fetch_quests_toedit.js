function editTheQuestions() {

    var id = 0;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            var result = xmlhttp.responseText; //pairnw apantisi apo php
            var users = result.split('#'); //spaw toys xristes
            console.log(users);
            users = users.filter(Boolean); //katharizw ta kena poy yparxei apo to split !important
            console.log(users)
            users.forEach(element => {
                var answers = element.split('^'); //spaw alli mia fora gia na xwrisw ton role me to username 
                createNewElement(id); //ftiaxnw ena neo span gia na valw tous users
                document.getElementById('name_quest' + id).innerHTML = "Question:" + answers[0];

                document.getElementById('edit-link' + id).href = document.getElementById('edit-link' + id).href + answers[0];
                document.getElementById('delete-link' + id).href = document.getElementById('delete-link' + id).href + answers[0];
                document.getElementById('accept-link' + id).href = document.getElementById('accept-link' + id).href + answers[0];
                id++;

            });
        }
    }

    xmlhttp.open("GET", "php/questions-goes-down.php", true);
    xmlhttp.send();
}

function createNewElement(id) {
    var span = document.createElement('span');
    span.className = 'quest';
    span.id = id;

    name_quest = document.createElement('div');
    img_div = document.createElement('div');


    img_div.className = 'col-12 edits';
    name_quest.className = 'name_quest';


    //Image
    img_icon = document.createElement('img');
    img_icon.src = 'media/edit.png';
    img_icon.id = 'edit-img';
    img_icon.className = 'edit-img';

    img_a = document.createElement('a');
    img_a.id = 'edit-link' + id;
    img_a.href = 'php/fetch-edit-quest.php?quest='; //tha doyme
    img_a.appendChild(img_icon);

    img_div.appendChild(img_a);

    //imagedel
    img_icon_del = document.createElement('img');
    img_icon_del.src = 'media/delete.png';
    img_icon_del.id = 'delete-img';
    img_icon_del.className = 'edit-img';

    img_a_del = document.createElement('a');
    img_a_del.id = 'delete-link' + id;
    img_a_del.href = 'php/delete_quest.php?name_quest=';
    img_a_del.appendChild(img_icon_del);

    img_div.appendChild(img_a_del);

    //imdage accept 
    img_icon_accept_img = document.createElement('img');
    img_icon_accept_img.src = 'media/accept.png';
    img_icon_accept_img.id = 'accept-img';
    img_icon_accept_img.className = 'edit-img';

    img_icon_accept_a = document.createElement('a');
    img_icon_accept_a.id = 'accept-link' + id;
    img_icon_accept_a.href = 'php/accept_quest.php?name_quest=';
    img_icon_accept_a.appendChild(img_icon_accept_img);

    img_div.appendChild(img_icon_accept_a);


    name_quest_p = document.createElement('p');
    name_quest_p.className = 'name_quest';
    name_quest_p.id = 'name_quest' + id;
    name_quest.appendChild(name_quest_p);

    span.appendChild(img_div);
    span.appendChild(name_quest);

    document.getElementById('row').appendChild(span);
}
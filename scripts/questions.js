function seeTheQuestions() {
    var q=0;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var result = xmlhttp.responseText;
            var questions = result.split('question');
            questions = questions.filter(Boolean);
            questions.forEach(element => {
               var ques = element.split('difficult');
               createNewElement(q);
               document.getElementById('name'+q).innerHTML = "Question: "+question[0];

               document.getElementById('difficult' + q).innerHTML = "(" + role + ")";
                document.getElementById('edit-link' + id).href = document.getElementById('edit-link' + id).href + user[0];
                document.getElementById('delete-link' + id).href = document.getElementById('delete-link' + id).href + user[0];
                q++;

            });
        }
    }
    xmlhttp.open("GET", "php/fetch_all_questions.php", true);
    xmlhttp.send();
}

function createNewQuestion(q){
    var div = document.createElement("div");
    div.className="questions";
    div.q=q;

    
}
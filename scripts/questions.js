function seeTheQuestions() {

    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var result = xmlhttp.responseText;

            var questions = result.split('#'); //me ayto pernoyme tis erwtisis
            questions = questions.filter(Boolean);

            //vres to size twn erwtisewn
            //an einai panw apo 5 pare tyxaia alliws petates oles random
            shuffle(questions);

            id = 0;
            questions.forEach(element => {
                id++;
                var apantisis = element.split('^'); //me ayto pairnoyme ta kommatia jexwrista
                if (id <= 6) {
                    var quest = createNewQuestion(apantisis, id);
                    document.getElementById('qa_body').appendChild(quest);
                }
            });
            //vale kai to output total score
            document.getElementById('qa_body').appendChild(totalScore());
        }
        init(); //quiz gia na proxwraei
        // console.log(localStorage.getItem("Level")); //soy dinei to epipedo poy dialejes prin to exw sto localstorage
    }
    xmlhttp.open("GET", "php/fetch_all_questions.php?diff=" + localStorage.getItem("Level"), true);
    xmlhttp.send();
}

function createNewQuestion(q, id) {
    var div_quest = document.createElement("div");
    if (id == 1)
        div_quest.className = "qa_quest active";
    else
        div_quest.className = "qa_quest";
    var header4 = document.createElement("h4");
    header4.innerHTML = q[0] //erwtisi
    div_quest.appendChild(header4);
    var type = q[7];
    //prwti apantisi
    //1 -> pollaplhs, 2->keimeno, 3->swsto/lathos

    if (q[6] == 1 || q[6] == 3 || q[6] == 2) {
        var ans1 = createAnswers(q, id, 1); //ola ta eidh theloun thn prwth erwthsh
        div_quest.appendChild(ans1);

        if (type != 2) {
            var ans2 = createAnswers(q, id, 2); //mono ta swsto lathos theloun kai thn deuterh apanthsh
            div_quest.appendChild(ans2);
        }
    }
    if (type == 1) {
        var ans3 = createAnswers(q, id, 3); //ta pollaplhs theloun oles tis apanthseis
        var ans4 = createAnswers(q, id, 4);
        div_quest.appendChild(ans3);
        div_quest.appendChild(ans4);
    } else if (type == 2) {

        let div = document.createElement("div");
        div.style.display = 'flex';
        div.style.flexDirection = 'column';
        div.className = 'qa_answer'

        let submit = document.createElement("input");
        submit.type = 'submit';
        submit.id = 'submit' + id;
        submit.style.marginTop = "5%";

        let textarea = document.createElement("input");
        textarea.type = 'text';
        textarea.id = 'textarea' + id;
        textarea.className = 'textarea';
        textarea.style.width = '400px';
        textarea.style.height = '100px'

        div.appendChild(textarea);
        div.appendChild(submit);

        submit.setAttribute("valid", q[1]);

        div_quest.appendChild(div);

    }

    return div_quest;
}



function shuffle(array) {
    var currentIndex = array.length,
        randomIndex;

    // While there remain elements to shuffle...
    while (0 !== currentIndex) {

        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex--;

        // And swap it with the current element.
        [array[currentIndex], array[randomIndex]] = [
            array[randomIndex], array[currentIndex]
        ];
    }

    return array;
}

function createAnswers(q, id, count) {
    var div_ans1 = document.createElement("div");
    div_ans1.className = "qa_answer";

    var input_radio = document.createElement("input");
    input_radio.type = 'radio';
    input_radio.name = 'q' + id;
    if (q[7] == 1 || q[7] == 3) {
        if (count == q[5]) //einai i swsti apantisi q5='valid stin sql'
            input_radio.setAttribute('valid', "valid");
        var span = document.createElement("span");
        span.innerHTML = q[count];
        div_ans1.appendChild(input_radio);
        div_ans1.appendChild(span);
    }


    return div_ans1;
}

function totalScore() {
    var div = document.createElement('div')
    div.className = 'qa_quest'

    var h4 = document.createElement('h4')
    h4.innerHTML = 'Your total score <span id=\'totalscore\'>0</span> out of 100'
    div.appendChild(h4)
    return div;
}
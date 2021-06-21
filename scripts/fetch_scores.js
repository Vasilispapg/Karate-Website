function fetchScores() {

    var id = 0;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            var result = xmlhttp.responseText; //pairnw apantisi apo php
            var scores = result.split('#'); //spaw ta score
            scores = scores.filter(Boolean); //katharizw ta kena poy yparxei apo to split !important

            scores.forEach(element => {
                var answers = element.split('^');
                createNewElement(id); //ftiaxnw ena neo span gia na valw ta scores
                date = answers[2].split(" ");

                wra = date[4]; //pairnw tin wra
                wra = wra.split(":");
                wra = wra[0] + ":" + wra[1]; //gia na diwjw ta deyterolepta

                date = date[2] + " " + date[1] + " " + date[3]; //25 Jun 2019

                document.getElementById('score' + id).innerHTML = answers[1] + "/100";
                document.getElementById('date' + id).innerHTML = date;
                document.getElementById('time' + id).innerHTML = wra;
                if (answers[0] == 1) {
                    document.getElementById('diff' + id).innerHTML = "Easy";
                } else if (answers[0] == 2) {
                    document.getElementById('diff' + id).innerHTML = "Medium";
                } else {
                    document.getElementById('diff' + id).innerHTML = "Hard";
                }

                id++;
                // document.getElementById('tableheader').appendChild(li);


            });
        }
    }
    var username = document.getElementById("username").innerHTML
    username = username.split(" ");
    xmlhttp.open("GET", "php/fetch-scores.php?username=" + username[1], true);
    xmlhttp.send();
}


function createNewElement(id) {
    var li = document.createElement('li');
    li.className = 'table-row';
    li.id = id;

    var date = document.createElement('div');
    date.setAttribute("data-label", "Date:");
    date.className = "insidetable"
    date.id = 'date' + id;


    var Time = document.createElement('div');
    Time.setAttribute("data-label", "Time:");
    Time.className = "insidetable"
    Time.id = 'time' + id;

    var difficulty = document.createElement('div');
    difficulty.setAttribute("data-label", "Difficulty:");
    difficulty.className = "insidetable"
    difficulty.id = 'diff' + id;


    var score = document.createElement('div');
    score.setAttribute("data-label", "Score:");
    score.className = "insidetable"
    score.id = 'score' + id;

    li.appendChild(date);
    li.appendChild(Time);
    li.appendChild(difficulty);
    li.appendChild(score);

    document.getElementById('tableheader').appendChild(li);

}
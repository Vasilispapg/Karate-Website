function init() {
    var skip = document.getElementById('skip');
    var score = document.getElementById('score');
    var totalScore = document.getElementById('totalscore');
    var timer = document.getElementById('timer');
    var count = 0;
    var scoreCount = 0;
    var duration = 0;

    var qa_quest = document.querySelectorAll('.qa_quest');
    var qa_answer = document.querySelectorAll('.qa_quest .qa_answer input');

    var points = Math.round(100 / (qa_quest.length - 1));

    skip.addEventListener('click', function() {
        step();
        duration = 0
        scoreCount -= (points - 10);
        checks_for_points();
    });

    qa_answer.forEach(function(qaAnswerSignle) {
        qaAnswerSignle.addEventListener('click', function() {
            setTimeout(function() {
                step();
                duration = 0;
            }, 300);

            var valid = this.getAttribute('valid');
            if (valid == 'valid') {
                scoreCount += points;
            } else {
                scoreCount -= (points - 10);
            }

            checks_for_points();
        })
    })



    function step() {
        count += 1;
        for (var i = 0; i < qa_quest.length; i++) {
            qa_quest[i].className = 'qa_quest';
        }
        console.log(qa_quest[count]);
        console.log(qa_quest);
        qa_quest[count].className = 'qa_quest active';
        if (count == qa_quest.length - 1) {
            skip.style.display = 'none';
            document.getElementById('qa_box').style.height = '6em';
            clearInterval(durationTime);
            timer.style.display = 'none'

            var xmlhttp = new XMLHttpRequest();
            var today = new Date();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    // document.getElementById('totalscore').innerHTML = xmlhttp.responseText
                }
            }
            xmlhttp.open("POST", "php/send_score.php?diff=" + "1" + "&score=" + scoreCount + "&date=" + today, true);
            xmlhttp.send();

        }
    }

    var durationTime = setInterval(function() {
        if (duration == 0) {
            duration = 20;
        }
        duration -= 1;
        timer.innerHTML = duration;
        if (timer.innerHTML == "0") {
            step();
            scoreCount -= (points - 10);
            checks_for_points();
        }
    }, 1000)

    function checks_for_points() {
        if (scoreCount == 99) scoreCount = 100;
        if (scoreCount > 100) scoreCount = 100;
        if (scoreCount < 0) scoreCount = 0;
        score.innerHTML = scoreCount;
        totalScore.innerHTML = scoreCount;
    }
}
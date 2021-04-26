var skip= document.getElementById('skip');
var score= document.getElementById('score');
var totalScore= document.getElementById('totalscore');
var timer= document.getElementById('timer');
var count=0;
var scoreCount=0;
var duration=0;

var qa_quest = document.querySelectorAll('.qa_quest');
var qa_answer = document.querySelectorAll('.qa_quest .qa_answer input');

skip.addEventListener('click',function(){
    step();
    duration=0
    scoreCount-=15;
    score.innerHTML=scoreCount;
    totalScore.innerHTML = scoreCount;
});

qa_answer.forEach(function(qaAnswerSignle){
    qaAnswerSignle.addEventListener('click',function(){
        setTimeout(function(){
            step();
            duration=0;
        },300);

        var valid = this.getAttribute('valid');
        if(valid == 'valid'){
            scoreCount+=20;
        }
        else{
            scoreCount-=15;
        }
        score.innerHTML=scoreCount;
        totalScore.innerHTML = scoreCount;
    })
})

function step(){
    count+=1;
    for(var i=0;i<qa_quest.length;i++){
        qa_quest[i].className='qa_quest';
    }
    qa_quest[count].className='qa_quest active';
    if(count==3){
        skip.style.display='none';
        document.getElementById('qa_box').style.height='6em';
        clearInterval(durationTime);
        timer.style.display='none'
    }
}

var durationTime = setInterval(function(){
    if(duration==0){
        duration=10;
    }
    duration-=1;
    timer.innerHTML=duration;
    if(timer.innerHTML =="0"){
        step();
        scoreCount-=15;
        score.innerHTML=scoreCount;
        totalScore.innerHTML = scoreCount;
    }
},1000)
var skip= document.getElementById('skip');
console.log(skip)
var score= document.getElementById('score');
var totalScore= document.getElementById('totalscore');
var timer= document.getElementById('timer');
var count=0;
var scoreCount=0;
var duration=0;

var qa_quest = document.querySelectorAll('.qa_quest');
var qa_answer = document.querySelectorAll('.qa_quest .qa_answer input');

skip.addEventListener('click',function(){
    step()
})

function step(){
    count+=1;
    for(var i=0;i<qa_quest.length;i++){
        qa_quest[i].className='qa_quest';
    }
    qa_quest[count].className='qa_quest active';
    if(count==5){
        skip.style.display='none';

    }
}
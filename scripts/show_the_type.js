var type1 = document.getElementById('type1');
var type2 = document.getElementById('type2');
var type3 = document.getElementById('type3');

var flagtype1 = true;
var flagtype2 = true;
var flagtype3 = true;


function display() {
    createElementMultiple();

    type1.addEventListener('click', function() {
        if (flagtype1) {
            //gia na min jana emfanizete
            destroyTrueFalse();
            destroyTextArea()
            createElementMultiple();

        }
    });
    type2.addEventListener('click', function() {

        if (flagtype2) {
            destroyElementMultiple()
            destroyTextArea()
            createTrueFalse();
        }
        //createElementMultiple();pollaplis
    });
    type3.addEventListener('click', function() {
        if (flagtype3) {
            destroyElementMultiple()
            destroyTrueFalse();
            createTextArea();
        }

    });

}

function createTextArea() {
    flagtype3 = false;

    var question = document.createElement('div');
    question.className = 'question';
    question.id = 'question';

    var name_of_quest = document.createElement('p');
    name_of_quest.innerHTML = 'Ερώτηση';

    quest_in = document.createElement('input');
    quest_in.className = 'ans';
    quest_in.type = 'text';
    quest_in.name = 'quest';

    question.appendChild(name_of_quest);
    question.appendChild(quest_in);

    var name_of_quest = document.createElement('p');
    name_of_quest.innerHTML = 'Απαντηση';
    name_of_quest.id = 'textarea'

    var textarea = document.createElement('input');
    textarea.type = 'text';
    textarea.id = 'textarea'
    textarea.name = 'textarea'
    textarea.className = 'ans'
    textarea.style.height = '100px'

    diff = dyskolia();

    var submit = document.createElement('input');
    submit.type = 'submit'
    submit.id = 'submit'

    document.getElementById('inside_form').appendChild(question);
    document.getElementById('inside_form').appendChild(name_of_quest);
    document.getElementById('inside_form').appendChild(textarea);
    document.getElementById('inside_form').appendChild(diff);
    document.getElementById('inside_form').appendChild(submit);
}


function destroyTextArea() {
    flagtype3 = true;
    var question = document.getElementById('question');
    var submit = document.getElementById('submit');
    var dyskolia = document.getElementById('dyskolia');
    if (question)
        question.remove();
    if (submit)
        submit.remove();

    var name_of_quest = document.getElementById('textarea')
    if (name_of_quest)
        name_of_quest.remove();

    var textarea = document.getElementById('textarea')
    if (textarea)
        textarea.remove();
    if (dyskolia)
        dyskolia.remove();

}

function createTrueFalse() {
    flagtype2 = false;

    var question = document.createElement('div');
    question.className = 'question';
    question.id = 'question';

    var name_of_quest = document.createElement('p');
    name_of_quest.innerHTML = 'Ερώτηση';

    quest_in = document.createElement('input');
    quest_in.className = 'ans';
    quest_in.type = 'text';
    quest_in.name = 'quest';


    question.appendChild(name_of_quest);
    question.appendChild(quest_in);

    var valid = document.createElement('p');
    valid.innerHTML = 'True or False';
    valid.id = 'valid'


    var select = document.createElement('select');
    select.setAttribute('aria-label', 'valid');
    select.name = 'valid';
    select.className = 'valid';
    select.id = 'select';
    select.title = 'valid';

    var option = document.createElement('option');
    option.className = 'option';
    option.setAttribute("value", "1");
    option.innerHTML = 'True';

    select.appendChild(option)

    var option = document.createElement('option');
    option.className = 'option';
    option.setAttribute("value", "2");
    option.innerHTML = 'False';

    select.appendChild(option)

    var submit = document.createElement('input');
    submit.type = 'submit'
    submit.id = 'submit'

    diff = dyskolia();

    document.getElementById('inside_form').appendChild(question);
    document.getElementById('inside_form').appendChild(valid);
    document.getElementById('inside_form').appendChild(select);
    document.getElementById('inside_form').appendChild(diff);
    document.getElementById('inside_form').appendChild(submit);

}

function dyskolia() {
    var diff = document.createElement('div');
    diff.className = 'dyskolia';
    diff.id = 'dyskolia'


    Easy = document.createElement('h4');
    Easy.innerHTML = 'Easy';
    diff.appendChild(Easy)

    var easy_input = document.createElement('input');
    easy_input.name = 'diff';
    easy_input.value = '1';
    easy_input.checked = true;
    easy_input.type = 'radio';
    diff.appendChild(easy_input)

    Medium = document.createElement('h4');
    Medium.innerHTML = 'Medium';
    diff.appendChild(Medium)
    var med_input = document.createElement('input');
    med_input.name = 'diff';
    med_input.value = '2';
    med_input.checked = true;
    med_input.type = 'radio';
    diff.appendChild(med_input)

    hard = document.createElement('h4');
    hard.innerHTML = 'Hard';
    diff.appendChild(hard)
    var hard_input = document.createElement('input');
    hard_input.name = 'diff';
    hard_input.value = '3';
    hard_input.checked = true;
    hard_input.type = 'radio';
    diff.appendChild(hard_input)
    return diff;
}

function destroyTrueFalse() {
    flagtype2 = true;
    var question = document.getElementById('question');
    var select = document.getElementById('select');
    var valid = document.getElementById('valid');
    var submit = document.getElementById('submit');
    var dyskolia = document.getElementById('dyskolia');

    if (question)
        question.remove();
    if (select)
        select.remove();
    if (valid)
        valid.remove();
    if (submit)
        submit.remove();
    if (dyskolia)
        dyskolia.remove();

}

function destroyElementMultiple() {

    var question = document.getElementById('question');
    var select = document.getElementById('select');
    var valid = document.getElementById('valids');
    var submit = document.getElementById('submit');
    var dyskolia = document.getElementById('dyskolia');
    var apantisis = document.getElementById('apantisis');

    if (question)
        question.remove();
    if (select)
        select.remove();
    if (valid)
        valid.remove();
    if (submit)
        submit.remove();
    if (apantisis)
        apantisis.remove();
    if (dyskolia)
        dyskolia.remove();

    flagtype1 = true;

}

function createElementMultiple() {
    flagtype1 = false;
    //Header
    var question = document.createElement('div');
    question.className = 'question';
    question.id = 'question';

    var name_of_quest = document.createElement('p');
    name_of_quest.innerHTML = 'Ερώτηση';

    quest_in = document.createElement('input');
    quest_in.className = 'ans';
    quest_in.type = 'text';
    quest_in.name = 'quest';

    question.appendChild(name_of_quest);
    question.appendChild(quest_in);

    // input
    var apantisis = document.createElement('div');
    apantisis.className = 'apantisis';
    apantisis.id = 'apantisis';

    createAns(apantisis, 1);
    createAns(apantisis, 2);
    createAns(apantisis, 3);
    createAns(apantisis, 4);

    var valid = document.createElement('p');
    valid.innerHTML = 'Valid Question';
    valid.id = 'valids'

    var select = document.createElement('select');
    select.setAttribute('aria-label', 'valid');
    select.name = 'valid';
    select.className = 'valid';
    select.id = 'select';
    select.title = 'valid';

    createOption(select, 1)
    createOption(select, 2)
    createOption(select, 3)
    createOption(select, 4)

    diff = dyskolia();

    var submit = document.createElement('input');
    submit.id = 'submit'
    submit.type = 'submit'

    document.getElementById('inside_form').appendChild(question);
    document.getElementById('inside_form').appendChild(apantisis);
    document.getElementById('inside_form').appendChild(valid);
    document.getElementById('inside_form').appendChild(select);
    document.getElementById('inside_form').appendChild(diff);
    document.getElementById('inside_form').appendChild(submit);
}

function createOption(select, id) {
    var option = document.createElement('option');
    option.className = 'option';
    option.setAttribute("value", id);
    option.innerHTML = id;
    select.appendChild(option);
}

function createAns(apantisis, id) {
    var name = document.createElement('p');
    name.innerHTML = 'απάντηση ' + id;

    var quest = document.createElement('input');
    quest.className = 'ans';
    quest.type = 'text';
    quest.name = 'ans' + id;

    apantisis.appendChild(name);
    apantisis.appendChild(quest)
}
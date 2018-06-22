//if we click on the start/reset
    //if we are playing
        //reload page
    //if we are not playing
        //show countdown box
        //reduce time by 1 sec in loops
            //timeleft?
                //yes-->continue
                //no-->gameover
            //change button to reset
            //generate new Q&A

//if we click on answer box
    //if we are playing
        //correct?
            //yes?
                //increase score
                //show correct box for 1 sec
                //generate new Q&A
            //no?
                //show tryagain box for 1 sec
var start_box = document.getElementById("startreset");
start_box.innerHTML = "Start Game";
var time_value = document.getElementById("timeremaingingvalue");
var over_box = document.getElementById("gameOver");
var time_box = document.getElementById("timeremaining");
var x;
var q = document.getElementById("question");
var score = document.getElementById("scorevalue");
score.innerHTML = 0;
function start_reset() {
    if (start_box.innerHTML == "Start Game") {
        x = 15;
        question_base();
        over_box.style.display = "none";
        score.innerHTML = 0;
        start_box.innerHTML = "Reset Game";
        time_box.style.display = "inline";
    } else if(start_box.innerHTML == "Reset Game") {
        start_box.innerHTML = "Start Game";
        clearInterval(myCounter);
        time_value.innerHTML = 15;
        time_box.style.display = "none";
        score.innerHTML = 0;
        document.getElementById(box_name_choose).onclick = function () {
            return false;
        }
    }
}
function count_time() {
    myCounter = setInterval(function () {
        if (x>=0) {
            time_value.innerHTML = x; x--
        } else if(x < 0) {
            over_box.style.display = "inline";
            document.getElementById("score_value").innerHTML = score.innerHTML;
            start_box.innerHTML = "Start Game"
            clearInterval(myCounter);
        }
    }, 1000)
}
function question_base() {
    var q_array = [];
    for (i=1; i<=9; i++) {
        for(j=1; j<=9; j++) {
            var num_q = i + 'x' + j;
            q_array.push(num_q);
        }
    }
    var ran = parseInt(Math.random()*81);
    q.innerHTML = q_array[ran];
    answer_generator();
}
function answer_generator() {
    //calculate the answer
    var answer_top = q.innerHTML.slice(0,1);
    var answer_end = q.innerHTML.slice(2);
    var a_mul = answer_top * answer_end;
    //put answer in random place
    var box_name = ["box1", "box2", "box3", "box4"];
    box_name_choose = box_name[parseInt(Math.random()*box_name.length)];
    document.getElementById(box_name_choose).innerHTML = a_mul;
    document.getElementById(box_name_choose).onclick = function () {
        click_right();
    }
    console.log(box_name_choose);
    //set the value of the rest boxes
    var box_minus = [];
    for (i=0; i<box_name.length; i++) {
        if (box_name[i] != box_name_choose)
            box_minus.push(box_name[i]);
    }
    for (i=0; i<box_minus.length; i++) {
        var rest = box_minus[i];
        document.getElementById(rest).innerHTML = parseInt(Math.random() * 81);
        if (document.getElementById(rest).innerHTML == a_mul) {
            document.getElementById(rest).innerHTML += 1;
        }
        document.getElementById(rest).onclick = function () {
            click_wrong()
        }
    }
    count_time()
}
//if right add score
function click_right() {
    var int_score = Number(score.innerHTML);
    int_score += 1;
    score.innerHTML = int_score;
    document.getElementById(box_name_choose).onclick = function () {
        return false;
    }
    clearInterval(myCounter);
    x = 15;
    document.getElementById("correct").style.display = "inline";
    window.setTimeout(right_conceal, 1000);
}
function right_conceal(){
    document.getElementById("correct").style.display = "none";
    question_base();
}
//if wrong try
function click_wrong() {
    document.getElementById("wrong").style.display = "inline";
    window.setTimeout(wrong_conceal, 1000);
}
function wrong_conceal(){
    document.getElementById("wrong").style.display = "none";
}







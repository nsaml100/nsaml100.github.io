if (document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}else {
    ready()
}
function ready() {
    var submit = document.getElementsByClassName('btn-submit')
    console.log(submit)
    for (var i = 0; i < submit.length; i++) {
        var button = submit[i]
        button.addEventListener('click', submitEvent)
    }
}
function submitEvent(event) {
    var button = event.target;
    var flashcard = button.parentElement.parentElement;
    var submission = flashcard.getElementsByClassName('submission')[0].value;
    var answer = flashcard.getElementsByClassName('answer')[0].innerHTML;
    if(submission === answer){
        flashcard.getElementsByClassName('answer')[0].style.display = 'block';
        flashcard.getElementsByClassName('answer')[0].style.color = 'green';
        flashcard.getElementsByClassName('btn-submit')[0].style.display = 'none';
    }else{
        flashcard.getElementsByClassName('answer')[0].style.display = 'block';
        flashcard.getElementsByClassName('answer')[0].style.color = 'red';
        flashcard.getElementsByClassName('btn-submit')[0].style.display = 'none';
    }
}
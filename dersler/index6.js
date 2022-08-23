const questions = [
    {//1
        question: "I .......... my exam when the teacher said it ...... over",
        optionA: "had already finished/ was",
        optionB: "had been/was complete",
        optionC: "has / was",
        optionD: "had already finished/ were",
        correctOption: "optionA"
    },
    {//2
        question: "She ....... the flowers before she ......... shopping.",
        optionA: "had watered/go",
        optionB: "has watered/went",
        optionC: "Did water / went",
        optionD: "had watered/ went",
        correctOption: "optionD"
    },
    {//3
        question: "He ........ a pilot for thirty five years when he got retired.",
        optionA: "having been",
        optionB: "has be",
        optionC: "has been",
        optionD: "have been",
        correctOption: "optionC"
    },
    {//4
        question: "She ....... very happy, she ...... a new dress to herself.",
        optionA: "were/had bought",
        optionB: "was/had bought",
        optionC: "was/had buy",
        optionD: "were/ has bought",
        correctOption: "optionB"
    },
    {//5
        question: "I ....... to go the Opera House when I was in Paris.",
        optionA: "had want",
        optionB: "has want",
        optionC: "wanted",
        optionD: "had wanted",
        correctOption: "optionD"
    },
    {//6
        question: "He hadn’t studied to math exam.",
        optionA: "have studied",
        optionB: "had study",
        optionC: "hadn’t studied",
        optionD: "haven't studied",
        correctOption: "optionC"
    },
    {//7
        question: "I .......... the car",
        optionA: "had wash",
        optionB: "has wash",
        optionC: "had washed",
        optionD: "had washing",
        correctOption: "optionC"
    },
    {//8
        question: "He ....... the movie.",
        optionA: "had watch",
        optionB: "has watched",
        optionC: "had watched",
        optionD: "have watched",
        correctOption: "optionC"
    },
    {//9
        question: "It is ........ that she go to school",
        optionA: "go",
        optionB: "necessary",
        optionC: "not go to",
        optionD: "going",
        correctOption: "optionB"
    },
    {//10
        question: "The doctor ........... that he ......... rest as much as possible.",
        optionA: "shouldn't/Recommended",
        optionB: "Recommend/should",
        optionC: "Recommend/shouldn't",
        optionD: "Recommended/should",
        correctOption: "optionD"
    },
    {//11
        question: "If I were you I .......... to bed earlier before the exam",
        optionA: "should have gone",
        optionB: "should have done",
        optionC: "should have fun",
        optionD: "shouldn't have done",
        correctOption: "optionA"
    },
    {//12
        question: " I wish I ...... my picture long ago.",
        optionA: "had finish",
        optionB: "have finished",
        optionC: "had finished",
        optionD: "has finished",
        correctOption: "optionC"
    },
    {//13
        question: "His mother told him to .......... home before 10 pm.",
        optionA: "come",
        optionB: "came",
        optionC: "ceme",
        optionD: "cama",
        correctOption: "optionA"
    },
    {//14
        question: "The advisor gave us ...... that how to get up early",
        optionA: "wish",
        optionB: "advice",
        optionC: "tell",
        optionD: "speak",
        correctOption: "optionB"
    },
    {//15
        question: "The Boss ........ that jobs done on time",
        optionA: "advise",
        optionB: "recommend",
        optionC: "ordered",
        optionD: "order",
        correctOption: "optionC"
    },
    {//16
        question: "She ...... to buy a new computer.",
        optionA: "desired",
        optionB: "okay",
        optionC: "playing",
        optionD: "going",
        correctOption: "optionA"
    },
    {//17
        question: "Jessica ....... is my teacher is from England. ",
        optionA: "when",
        optionB: "who",
        optionC: "what",
        optionD: "that",
        correctOption: "optionB"
    },
    {//18
        question: "Kai ....... is from Japan is my best friend. ",
        optionA: "when",
        optionB: "who",
        optionC: "what",
        optionD: "that",
        correctOption: "optionB"
    },
    {//19
        question: "The bus ......... departs from the coach station at 19:00, goes to Yenikapı.",
        optionA: "Which",
        optionB: "who",
        optionC: "that",
        optionD: "whom",
        correctOption: "optionA"
    },
    {//20
        question: "My friend’s house ........ is detached is blue.",
        optionA: "when",
        optionB: "who",
        optionC: "which",
        optionD: "that",
        correctOption: "optionC"
    },
    {//21
        question: "My shoes ...... we bought last year still seem like new.",
        optionA: "who",
        optionB: "whom",
        optionC: "what",
        optionD: "that",
        correctOption: "optionD"
    },
    {//22
        question: "The girl ..... I saw at the garden is my sister. ",
        optionA: "who",
        optionB: "whom",
        optionC: "what",
        optionD: "that",
        correctOption: "optionB"
    },
    {//23
        question: "The boy ....... car was stolen still could not find the man ..... stole his car. ",
        optionA: "whose/whose",
        optionB: "whose/who",
        optionC: "who/whose",
        optionD: "whom/whose",
        correctOption: "optionB"
    },
    {//24
        question: "This is the picture ...... I drew for you, isn't it?",
        optionA: "which",
        optionB: "whom",
        optionC: "who",
        optionD: "that",
        correctOption: "optionA"
    },
    {//25
        question: "....... Kai keeps in the farm is a cat.",
        optionA: "Who",
        optionB: "When",
        optionC: "Where",
        optionD: "What",
        correctOption: "optionD"
    },
    {//26
        question: "It ...... a dinosaur ....... Hans hunted in the cave last year",
        optionA: "was/that",
        optionB: "where/that",
        optionC: "who/what",
        optionD: "Who/that",
        correctOption: "optionA"
    },
    {//27
        question: "It was Mr Cane ......... left the office early.",
        optionA: "whom",
        optionB: "that",
        optionC: "when",
        optionD: "what",
        correctOption: "optionB"
    },
    {//28
        question: "She was the one ..... is play piano",
        optionA: "that",
        optionB: "whom",
        optionC: "who",
        optionD: "which",
        correctOption: "optionC"
    },
    {//29
        question: "...... left a telephone on the table was Ayşe.",
        optionA: "Who",
        optionB: "When",
        optionC: "What",
        optionD: "That",
        correctOption: "optionA"
    },
    {//30
        question: "........ I need is an honest friend.",
        optionA: "who",
        optionB: "What",
        optionC: "when",
        optionD: "that",
        correctOption: "optionB"
    },
    {//31
        question: "It was a new cafe ...... Helen discovered accidentally.",
        optionA: "what",
        optionB: "Have",
        optionC: "that",
        optionD: "when",
        correctOption: "optionC"
    },
    {//32
        question: "It is a skateboard ........ he always plays with.",
        optionA: "what",
        optionB: "Have",
        optionC: "that",
        optionD: "when",
        correctOption: "optionC"
    },
    {//33
        question: "You should go to our headquarter ....... is in Ankara. ",
        optionA: "which",
        optionB: "where",
        optionC: "what",
        optionD: "who",
        correctOption: "optionA"
    },
    {//34
        question: "Can you please bring me the paper which is on the table? \n cümlesinin indirgenmiş halini seçiniz.",
        optionA: "Can you bring me the paper on the table?",
        optionB: "Can you bring me that paper table?",
        optionC: "Can you bring me which paper on the table?",
        optionD: "Can you bring me what paper on the table?",
        correctOption: "optionA"
    },
    {//35
        question: "The man who is on the phone wants to talk to you.\n cümlesinin indirgenmiş halini seçiniz.",
        optionA: "The man on the phone what wants to talk to you.",
        optionB: "The man on the phone wants to talk to you.",
        optionC: "The man on the phone which wants to talk to you.",
        optionD: "The man on the phone wants to talking to you.",
        correctOption: "optionB"
    },
    {//36
        question: "We had to cancel the meeting which is at 6. \n cümlesinin indirgenmiş halini seçiniz.",
        optionA: "We had to cancel which meeting at 6.",
        optionB: "We had to cancel what meeting at 6.",
        optionC: "We had to cancel the meeting at 6.",
        optionD: "We have to to cancel that meeting at 6.",
        correctOption: "optionC"
    },
    {//37
        question: "The customers who were in the entrance were so angry.\n cümlesinin indirgenmiş halini seçiniz.",
        optionA: "The customers whom in the entrance were so angry.",
        optionB: "The customers in the entrance were so angry.",
        optionC: "The customers which in the entrance were so angry.",
        optionD: "The customers who in the entrance were so angry.",
        correctOption: "optionB"
    },
    {//38
        question: "This is the place where I live. \n cümlesinin indirgenmiş halini seçiniz.",
        optionA: "This is the place who I live.",
        optionB: "This is the place when I live.",
        optionC: "This is the place what I live.",
        optionD: "This is the place I live.",
        correctOption: "optionD"
    },
    {//39
        question: "The guests you were waiting for have come\n cümlesinin indirgenmemiş halini seçiniz.",
        optionA: "The guests what you waiting for have come.",
        optionB: "The guests when you were waiting for have come.",
        optionC: "The guests whom you were waiting for have come.",
        optionD: "The guests whom you waiting for have come.",
        correctOption: "optionC"
    },
    {//40
        question: " I guess I know the man who is sitting there.\n cümlesinin indirgenmiş halini seçiniz.",
        optionA: "I guess I know the man who sit there.",
        optionB: "I guess I know the man sitting there.",
        optionC: "I guess I know the man whom sitting there.",
        optionD: "I guess I know the what sit there.",
        correctOption: "optionB"
    },
]


let shuffledQuestions = [] 

function handleQuestions() { 
    while (shuffledQuestions.length <= 39) {
        const random = questions[Math.floor(Math.random() * questions.length)]
        if (!shuffledQuestions.includes(random)) {
            shuffledQuestions.push(random)
        }
    }
}


let questionNumber = 1 
let playerScore = 0  
let wrongAttempt = 0 
let indexNumber = 0 

function NextQuestion(index) {
    handleQuestions()
    const currentQuestion = shuffledQuestions[index]
    document.getElementById("question-number").innerHTML = questionNumber
    document.getElementById("player-score").innerHTML = playerScore
    document.getElementById("display-question").innerHTML = currentQuestion.question;
    document.getElementById("option-one-label").innerHTML = currentQuestion.optionA;
    document.getElementById("option-two-label").innerHTML = currentQuestion.optionB;
    document.getElementById("option-three-label").innerHTML = currentQuestion.optionC;
    document.getElementById("option-four-label").innerHTML = currentQuestion.optionD;

}


function checkForAnswer() {
    const currentQuestion = shuffledQuestions[indexNumber] 
    const currentQuestionAnswer = currentQuestion.correctOption 
    const options = document.getElementsByName("option"); 
    let correctOption = null

    options.forEach((option) => {
        if (option.value === currentQuestionAnswer) {
            correctOption = option.labels[0].id
        }
    })

    if (options[0].checked === false && options[1].checked === false && options[2].checked === false && options[3].checked == false) {
        document.getElementById('option-modal').style.display = "flex"
    }

    options.forEach((option) => {
        if (option.checked === true && option.value === currentQuestionAnswer) {
            document.getElementById(correctOption).style.backgroundColor = "green"
            playerScore++ 
            indexNumber++ 
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }

        else if (option.checked && option.value !== currentQuestionAnswer) {
            const wrongLabelId = option.labels[0].id
            document.getElementById(wrongLabelId).style.backgroundColor = "red"
            document.getElementById(correctOption).style.backgroundColor = "green"
            wrongAttempt++ 
            indexNumber++
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }
    })
}



function handleNextQuestion() {
    checkForAnswer() 
    unCheckRadioButtons()
    setTimeout(() => {
        if (indexNumber <= 39) {
            NextQuestion(indexNumber)
        }
        else {
            handleEndGame()
        }
        resetOptionBackground()
    }, 1000);
}

function resetOptionBackground() {
    const options = document.getElementsByName("option");
    options.forEach((option) => {
        document.getElementById(option.labels[0].id).style.backgroundColor = ""
    })
}

function unCheckRadioButtons() {
    const options = document.getElementsByName("option");
    for (let i = 0; i < options.length; i++) {
        options[i].checked = false;
    }
}


function handleEndGame() {
    let remark = null
    let remarkColor = null

    if (playerScore <= 10) {
        remark = "Kötü Puan, Tekrar Yapmaya Devam Edin."
        remarkColor = "red"
    }
    else if (playerScore >= 11 && playerScore < 25) {
        remark = "Ortalama Puan, Daha İyisini Yapabilirsiniz."
        remarkColor = "orange"
    }
    else if (playerScore >= 25) {
        remark = "Mükkemmel Puan, Bu Şekilde Deavam Et."
        remarkColor = "green"
    }
    const playerGrade = (playerScore / 40) * 100

    
    document.getElementById('remarks').innerHTML = remark
    document.getElementById('remarks').style.color = remarkColor
    document.getElementById('grade-percentage').innerHTML = playerGrade
    document.getElementById('wrong-answers').innerHTML = wrongAttempt
    document.getElementById('right-answers').innerHTML = playerScore
    document.getElementById('score-modal').style.display = "flex"//

}


function closeScoreModal() {
    questionNumber = 1
    playerScore = 0
    wrongAttempt = 0
    indexNumber = 0
    shuffledQuestions = []
    NextQuestion(indexNumber)
    document.getElementById('score-modal').style.display = "none"
}


function closeOptionModal() {
    document.getElementById('option-modal').style.display = "none"
}
const questions = [
    {//1
        question: "She came ....... a while",
        optionA: "after",
        optionB: "before",
        optionC: "as",
        optionD: "as soon as",
        correctOption: "optionA"
    },

    {//2
        question: "My sister and I have been living in Tokyo ........ 2017.",
        optionA: "as long as",
        optionB: "during",
        optionC: "now",
        optionD: "since",
        correctOption: "optionD"
    },

    {//3
        question: "We always take a break ..... noon",
        optionA: "at",
        optionB: "on",
        optionC: "it",
        optionD: "in",
        correctOption: "optionA"
    },

    {//4
        question: "Kai: Mommy! Where is my blue coat? \n Mom: Your coat is ..... the closet! ",
        optionA: "on",
        optionB: "at",
        optionC: "in",
        optionD: "where",
        correctOption: "optionC"
    },
    
    {//5
        question: "Kediler ile dolu bir bahçeye gittik",
        optionA: "We went to a garden full of cat",
        optionB: "We went to a garden full of cattes",
        optionC: "We went to a garden full of cats",
        optionD: "We went to a garden full of catties",
        correctOption: "optionC"
    },

    {//6
        question: "Yüz Yeşil Elma",
        optionA: "One Hundered Yellow Apples",
        optionB: "Hundered Green Apples",
        optionC: "Hundered Green Apple",
        optionD: "Thousant Green Apples",
        correctOption: "optionB"
    },

    {//7
        question: "I saw a .... castle in my dream",
        optionA: "Big",
        optionB: "door",
        optionC: "bigger",
        optionD: "bigfully",
        correctOption: "optionA"
    },

    {//8
        question: "It is a ...... weather.",
        optionA: "beautifully",
        optionB: "well",
        optionC: "nice",
        optionD: "whale",
        correctOption: "optionC"
    },

    {//9
        question: "I am ....",
        optionA: "bored",
        optionB: "boring",
        optionC: "shocking",
        optionD: "exciting",
        correctOption: "optionA"
    },

    {//10
        question: "I ....... every summer.",
        optionA: "swim",
        optionB: "doesn't swim",
        optionC: "swims",
        optionD: "swimming",
        correctOption: "optionA"
    },

    {//11
        question: "I run ...... morning ",
        optionA: "every",
        optionB: "morning",
        optionC: "night",
        optionD: "Cucumber",
        correctOption: "optionA"
    },

    {//12
        question: "She is not the kind of person who .......... tidies her room.",
        optionA: "never",
        optionB: "any",
        optionC: "ever",
        optionD: "always",
        correctOption: "optionD"
    },

    {//13
        question: "I ..... eat meat",
        optionA: "never",
        optionB: "always not",
        optionC: "not always",
        optionD: "yesterday",
        correctOption: "optionA"
    },

    {//14
        question: "She ...... sleep every morning. She is a early bird.",
        optionA: "does",
        optionB: "doesn't",
        optionC: "dos not",
        optionD: "do not",
        correctOption: "optionB"
    },

    {//15
        question: "What ...... you ..... to Kai for his birthday?",
        optionA: "did/give",
        optionB: "does/give",
        optionC: "did/gives",
        optionD: "do/giving",
        correctOption: "optionA"
    },

    {//16
        question: "We .......... to school yesterday.",
        optionA: "didn't go",
        optionB: "did goes",
        optionC: "are going",
        optionD: "didn't goes",
        correctOption: "optionA"
    },

    {//17
        question: "I ..... in the Japan last year",
        optionA: "go",
        optionB: "do",
        optionC: "did",
        optionD: "does",
        correctOption: "optionC"
    },

    {//18
        question: "She ....... at home before heavyrain start.",
        optionA: "were",
        optionB: "did",
        optionC: "was",
        optionD: "does",
        correctOption: "optionC"
    },

    {//19
        question: "They  in the room while this happening",
        optionA: "was",
        optionB: "weren't",
        optionC: "did",
        optionD: "do",
        correctOption: "optionB"
    },

    {//20
        question: ".... they in the room yesterday?",
        optionA: "Were",
        optionB: "When",
        optionC: "who",
        optionD: "Was",
        correctOption: "optionA"
    },

    {//21
        question: "Kai speaks Japanese very ......, \nbeacuse his native language is Japanese. ",
        optionA: "good",
        optionB: "bad",
        optionC: "worst",
        optionD: "well",
        correctOption: "optionD"
    },

    {//22
        question: "She can ...... hear you",
        optionA: "hard",
        optionB: "welly",
        optionC: "hardly",
        optionD: "good",
        correctOption: "optionC"
    },

    {//23
        question: "She put the book in the ......",
        optionA: "bookshelf",
        optionB: "booker",
        optionC: "bottle",
        optionD: "booked",
        correctOption: "optionA"
    },

    {//24
        question: "Şu masaya oturalım.",
        optionA: "let's sit at that table.",
        optionB: "let's sit at this book.",
        optionC: "let's sit at this chair.",
        optionD: "let's sit at this sofa.",
        correctOption: "optionA"
    },

    {//25
        question: "I bought this book yesterday. \n...... book is about a girl who lost in the forest",
        optionA: "a",
        optionB: "the",
        optionC: "an",
        optionD: "nothing",
        correctOption: "optionB"
    },

    {//26
        question: "She came with ..... pink bracelet",
        optionA: "a",
        optionB: "an",
        optionC: "the",
        optionD: "nothing",
        correctOption: "optionA"
    },

    {//27
        question: "When she come home, we will go to a ...... for drink coffee.",
        optionA: "cafe",
        optionB: "airport",
        optionC: "dentist",
        optionD: "butcher",
        correctOption: "optionA"
    },

    {//28
        question: "I'm going to take her from .......\n When she lands in Turkey",
        optionA: "airport",
        optionB: "cafe",
        optionC: "market",
        optionD: "bank",
        correctOption: "optionA"
    },

    {//29
        question: "Ne zaman seyahate çıkacaksın?",
        optionA: "When will you go on a trip?",
        optionB: "When did you go on a trip?",
        optionC: "When do you go on a trip?",
        optionD: "When does you go on a trip?",
        correctOption: "optionA"
    },

    {//30
        question: "Taksim is a very ....... place",
        optionA: "tea",
        optionB: "clock",
        optionC: "weekdays",
        optionD: "touristic",
        correctOption: "optionD"
    },

    {//31
        question: "I like ...... go to the cinema",
        optionA: "he",
        optionB: "to",
        optionC: "do",
        optionD: "so",
        correctOption: "optionB"
    },

    {//32
        question: "Do you want ...... drink tea?",
        optionA: "to",
        optionB: "so",
        optionC: "do",
        optionD: "yo",
        correctOption: "optionA"
    },

    {//33
        question: "İnsanlar hasta olmayı sevmezler.",
        optionA: "People do like to be sick.",
        optionB: "Person don't like to be sick..",
        optionC: "Persons don't like to be sick.",
        optionD: "People don't like to be sick.",
        correctOption: "optionD"
    },

    {//34
        question: "Person",
        optionA: "bir insan",
        optionB: "insanlar",
        optionC: "hayvan",
        optionD: "çiçek",
        correctOption: "optionA"
    },

    {//35
        question: "My coat stuck ......... door and wall.",
        optionA: "always",
        optionB: "and",
        optionC: "but",
        optionD: "between",
        correctOption: "optionD"
    },

    {//36
        question: "Her zaman markete giden kişi ben olurum",
        optionA: "I sometimes the one who is going to the market",
        optionB: "I seldom the one who is going to the market",
        optionC: "I hardlyever the one who is going to the market",
        optionD: "I always the one who is going to the market",
        correctOption: "optionD"
    },

    {//37
        question: "pembe kalem",
        optionA: "pink pencil",
        optionB: "pencil pink",
        optionC: "yellow pencil",
        optionD: "pencil yellow",
        correctOption: "optionA"
    },

    {//38
        question: "Green book",
        optionA: "Yeşil kalem",
        optionB: "yeşil telefon",
        optionC: "Yeşil kitap",
        optionD: "mor elma",
        correctOption: "optionC"
    },

    {//39
        question: "I need to go to doctor, ........ my head aches.",
        optionA: "because",
        optionB: "and",
        optionC: "so",
        optionD: "as",
        correctOption: "optionA"
    },

    {//40
        question: "His voice so .........",
        optionA: "beautiful ",
        optionB: "beautifully",
        optionC: "best",
        optionD: "bestest",
        correctOption: "optionA"
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
    setCookie("sonSkor",playerScore,7);
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
    window.location.href="test.php";
}

function closeScoreModal() {
    // questionNumber = 1
    // playerScore = 0
    // wrongAttempt = 0
    // indexNumber = 0
    // shuffledQuestions = []
    // NextQuestion(indexNumber)
    // document.getElementById('score-modal').style.display = "none"
}

function closeOptionModal() {
    document.getElementById('option-modal').style.display = "none"
}
function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

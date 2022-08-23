const questions = [
    {//1
        question: "Everybody (complete) ........ this form in pencil!",
        optionA: "shall complete",
        optionB: "was complete",
        optionC: "completed",
        optionD: "completing",
        correctOption: "optionA"
    },
    {//2
        question: "........ I (see) ........ you again?",
        optionA: "Will / see",
        optionB: "When / saw",
        optionC: "Did / see",
        optionD: "Had/see",
        correctOption: "optionA"
    },
    {//3
        question: "Careless driving ........ many drivers their ives, I think.",
        optionA: "can cost",
        optionB: "would cost",
        optionC: "will cost",
        optionD: "should cost",
        correctOption: "optionC"
    },
    {//4
        question: "I've just seen the film! It's electrifying! It ........ everybody as much as me!",
        optionA: "can electrify",
        optionB: "will electrify",
        optionC: "could electrify",
        optionD: "would electrify",
        correctOption: "optionB"
    },
    {//5
        question: "If you ........ to enjoy your stay in a foreign country you ........ some of its popular dishes.",
        optionA: "want / will try",
        optionB: "had wanted / should try",
        optionC: "wanted / will try",
        optionD: "want / should try",
        correctOption: "optionD"
    },
    {//6
        question: "If Alice has a chance to see him again, she ........ him everything.",
        optionA: "would tell",
        optionB: "had told",
        optionC: "will tell",
        optionD: "tell",
        correctOption: "optionC"
    },
    {//7
        question: "Water ........ if temperature ........ below 0°C.",
        optionA: "freezess / will go",
        optionB: "will freeze / goes",
        optionC: "freezes / goes",
        optionD: "is freezing / goes",
        correctOption: "optionC"
    },
    {//8
        question: "They ........ for that policitian in every election if they didn't think he was an honest man.",
        optionA: "would vote",
        optionB: "wouldn't vote",
        optionC: "voted",
        optionD: "vote",
        correctOption: "optionB"
    },
    {//9
        question: "Let's ........ go to work today!",
        optionA: "don't",
        optionB: "not",
        optionC: "we",
        optionD: "they",
        correctOption: "optionB"
    },
    {//10
        question: "Children! ........ noise!",
        optionA: "Make",
        optionB: "You don't make",
        optionC: "Makes",
        optionD: "Don't make",
        correctOption: "optionD"
    },
    {//11
        question: "Aşağıdaki cümlelerden hangisi doğrudur?",
        optionA: "Never drink fizzy drinks!",
        optionB: "Drink never fizzy drinks!",
        optionC: "Drink fizzy drinks never!",
        optionD: "Drink fizzy never drinks!",
        correctOption: "optionA"
    },
    {//12
        question: "They swim only once a year. They ........ swim.",
        optionA: "often",
        optionB: "sometimes",
        optionC: "usually",
        optionD: "hardly ever",
        correctOption: "optionC"
    },
    {//13
        question: "I never watch Telly, so I ........ see Telly commercials.",
        optionA: "never",
        optionB: "often",
        optionC: "always",
        optionD: "usually",
        correctOption: "optionA"
    },
    {//14
        question: "My brother saw a doctor couple years ago. He is ........ sick.",
        optionA: "never",
        optionB: "seldom",
        optionC: "always",
        optionD: "often",
        correctOption: "optionB"
    },
    {//15
        question: "I get up at 7:00 on weekdays. I ........ get up early.",
        optionA: "never",
        optionB: "rarely",
        optionC: "usually",
        optionD: "always",
        correctOption: "optionC"
    },
    {//16
        question: "The children ........ (play) outside now.",
        optionA: "played",
        optionB: "plays",
        optionC: "are playing",
        optionD: "were playing",
        correctOption: "optionC"
    },
    {//17
        question: "My mother usually ........ (cook) dinner in the evening.",
        optionA: "cooked",
        optionB: "cooks",
        optionC: "have cooken",
        optionD: "is cooking",
        correctOption: "optionB"
    },
    {//18
        question: "He ........ (write) a letter to his pen-friend every week.",
        optionA: "writes",
        optionB: "writing",
        optionC: "wrote",
        optionD: "have written",
        correctOption: "optionA"
    },
    {//19
        question: "They ........ (watch) film now.",
        optionA: "is watching",
        optionB: "are watching",
        optionC: "watched",
        optionD: "were watching",
        correctOption: "optionB"
    },
    {//20
        question: "'To Condemn' fiilinin eş anlamlısı?",
        optionA: "to magnify",
        optionB: "to vanish",
        optionC: "to sentence",
        optionD: "to misconceive",
        correctOption: "optionC"
    },
    {//21
        question: "'The greediness is part of the infant's 'compulsion' to seek for a cure from the mother who caused the deprivation' \n Compulsion?",
        optionA: "alienate",
        optionB: "curt",
        optionC: "dissent",
        optionD: "urge",
        correctOption: "optionD"
    },
    {//22
        question: "Backbone kelimesinin eş anlamlısı?",
        optionA: "immense",
        optionB: "spine",
        optionC: "bottom",
        optionD: "bendy",
        correctOption: "optionB"
    },
    {//23
        question: "'Whatever she cooks is always tasty.' Tast?",
        optionA: "awful",
        optionB: "delicious",
        optionC: "happy",
        optionD: "unhappy",
        correctOption: "optionB"
    },
    {//24
        question: "From my point of view, our sales will increase next year.",
        optionA: "Benim görüşüme göre satışlarımız önümüzdeki yıl artacak.",
        optionB: "Benim görüşüme göre satışlarımız by yıl artacak.",
        optionC: "Benim görüşüme göre önümüzdeki yıl artacak satışımız.",
        optionD: "Onun görüşüne göre satışlarımız önümüzdeki yıl artacak.",
        correctOption: "optionA"
    },
    {//25
        question: "Brand",
        optionA: "Meblağ",
        optionB: "Taşıma, nakliye",
        optionC: "Ücret, masraf",
        optionD: "Marka",
        correctOption: "optionD"
    },
    {//26
        question: "The bottom line is that our company shouldn’t make an investment in that firm.",
        optionA: "Sonuç olarak şirketimiz o firma üzerine yatırım yapmamalıdır.",
        optionB: "Uzun vadede üretimle ilgili tereddütlerim var.",
        optionC: "Ben reporumu tamamladım, top sende şimdi.",
        optionD: "Benim görüşüme göre satışlarımız önümüzdeki yıl artacak.",
        correctOption: "optionA"
    },
    {//27
        question: "This company (import) ........ coffee from Brazil before we did?  ",
        optionA: "has this company imported",
        optionB: "had this company imported",
        optionC: "had this company import",
        optionD: "have this company imported",
        correctOption: "optionB"
    },
    {//28
        question: "........ Jack (not paint) ........ before his parents returned from work? ",
        optionA: "Have / paint",
        optionB: "Hasn't / paint",
        optionC: "Hadn't / painted",
        optionD: "Had / paint",
        correctOption: "optionC"
    },
    {//29
        question: "She said she ........ a noise from the basement.",
        optionA: "had hear",
        optionB: "had heared",
        optionC: "had herd",
        optionD: "had heard",
        correctOption: "optionD"
    },
    {//30
        question: "My mother still ........ the dinner by the time we came back home.",
        optionA: "hadn’t cook",
        optionB: "hadn’t cooked",
        optionC: "had cook",
        optionD: "had cooked",
        correctOption: "optionB"
    },
    {//31
        question: "........ how far the workers on strike (march) ........ by that time?",
        optionA: "Has / march",
        optionB: "Have / marched",
        optionC: "Had / marched",
        optionD: "Has / marching",
        correctOption: "optionC"
    },
    {//32
        question: "I (not know) ........ about the test because no one (tell) ........ me about it.",
        optionA: "didn't know / had told",
        optionB: "hadn't know / tell",
        optionC: "didn't know / tell",
        optionD: "hadn't know / had told",
        correctOption: "optionA"
    },
    {//33
        question: "On 16th of May, I ......... attend a meeting.",
        optionA: "am going to",
        optionB: "are going to",
        optionC: "will be",
        optionD: "was going to",
        correctOption: "optionA"
    },
    {//34
        question: "Shh! The baby is sleeping, you ........ .",
        optionA: "are going to wake her up",
        optionB: "are going to call her",
        optionC: "are going to snow",
        optionD: "are going to",
        correctOption: "optionA"
    },
    {//35
        question: "George ........ go to school tomorrow.",
        optionA: "was going to",
        optionB: "is going to",
        optionC: "are going to",
        optionD: "be going to be",
        correctOption: "optionB"
    },
    {//36
        question: "Leo ........ pass through an operation next month",
        optionA: "am going to",
        optionB: "are going to",
        optionC: "is going to",
        optionD: "going to",
        correctOption: "optionC"
    },
    {//37
        question: "Which is the correct reply? : Are you going to meet Leyla?",
        optionA: "Yes, she is.",
        optionB: "Yes I am.",
        optionC: "Yes, we are.",
        optionD: "Yes, he is.",
        correctOption: "optionB"
    },
    {//38
        question: "On 16th of May, I ........ attend a meeting.",
        optionA: "is going to",
        optionB: "will be",
        optionC: "are going to",
        optionD: "am going to",
        correctOption: "optionD"
    },
    {//39
        question: "When Mary joined us we (finish) ........ talking about her some time before.",
        optionA: "finished",
        optionB: "has finished",
        optionC: "had finished",
        optionD: "have finished",
        correctOption: "optionC"
    },
    {//40
        question: "I wish we ........ at a better hotel. That one was a nightmare.",
        optionA: "has stay",
        optionB: "had stayed",
        optionC: "have staying",
        optionD: "had stay",
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
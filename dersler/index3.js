const questions = [
    {//1
        question: "I bought ........ yesterday.",
        optionA: "I",
        optionB: "You",
        optionC: "It",
        optionD: "Its",
        correctOption: "optionC"
    },
    {//2
        question: "At lunchtime, Berk wanted ........ to sit next to him.",
        optionA: "me",
        optionB: "you",
        optionC: "I",
        optionD: "they",
        correctOption: "optionA"
    },
    {//3
        question: "Why did you visit ........?",
        optionA: "him",
        optionB: "hes",
        optionC: "he",
        optionD: "you",
        correctOption: "optionA"
    },
    {//4
        question: "They were mostly brave as ........",
        optionA: "our",
        optionB: "us",
        optionC: "his",
        optionD: "we",
        correctOption: "optionB"
    },
    {//5
        question: "Everyone enjoys the party, except ........",
        optionA: "his",
        optionB: "she",
        optionC: "we",
        optionD: "her",
        correctOption: "optionD"
    },
    {//6
        question: "Harrison was trying to repair the copying machine, but he was very desperate. Now, it seems that he ........ it as it is working.",
        optionA: "was able to repair",
        optionB: "could repair",
        optionC: "might be repairing",
        optionD: "will have repaired",
        correctOption: "optionA"
    },
    {//7
        question: "Greg speaks Arabic ........ that some people mistake him for a native speaker.",
        optionA: "fluent enough",
        optionB: "so fluently",
        optionC: "too fluently",
        optionD: "such a fluent",
        correctOption: "optionB"
    },
    {//8
        question: "Team sport",
        optionA: "Takım sporları",
        optionB: "Eğitim almak",
        optionC: "Sporcu",
        optionD: "Spor sahası",
        correctOption: "optionA"
    },
    {//9
        question: "She thought he was too ........ to realize that.",
        optionA: "more stupid",
        optionB: "stupid",
        optionC: "most stupid",
        optionD: "stupider",
        correctOption: "optionB"
    },
    {//10
        question: "It had been one of the ........ days of her life.",
        optionA: "horrible",
        optionB: "more horrible",
        optionC: "most horrible",
        optionD: "horriblest",
        correctOption: "optionC"
    },
    {//11
        question: "She cooks ........ than most people, but not ........ my mother.",
        optionA: "well enough / better than",
        optionB: "too good / so well as",
        optionC: "so well / as good as",
        optionD: "better / as well as",
        correctOption: "optionD"
    },
    {//12
        question: "Although the atmosphere isn’t quite ........ it used to be, restaurants and cafes have opened on the new Galata Bridge.",
        optionA: "the same as",
        optionB: "such as",
        optionC: "much like",
        optionD: "as much as",
        correctOption: "optionA"
    },
    {//13
        question: "I / not see / Harun / since 2009",
        optionA: "I haven't saw Harun since 2009",
        optionB: "I didn't see Harun since 2009",
        optionC: "I haven't seen Harun since 2009",
        optionD: "I haven't seed Harun since 2009",
        correctOption: "optionC"
    },
    {//14
        question: "Arielle ...... never ...... a bag of chips before.",
        optionA: "has / try",
        optionB: "have / tried",
        optionC: "has / tried",
        optionD: "have / try",
        correctOption: "optionC"
    },
    {//15
        question: "They ...... ...... a theft.",
        optionA: "has / witness",
        optionB: "have / witnessed",
        optionC: "has / witnessed",
        optionD: "have / witness",
        correctOption: "optionB"
    },
    {//16
        question: "She is not going to the cinema because (she / already / see / that film)",
        optionA: "She has already seed that film",
        optionB: "She has already saw that film",
        optionC: "She already saw that film",
        optionD: "She has already seen that film",
        correctOption: "optionD"
    },
    {//17
        question: "She cant help ........ people advice even when they havent asked for any.",
        optionA: "offer",
        optionB: "to have offered",
        optionC: "having offered",
        optionD: "offering",
        correctOption: "optionD"
    },
    {//18
        question: "Upon seeing the condition of the car, we were relieved ........ a more serious accident",
        optionA: "to have avoided",
        optionB: "being avoided",
        optionC: "avoiding",
        optionD: "to be avoided",
        correctOption: "optionA"
    },
    {//19
        question: "Three firemen had to come out of the blazing warehouse for fear ........ by the smoke.",
        optionA: "to be suffocated",
        optionB: "of being suffocated",
        optionC: "to have suffocated",
        optionD: "having suffocated",
        correctOption: "optionB"
    },
    {//20
        question: "One of the best forms of exercise is ...... because it uses a lot of muscles without ...... any of them.",
        optionA: "to be swimming / having strained",
        optionB: "to have swum / strained",
        optionC: "swimming / straining",
        optionD: "to swim / being strained",
        correctOption: "optionC"
    },
    {//21
        question: "You can hurt ........ while putting up a bookshelf.",
        optionA: "you",
        optionB: "your",
        optionC: "yours",
        optionD: "yourselves",
        correctOption: "optionD"
    },
    {//22
        question: "Timothy and Geralt, if you want more milk, help ........",
        optionA: "ourselves",
        optionB: "yourself",
        optionC: "yourselves",
        optionD: "myself",
        correctOption: "optionA"
    },
    {//23
        question: "They blamed ........ for being late in applying.",
        optionA: "they",
        optionB: "their",
        optionC: "themselves",
        optionD: "theirs",
        correctOption: "optionC"
    },
    {//24
        question: "If you  ........ , you ........ old early",
        optionA: "smoked / got",
        optionB: "smoke / get",
        optionC: "smoke / got",
        optionD: "smoked / get",
        correctOption: "optionB"
    },
    {//25
        question: "If you improve your English, you ........ films without subtitles. (to watch)",
        optionA: "watched",
        optionB: "will watch",
        optionC: "would watch",
        optionD: "watch",
        correctOption: "optionB"
    },
    {//26
        question: "If I hadn’t fallen from the tree, I ........ my arm. (not to broke)",
        optionA: "wouldn’t have broken",
        optionB: "not to broke",
        optionC: "won’t broke",
        optionD: "not broke",
        correctOption: "optionA"
    },
    {//27
        question: "Which word is closest in meaning to 'polite'?",
        optionA: "charming",
        optionB: "sincere",
        optionC: "courteous",
        optionD: "nice",
        correctOption: "optionC"
    },
    {//28
        question: "What do you call the children who badly behave because they're normally given everything they want?",
        optionA: "spoilt",
        optionB: "selfish",
        optionC: "reliable",
        optionD: "self-confident",
        correctOption: "optionA"
    },
    {//29
        question: "What's the opposite of 'clever?'",
        optionA: "intelligent",
        optionB: "mean",
        optionC: "extrovert",
        optionD: "stupid",
        correctOption: "optionD"
    },
    {//30
        question: "When I looked at my watch some time ago, it was 12:15. Now it still is 12:15. It ........ down.",
        optionA: "should have broken",
        optionB: "must be breaking",
        optionC: "ought to be broken",
        optionD: "must have broken",
        correctOption: "optionD"
    },
    {//31
        question: "It is defined in the constitution that all citizens ........ their taxes.",
        optionA: "have had to pay",
        optionB: "should be paid",
        optionC: "have to pay",
        optionD: "must be paying",
        correctOption: "optionC"
    },
    {//32
        question: "When I got stuck in a traffic jam this morning, I got off the bus and ........ to catch my first class.",
        optionA: "had to run",
        optionB: "have had to run",
        optionC: "could have run",
        optionD: "should have run",
        correctOption: "optionA"
    },
    {//33
        question: "Summer",
        optionA: "Yaz",
        optionB: "Tepe",
        optionC: "Gökyüzü",
        optionD: "Gezegen",
        correctOption: "optionA"
    },
    {//34
        question: "Forest",
        optionA: "Kuş",
        optionB: "Yeryüzü",
        optionC: "Orman",
        optionD: "Uçurum",
        correctOption: "optionC"
    },
    {//35
        question: "Kemal : Why does he do sports everyday ? \n Mustafa : .......... .",
        optionA: "Twice a week",
        optionB: "Because he doesn't want a healthy life",
        optionC: "He doesn't do sports",
        optionD: "Because he wants to be healthy",
        correctOption: "optionD"
    },
    {//36
        question: "A : .......... ? \n B : I have a stomachache.",
        optionA: "Where are you going",
        optionB: "What' s wrong with you",
        optionC: "Can I go home",
        optionD: "Who is at the hospital",
        correctOption: "optionB"
    },
    {//37
        question: "Which of the following is the display device that magnifies and reflects the image on PC or TV to a wall or a screen?",
        optionA: "Monitor",
        optionB: "Projection",
        optionC: "Scanner",
        optionD: "Camera",
        correctOption: "optionB"
    },
    {//38
        question: "Crafts",
        optionA: "Gerçekçi",
        optionB: "Yetenek",
        optionC: "Pozisyon",
        optionD: "El Sanatları",
        correctOption: "optionD"
    },
    {//39
        question: "Stacy has got a ........ headache.",
        optionA: "terrible",
        optionB: "good",
        optionC: "best",
        optionD: "useful",
        correctOption: "optionA"
    },
    {//40
        question: "Mehmet likes snowboarding.",
        optionA: "Mehmet futbol oynamayı sever.",
        optionB: "Mehmet karda kaymayı sever.",
        optionC: "Mehmet karda kaymayı sevmez.",
        optionD: "Mehmet futbol oynamayı sevmez.",
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
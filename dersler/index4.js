const questions = [
    {//1
        question: "If she doesn't ...... the job, someone else will.",
        optionA: "accept",
        optionB: "declain",
        optionC: "no",
        optionD: "yes",
        correctOption: "optionA"
    },
    {//2
        question: "Hangisi bir fiil değildir?",
        optionA: "Accept",
        optionB: "do",
        optionC: "Beautiful",
        optionD: "study",
        correctOption: "optionC"
    },
    {//3
        question: "If you are not ....., you are not able to pass your exams",
        optionA: "studying",
        optionB: "accept",
        optionC: "do",
        optionD: "sleep",
        correctOption: "optionA"
    },
    {//4
        question: "I .... going to school right now.",
        optionA: "was",
        optionB: "am",
        optionC: "were",
        optionD: "is",
        correctOption: "optionB"
    },
    {//5
        question: "Sara ...... want to be a part of the group. \n Because she can not get along with them.",
        optionA: "does",
        optionB: "do",
        optionC: "is",
        optionD: "doesn't",
        correctOption: "optionD"
    },
    {//6
        question: "...... you play piano?",
        optionA: "do",
        optionB: "does",
        optionC: "is",
        optionD: "am",
        correctOption: "optionA"
    },
    {//7
        question: "My little sister adopted a ........... cat.",
        optionA: "month",
        optionB: "three",
        optionC: "old",
        optionD: "three-month-old",
        correctOption: "optionD"
    },
    {//8
        question: "She is a well-known lawyer.",
        optionA: "O bir tanınmış avukattır",
        optionB: "O bir tanınmış doktordur",
        optionC: "O bir tanınmış sporcudur",
        optionD: "O güzel bir avukattır",
        correctOption: "optionA"
    },
    {//9
        question: "She gave me her “don’t you dare” look.",
        optionA: "cümle birleşik sıfat içerir",
        optionB: "cümle birleşik sıfat içermez",
        optionC: "cümlede iki birleşik sıfat vardır.",
        optionD: "cümlede 3 birleşik sıfat vardır.",
        correctOption: "optionA"
    },
    {//10
        question: "Hangisi tahmin kipi içeren bir cümledir?",
        optionA: "I believe, I will pass my exams.",
        optionB: "It's beautiful",
        optionC: "that bad",
        optionD: "Are you sure?",
        correctOption: "optionA"
    },
    {//11
        question: "I ......., this is not the right answer.",
        optionA: "good",
        optionB: "well",
        optionC: "best",
        optionD: "Think",
        correctOption: "optionD"
    },
    {//12
        question: "Tahmin etmek",
        optionA: "I guess",
        optionB: "very well",
        optionC: "good for you",
        optionD: "have a nice day",
        correctOption: "optionA"
    },
    {//13
        question: "I mean, why don't we do something?",
        optionA: "Demek istemediğim, neden bir şeyler yapmıyoruz?",
        optionB: "bir şeyler neden yapmıyoruz?",
        optionC: "demek istediğim, neden bir şeyler yapmıyoruz?",
        optionD: "demek istediğim, neden bir şeyler yapıyoruz?",
        correctOption: "optionC"
    },
    {//14
        question: "Okay, now let's take a break.",
        optionA: "Tamam, şimdi bir ara almayalım",
        optionB: "tamam değil, bir ara verelim",
        optionC: "Tamam, şimdi bir ara verelim",
        optionD: "pekiyi, ara vermeyelim.",
        correctOption: "optionC"
    },
    {//15
        question: "Very well",
        optionA: "pek kötü",
        optionB: "pek iyi",
        optionC: "harika değil",
        optionD: "kötü",
        correctOption: "optionB"
    },
    {//16
        question: "Hangisi bir ortaçtır?",
        optionA: "The world",
        optionB: "The heart",
        optionC: "The book",
        optionD: "The Boiled Water",
        correctOption: "optionD"
    },
    {//17
        question: "The student who is standing there has failed. \n Bu cümlenin ortaçlı hali hangisidir?",
        optionA: "The student who standing there has failed.",
        optionB: "The standing there has failed.",
        optionC: "The student stand there has fail.",
        optionD: "The student standing there has failed.",
        correctOption: "optionD"
    },
    {//18
        question: "Hangisi bir ortaçlı cümledir?",
        optionA: "The old lady living in this building is her grandmother.",
        optionB: "The old lady who lives in this building is her grandmother.",
        optionC: "The old lady live in this building is her grandmother.",
        optionD: "The old lady lives in this build is her grandmother.",
        correctOption: "optionA"
    },
    {//19
        question: "Hangisi ön ek alarak türemiştir.",
        optionA: "acceptable",
        optionB: "unacceptable",
        optionC: "beautifully",
        optionD: "good",
        correctOption: "optionB"
    },
    {//20
        question: "Hangisi ön ek alan bir kelimedir?",
        optionA: "comfortable",
        optionB: "regular",
        optionC: "uncomfortable",
        optionD: "dispose",
        correctOption: "optionC"
    },
    {//21
        question: "Hangisi ön ek almıştır?",
        optionA: "Polite",
        optionB: "Regular",
        optionC: "Entity",
        optionD: "Irregular",
        correctOption: "optionD"
    },
    {//22
        question: "Many hands make light work.",
        optionA: "Bir elin nesi var iki elin sesi var",
        optionB: "Ne ekersen onu biçersın.",
        optionC: "Büyük lokma ye büyük konuşma",
        optionD: "Demir tavanda dövülür",
        correctOption: "optionA"
    },
    {//23
        question: "Honesty is the best policy.",
        optionA: "Kötü gün dostu",
        optionB: "Günde bir elma doktoru uzak tutar.",
        optionC: "Dürüstlük en iyi yoldur",
        optionD: "kötü olma iyi ol",
        correctOption: "optionC"
    },
    {//24
        question: "Do not judge a book by its cover",
        optionA: "kitabı kapağına göre yargıla",
        optionB: "kitabı kapağına göre yargılama",
        optionC: "kitabın kapakları çok güzeldir",
        optionD: "kitabın kapağını açmadan içindekini bilemezsin",
        correctOption: "optionB"
    },
    {//25
        question: "Maria: “Have you seen my new clippers?” Maria wanted to know if I ........ seen her new clippers.\n ",
        optionA: "have",
        optionB: "had",
        optionC: "has",
        optionD: "having",
        correctOption: "optionB"
    },
    {//26
        question: "Alex: Tidy your room. \n Alex told his daughter ....... her room  ",
        optionA: "to tidy",
        optionB: "tidying",
        optionC: "tidy",
        optionD: "not tidy",
        correctOption: "optionA"
    },
    {//27
        question: "Don't Stay up late! mother told me not ...... late.",
        optionA: "to night",
        optionB: "stay night",
        optionC: "to stay up",
        optionD: "stay up",
        correctOption: "optionC"
    },
    {//28
        question: "I wish, I was able to do my homework on time.",
        optionA: "Keşke ödevimi zamanında yapabilseydim",
        optionB: "keşke ödevimi zamanında yapmasaydım ",
        optionC: "Ödevimi zamanında yapmak istiyorum",
        optionD: "Ödevi yapmadım",
        correctOption: "optionA"
    },
    {//29
        question: "....... I hadn't bought that bike.",
        optionA: "I wish",
        optionB: "able to",
        optionC: "do ",
        optionD: "does",
        correctOption: "optionB"
    },
    {//30
        question: "Keşke arkadaşım burada olsa",
        optionA: "I wish where is he",
        optionB: "I wish I was able to meet her",
        optionC: "I wish my friend here",
        optionD: "I wish my friend were here",
        correctOption: "optionD"
    },
    {//31
        question: "....... I was able to ......., because I am an all nighter.",
        optionA: "wish/go",
        optionB: "I wish/wish",
        optionC: "I wish/sleep",
        optionD: "sleep/I wish",
        correctOption: "optionC"
    },
    {//32
        question: "In front of the tree was sitting a cat.",
        optionA: "Ağacının önünde bir kedi oturuyor",
        optionB: "Kedi önünde ağaç",
        optionC: "ağaç oturuyor kedi önünde",
        optionD: "kedi koşuyor ağaçla",
        correctOption: "optionA"
    },
    {//33
        question: " Over that shelf was your book.",
        optionA: "Rafın üzerindeki senin kitabın",
        optionB: "Rafın üzerindeki senin telefonun",
        optionC: "Rafın üzerindeki senin kolyen",
        optionD: "Rafın üzerindeki senin eşyan.",
        correctOption: "optionA"
    },
    {//34
        question: "........ the truth, I wouldn’t have treated Kai that way",
        optionA: "have I know",
        optionB: "has I known",
        optionC: "Had I known",
        optionD: "had I know",
        correctOption: "optionC"
    },
    {//35
        question: "Someone are outside. Cümledeki uyumsuzluğu gideriniz.",
        optionA: "are---> am",
        optionB: "someone--->someones",
        optionC: "outside--->inside",
        optionD: "are---> is",
        correctOption: "optionD"
    },
    {//36
        question: "Nobody know, what I feel. Cümledeki uyumsuzluğu giderin.",
        optionA: "nobody--->allbody",
        optionB: "know----knows",
        optionC: "feel ----felt",
        optionD: "what ---- who",
        correctOption: "optionB"
    },
    {//37
        question: "She ...... a doctor.",
        optionA: "am",
        optionB: "is",
        optionC: "are",
        optionD: "was",
        correctOption: "optionB"
    },
    {//38
        question: "which one is a metaphore ",
        optionA: "a glass of water",
        optionB: "rollercoaster of emotions",
        optionC: "he should drink cold water",
        optionD: "I am green",
        correctOption: "optionB"
    },
    {//39
        question: "Kai ....... that;the test ....... difficult ",
        optionA: "says/is",
        optionB: "is/are",
        optionC: "do say/are",
        optionD: "does say/is",
        correctOption: "optionA"
    },
    {//40
        question: "She said ........ wanted to bring her children.",
        optionA: "he",
        optionB: "his",
        optionC: "her",
        optionD: "she",
        correctOption: "optionD"
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
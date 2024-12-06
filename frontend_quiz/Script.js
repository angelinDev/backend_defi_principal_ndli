// Quiz data
const quizData = [
  {
    question: "What is the largest ocean on Earth?",
    options: [
      "Atlantic Ocean",
      "Indian Ocean",
      "Arctic Ocean",
      "Pacific Ocean",
    ],
    correct: 3,
  },
  {
    question: "Which sea creature has three hearts?",
    options: ["Shark", "Octopus", "Whale", "Dolphin"],
    correct: 1,
  },
];

let currentQuestion = 0;
let failures = 0;

const questionElement = document.getElementById("question");
const answerButtons = document.querySelectorAll(".answer-btn");
const feedbackElement = document.getElementById("feedback");

const gabagges = document.querySelectorAll(".gabagge");

// Display the current question
function showQuestion() {
  const questionData = quizData[currentQuestion];
  questionElement.textContent = questionData.question;

  answerButtons.forEach((button, index) => {
    button.textContent = questionData.options[index];
    button.onclick = () => checkAnswer(index);
  });
}

// Check the selected answer
function checkAnswer(selectedIndex) {
  const questionData = quizData[currentQuestion];
  if (selectedIndex === questionData.correct) {
    feedbackElement.textContent = "Correct!";
    feedbackElement.style.color = "green";
    currentQuestion++;

    if (currentQuestion < quizData.length) {
      showQuestion();
    } else {
      questionElement.textContent = "Quiz Completed!";
      document.getElementById("answers").style.display = "none";
    }
  } else {
    feedbackElement.textContent = "Wrong! Try again.";
    feedbackElement.style.color = "red";
    feedbackElement.classList.add("animated");

    gabagges.forEach((gabagge) => {
        gabagge.classList.add("animated");
    });

    failures++;
    // applyGreenFilter();
  }
}

// Apply a progressively darker green filter on failure
function applyGreenFilter() {
  const filterStrength = Math.min(failures * 0.1, 0.9); // Caps at 90% filter strength
  document.body.style.filter = `brightness(${
    1 - filterStrength
  }) hue-rotate(120deg) saturate(1.5)`;
}

// Initialize quiz
showQuestion();

<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Awesome Quiz App | CodingNepal</title>
  <!-- Linking CSS for styling the quiz app -->
  <link rel="stylesheet" href="style.css">
  <!-- FontAwesome CDN Link for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
  <!-- Start Quiz Button -->
  <div class="start_btn"><button>Start Quiz</button></div>
  <!-- Info Box (displayed when the quiz starts) -->
  <div class="info_box">
    <div class="info-title"><span>Some Rules of this Quiz</span></div>
    <div class="info-list">
      <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
      <div class="info">2. Once you select your answer, it can't be undone.</div>
      <div class="info">3. You can't select any option once time goes off.</div>
      <div class="info">4. You can't exit from the Quiz while you're playing.</div>
      <div class="info">5. You'll get points on the basis of your correct answers.</div>
    </div>
    <div class="buttons">
      <button class="quit">Exit Quiz</button>
      <button class="restart">Continue</button>
    </div>
  </div>
  <!-- Quiz Box (main container for the quiz) -->
  <div class="quiz_box">
    <header>
      <div class="title">Quiz Application</div>
      <div class="timer">
        <div class="time_left_txt">Time Left</div>
        <div class="timer_sec">300</div>
      </div>
      <div class="time_line"></div>
    </header>
    <section>
      <div class="que_text">
        <!-- Question text will be inserted here by JavaScript -->
      </div>
      <div class="option_list">
        <!-- Options will be inserted here by JavaScript -->
      </div>
    </section>
    <!-- Footer of Quiz Box -->
    <footer>
      <div class="total_que">
        <!-- Question count number will be inserted here by JavaScript -->
      </div>
      <button class="next_btn">Next</button>
    </footer>
  </div>
  <!-- Result Box (displayed after completing the quiz) -->
  <div class="result_box">
    <div class="icon">
      <i class="fas fa-crown"></i>
    </div>
    <div class="complete_text">You've completed the Quiz!</div>
    <div class="score_text">
      <!-- Score result will be inserted here by JavaScript -->
    </div>
    <div class="buttons">
      <!-- <button class="restart">Replay Quiz</button> -->
      <button class="quit">Quit Quiz</button>
    </div>
  </div>
  <!-- JavaScript file for managing questions and options -->
  <script src="questions.js"></script>
  <!-- JavaScript file containing all quiz logic -->
  <script src="script.js"></script>
</body>
</html>
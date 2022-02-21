<?php

// Check if the score is given. If it is, continue. Otherwise stop the script.
if (!isset($_POST['score'])) {
    die("No score given.");
  exit;
}

// Convert score value to a number.
$score = intval($_POST['score']);

if ($score >= 95 and $score <= 100) {
  echo "A+";
} 
if ($score >= 85 and $score < 95) {
  echo "A";
}
 if($score >= 75 and $score < 85) {
  echo "A-";
}
if ($score >= 70 and $score < 75) {
  echo "B+";
} 
if ($score >= 60 and $score < 70) {
  echo "B";
} 
if ($score >= 55 and $score < 60) {
  echo "B-";
} 
if ($score >= 50 and $score < 55) {
  echo "C+";
} 
if ($score >= 45 and $score < 50) {
  echo "C";
} 
if ($score >= 40 and $score < 45) {
  echo "C-";
} 
if ($score >= 35 and $score < 40) {
  echo "D+";
}
 if($score  >= 30 and $score < 35) {
  echo "D";
}
 if($score  < 30) {
  echo "E";
}

exit;

?>
<?php
require_once '../config/database.php';

$courseId = $_GET['course_id'];
$stmt = $pdo->prepare("SELECT * FROM quizzes WHERE course_id = :course_id");
$stmt->execute(['course_id' => $courseId]);
$quizzes = $stmt->fetchAll();
?>

<h1>Quiz</h1>

<?php foreach ($quizzes as $quiz): ?>
    <h3><?php echo $quiz['question']; ?></h3>
    <ul>
        <li>A: <?php echo $quiz['option_a']; ?></li>
        <li>B: <?php echo $quiz['option_b']; ?></li>
        <li>C: <?php echo $quiz['option_c']; ?></li>
        <li>D: <?php echo $quiz['option_d']; ?></li>
    </ul>
<?php endforeach; ?>

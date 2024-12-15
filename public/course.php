<?php
require_once '../config/database.php';

$courseId = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM courses WHERE id = :id");
$stmt->execute(['id' => $courseId]);
$course = $stmt->fetch();
?>

<h1><?php echo $course['title']; ?></h1>
<p><?php echo $course['description']; ?></p>

<a href="quiz.php?course_id=<?php echo $course['id']; ?>">Take Quiz</a>

<?php
session_start();
function e($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
$result = null; $error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id=trim($_POST['student_id']??''); $name=trim($_POST['name']??''); $class=trim($_POST['class_name']??''); $score=filter_var($_POST['score']??'',FILTER_VALIDATE_INT);
if($id!=='' && $name!=='' && $class!=='' && $score!==false && $score>=0 && $score<=100){$_SESSION['students'][]=['ID'=>$id,'Name'=>$name,'Class'=>$class,'Score'=>$score];$result=['Saved'=>'Student added to this session','Student ID'=>$id,'Name'=>$name,'Class'=>$class,'Score'=>$score];}else{$error='Please enter valid student details.';}
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student Management | PHP Form Lab</title>
<link rel="stylesheet" href="../assets/style.css">
<script defer src="../assets/app.js"></script>
</head>
<body>
<main class="wrap">
  <div class="top"><div><div class="brand">PHP FORM LAB · PROJECT 10</div><div class="muted">Learn by building</div></div><span class="pill">PHP + CSS + JavaScript</span></div>
  <h1>Student Management</h1><p class="lead">Add a student record and list records during this session. Submit the form to see PHP process and validate your data.</p>
  <div class="layout">
    <section class="card">
      <h2>✦ Enter your details</h2>
      <form method="POST" novalidate>
        <div class="fields">
          <div class="field"><label>Student ID</label><input name="student_id" required></div>
<div class="field"><label>Full name</label><input name="name" required></div>
<div class="field"><label>Class</label><input name="class_name" required></div>
<div class="field"><label>Score (0-100)</label><input name="score" type="number" min="0" max="100" required></div>
        </div>
        <div class="actions"><button type="submit">Submit form ↗</button><a class="btn" href="../index.html">All projects</a></div>
      </form>
      <?php if ($error): ?><div class="result error"><strong>Check your input</strong><br><?= e($error) ?></div><?php endif; ?>
      <?php if ($result): ?>
        <div class="result"><strong>✓ Result</strong>
          <?php foreach ($result as $key=>$value): ?><div><strong><?= e($key) ?>:</strong> <?= e($value) ?></div><?php endforeach; ?>
        </div>
      <?php endif; ?>
    </section>
    <aside class="card">
      <h2>Project guide</h2><div class="stat">10/10</div>
      <p class="muted">Session-only list; use MySQL and PDO for permanent storage.</p>
      <h2 style="margin-top:24px">What you practise</h2>
      <ul class="list"><li>HTML form fields</li><li>PHP <code>$_POST</code></li><li>Server-side validation</li><li>Safe output with <code>htmlspecialchars()</code></li><li>Responsive CSS and JavaScript</li></ul>
      <span class="tag">Beginner friendly</span><span class="tag">Responsive UI</span>
    </aside>
  </div>
  <footer>Built for practice · PHP Form Lab</footer>
</main>
</body></html>

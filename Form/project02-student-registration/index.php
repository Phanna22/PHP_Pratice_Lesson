<?php
session_start();
function e($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
$result = null; $error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id=trim($_POST['student_id']??''); $name=trim($_POST['name']??''); $email=filter_var($_POST['email']??'',FILTER_VALIDATE_EMAIL); $phone=trim($_POST['phone']??''); $major=$_POST['major']??'';
if($id!=='' && $name!=='' && $email && preg_match('/^[0-9+ -]{8,18}$/',$phone) && $major!==''){ $result=['Student ID'=>$id,'Name'=>$name,'Email'=>$email,'Phone'=>$phone,'Major'=>$major]; } else {$error='Check the student details and try again.';}
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student Registration | PHP Form Lab</title>
<link rel="stylesheet" href="../assets/style.css">
<script defer src="../assets/app.js"></script>
</head>
<body>
<main class="wrap">
  <div class="top"><div><div class="brand">PHP FORM LAB · PROJECT 02</div><div class="muted">Learn by building</div></div><span class="pill">PHP + CSS + JavaScript</span></div>
  <h1>Student Registration</h1><p class="lead">Register a student with contact and course details. Submit the form to see PHP process and validate your data.</p>
  <div class="layout">
    <section class="card">
      <h2>✦ Enter your details</h2>
      <form method="POST" novalidate>
        <div class="fields">
          <div class="field"><label>Student ID</label><input name="student_id" required maxlength="20"></div>
<div class="field"><label>Full name</label><input name="name" required maxlength="80"></div>
<div class="field"><label>Email</label><input name="email" type="email" required></div>
<div class="field"><label>Phone</label><input name="phone" required pattern="[0-9+ -]{8,18}"></div>
<div class="field full"><label>Major</label><select name="major" required><option value="">Select major</option><option>Web Development</option><option>Networking</option><option>Graphic Design</option><option>Business</option></select></div>
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
      <h2>Project guide</h2><div class="stat">02/10</div>
      <p class="muted">Registration summary. Data is not saved to a database yet.</p>
      <h2 style="margin-top:24px">What you practise</h2>
      <ul class="list"><li>HTML form fields</li><li>PHP <code>$_POST</code></li><li>Server-side validation</li><li>Safe output with <code>htmlspecialchars()</code></li><li>Responsive CSS and JavaScript</li></ul>
      <span class="tag">Beginner friendly</span><span class="tag">Responsive UI</span>
    </aside>
  </div>
  <footer>Built for practice · PHP Form Lab</footer>
</main>
</body></html>

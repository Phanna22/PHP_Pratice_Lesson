<?php
session_start();
function e($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
$result = null; $error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name=trim($_POST['name']??''); $email=filter_var($_POST['email']??'',FILTER_VALIDATE_EMAIL); $phone=preg_replace('/\D/','',$_POST['phone']??''); $age=filter_var($_POST['age']??'',FILTER_VALIDATE_INT); $password=$_POST['password']??'';
$issues=[]; if($name==='')$issues[]='Name is required'; if(!$email)$issues[]='Email is invalid'; if(strlen($phone)<8||strlen($phone)>15)$issues[]='Phone must contain 8-15 digits'; if($age===false||$age<18||$age>100)$issues[]='Age must be 18-100'; if(strlen($password)<8)$issues[]='Password must be at least 8 characters';
if(!$issues){$result=['Validation'=>'All checks passed','Name'=>$name,'Email'=>$email,'Phone'=>$phone,'Age'=>$age,'Password'=>'Accepted (not displayed)'];}else{$error=implode(' • ',$issues);}
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Form Validation Lab | PHP Form Lab</title>
<link rel="stylesheet" href="../assets/style.css">
<script defer src="../assets/app.js"></script>
</head>
<body>
<main class="wrap">
  <div class="top"><div><div class="brand">PHP FORM LAB · PROJECT 09</div><div class="muted">Learn by building</div></div><span class="pill">PHP + CSS + JavaScript</span></div>
  <h1>Form Validation Lab</h1><p class="lead">Practice server-side validation rules. Submit the form to see PHP process and validate your data.</p>
  <div class="layout">
    <section class="card">
      <h2>✦ Enter your details</h2>
      <form method="POST" novalidate>
        <div class="fields">
          <div class="field"><label>Full name</label><input name="name" required></div>
<div class="field"><label>Email</label><input name="email" type="email" required></div>
<div class="field"><label>Phone (8-15 digits)</label><input name="phone" required></div>
<div class="field"><label>Age (18+)</label><input name="age" type="number" min="18" max="100" required></div>
<div class="field full"><label>Password (8+ characters)</label><input name="password" type="password" minlength="8" required></div>
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
      <h2>Project guide</h2><div class="stat">09/10</div>
      <p class="muted">Shows which validation rules passed or failed.</p>
      <h2 style="margin-top:24px">What you practise</h2>
      <ul class="list"><li>HTML form fields</li><li>PHP <code>$_POST</code></li><li>Server-side validation</li><li>Safe output with <code>htmlspecialchars()</code></li><li>Responsive CSS and JavaScript</li></ul>
      <span class="tag">Beginner friendly</span><span class="tag">Responsive UI</span>
    </aside>
  </div>
  <footer>Built for practice · PHP Form Lab</footer>
</main>
</body></html>

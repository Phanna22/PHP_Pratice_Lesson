<?php
session_start();
function e($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
$result = null; $error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name=trim($_POST['name']??''); $email=filter_var($_POST['email']??'',FILTER_VALIDATE_EMAIL); $password=$_POST['password']??''; $confirm=$_POST['confirm']??'';
if($name!=='' && $email && strlen($password)>=8 && hash_equals($password,$confirm)){ $result=['Name'=>$name,'Email'=>$email,'Password'=>'Valid (not displayed or stored)','Security'=>'A real app should store password_hash($password, PASSWORD_DEFAULT).']; }else{$error='Enter a name, valid email, password of 8+ characters, and matching confirmation.';}
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Registration | PHP Form Lab</title>
<link rel="stylesheet" href="../assets/style.css">
<script defer src="../assets/app.js"></script>
</head>
<body>
<main class="wrap">
  <div class="top"><div><div class="brand">PHP FORM LAB · PROJECT 05</div><div class="muted">Learn by building</div></div><span class="pill">PHP + CSS + JavaScript</span></div>
  <h1>User Registration</h1><p class="lead">Validate a new account's details and password confirmation. Submit the form to see PHP process and validate your data.</p>
  <div class="layout">
    <section class="card">
      <h2>✦ Enter your details</h2>
      <form method="POST" novalidate>
        <div class="fields">
          <div class="field"><label>Full name</label><input name="name" required maxlength="80"></div>
<div class="field"><label>Email</label><input name="email" type="email" required></div>
<div class="field"><label>Password</label><input name="password" type="password" minlength="8" required></div>
<div class="field"><label>Confirm password</label><input name="confirm" type="password" minlength="8" required></div>
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
      <h2>Project guide</h2><div class="stat">05/10</div>
      <p class="muted">Shows validation only. It does not create or save an account.</p>
      <h2 style="margin-top:24px">What you practise</h2>
      <ul class="list"><li>HTML form fields</li><li>PHP <code>$_POST</code></li><li>Server-side validation</li><li>Safe output with <code>htmlspecialchars()</code></li><li>Responsive CSS and JavaScript</li></ul>
      <span class="tag">Beginner friendly</span><span class="tag">Responsive UI</span>
    </aside>
  </div>
  <footer>Built for practice · PHP Form Lab</footer>
</main>
</body></html>

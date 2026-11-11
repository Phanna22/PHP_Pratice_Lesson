<?php
session_start();
function e($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
$result = null; $error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a=filter_var($_POST['a']??'',FILTER_VALIDATE_FLOAT); $b=filter_var($_POST['b']??'',FILTER_VALIDATE_FLOAT); $op=$_POST['op']??'';
if($a!==false && $b!==false){ if($op==='+' )$answer=$a+$b; elseif($op==='-')$answer=$a-$b; elseif($op==='*')$answer=$a*$b; elseif($op==='/' && $b!=0)$answer=$a/$b; else $error='Invalid operation or division by zero.'; } else {$error='Enter two valid numbers.';}
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Smart Calculator | PHP Form Lab</title>
<link rel="stylesheet" href="../assets/style.css">
<script defer src="../assets/app.js"></script>
</head>
<body>
<main class="wrap">
  <div class="top"><div><div class="brand">PHP FORM LAB · PROJECT 03</div><div class="muted">Learn by building</div></div><span class="pill">PHP + CSS + JavaScript</span></div>
  <h1>Smart Calculator</h1><p class="lead">Calculate two numbers using a selected operator. Submit the form to see PHP process and validate your data.</p>
  <div class="layout">
    <section class="card">
      <h2>✦ Enter your details</h2>
      <form method="POST" novalidate>
        <div class="fields">
          <div class="field"><label>First number</label><input name="a" type="number" step="any" required></div>
<div class="field"><label>Operator</label><select name="op"><option value="+">Add (+)</option><option value="-">Subtract (−)</option><option value="*">Multiply (×)</option><option value="/">Divide (÷)</option></select></div>
<div class="field full"><label>Second number</label><input name="b" type="number" step="any" required></div>
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
      <h2>Project guide</h2><div class="stat">03/10</div>
      <p class="muted">Result is calculated on the server with division-by-zero protection.</p>
      <h2 style="margin-top:24px">What you practise</h2>
      <ul class="list"><li>HTML form fields</li><li>PHP <code>$_POST</code></li><li>Server-side validation</li><li>Safe output with <code>htmlspecialchars()</code></li><li>Responsive CSS and JavaScript</li></ul>
      <span class="tag">Beginner friendly</span><span class="tag">Responsive UI</span>
    </aside>
  </div>
  <footer>Built for practice · PHP Form Lab</footer>
</main>
</body></html>

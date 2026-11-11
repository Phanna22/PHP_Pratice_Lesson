<?php
session_start();
function e($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
$result = null; $error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer=trim($_POST['customer']??''); $product=$_POST['product']??''; $prices=['Notebook'=>3.5,'USB Drive'=>8,'Keyboard'=>18]; $qty=filter_var($_POST['qty']??'',FILTER_VALIDATE_INT); $ship=filter_var($_POST['shipping']??'',FILTER_VALIDATE_FLOAT);
if($customer!=='' && isset($prices[$product]) && $qty!==false && $qty>=1 && $qty<=50 && ($ship===0.0||$ship===4.0)){ $sub=$prices[$product]*$qty; $result=['Customer'=>$customer,'Product'=>$product,'Quantity'=>$qty,'Subtotal'=>'$'.number_format($sub,2),'Shipping'=>'$'.number_format($ship,2),'Total'=>'$'.number_format($sub+$ship,2)]; }else{$error='Please check the order details.';}
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Product Order Form | PHP Form Lab</title>
<link rel="stylesheet" href="../assets/style.css">
<script defer src="../assets/app.js"></script>
</head>
<body>
<main class="wrap">
  <div class="top"><div><div class="brand">PHP FORM LAB · PROJECT 08</div><div class="muted">Learn by building</div></div><span class="pill">PHP + CSS + JavaScript</span></div>
  <h1>Product Order Form</h1><p class="lead">Calculate order subtotal and shipping. Submit the form to see PHP process and validate your data.</p>
  <div class="layout">
    <section class="card">
      <h2>✦ Enter your details</h2>
      <form method="POST" novalidate>
        <div class="fields">
          <div class="field"><label>Customer name</label><input name="customer" required></div>
<div class="field"><label>Product</label><select name="product"><option value="Notebook">Notebook ($3.50)</option><option value="USB Drive">USB Drive ($8.00)</option><option value="Keyboard">Keyboard ($18.00)</option></select></div>
<div class="field"><label>Quantity</label><input name="qty" type="number" min="1" max="50" value="1" required></div>
<div class="field"><label>Shipping</label><select name="shipping"><option value="0">Standard ($0)</option><option value="4">Express ($4)</option></select></div>
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
      <h2>Project guide</h2><div class="stat">08/10</div>
      <p class="muted">Shows item subtotal, shipping fee and final total.</p>
      <h2 style="margin-top:24px">What you practise</h2>
      <ul class="list"><li>HTML form fields</li><li>PHP <code>$_POST</code></li><li>Server-side validation</li><li>Safe output with <code>htmlspecialchars()</code></li><li>Responsive CSS and JavaScript</li></ul>
      <span class="tag">Beginner friendly</span><span class="tag">Responsive UI</span>
    </aside>
  </div>
  <footer>Built for practice · PHP Form Lab</footer>
</main>
</body></html>

<?php
session_start();
function e($value)
{
  return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
$result = null;
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name'] ?? '');
  $age = filter_var($_POST['age'] ?? '', FILTER_VALIDATE_INT);
  $gender = $_POST['gender'] ?? '';
  $city = trim($_POST['city'] ?? '');
  if ($name !== '' && $age !== false && $age >= 1 && $age <= 120 && $city !== '') {
    $result = ['Name' => $name, 'Age' => $age, 'Gender' => $gender, 'City' => $city];
  } else {
    $error = 'Please enter valid information.';
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Personal Information Form | PHP Form Lab</title>
  <link rel="stylesheet" href="../assets/style.css">
  <script defer src="../assets/app.js"></script>
</head>

<body>
  <main class="wrap">
    <div class="top">
      <div>
        <div class="brand">PHP FORM LAB · PROJECT 01</div>
        <div class="muted">Learn by building</div>
      </div><span class="pill">PHP + CSS + JavaScript</span>
    </div>
    <h1>Personal Information Form</h1>
    <p class="lead">Collect and display a person's details. Submit the form to see PHP process and validate your data.</p>
    <div class="layout">
      <section class="card">
        <h2>✦ Enter your details</h2>
        <form method="POST" novalidate>
          <div class="fields">
            <div class="field"><label>Full name</label><input name="name" required maxlength="80" placeholder="e.g. Dara Sok"></div>
            <div class="field"><label>Age</label><input name="age" type="number" min="1" max="120" required placeholder="20"></div>
            <div class="field"><label>Gender</label><select name="gender" required>
                <option value="">Choose one</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select></div>
            <div class="field"><label>City</label><input name="city" required placeholder="Siem Reap"></div>
          </div>
          <div class="actions"><button type="submit">Submit form ↗</button><a class="btn" href="../index.html">All projects</a></div>
        </form>
        <?php if ($error): ?><div class="result error"><strong>Check your input</strong><br><?= e($error) ?></div><?php endif; ?>
        <?php if ($result): ?>
          <div class="result"><strong>✓ Result</strong>
            <?php foreach ($result as $key => $value): ?><div><strong><?= e($key) ?>:</strong> <?= e($value) ?></div><?php endforeach; ?>
          </div>
        <?php endif; ?>
      </section>
      <aside class="card">
        <h2>Project guide</h2>
        <div class="stat">01/10</div>
        <p class="muted">Profile card with escaped submitted values.</p>
        <h2 style="margin-top:24px">What you practise</h2>
        <ul class="list">
          <li>HTML form fields</li>
          <li>PHP <code>$_POST</code></li>
          <li>Server-side validation</li>
          <li>Safe output with <code>htmlspecialchars()</code></li>
          <li>Responsive CSS and JavaScript</li>
        </ul>
        <span class="tag">Beginner friendly</span><span class="tag">Responsive UI</span>
      </aside>
    </div>
    <footer>Built for practice · PHP Form Lab</footer>
  </main>
</body>

</html>
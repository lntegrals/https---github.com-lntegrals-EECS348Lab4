<?php
$n = isset($_GET['n']) ? intval($_GET['n']) : null;
if ($n !== null && $n < 1) $n = 1;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Practice 4 — PHP Multiplication Table</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial; padding:24px; background:#0b1220; color:#e5e7eb; }
    table { border-collapse: collapse; }
    th, td { border:1px solid #374151; padding:6px 10px; text-align:right; }
    th { background:#1f2937; }
  </style>
</head>
<body>
  <h1>Practice 4 — Multiplication Table</h1>
  <form method="get" action="practice4.php">
    <label for="n">Enter a number:</label>
    <input id="n" name="n" type="number" min="1" value="<?php echo htmlspecialchars($n ?? 10); ?>" />
    <button type="submit">Build Table</button>
  </form>
  <?php if ($n !== null): ?>
    <table>
      <tr>
        <th>×</th>
        <?php for ($j = 1; $j <= $n; $j++): ?>
          <th><?php echo $j; ?></th>
        <?php endfor; ?>
      </tr>
      <?php for ($i = 1; $i <= $n; $i++): ?>
        <tr>
          <th><?php echo $i; ?></th>
          <?php for ($j = 1; $j <= $n; $j++): ?>
            <td><?php echo $i * $j; ?></td>
          <?php endfor; ?>
        </tr>
      <?php endfor; ?>
    </table>
  <?php endif; ?>
</body>
</html>

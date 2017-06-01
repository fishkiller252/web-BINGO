
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <link href="./image/bingo.ico" rel="shortc icon">
  <title>ビンゴ</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>ビンゴシート</h1>
  <div id="container">
    <table>
      <?php


      $num = [];

      for ($i = 0; $i < 5; $i++) {
        $set = range($i * 15 + 1, $i * 15 + 15);
        shuffle($set);
        $num[$i] = array_slice($set, 0, 5);
      }

      $num[2][2] = "★";


      function h($s) {
        return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
      }

      ?>

      <tr>

        <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
      </tr>
      <?php for ($i = 0; $i < 5; $i++) : ?>
      <tr>
        <?php for ($j = 0; $j < 5; $j++) : ?>
        <td><?= h($num[$j][$i]); ?></td>

        <?php endfor; ?>
      </tr>
      <?php endfor; ?>
    </table>
  </div>
</body>
</html>

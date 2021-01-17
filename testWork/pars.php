<?php
require_once 'settings_db.php';

$sql = <<< SQL


SELECT DISTINCT *
  FROM links
  JOIN content
  ON links.id=content.link_id
ORDER BY date DESC;
SQL;

//SELECT DISTINCT * FROM content, links ORDER BY date DESC ;
$result = $pdo->query($sql, PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>News content</h1>

<form action="index.php" >



    <table border = "2" >
        <tr>
            <th>id</th>
            <th>link</th>
            <th>header</th>
            <th>img_link</th>
            <th>date</th>
            <th>text</th>
        </tr>
        <?php foreach ($result as $key => $experience): ?>
            <tr>

                <td bgcolor = <?= ($key >= 0 && $key < 3) ? 'grean' : 'white' ?> ><?= $experience['id'] ?></td>
                <td bgcolor = <?= ($key >= 0 && $key < 3) ? 'grean' : 'white' ?> ><?= $experience['link'] ?></td>
                <td bgcolor = <?= ($key >= 0 && $key < 3) ? 'grean' : 'white' ?> ><?= $experience['header'] ?></td>
                <td bgcolor = <?= ($key >= 0 && $key < 3) ? 'grean' : 'white' ?> ><?= $experience['img_link'] ?></td>
                <td bgcolor = <?= ($key >= 0 && $key < 3) ? 'grean' : 'white' ?> ><?= date('Y-m-d', $experience['date']) ?></td>
                <td bgcolor = <?= ($key >= 0 && $key < 3) ? 'grean' : 'white' ?> ><?= $experience['text'] ?></td>


            </tr>
        <?php endforeach; ?>
    </table>

</form>
</body>
</html>
<?php
include "connection.php";

$stmt = $conn->prepare("SELECT id, content FROM pastes where deleted_flag != 'Y' order by as_of_day desc limit 100");
$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List of latest pastebins</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <div class="container">
        <div class="row">
            <h1> Pastebin</h1>
            <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">Link</th>
                <th scope="col">Content</th>

              </tr>
            </thead>
            <tbody>
            <?php
            while ($result = $stmt->fetch()){
                echo '<tr><td><a href="paste.php?id=' . $result['id'] . '">' . $result['id'] .
                    '</a></td><td>' . $result['content'] .
                    "</td></tr>\r\n";
            }
            ?>
            </tbody>
            </table>


            </div>
        </div>
    </body>
</html>

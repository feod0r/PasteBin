<?php
include "connection.php";

$id = $_GET["id"];

$stmt = $conn->prepare("SELECT content, syntax FROM pastes WHERE id = :id");
$stmt->bindParam(":id", $id);
$stmt->execute();

$result = $stmt->fetch();

include "geshi/geshi.php";

$source = $result["content"];
$syntax = $result["syntax"];

switch ($syntax) {
    case "None":
        $language = 'text';
        break;
    case "PHP":
        $language = 'php';
        break;
    case "HTML":
        $language = 'html4strict';
        break;
    case "CSS":
        $language = 'css';
        break;
    case "SQL":
        $language = 'mysql';
        break;
    case "JavaScript":
        $language = 'javascript';
        break;
    case "Python":
        $language = 'python';
        break;
}

$geshi = new GeSHi($source, $language);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paste</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
<div class="container">
<div class="row">
    <h1 class="logo">Pastebin</h1>
    
    <div class="row">
        <?php echo $geshi->parse_code(); ?>
    </div>

    <div class="buttons-container">
        <p class="message" id="message"></p>

        <div class="button">
            <button onclick="copyFunction()" class="btn btn-info">Share this Paste</button>
            <a href="edit_paste.php?id=<?php echo $id; ?>"><button class="btn btn-warning">Edit Paste</button></a>
            <a href="index.php" ><button class="btn btn-success">Main Page</button></a>
        </div>
    </div>

    <script src="javascript/script.js"></script>
</div>
</div>
</body>

</html>

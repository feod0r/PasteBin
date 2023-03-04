<?php
include "connection.php";

$id = $_GET["id"];

$stmt = $conn->prepare("SELECT content FROM pastes WHERE id = :id");
$stmt->bindParam(":id", $id);
$stmt->execute();

$result = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastebin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
<div class="container">
    <h1 class="logo">Pastebin</h1>

    <form action="update.php?id=<?php echo $id; ?>" method="POST">
<textarea name="content" id="" cols="30" rows="20" class="w-100 p-3"><?php echo $result["content"]; ?></textarea>
</br>


        <div class="buttons-container">
            <div class="button">
                <a href="update.php?id=<?php echo $id; ?>"><button class="btn btn-success">Save Paste</button></a>
            </div>
        </div>
    </form>
</br>
    <div class="buttons-container">
        <div class="button">
            <a href="paste.php?id=<?php echo $id; ?>"><button class="btn btn-danger">Back to the Paste</button></a>
        </div>
    </div>
</div>
</body>

</html>

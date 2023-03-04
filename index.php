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
    <h1 class="logo">Pastebin</h1>

    <h1 class="tagline"> Share your beautiful code in one click </h1>

    <form action="insert.php" method="POST">
        <textarea name="content" id="" cols="30" rows="30" class="w-100 p-3"></textarea>
        </br>
        <label for="syntax-highlighting" class="label">Syntax Highlighting:</label>
        <select name="syntax-highlighting" class="form-select">
            <option value="None">None</option>
            <option value="PHP">PHP</option>
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
            <option value="SQL">SQL</option>
            <option value="JavaScript">JavaScript</option>
            <option value="Python">Python</option>
        </select>
        </br>
        <button type="submit" class="btn btn-success">Create New Paste</button>

    </form>

</div>
</body>
</html>

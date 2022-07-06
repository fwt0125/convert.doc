<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="doc" />
    {{ csrf_field() }}
    <input type="submit" name="submit" value=" upload " \>
</form>

</body>
</html>
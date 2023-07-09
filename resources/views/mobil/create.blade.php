<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/mobil/store" method="POST">
        @csrf
        <label for="">Nama Mobil</label><br>
        <input type="text" name="nama_mobil" required><br>
        <label for="">Merek Mobil</label><br>
        <input type="text" name="merek_mobil" required><br>
        <label for="">CC</label><br>
        <input type="text" name="cc" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
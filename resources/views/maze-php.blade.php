<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maze test using php</title>
    <style>
        span {
            visibility: hidden;
        }
    </style>
</head>
<body>
    <form action="">
        <label for="mazeLength">Input Maze Length</label>
        <input type="number" min="1" id="mazeLength" name="mazeLength" required value="{{ request()->query('mazeLength') }}">
        <button id="mazeSubmit">Test</button>
    </form>
    <br><br>
    <div id="maze">
        {!! $mazeText !!}
    </div>
    <br>
    <div>Didesain dengan (tanpa desain :D )</div>
    <div>Author: Hairul Anam</div>
</body>
</html>

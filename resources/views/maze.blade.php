<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maze test using javascript</title>
    <style>
        span {
            visibility: hidden;
        }
    </style>
</head>
<body>
    <label for="mazeLength">Input Maze Length</label>
    <input type="number" min="1" id="mazeLength">
    <button id="mazeSubmit">Test</button>
    <br><br>
    <div id="maze"></div>
    <br>
    <div>Didesain dengan (tanpa desain :D )</div>
    <div>Author: Hairul Anam</div>
</body>
<script>
    const maze       = document.getElementById('maze')
    const mazeSubmit = document.getElementById('mazeSubmit')
    const mazeLength = document.getElementById('mazeLength')
    mazeSubmit.addEventListener('click', function(e){
        e.preventDefault();
        const mazeLengthNumeric = Number(mazeLength.value)
        if(typeof mazeLengthNumeric == 'number'){
            if(mazeLengthNumeric > 0){
                let mazeText = ''
                for (let a = 1; a <= mazeLengthNumeric; a++) {
                    for (let b = 1; b <= mazeLengthNumeric; b++) {
                        if(a % 2 == 1){
                            if(b == 2 && a % 4 == 1){
                                mazeText += '<span>@</span>'
                            }else if(b == mazeLengthNumeric-1 && (a+1) % 4 == 0){
                                mazeText += '<span>@</span>'
                            }else{
                                mazeText += '@'
                            }
                        }else{
                            if(b == 1 || b == mazeLengthNumeric){
                                mazeText += '@'
                            }else{
                                mazeText += '<span>@</span>'
                            }
                        }
                    }
                    mazeText += '<br>'
                }
                maze.innerHTML = mazeText
            }else{
                alert('maze length min 1')
            }
        }else{
            alert('maze length number required')
        }
    })

    function test(){
        mazeLength.value = 15
        mazeSubmit.click()
    }

    // test()
</script>
</html>

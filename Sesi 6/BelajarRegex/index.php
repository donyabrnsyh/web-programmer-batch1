<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar REGEX</h1>

    <script>
        // Step 1
        var foo = /ab+c/
        console.log(foo)
        console.log(typeof foo)

        // Step 2 
        var bar = new RegExp('ab+c')
        console.log(bar)
        console.log(typeof bar)

        // Step 3
        var foo2 = "Belajar JavaScript"
        var pola = /JavaScript/

        console.log(pola.test(foo2))
        console.log(/Belajar/.test(foo2))
        console.log(/belajar/.test(foo2))
    </script>
</body>
</html>
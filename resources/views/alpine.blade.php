<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>


<div class="container" x-data="lekha">
    <h2 x-text="name"></h2>
    <p x-text="age"></p>
    <p x-boolean="isMarried">yaa i am married</p>

</div>

<script>
    const lekha={
        name:'John Doe',
        age: 30,
        isMarried: false
    }
</script>
</body>
</html>
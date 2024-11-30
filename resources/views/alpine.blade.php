<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    @vite(['resources/js/app.js'])
</head>
<body>


<div class="container" x-data="lekha">
    <h2 x-text="name"></h2>
    <p x-text="age"></p>
    <p x-boolean="isMarried">yaa i am married</p>
    <button @click = "increamentAge()" class="click">Allah akbar</button>
    <button class="reset" @click="age = 0">reset</button>

</div>

<script>
    const lekha={
        name:'John Doe',
        age: 0,
        increamentAge(){
            this.age++;
        },
        isMarried: false
    }
</script>
</body>
</html>
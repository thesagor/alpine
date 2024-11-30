<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css"><!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="container m-50">
        <div class="accordian" x-data="condition">
            <button class="show" @click="open=true">Show</button>
            <button class="hide" @click="open=false">Hide</button>
            <div class="box bg-green-600"  x-show="open">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium corporis excepturi, eaque esse eius doloribus non, eum recusandae adipisci sapiente assumenda! Eaque modi earum pariatur dolores laudantium blanditiis minima non, beatae delectus corporis magnam, fugit consequuntur iure assumenda temporibus ex?</p>


            </div>

        </div>
    </div>




    <script>
        const condition= {
            open: true
        }
    </script>
            
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>
            jQuery Practice
        </title>
    </head>
    <body>
        <h1 id="title">Found Me</h1>
        <p class="job">Fontend Developer</p>
        <p class="job">React Developer</p>
        <p class="job">PHP developer</p>
        <button id="btn">Click me</button>
        <button class="hdn">Hide</button>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#btn').click(function(){
                    $('#title').html('Hire Me')
                })
                $('.hdn').click(function(){
                    $('.job').hide('hide')
                })

                $('.job').css('color', 'lime')
            })
        </script>
    </body>
</html>
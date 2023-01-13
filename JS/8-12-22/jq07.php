<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
    <title>Document</title>
    <style>
        p {
            width: 100px;
            height: 250px;
            background-color: aqua;
        }
    </style>
</head>

<body>
    <p>n'importe quoi</p>
    
    <p id="p2">que porte le nain</p>


<script>
    $(document).ready(function () {
        
        $("p").on({
            mouseover: function () {
                $(this).css("background-color", "purple")
            }, 
            mouseout: function () {
                $(this).css("background-color", "red")
            }, 
            click: function () {
                $(this).css("background-color", "pink")
            } 
        })

        $("#p2").on("mouseover mouseout", function() {
            console.log("la souris entre ou sort de la zone #p2")
        })


    })

</script>

</body>
</html>
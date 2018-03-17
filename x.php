<!DOCTYPE html>
<html>
    <body>
        <div id="counter"></div>
        <script>
            var i = 0;
            while (i<20)
            {
                document.getElementById("counter").innerHTML += i++; 
            }
        </script>
    </body>
</html>
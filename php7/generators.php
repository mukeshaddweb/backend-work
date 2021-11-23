<html>
    <head>
        <title> Generator </title>
    </head>
    <body>
    <?php
        function counttillthree(){
            yield "one";
            yield "two";
        }
        function counttillfive(){
           yield from counttillthree();
           yield "three";
           yield "four";
           yield "five";
        }
        
        foreach (counttillthree() as $number){
           echo $number, PHP_EOL;
        }
        foreach(counttillfive() as $number){
           echo $number, PHP_EOL;
        }
    ?>
</body>
</html>

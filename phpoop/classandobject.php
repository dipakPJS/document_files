<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 class myclass{  
    public $name;
    public $age;

    function show()
    {
        
        echo $this->name." is my name ".$this->age." is my age";

    }
 }


 $newobj = new myclass();
 $newobj->name = "dipak pokharel";
 $newobj->age = 19;
 $newobj->show();

 echo "<br><br>";

 $test = new myclass();
 $test->name = "Php Pokharel";
 $test->age = "20";
 $test->show();
?>
</body>
</html>
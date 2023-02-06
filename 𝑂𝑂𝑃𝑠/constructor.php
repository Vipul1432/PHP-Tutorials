

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
        Name: 
        <input type="text" name="name" id="name"><br/>
        Age:
        <input type="text" name="age" id="age"><br/><br/>
        <input type="submit" value="Submit"><br/><br/>
    </form>
</body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    class person
    {
        public $name;
        public $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function show()
        {
            echo "Name: " . $this->name . "<br/>" . " Age: " . $this->age;
        }
    }

    $p1 = new person($name, $age);
    // $p1->name = "Vipul";
    // $p1->age = 21;
    $p1->show();
}


?>
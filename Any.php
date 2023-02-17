<!DOCTYPE HTML>
<html>
    <head>
        <title>Any</title>
    </head>
    <body>
        <?php
            function add($a,$b)
            {
                return $a+$b;
            }

            function subtract($a,$b)
            {
                return $a-$b;
            }
            
            function multiply($a,$b)
            {
                return $a*$b;
            }

            function divide($a,$b)
            {
                return $a/$b;
            }

            function modulo($a,$b)
            {
                return $a%$b;
            }
            $c = $_POST["op"];

            switch($c)
            {
                case '+':
                    echo "The sum is ".add($_POST["num1"],$_POST["num2"]);
                    break;
                
                case '-':
                    echo "The difference is ".subtract($_POST["num1"],$_POST["num2"]);
                    break;
                
                case '*':
                    echo "The product is ".multiply($_POST["num1"],$_POST["num2"]);
                    break;
                
                case '/':
                    if($_POST["num2"]==0)
                    {
                        echo "Division by 0 is not posssible";
                        break;
                    }
                    else{
                        echo "The quotient is ".divide($_POST["num1"],$_POST["num2"]);
                        break;
                    }
                
                case '%':
                    echo "The remainder is ".modulo($_POST["num1"],$_POST["num2"]);
                    break;
                    
                default:
                    echo "Wrong input";
            }
            
            $name = $_POST["name"];
            echo "<br>". md5($name);
        ?>
    </body>
</html>

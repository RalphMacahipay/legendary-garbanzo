<html>
<head><title>Calculation Result</title></head>
<body>
    <?php

$val1 = $_POST['val1'];
$val2 = $_POST['val2'];
$calc = $_POST['calc'];

        # test if input is_numeric
        if(is_numeric($val1) && is_numeric($val2)){
            # test if calc is not null
            if(isset($calc)){
                # switch statement for value of calc
                switch($calc){
                    case "add":
                        $result =  $val1 + $val2;
                        echo "Calculation result: ". $result;
                        break;
                    case "sub":
                        $result =  $val1 - $val2;
                        echo "Calculation result: ". $result;
                        break;
                    case "mul":
                        $result =  $val1 * $val2;
                        echo "Calculation result: ". $result;
                        break;
                    case "div":
                        $result =  $val1 / $val2;
                        echo "Calculation result: ". $result;
                        break;

                    
                }
                
            }
            else{
                echo 'Cal is empty';
            }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>
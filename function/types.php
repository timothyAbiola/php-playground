<?php 
declare(strict_types=1);
// function addNumbers(int $num1, int $num2): int{
//     return $num1 + $num2;
// }
// echo addNumbers(13, 23);
function calculate($num1, $num2, $sym) : float{
   switch($sym){
    case '+':
        return $num1 + $num2;
    case '-':
        return $num1 - $num2;
    case '*':
        return $num1 * $num2;
    case '/':
        return $num1 / $num2;
    case '^':
        return $num1 ** $num2;
    case '%':
        return $num1 % $num2;
   }
   
    // if ($sym == '-') {
    //     return $num1 - $num2;
    // }else if($sym == '+'){
    //     return $num1 + $num2;
    // } elseif($sym == '/'){
    //     return $num1 / $num2;
    // }elseif($sym == '*'){
    //     return $num1 * $num2;
    // }elseif($sym == '%'){
    //     return $num1 % $num2;
    // }elseif($sym == '^'){
    //     return $num1 ** $num2;
    // }else{
    //     return print('invalid operation');
    // }
}
echo calculate(10, 3, '%');
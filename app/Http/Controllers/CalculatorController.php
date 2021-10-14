<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //
    public function calculatefunc(Request $request){

        $operator = $request->input('operator');
        $firstNum = $request->input('first');
        $secondNum = $request->input('second');
        $result = 0;

        if($operator == 'plus'){
            $result = $firstNum + $secondNum;
        }else if($operator == 'minus'){
            $result = $firstNum - $secondNum;
        }else if($operator == 'multiply'){
            $result = $firstNum * $secondNum;
        }else if($operator == 'divide'){
            $result = $firstNum / $secondNum;
        }else {
            $result = 0;
        }
        echo $result;
        

    }
}

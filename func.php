<?php


function getNo($no)
{
  $numbers = $no;
  $length = count($numbers); //array length
  $arr = [];
  $new_arr = [];
  $index_sum = [];



  for ($i = 0; $i < $length; $i++) {

    for ($j = $i + 1; $j < $length; $j++) {

      if (!($numbers[$i] == $numbers[$j])) {
        $sum = $numbers[$i] + $numbers[$j];
        $arr[] = $sum;

        $arr = array_unique($arr); // array contains the sums of the numbers in the array;
        // find the index of the sum
        foreach ($arr as  $value)

          if (in_array($value, $numbers)) {
            // index of the sum in the array
            $index_sum[] = $value;

            if (($numbers[$i] + $numbers[$j]) === $value) {
              // echo $numbers[$i]."-".$numbers[$j]."<br>";
              $first_index = array_search($numbers[$i], $numbers);
              $second_index = array_search($numbers[$j], $numbers);



              echo "index of first element - " . "" . $first_index . "<br>";
              echo "index of second element - " . "" . $second_index . "<br>";
            }

            break;
          }
        break;
      }

      break;
    }
  }

  $index_sum = array_unique($index_sum);

  foreach ($index_sum as  $index) {
    $index = array_search($index, $numbers);
    echo "sum index - " . $index;
    break;
  }
}

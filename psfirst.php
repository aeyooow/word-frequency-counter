<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            /**
             * Calculates the total price of items in a shopping cart.
            *
            * @param array $items An array of items with 'name' and 'price' keys.
            *
            * @return float The total price of items in the shopping cart.
             */

             $items = [
                ['name' => 'Widget A', 'price' => 10],
                ['name' => 'Widget B', 'price' => 15],
                ['name' => 'Widget C', 'price' => 20],
            ];

            function theTotalPrice(array $items): float {
                $total = 0;
                foreach ($items as $item) {
                    $total += $item['price'];
                }
                return $total;
            }

            
            $totalPrice = theTotalPrice($items);
            echo "Total price: $" . $totalPrice . PHP_EOL;



            /***********************************************************************/



            /**
            * Modifies a string by removing spaces and converting it to lowercase.
            *
            * @param string $inputString The input string to be modified.
            *
            * @return string The modified string.
            */
            function modifiedString(string $inputString): string {
                $newString = str_replace(' ', '', $inputString);
                $newString = strtolower($newString);
                return $newString;
            }
            $string = "This is a poorly written program with little structure and readability.";
            $newString = modifiedString($string);
            echo "Modified string: " . $newString . PHP_EOL;


            /***********************************************************************/


            /**
            * Checks if a number is even or odd.
            *
            * @param int $number The number to be checked.
            *
            * @return string A message indicating whether the number is even or odd.
            */
            function evenOrOdd(int $number): string {
                if ($number % 2 == 0) {
                    return "The number " . $number . " is even." . PHP_EOL;
                } else {
                    return "The number " . $number . " is odd." . PHP_EOL;
                }
            }

            $number = 42;
            $message = evenOrOdd($number);
            echo $message;
        ?>

    </body>
</html>
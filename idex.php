<?php
function calculate_triangle_area($base, $height) {
    return ($base * $height) / 2;
}
$base = 5;
$height = 10;
echo "The area of the triangle is: " . calculate_triangle_area($base, $height);
?>

<?php
function find_single_number($arr) {
    $result = 0;
    foreach ($arr as $num) {
        $result ^= $num;
    }
    return $result;
}
$array = array(5, 3, 4, 3, 4);
echo "The single number in the array is: " . find_single_number($array);
?>

<?php
function dayType($day) {
    // Convert the input to lowercase to make the function case-insensitive
    $day = strtolower($day);
 
    switch ($day) {
        case "monday":
        case "tuesday":
        case "wednesday":
        case "thursday":
        case "friday":
            return ucfirst($day) . " is a weekday.";
        case "saturday":
        case "sunday":
            return ucfirst($day) . " is a weekend.";
        default:
            return "Invalid day input.";
    }
}
 
// Example usage:
$day1 = "Monday";
$day2 = "Saturday";
$day3 = "Sunday";
$day4 = "Holiday";
 
echo dayType($day1) . PHP_EOL; // Output: Monday is a weekday.
echo dayType($day2) . PHP_EOL; // Output: Saturday is a weekend.
echo dayType($day3) . PHP_EOL; // Output: Sunday is a weekend.
echo dayType($day4) . PHP_EOL; // Output: Invalid day input.
?>

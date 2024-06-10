<?php

function formatString($string, $rules) {
    foreach ($rules as $rule => $value) {
        switch ($rule) {
            case 'uppercase':
                if ($value) {
                    $string = strtoupper($string);
                }
                break;
            case 'lowercase':
                if ($value) {
                    $string = strtolower($string);
                }
                break;
            case 'capitalize':
                if ($value) {
                    $string = ucwords($string);
                }
                break;
            case 'addPrefix':
                $string = $value . $string;
                break;
            case 'addSuffix':
                $string = $string . $value;
                break;
            case 'replace':
                if (isset($value['search']) && isset($value['replace'])) {
                    $string = str_replace($value['search'], $value['replace'], $string);
                }
                break;
            default:
                Echo "didn't satisfy any rules";
                break;
        }
    }
    return $string;
}

$rules = [
    'capitalize' => true,
    'replace' => ['search' => ' ', 'replace' => '_'],
    'addPrefix' => 'ID: '
];

echo formatString("john doe", $rules);

?>

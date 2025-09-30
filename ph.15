<?php
function array_diff_assoc_recursive($a, $b) {
    $diff = array();
    foreach($a as $key => $value) {
        if (is_array($value)) {
            if (!isset($b[$key]) || !is_array($b[$key])) {
                $diff[$key] = $value;
            } else {
                $new_diff = array_diff_assoc_recursive($value, $b[$key]);
                if (!empty($new_diff)) $diff[$key] = $new_diff;
            }
        } elseif (!isset($b[$key]) || $b[$key] !== $value) {
            $diff[$key] = $value;
        }
    }
    return $diff;
}
?>

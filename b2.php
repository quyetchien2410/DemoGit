<?php
function Ktrasnt($number) {
    if ($number <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    
    return true;
}

$number = 21; // Thay đổi số tại đây để kiểm tra

if (Ktrasnt($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không là số nguyên tố.";
}
?>

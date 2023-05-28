<?php 

// date_default_timezone_set('Asia/Kuala_Lumpur');
// $date = date("d-M-Y H:i:s a");


// echo '<h1>'.$date.'</h1>';

// $s1 = 'INVALID-ID';
// $s2 = '1234567890';
// $s3 = '00XXX12345';
// $s4 = '00WAD12345';

// $pattern = '/^\d{2}[A-Z]{3}\d{5}$/';

// echo preg_match($pattern, $s1);
// echo preg_match($pattern, $s2);
// echo preg_match($pattern, $s3);
// echo preg_match($pattern, $s4);

$data = array(
    'AACS3013' => 70,
    'AACS3073' => 95,
    'AAMS3683' => 55,
    'AACS3034' => 75,
    'AHLA3413' => 65
);

echo '<table><tr><th style="background-color: #cccccc;">COURSE</th>'.
    '<th style="background-color: #cccccc;">PASSING RATE</th></tr>';

foreach ($data as $key => $value) {
    printf("<tr><td>%s</td>"
            .'<td><span style="display: inline-block;
            background-color: %s;
            width: %dpx">&nbsp;</span>
           %s%%</td>'
            , $key, ($value >= 70) ? "lightblue" : "pink", ($value/100 * 250), $value);
}

echo '</table>';

define("ROW", 15);
define("COL", 15);

echo '<table>';

for ($y = 0; $y < ROW; $y++) {
    echo '<tr style="height:20px;">';
    for ($x = 0; $x < COL; $x++) {
        printf('<td style="border:1px darkgrey inset; width:20px; background-color:%s"></td>',
            (($y+$x )% 2) == 0 ? 'pink' : 'white'
        );
    }
    echo '</tr>';
}


echo '</table>';

?>

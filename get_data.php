<?php
function getData()
{
    for($i=1;$i<10;$i++)
    {
        $data[] =[
            'x' => "new Date(2018, 5,$i)",
            'y' => $i
        ];
    }

    $result = json_encode($data);
    return $result;
}

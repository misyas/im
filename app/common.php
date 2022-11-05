<?php
// 应用公共文件
function pr($val){
    echo '<pre>';
    var_dump($val);
}

function show_res($status,$message,$data,$HTTPStatus = 200){
    $result = [
        'status' => $status,
        'message' => $message,
        'result' => $data,
    ];
    return json($result,$HTTPStatus);
}
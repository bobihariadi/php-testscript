<?php

header('Access-Control-Allow-Origin: *');
//test adfa sdfdf

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{        
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);

    switch ($request->method)
    {
        case 'cekLogin': get_login($request); break;
        default: errReq();   
    }
}
else
{
    echo "Not allowed";
}


 function get_login($request){
    $username=$request->username;
    $password=$request->password;

    $return['_msg'] = "Gagal, Username dan Password tidak cocok";
    $return['_status'] = false;
    if($username === 'bobi' && $password === 'pass123abc'){   
        $return['_msg'] = "Login  berhasil.";
        $return['nama'] = "Bobi Hariadi";
        $return['alamat'] = "Jl. Cempaka baru barat III no.34";
        $return['_status'] = true;
    }
    echo json_encode($return);            
}

function errReq(){
    $return['_msg'] = 'Request invalid';
    $return['_status'] = false;
    echo json_encode($return);   
}


?>
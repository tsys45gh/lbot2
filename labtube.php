<?php
//phpinfo();
$hn = $_GET["hn"];
//header("application/json; charset=utf-8");
switch($hn){
  case "1218000001":
    echo '[{"_id":"5af24342cdad674befd5bf27","PID":{"PID_3":{"PID_3_1":"1218000001"},"PID_5":{"PID_5_1":"หนึ่ง","PID_5_2":"สกุลหนึ่ง"},"PID_7":{"PID_7_1":"19650101"}}}]';
    break;
    case "1218000002":
    echo '[{"_id":"5af24342cdad674befd5bf27","PID":{"PID_3":{"PID_3_1":"1218000002"},"PID_5":{"PID_5_1":"สอง","PID_5_2":"สกุลสอง"},"PID_7":{"PID_7_1":"19701201"}}}]';
    break;
    case "1218000003":
    echo '[{"_id":"5af24342cdad674befd5bf27","PID":{"PID_3":{"PID_3_1":"1218000003"},"PID_5":{"PID_5_1":"Three","PID_5_2":"LnameThree"},"PID_7":{"PID_7_1":"19800201"}}}]';
    break;
    case "1218000004":
    echo '[{"_id":"5af24342cdad674befd5bf27","PID":{"PID_3":{"PID_3_1":"1218000004"},"PID_5":{"PID_5_1":"Four","PID_5_2":"LnameFour"},"PID_7":{"PID_7_1":"19600601"}}}]';
    break;
    case "1218000005":
    echo '[{"_id":"5af24342cdad674befd5bf27","PID":{"PID_3":{"PID_3_1":"1218000005"},"PID_5":{"PID_5_1":"ห้า","PID_5_2":"สกุลห้า"},"PID_7":{"PID_7_1":"19750808"}}}]';
    break;
    
    
}


?>

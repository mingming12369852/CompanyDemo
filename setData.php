
<?php
$header = array(
    'Content-Type: application/json; charset=UTF-8'
    , 'X-LINE-ChannelId: 1599265358'
    , 'X-LINE-ChannelSecret: a3693d1ec1f33ea614ad96224ceffdd2'
  );
//line pay
  $postData = array(
    'productName' =>"Name_is_Lin_ha",
    'productImageUrl' => "https://member.ithome.com.tw/avatars/126348?s=ithelp",
    'amount' => 168,
    'currency' => "TWD",
    'confirmUrl' => "http://127.0.0.1/html_/CompanyDemo/:3600",
   'orderId' => "03",
  );
//line pay data
$ch = curl_init("https://sandbox-api-pay.line.me/v2/payments/request");//建立連線
curl_setopt($ch, CURLOPT_POST, true);//啟用 CURLOPT_POST
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);//連線丟入 LINE-ID LINE-Secret
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
$result = json_decode(curl_exec($ch), true);
print_r ($result['info']['paymentUrl']['web'] );//抓取網頁版介面
// print_r ($result['info']['paymentUrl']['app'] );//抓取手機版介面
$Url = $result['info']['paymentUrl']['web'] ;
curl_close($ch);
header("Location:$Url" );
//確保重定向後，後續程式碼不會被執行
exit;
echo json_encode("hi");
?>

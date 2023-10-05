<?php
$curl = curl_init();
curl_setopt_array($curl, [
  CURLOPT_URL => "https://exchanger-api.fuspay.finance/api/v1/no-auth/PartnerP2P/Payout",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n\t\"withdrawal_reference\": \"0001\",\n\t\"account_number\": \"xxxxxxxxx\",\n\t\"account_code\": \"MTN\",\n\t\"partner_id\": \"pxxxxx\",\n\t\"intrapay_merchant_id\": \"intra_merchant_xxxx\",\n\t\"amount\": 1,\n\t\"currency\": \"GHS\",\n\t\"signature\": \"6a7904a79006a21ba4dca3e751c990eadec383993a84f1d030934592582901c04e08b6cb51fe63f340865a3ebb82be08ff75bdea51eb228dbaaf85b56fa5613c\"\n}",
  CURLOPT_HTTPHEADER => [
    "Authorization: Bearer pk_partner_xxxxxx",
    "Content-Type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

<?php

    require __DIR__ . '/vendor/autoload.php';

    use \App\Pix\Payload;
    use \Mpdf\QrCode\QrCode;
    use \Mpdf\QrCode\Output;

    $payload = (new Payload)
        ->setPixKey('49125216000172')
        ->setDescription('Service Payment')
        ->setMerchantName('pedefix')
        ->setMerchantCity('Santo Andre')
        ->setAmount(2.00)
        ->setTxid('qrcode1234');

    $payloadQrCode = $payload->getPayload();

    $qrCode = new QrCode($payloadQrCode);

    $image = (new Output\Png)->output($qrCode, 400);

    // header('Content-Type: image/png');
    // echo $image;

?>

<h1>Qr code Pix</h1>

<br>

<img src="data:image/png;base64, <?= base64_encode($image)?>">

<br>
<br>

Código Pix
<br>
<strong>
    <?= $payloadQrCode?>
</strong>
<?php

require __DIR__.'/vendor/autoload.php';

\Stripe\Stripe::setApiKey(getenv('STRIPE_SECRET_API_KEY'));

$token = $_POST['stripeToken'];

//ここでAPIにリクエストしてる
$charge = \Stripe\Charge::create([
    'amount' => 100,
    'currency' => 'jpy',  //usd(ドル)　→　jpy(円)に変更
    'description' => 'Example charge',
    'source' => $token,
]);

//thanks.phpにリダイレクトさせる。
header("Location: ./thanks.php");
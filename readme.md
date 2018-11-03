# stripe_practice_php
PHP -- not use the framework.

## stripe_reference
- [stripe API](https://stripe.com/docs/api#metadata)  
- [Card Payments Quickstart](https://stripe.com/docs/quickstart)

## how to use
// composer経由でstripe/stripe-phpを取得する  
```$ composer install```

// stripeのAPIキーを設定  
```$ cp .env.example .env```  

```$ vi .env```  
[管理画面＞開発者＞API キー](https://dashboard.stripe.com/account/apikeys)　より  
・STRIPE_PUBLIC_API_KEY  
・STRIPE_SECRET_API_KEY  
 を設定する。

// ビルドイン(ウェブ)サーバを立てる  
```$ php -S localhost:8080 ./```  

[http://localhost:8080](http://localhost:8080)　にアクセスすると、
stripe決済が利用できます！  


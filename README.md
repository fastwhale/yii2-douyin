Yii2-douyin
===========
Yii2 Douyin SDK

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist fastwhale/yii2-douyin "*"
```

or add

```
"fastwhale/yii2-douyin": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
/** @var \fastwhale\yii2\douyin\Douyin $api */
$api = \Yii::createObject([
    'class'  => \fastwhale\yii2\douyin\Douyin::class,
    'client_key' => $client_key,
    'client_secret' => $client_secret,
    ...
]);
```

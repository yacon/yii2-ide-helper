## Yii2 IDE Helper Generator

### Install

Require this package with composer using the following command:

```sh
composer require yacon/yii2-ide-helper --dev
```

### Usage

After updating composer, add the component to the `components` array and `bootstrap` array in config file of console application:

```php
'bootstrap' => ['log', 'ideHelper'],
'components' => [
    'ideHelper' => [
        'class' => 'yacon\IdeHelper\IdeHelper',
    ],
],
```

Now you can generate ide helper file by command:

```sh
./yii ide-helper/generate
```

### Options

```php
'ideHelper' => [
    'class' => 'yacon\IdeHelper\IdeHelper',
    'rootDir' => dirname(dirname(__DIR__)),
],
```

Default config files:

```php
protected $defaultConfigFiles = [
    'common/config/main.php',
    'common/config/main-local.php',
    'frontend/config/main.php',
    'frontend/config/main-local.php',
    'backend/config/main.php',
    'backend/config/main-local.php',
];
```

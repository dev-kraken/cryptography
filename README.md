PHP Cryptography 🔒
==========

![Banner](https://i.postimg.cc/ZYvBLn5X/Banner-KRAKEN.png)

<p align="center">
<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-green.svg?style=flat-square" alt="Software License"></img></a>
<a href="https://packagist.org/packages/vlucas/phpdotenv"><img src="https://img.shields.io/badge/php-5.3%20--%207.4-blue.svg?style=flat-square" alt="Total Downloads"></img></a>
<a href="https://github.com/vlucas/phpdotenv/releases"><img src="https://img.shields.io/badge/website-up-brightgreen.svg?style=flat-square" alt="Latest Version"></img></a>
</p>


## 🍃 Why Cryptography?

**Cryptography is a method of protecting information and communications through the use of codes, so that only those for whom the information is intended can read and process it.**


🚀 PHP Cryptography is a PHP version of the original [Dev Kraken](https://github.com/bkeepers/dotenv).


## 🔥Installation

Installation is super-easy via [Composer](https://getcomposer.org/):

```bash
$ composer require devkrakem/cryptography 
```

or add it by hand to your `composer.json` file.

### ✅Usage Notes

Add your application configuration to a `.env` file in the root 
of your project. Make sure the `.env` file is added to your `.gitignore` 
so it is not checked-in the code.

Make sure `.env` variable name same ⬇ **example**
```shell
SECRET_CRYPTOGRAPHY="your_secret_key"
```
Make sure you load `vendor autoload.php` in your application:
```php
require 'vendor/autoload.php';
```
You can then load `Cryptography` in your application with:
```php
use DevKraken\Cryptography;
$cryptography = new Cryptography();
```
For `Encryption` you can use this code in your application and pass 
your variable for `Encryption`
```php
$cryptography->encryptionString = 'Encryption_String';
//or
$cryptography->encryptionString = $variable;
```

For `Decryption` you can use this code in your application and pass
your Encryption variable for `Decryption`
```php
$cryptography->encryptionString = 'Decrypted_String';
//or
$cryptography->encryptionString = $Decrypted_variable;
```
🍀For Example
```php
require 'vendor/autoload.php';
use DevKraken\Cryptography;
$cryptography = new Cryptography();

//Encryption
$cryptography->encryptionString = 'Your_String';
echo $cryptography->encryption();

//Decryption
$cryptography->decryptionString = $cryptography->encryption();
echo $cryptography->decryption();
```
## 👽License

PHP Cryptography is licensed under [MIT](LICENSE).

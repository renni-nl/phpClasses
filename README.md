# phpClasses
PHP classes you may find suitable for your project

## Installation
Include the class in your php project and instantiate the class

## Usage Functions.class.php

```php
require_once 'Functions.class.php';
$functions = new Functions();

$functions->LogIPAddress(); //Returns IP address from the client / may return null
$functions->GetOS(); //Returns OS platform / may return null
$functions->GetBrowser(); //Returns browser / may return null
$functions->EncryptData($string,$key); //Will encrypt the $string variable with the $key variable / WARNING: This is not 100% safe encryption, do not use for sensitive data.
$functions->DecryptData($string,$key); //Will decrypt the $string variable with $key variable/ WARNING: If the $key variable is not the right one used to encrypt - will throw error.
$functions->GenerateRandom($lenght); //Will generate an random string(letters and numbers) with the lenght specified. Modify $characters if you want only letters or numbers.


```

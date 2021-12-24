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
$functions->RedirectTo('www.google.com'); // Will redirect to www.google.com
$functions->FileExists($file,$path); // Check if $file exists within $path


```

## Usage Database.class.php

```php
require_once 'PDODatabase.class.php';
$db = new PDODatabase();

$db->DBQuery('SELECT * FROM table'); //Queries an SQL statement to the database
$result = $db->DBResultSet(); // Saves the result set into $result variable

$db->DBQuery('SELECT * FROM table WHERE id = :id'); // Selecting data with prepared statement
$db->DBBindValues(':id',1); //Binding the id with actual value
$db->DBExecute(); // Executes the statement, pleace it in if statement to check for true or false.
$result = $db->DBResultSingle(); // Returning single row



```

<h1 style="text-align:center">DKA PHP Database MODULE</h1>
<p style="text-align:center">this is a part module component from or to DKA PHP Framework</p>
<br>

## Status

![GitHub last commit](https://img.shields.io/github/last-commit/YovanggaAnandhika/DKAFramework-PHP-MariaDB)
![GitHub contributors](https://img.shields.io/github/contributors/YovanggaAnandhika/DKAFramework-PHP-MariaDB)
![GitHub pull requests](https://img.shields.io/github/issues-pr/YovanggaAnandhika/DKAFramework-PHP-MariaDB)
![GitHub issues](https://img.shields.io/github/issues/YovanggaAnandhika/DKAFramework-PHP-MariaDB)
![GitHub repo size](https://img.shields.io/github/repo-size/YovanggaAnandhika/DKAFramework-PHP-MariaDB)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity)


## Benefit

**Flexible:** System opens and closes the function of loading the required modules because the framework module is
unloading Install it.

**Fast:** Optimizes Servers with Low RAM, and the Fastest Combination of Frameworks, and Compression Technologies The
good one.

## Feature

* **Structured.** Easily Comprehensible and Neat Code and Callable Like a Modulation Pack.
* **No Interface Blocking.** Can Run Without Interfering With Other Functions.
* **Complete Documentation.** Complete and Included Documentation and Sample Code.
* **Free from Error.** There is an Error Detection so that Finding Errors Can be Easily Done.
* **Without Installing WebServer.** Using the main JS language that is suitable in terms of data efficiency.
* **More Other Features.** 🐈

**I'm a Night 🦉**


<p style="text-align:center">
<a href="https://www.buymeacoffee.com/celiduba" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/default-red.png" alt="Buy Me A Coffee" height="40" width="170" ></a>
</p>

---

## Installing DKA PHP MariaDB Module

Simple Installation

with require
``` composer require dkaframework/database:<version>```<br/>
with dev installation
``` composer require-dev @dkaframework/database:<version> ```


Read More About [Installation Guide](https://github.com/YovanggaAnandhika/Server/blob/master/INSTALL.md) On the Website
Us For More Information.

## Use DKA php Database

Simple Used Module

````php
<?php

   /** Autoload from composer **/
   require ("vendor/autoload.php")
   
   /** get namespace use**/
   use dkaframework\database\Connection;
   use dkaframework\database\CRUD;
   
   /** init connector **/
   $Connector = Connection::MariaDB(array $config, int $pdo_default_fetchmode, int $err_mode);
   /** get CRUD Action **/
   $Read = CRUD::Read($Connector, <db_name>);
   /** example print execution command **/
   echo $read;
   
   //.. another code ...

   ?>
````

Read More About [How To Use](https://github.com/YovanggaAnandhika/Server/blob/master/USAGE.md) For How To Details Use.

## About Copyright

Read About : </b>[LICENCE](https://github.com/YovanggaAnandhika/Server/blob/master/LICENSE.md)

## Team

| [@yovangga](https://github.com/yovanggaanandhika)                                                                       | [@DKAResearchCenter](https://github.com/DKAResearchCenter)                                                    |
|-------------------------------------------------------------------------------------------------------------------------|---------------------------------------------------------------------------------------------------------------|
| <img align="center" src="https://avatars.githubusercontent.com/yovanggaanandhika?s=100&v=1" width="100" height="100" /> | <img align="center" src="https://avatars.githubusercontent.com/DKAResearchCenter?s" width="100" height="100"> |
| Full Stack Development                                                                                                  | DKA Research Center                                                                                           |

## Kredit

Thanks To [DKA Research Center](https://github.com/YovanggaAnandhika) To Donate a Package Name!

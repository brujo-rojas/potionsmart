# Potions Mart

> API Rest Potions Market, with Laravel 9 and mysql



### Getting started

Run migrations and fill database with seed data.
```
$ php artisan migrate:fresh --seed
``` 




### Principal Routes
```
  POST       api/buy ........................... Api\ClientController@buy
  GET|HEAD   api/clients ..................... Api\ClientController@index
  POST       api/login ......................... Api\AuthController@login
  GET|HEAD   api/potions ..................... Api\PotionController@index
  GET|HEAD   api/user ........................... Api\AuthController@user
  POST       api/register ................... Api\AuthController@register
```

###### Routes on Postman
[![Run in Postman](https://run.pstmn.io/button.svg)](https://www.postman.com/irricrops/workspace/public-workspace/request/101866-da577021-6150-4b55-8c7e-8e5fcbf15c85) 



### DatabaseModel
![Database Model](https://raw.githubusercontent.com/brujo-rojas/potionsmart/master/potionsDB.png)



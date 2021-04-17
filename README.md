<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# About Project

API for mobile apps and other frontend apps built by Laravel and Sanctum. Just clone the repo and run the project you will get few sample apis for testing on your frontend.

## Installing
<ol>
<li>Clone the project</li>
<li>run composer install</li>
<li>run php artisan migrate</li>
<li>run php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"</li>
</ol>

## Running
<ol>
<li>run php artisan serve</li>
</ol>


## Available Api

**URL:** /api/create

**Method:** POST

**Request:**
```
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://127.0.0.1:8000/api/create',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('name' => 'Smin','email' => 'sminrana1001@gmail.com','password' => '12345678')
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

```

**Response:**
```
{
    "success": true,
    "token": {
        "name": "TutsForWeb",
        "abilities": [
            "*"
        ],
        "tokenable_id": 9,
        "tokenable_type": "App\\Models\\User",
        "updated_at": "2021-04-17T11:00:48.000000Z",
        "created_at": "2021-04-17T11:00:48.000000Z",
        "id": 14
    }
}
```

___
**URL:** /api/login

**Method:** POST

**Request:**
```
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://127.0.0.1:8000/api/login',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('email' => 'sminrana1001@gmail.com','password' => '12345678'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

```

**Response:**
```
{
    "login": true,
    "token": "15|YLJIcanaEVeuyP82KqdKFSw8t3izgd9uAYqSmWvi",
    "data": {
        "id": 9,
        "name": "Smin",
        "email": "sminrana1001@gmail.com",
        "email_verified_at": null,
        "created_at": "2021-04-17T11:00:48.000000Z",
        "updated_at": "2021-04-17T11:00:48.000000Z"
    },
    "message": "Login successful"
}
```
___
**URL:** /api/user/cart (logged user shopping cart)

**Method:** GET

**Request:**
```
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://127.0.0.1:8000/api/user/cart',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer 9|jgItvy6W7AuqrnhtBm53yU8Bu3mMS9DiiClPqQHH'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

```

**Response:**
```
[
    {
        "id": 1,
        "name": "Product 1",
        "price": 110.5
    },
    {
        "id": 2,
        "name": "Product 2",
        "price": 10.5
    }
]
```

___
**URL:** /api/products

**Method:** GET

**Request:**
```
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://127.0.0.1:8000/api/products',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

```

**Response:**
```
[
    {
        "id": 1,
        "name": "Product 1",
        "price": 110.5
    },
    {
        "id": 2,
        "name": "Product 2",
        "price": 10.5
    },
    {
        "id": 3,
        "name": "Product 3",
        "price": 50
    }
]
```
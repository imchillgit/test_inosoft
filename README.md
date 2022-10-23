## Laravel CRUD MongoDB

## .env Configuration
```
DB_CONNECTION=mongodb
DB_HOST=127.0.0.1
DB_PORT=27017
DB_DATABASE=vehicle
DB_USERNAME=
DB_PASSWORD=
```
## Installation

- git clone https://github.com/imchillgit/test_inosoft.git
- cd test_inosoft
- composer install
- copy .env.example .env
- php artisan key:generate
- php artisan jwt:secret
- php artisan serve

## Test case Postman

## Register API

http://localhost:8000/api/register/

![image](https://user-images.githubusercontent.com/115337455/197403453-500174c2-b387-4204-a742-f4a41a90174f.png)

## Login API

http://localhost:8000/api/register/

![image](https://user-images.githubusercontent.com/115337455/197403785-c6e172d6-b506-48ca-a3ff-8cadf0b7e165.png)

## Get all stok kendaraan

http://localhost:8000/api/kendaraan

![image](https://user-images.githubusercontent.com/115337455/197404854-e8dd03e0-a906-4431-9fde-92fedf917cac.png)

## Get all penjualan kendaraan

http://localhost:8000/api/transaction

![image](https://user-images.githubusercontent.com/115337455/197404908-ca3cf15a-ef4c-45c6-868b-dbb8d81a4c0a.png)

## Get total jumlah penjualan kendaraan per kendaraan by ID Kendaraan

http://localhost:8000/api/transaction/{id}

![image](https://user-images.githubusercontent.com/115337455/197404937-08c6be0c-75f3-425c-8cfb-a58a733263ea.png)


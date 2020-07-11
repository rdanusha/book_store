# Book Store

## Introduction

This is a simple demo book cart system. 

## Assumptions

- Admin and Site user already logged in to the site.
- Admin can mange Books and Books Categories via `{domain}/dashboard`
- Stock quantity management is not implemented. 
- Valid Coupon Code: `DIS15`

## Installation

### Server Requirement
* PHP >= 7.1.3
* Ctype PHP Extension
* iconv PHP Extension
* JSON PHP Extension
* PCRE PHP Extension
* Session PHP Extension
* Tokenizer PHP Extension
* SimpleXML PHP Extension

### Setup Instructions
* Download or clone the repository
* Rename .env.example as .env and update database name and user credentials
* Run `composer update`
* Run `php bin/console doctrine:database:create`
* Run `php bin/console doctrine:migrations:migrate`
* Run `symfony serve`

### Admin User Dashboard

You can access admin user dashboard from `{domain}/dashboard`
Ex: http://127.0.0.1:8000/dashboard

### Site Information
* Main URL : `{domain}/` Ex: http://127.0.0.1:8000/
* Cart URL : `/shop/cart` Ex: http://127.0.0.1:8000/shop/cart
* Checkout URL : `/shop/checkout` Ex: http://127.0.0.1:8000/shop/checkout






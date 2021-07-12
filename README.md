## About MyEcommerce
My new B2C ecommerce, specialized for clothing store. Inspired by zalora.co.id, berrybenka.com.
Project started at monday July 12th.
## Features
- User can see featured categories, search, cart with item counter, and user menu on navbar
- User can see featured product/promo discount
- User can see supported payment
- User can see supported expedition
- User can read how to buy
- User can contact us
- User can read privacy policy
- User can read term and condition
- User can see detail product (photos, price, specification)
- User can see product by category, brand, gender or by user want to search
- User can see cart (add, update or delete qty)
- User can see checkout page (add user information, payment information, shipping address)
- User can register, login, register confirmation, update password, update profile, forgot password
- User can see purchase history, shipping track, order status
- User can see wishlist
- User can delete account
- User can read about us
## Design
- Default Part
    - Header
        - Navbar
            - Logo
            - Featured Link (it can be category or else)
            - Search field
            - User button (when logged in)
            - Cart button (when logged in)
        - Footer
            - Logo with short description about store
            - Custom link to page:
                - About us
                - Contact us
                - Privacy policy
                - Terms and Conditions
                - How to order
                - How to transfer confirmation
            - Social media link
            - Back to top button
            - Supported payment channels
            - Supported expedition vendors
- Pages
    - Homepage
        - Customized slider
        - Customized banner
        - Customized ad
    - Search result page
        - listing searching result
    - Product detail
        - photos
        - description
        - price
        - size 
        - share button
        - review
        - related product
    - Products
        - listing newest products
        - listing categories
        - listing brand
        - listing material
        - listing price
        - listing colors
    - Login page
        - field email & password
        - link to forgot password page
    - Forgot password
        - field email
    - Registration
        - field
            - email
            - password
            - gender
            - fullname
            - birthdate
    - Dashboard user
        - Tabs
            - Profile
                - update profile
                - reset password
                - delete account
            - Wishlist
                - listing wishlist
            - Payment confirmation
                - fields
                    - order number
                    - bank channel
                    - bank destination
                    - account name
                    - transfer method
                    - nominal
                    - transfer date
                    - transfer prove
            - My Purchase Order
    - Cart
        - listing product ordered
        - update qty, delete product
    - Checkout
        - add new shipping address or choose from shipping address list
        - payment method
        - choose shipment vendor 
        - review order
    - Purchase 
        - order information
        - choosen payment method
        - payment confirmation button
## Modules
- Member
    - user can see listing member with action buttons (edit, show detail)
    - user can see detail member
    - user can edit member personal information
    - user can reset password member
    - user can change member active status
    - user can search member
    - user can create member
- Product
    - user can add, edit and change status product
    - user can see listing products
    - user can search product
    - user can see detail of product
- Order
    - user can see listing order
    - user can see detail of order
    - user can see and change status of order
    - user can see payment status
    - user can see payment confirmation
    - user can cancel order
- Dashboard
    - user can see total new member (monthly)
    - user can see total order define by status (monthly)
- Setting
    - user can add new user define by level
    - user can manage link menu on navbar
    - user can manage slider
    - user can manage ad promo banner
    - user can manage banner
    - user can manage page
    - user can manage social media link
    - user can manage payment channel icon
    - user can manage shipment vendor icon
## Database
- member
    - **id**
    - member_no
    - full_name
    - email
    - password
    - photo
    - gender
    - birth_date
    - latest_login_at
    - activated_at
    - created_at
    - created_by
    - updated_by_member_at
    - updated_by_admin_at
    - **updated_admin_by**
- token
    - token
    - channel (registration, forgot_password)
    - created_at
    - expired_at
    - **member_id**
- product_category
    - id
    - name
    - slug
    - **parent_id**
    - short_description
    - banner
    - created_at
    - updated_at
- brand
    - id
    - name
    - slug
    - logo
    - banner
    - size_guide
    - created_at
    - updated_at
- color
    - id
    - name
    - hex
- size
    - id
    - name
- product
    - id
    - sku_no
    - name
    - slug
    - price
    - discount
    - description
    - size (serialized/delimetered)
    - color (serialized/delimetered)
    - material
    - care_instruction
    - viewed
    - **brand_id**
- product_size
    - **product_id**
    - **size_id**
- product_color
    - **product_id**
    - **color_id**
- product_category
    - **product_id**
    - **category_id**
- product_review
    - **product_id**
    - **member_id**
    - star
    - review
- cart
    - id
    - **member_id**
    - **product_id**
    - qty
- order
    - id
    - order_no
    - **member_id**
    - **shipping_address_id**
    - recipient_name
    - address
    - zip_code
    - **city_id**
    - phone_number
    - order_status (unpaid, canceled_by_admin, canceled_by_member, expired, paid)
    - expired_at
    - total_amount
    - payment_method
    - transfer_account_name
    - transfer_bank_name
    - transfer_amount
    - transfer_at
    - transfer_file
    - **transfer_bank_id**
    - created_at
- order_item
    - id
    - **order_id**
    - **product_id**
    - price
    - qty
- shipping_address
    - id
    - **member_id**
    - name
    - recipient_name
    - adress
    - **city_id**
    - phone_number
    - zip_code
    - is_default (1,0)
    - created_at
    - updated_at
- slider
    - id
    - image
    - title
    - link
    - short_description
    - order
    - active (1,0)
- banner
    - id
    - name
    - image
    - **position_id**
    - link
    - title
    - slug
- banner_position
    - id
    - name
- ad
    - id
    - image
    - link
    - title
    - slug
- user
    - id
    - email
    - password
    - full_name
    - photo
    - is_blocked
    - created_at
    - created_by
    - updated_at
    - updated_by


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>




## Tech
- Docker
- Nginx
- Laravel 7.x
- MySQL
## Steps to Produce
- Generate migration files
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## LockNext Admin Panel Demonstration

This is a demonstration of a simple admin panel for LockNext Project, that is participating in #ROSHNHackathon2024. The admin panel is built using Laravel 11 to manage real estate units and link them with tenants so they can receive their electronic keys using LockNext mobile application.

## Our Team

We are students from Majmaah University, College of Computer and Information Sciences, participating in #ROSHNHackathon2024 with our team (TechHub) with a goal to elevate overall project efficiency and outcomes. Our team consists of the following members:

- Turki Al Mutairi
- Abdullah Houso
- Abdulrrhman Al Humaidi
- Mohannad Al Dawish
- Basim Al Dawood

## How to Install and Run

**Requirements:**
- PHP 8.2 or higher
- Composer
- Node.js v20 or higher

```
mkdir locknext
cd locknext
git clone https://github.com/AbdullahHouso/LockNext.git
cp .env.example .env
composer install
npm install && npm run build
php artisan serve # Runs the project on http://127.0.0.1:8000
```

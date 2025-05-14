# Laravel 11 Stripe Integration

This project is a simple implementation of Stripe integration with Laravel 11.

## Requirements

- Apache 2 or Nginx server
- PHP (compatible with Laravel 11)
- Composer
- Node.js and npm

## Installation

Follow the steps below to set up and run the project:

### Step 1: Clone the Repository

```bash
git clone https://github.com/ranjeet333/laravel11-stripe-integration
```
### Step 2: Navigate to the Project Directory

```bash
cd laravel11-stripe-integration
```

### Step 3: Install Required PHP Packages

```bash
composer install
```
### Step 4: Copy the Environment File

```bash
cp .env.example .env
```

### Step 5: Configure Environment Variables

```bash
APP_URL=http://your-local-dev-url.test
ASSET_URL=http://your-local-dev-url.test

STRIPE_KEY=
STRIPE_SECRET=
```

### Step 6: Generate the Application Key

```bash
php artisan key:generate
```

### Step 7: Install JS Packages and Build Assets

```bash
npm install
npm run build
```

### Step 8: Set Up SQLite Database

```bash
touch database/database.sqlite

php artisan migrate
```

### Step 9: Run the Application
```bash
php artisan serve
```

### Step 10: Configure Stripe Keys
Once the application runs without error, update the Stripe credentials in the .env file:

```bash
STRIPE_KEY=your_stripe_publishable_key
STRIPE_SECRET=your_stripe_secret_key
```

# STOREX

A multi-language product catalog website for tent products.

![Storex](https://storex.lv/images/placeholder-tent-1.jpg)

## Production Website

Visit the live website at [https://storex.lv](https://storex.lv)

## About

Storex is a platform for tents, marquees, and related accessories. The platform allows users to browse products by
categories, view detailed product information, and request quotes or make inquiries. The website is fully
multi-language, supporting multiple locales for international customers.

## Features

- **Multi-language Support**: Complete translation system for all content using Spatie's translatable package
- **Product Catalog**: Hierarchical category and product structure with detailed product information
- **Product Variants**: Support for multiple variants of the same product with different specifications
- **Image Gallery**: Multiple images per product with gallery view
- **Admin Panel**: Secure admin interface for managing categories, products, and content
- **Contact Form**: Spam-protected contact form with honeypot technology
- **Responsive Design**: Mobile-friendly interface using Tailwind CSS
- **SEO Friendly**: Optimized URLs and metadata for search engines
- **GDPR Compliant**: Cookie consent management

## Technology Stack

### Backend

- PHP 8.2
- Laravel 12.0
- MySQL Database
- Spatie Translatable
- Laravel Localization
- Laravel Honeypot

### Frontend

- Tailwind CSS
- Vite
- Alpine.js
- CKEditor 5
- FilePond for file uploads
- Flowbite components

## Installation

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js and NPM
- MySQL

### Setup Steps

1. Clone the repository
   ```
   git clone https://github.com/llinards/storex.git
   cd storex
   ```

2. Install PHP dependencies
   ```
   composer install
   ```

3. Install JavaScript dependencies
   ```
   npm install
   ```

4. Create environment file
   ```
   cp .env.example .env
   ```

5. Generate application key
   ```
   php artisan key:generate
   ```

6. Configure your database in the .env file
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=storex
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. Run database migrations
   ```
   php artisan migrate
   ```

8. Build frontend assets
   ```
   npm run build
   ```

9. Start the development server
   ```
   php artisan serve
   ```

10. Visit http://localhost:8000 in your browser

## Development

### Running in Development Mode

```
npm run dev
```

### Code Formatting

```
npm run format
```

## License

This project is proprietary software. All rights reserved.

## Contact

For inquiries, please contact us through the [contact form](https://slmedia.lv) on our website.

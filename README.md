# Storex Structures

A multilingual product catalog and company website for Storex Structures — a platform for tents, marquees, and related accessories.

## Production Website

Visit the live website at [https://storex.lv](https://storex.lv)

## About

Storex is a product catalog platform that allows users to browse products by categories, view detailed product information with multiple variants and specifications, and submit inquiries via a contact form. The website is fully multilingual, supporting multiple locales for international customers.

## Features

- **Multi-language Support** — full translation system using Spatie Translatable (JSON columns) and mcamara/laravel-localization for locale-based routing
- **Product Catalog** — hierarchical categories and products with detailed specifications
- **Product Variants** — multiple variants per product with dimensions, pricing, and downloadable attachments
- **Image Gallery** — multiple images per product with lightbox (Fancyapps UI)
- **Admin Panel** — secure admin interface for managing categories, products, and content with CKEditor rich text editing and FilePond file uploads
- **Blog** — articles section for content marketing
- **Pricelist** — downloadable pricelist page
- **FAQ** — frequently asked questions section
- **Contact Form** — spam-protected with Spatie Honeypot
- **Cookie Consent** — GDPR-compliant cookie management (Whitecube Laravel Cookie Consent)
- **Responsive Design** — mobile-friendly UI with Tailwind CSS and Flowbite components

## Tech Stack

### Backend

- **PHP** 8.3
- **Laravel** 12
- **MySQL** database
- **Laravel UI** for authentication
- **Spatie Laravel Translatable** for multilingual content
- **mcamara/laravel-localization** for locale-based routing
- **Spatie Laravel Honeypot** for spam protection
- **Whitecube Laravel Cookie Consent** for GDPR compliance

### Frontend

- **Blade** templates with component-based architecture
- **Tailwind CSS** 3 for styling
- **Flowbite** UI component library
- **Vite** 7 for asset bundling
- **SCSS** for custom styles
- **Bootstrap Icons** for iconography
- **CKEditor 5** for rich text editing (admin)
- **Fancyapps UI** for lightbox/gallery
- **FilePond** for file uploads

### Development & Tooling

- **Pest** 4 for testing
- **Laravel Pint** for PHP code formatting
- **Prettier** with Blade and Tailwind plugins
- **Laravel Telescope** for debugging
- **Laravel Nightwatch** for monitoring
- **Laravel Sail** for Docker-based local development
- **Laravel Herd** as the local development server

## Prerequisites

- PHP >= 8.2
- Composer
- Node.js & npm
- MySQL

## Installation

```bash
git clone https://github.com/llinards/storex.git
cd storex

composer install
npm install

cp .env.example .env
php artisan key:generate

# Configure your database in .env, then run migrations
php artisan migrate

npm run build
```

## Development

```bash
# Start all services (server, queue, logs, vite) concurrently
composer run dev

# Or run individually
php artisan serve
npm run dev
```

## Testing

```bash
php artisan test --compact
```

## Code Formatting

```bash
# PHP
vendor/bin/pint

# Blade & frontend
npm run format
```

## License

This project is proprietary software. All rights reserved.

## Contact

For inquiries, please contact us through the [contact form](https://slmedia.lv) on our website.

# AGENTS.md - Coding Agent Guidelines for Storex

## Project Overview

Laravel 12 e-commerce application with multi-language support (Latvian/English). Uses Pest 4 for testing, Tailwind CSS v3 for styling, and Vite for frontend bundling.

## Build/Lint/Test Commands

### Testing (Pest 4)

```bash
# Run all tests
php artisan test --compact

# Run a single test file
php artisan test tests/Feature/ProductTest.php --compact

# Run tests matching a filter
php artisan test --compact --filter="returns a page with all products"

# Run only unit tests
php artisan test --testsuite=Unit --compact

# Run only feature tests
php artisan test --testsuite=Feature --compact

# Create a new test
php artisan make:test --pest ProductFeatureTest           # Feature test
php artisan make:test --pest --unit ProductUnitTest       # Unit test
```

### Code Formatting

```bash
# Format PHP with Pint (run before committing)
vendor/bin/pint --dirty --format agent

# Format all PHP files
vendor/bin/pint --format agent

# Format frontend files with Prettier
npm run format
```

### Development Server

```bash
# Full dev environment (server, queue, logs, vite)
composer run dev

# Or individual commands
php artisan serve
npm run dev
npm run build
```

## Code Style Guidelines

### PHP Formatting (Laravel Pint)

- 4 spaces indentation
- Always use curly braces for control structures
- One blank line between methods
- Imports grouped: PHP native, vendor, application

### Type Declarations

Always use explicit types for parameters and return values:

```php
public function getActiveProducts(Category $category): Collection
{
    return $category->products->where('is_available', true);
}

protected function isAccessible(User $user, ?string $path = null): bool
{
    // ...
}
```

### Naming Conventions

- **Classes**: `PascalCase` (e.g., `ProductServices`, `StoreProductRequest`)
- **Methods/Variables**: `camelCase` (e.g., `getAllActiveProducts`, `$productServices`)
- **Database columns**: `snake_case` (e.g., `is_available`, `category_id`)
- **Routes**: `kebab-case` (e.g., `product.show`, `category.index`)
- **Enum keys**: `TitleCase` (e.g., `Monthly`, `FavoritePerson`)

Use descriptive names: `isRegisteredForDiscounts` not `discount()`.

### Constructor Property Promotion

Use PHP 8 constructor property promotion:

```php
public function __construct(
    protected ProductServices $productServices,
    protected CategoryServices $categoryServices,
) {}
```

### Comments

- Prefer PHPDoc blocks over inline comments
- Only use inline comments for exceptionally complex logic
- Add array shape type definitions in PHPDoc when appropriate

### Models

- Use `HasFactory` and `HasTranslations` traits as needed
- Define relationships with return type hints:

```php
public function category(): BelongsTo
{
    return $this->belongsTo(Category::class);
}
```

- Prefer `Model::query()` over `DB::`
- Use eager loading to prevent N+1 queries

### Controllers

- Use Form Request classes for validation (see `app/Http/Requests/`)
- Inject services via constructor
- Return type hints on all methods (`View`, `RedirectResponse`)
- Use try/catch with logging for mutations

### Services

- Place business logic in `app/Services/`
- Inject dependencies via constructor
- Use descriptive method names

### Tests (Pest 4)

```php
it('returns a page with all products', function () {
    Storage::fake('local');
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);

    $this->get(route('category.index'))
        ->assertStatus(200)
        ->assertSee($product->name);
});
```

- Use factories for model creation
- Use `Storage::fake()` for file operations
- Feature tests use `RefreshDatabase` (configured in `tests/Pest.php`)

### Frontend (Prettier)

- 4 spaces indentation
- Single quotes
- Trailing commas
- 120 char print width
- Blade files use `prettier-plugin-blade`
- Tailwind classes sorted by `prettier-plugin-tailwindcss`

## Laravel 12 Structure

- Middleware: `bootstrap/app.php` (not `app/Http/Kernel.php`)
- Providers: `bootstrap/providers.php`
- Console commands auto-discovered from `app/Console/Commands/`
- Model casts: use `casts()` method, not `$casts` property

## Key Directories

```
app/
  Http/Controllers/    # Controllers
  Http/Requests/       # Form Request validation
  Models/              # Eloquent models
  Services/            # Business logic
database/
  factories/           # Model factories
  migrations/          # Database migrations
  seeders/             # Database seeders
tests/
  Feature/             # Feature tests
  Unit/                # Unit tests
resources/
  views/               # Blade templates
```

## Error Handling

- Use try/catch in controller mutations
- Log errors with `Log::error()`
- Return user-friendly flash messages
- Use Form Requests for validation errors

## Environment

- Served by Laravel Herd at `https://storex.test`
- SQLite for testing (in-memory)
- Multi-locale: Latvian (lv) as primary, English (en) fallback

## Before Committing

1. Run `vendor/bin/pint --dirty --format agent`
2. Run `php artisan test --compact` (or relevant subset)
3. Run `npm run format` if frontend files changed

# Stria Icons - Laravel Blade Starter Kit

This is a minimal starter kit for integrating Stria Icons into a Laravel Blade application.

## Prerequisites

- PHP 8.1 or higher
- Composer

## Installation

1. Clone or download this template.
2. Install dependencies:
   ```bash
   composer install
   ```

## Usage

This template demonstrates two ways to use Stria Icons in your Blade views:

### 1. Self-closing Blade Components
```blade
<x-stria-solid-user class="w-8 h-8 text-indigo-400" />
```

### 2. Blade Directive
```blade
@stria('user', 'solid', ['class' => 'w-8 h-8 text-indigo-400'])
```

See `resources/views/welcome.blade.php` for a complete example.

## Licenses

- Code (compiler toolchain, wrappers, build scripts): MIT License
- Icon designs (SVGs in `/icons` directory): CC BY 4.0

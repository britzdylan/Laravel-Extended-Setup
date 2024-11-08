# Laravel Extended Setup

A comprehensive Laravel starter template with extended functionality and modern development tools pre-configured. This template builds upon Laravel's solid foundation with additional packages and configurations for rapid application development.

## 🚀 Features

-   **PHP 8.2+** - Leveraging modern PHP features
-   **Laravel 11.x** - Latest Laravel framework
-   **Inertia.js** - Modern single-page application setup
-   **Jetstream** - Authentication and team management
-   **Paddle Integration** - Built-in payment processing
-   **Socialite** - Social authentication support
-   **Pulse** - Real-time application monitoring
-   **Discord Logging** - Integrated Discord notifications
-   **Resend** - Modern email delivery service
-   **Development Tools**:
    -   Laravel Pail (Real-time log viewer)
    -   Laravel Telescope (Development debugging)
    -   Laravel Pint (Code styling)
    -   Pest PHP (Testing framework)

## 📋 Requirements

-   PHP >= 8.2
-   Composer
-   Node.js & NPM
-   Redis (for queues and caching)
-   SQLite (for local development)

## 🛠️ Installation

1. Create a new project:

```bash
composer create-project myusername/laravel-extended-setup your-project-name
```

2. Configure your environment:

```bash
cp .env.example .env
php artisan key:generate
```

3. Install frontend dependencies:

```bash
npm install
```

4. Set up the database:

```bash
php artisan migrate
```

5. Start the development server:

```bash
composer run dev
```

This will concurrently run:

-   Laravel development server
-   Queue worker
-   Real-time logs (Pail)
-   Vite development server

## ⚙️ Configuration

### Essential Environment Variables

```env
# Application
APP_NAME=YourAppName
APP_ENV=local
APP_DEBUG=true

# Paddle (Payment Processing)
PADDLE_VENDOR_ID=
PADDLE_VENDOR_AUTH_CODE=
PADDLE_PUBLIC_KEY=

# Discord Logging
DISCORD_WEBHOOK_URL=

# Resend Email
RESEND_API_KEY=

# Social Authentication
GITHUB_CLIENT_ID=
GITHUB_CLIENT_SECRET=
```

### Redis Configuration

The template is configured to use Redis for queue processing and caching. Ensure Redis is installed and running on your system.

## 🧪 Testing

Run the test suite using Pest:

```bash
./vendor/bin/pest
```

## 🔧 Development Tools

### Code Styling

Format your code using Laravel Pint:

```bash
./vendor/bin/pint
```

### Debugging

-   **Laravel Telescope**: Access at `/telescope` (disabled in production)
-   **Laravel Pulse**: Access at `/pulse` for real-time metrics
-   **Laravel Pail**: Real-time log viewing in your terminal

## 📦 Included Packages

### Production Dependencies

-   inertiajs/inertia-laravel: ^1.0
-   laravel/cashier-paddle: ^2.5
-   laravel/jetstream: ^5.3
-   laravel/pulse: ^1.2
-   laravel/sanctum: ^4.0
-   laravel/socialite: ^5.16
-   marvinlabs/laravel-discord-logger: ^1.4
-   predis/predis: 2.0
-   resend/resend-php: ^0.14.0
-   tightenco/ziggy: ^2.0

### Development Dependencies

-   laravel/pail: ^1.2
-   laravel/pint: ^1.13
-   laravel/telescope: ^5.2
-   pestphp/pest: ^3.5

## 🔐 Security

If you discover any security-related issues, please email your-email@example.com instead of using the issue tracker.

## 📄 License

This Laravel extended setup is open-sourced software licensed under the [MIT license](LICENSE.md).

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

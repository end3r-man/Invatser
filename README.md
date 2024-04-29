<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/ELG-Foundation/Invatser/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://github.com/ELG-Foundation/Invatser/releases/tag/0.2-Beta"><img src="https://img.shields.io/github/downloads-pre/ELG-Foundation/Invatser/latest/total" alt="GitHub Downloads" ></a>
<a href="https://github.com/ELG-Foundation/Invatser"><img alt="GitHub commit activity" src="https://img.shields.io/github/commit-activity/t/ELG-Foundation/Invatser"></a>
<a href="https://github.com/ELG-Foundation/Invatser/blob/main/LICENSE"><img alt="GitHub License" src="https://img.shields.io/github/license/ELG-Foundation/Invatser"></a>
</p>

## About Invatser

Invatser is an open-source Laravel-based application, designed as a replacement for traditional invoice management systems.

## Invatser Roadmap

Here are some exciting features on our roadmap:

- AI data analytics
- Enhanced mobile support
- RESTful API integration
- Mobile application (APK)

## Contributing

We welcome and appreciate all contributions to Invatser! Please refer to our [Contribution Guidelines](https://github.com/ELG-Foundation/Invatser/blob/main/CONTRIBUTING.md) for more details.

## Security Vulnerabilities

If you discover any security vulnerabilities within Invatser, please reach out to us immediately at [enderman@elg.foundation](mailto:enderman@elg.foundation). We take security seriously and will address all reported vulnerabilities promptly.

## Environment Variables

To run Invatser locally, ensure the following environment variables are set in your `.env` file:

- `DB_CONNECTION`
- `DB_HOST`
- `DB_PORT`
- `DB_DATABASE`
- `DB_USERNAME`
- `DB_PASSWORD`

For email functionality, include the following environment variables:

- `MAIL_MAILER`
- `MAIL_HOST`
- `MAIL_PORT`
- `MAIL_USERNAME`
- `MAIL_PASSWORD`
- `MAIL_ENCRYPTION`

## Getting Started

Follow these steps to set up Invatser locally:


Clone the project

```bash
  git clone https://github.com/ELG-Foundation/Invatser.git
```

Go to the project directory

```bash
  cd Invatser
```

Install Php dependencies

```bash
  Composer install
```

Install Npm dependencies

```bash
  npm install
```

Generate App Key

```bash
  php artisan key:gen
```

Migrate Db

```bash
  php artisan migrate
```

Start the server

```bash
  php artisan serve
```

Start the vite server

```bash
  npm run dev
```

## License

The Laravel framework is open-sourced software licensed under the [GPL license](https://opensource.org/license/gpl-3-0).

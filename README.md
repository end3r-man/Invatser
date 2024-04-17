
# Invatser | Invoice Management

An open-source replacement for invoice management

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
## Roadmap

- Ai data analytics

- Better mobile support

- Rest Api

- Mobile Apk




## Authors

- [@end3r-man](https://www.github.com/end3r-man)


## Demo

- [invatser](https://invatser.elg.foundation)

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`DB_CONNECTION`
`DB_HOST`
`DB_PORT`
`DB_DATABASE`
`DB_USERNAME`
`DB_PASSWORD`

For Email, add the following environment variables

`MAIL_MAILER`
`MAIL_HOST`
`MAIL_PORT`
`MAIL_USERNAME`
`MAIL_PASSWORD`
`MAIL_ENCRYPTION`
## Run Locally

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


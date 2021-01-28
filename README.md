# Install

```bash
git clone https://github.com/i3652/TaidoumLaravel.git
composer update --no-scripts
npm install
```

#### Copy the file .env.example to .env

```bash
cp .env.example .env
```

#### Move the file "database.sqlite" to the folder "database"

#### Generate keys

```
php artisan key:generate
```

# Run migrations

```bash
php artisan migrate
```

# Run the server

```bash
php artisan serve
```

##### Don't forget to change database configuration in the file ".env"

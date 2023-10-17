## HOW TO RUN THIS PROJECT

### Installation

1. Clone the repo
```
git clone https://github.com/dikaapranata/Sistem_Seleksi_Lowongan_Kerja.git
```
2. Get into the project
```
cd Sistem_Seleksi_Lowongan_Kerja
```
3. Install Composer Dependencies
```
composer install
```
4. Instal NPM Dependencies
```
npm install
```
5. Create a copy of .env file
```
cp .env.example .env
```
6. Generate app encryption key
```
php artisan key:generate
```
7. Create empty database in your web server (XAMPP or Laragon)
8. In the .env file, fill your database information
9. Migrate the database
```
php artisan migrate
```
10. Seed the database
```
php artisan db:seed
```
11. Build the Tailwind CSS
```
npm run build
```
12. Create the symbolic link
```
php artisan storage:link
```
13. create dummy data
```
php artisan tinker
```
14. generate dummy data
```
App\Models\Loker::factory()->count(100)->create()
```
# Sistem_Seleksi_Lowongan_Kerja

# Store_filters
Example store products filtering
### Installation
1. Clone this repository:</br>
`git clone https://github.com/Lyutuy/Store_product_filtering.git`
2. Copy .env file and update it with your variables:</br>
`cp .env.example .env`
3. Install composer dependencies:</br>
`composer install`
4. Install and compile npm dependencies:</br>
`npm install && npm run dev`
5. Migrate database (--seed optional):</br>
`php artisan migrate --seed`
6. Generate app key:
`php artisan key:generate`
### Testing
php artisan test</br>

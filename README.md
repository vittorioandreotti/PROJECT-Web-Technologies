# iPrice - Web Technologies Project

An e-commerce web application built for selling PC components, audio equipment, and photography gear. This project demonstrates modern web development practices using the Laravel framework.

## About This Project

iPrice is a full-featured e-commerce platform that allows users to browse and purchase technology products across multiple categories:

- **PC Components** - Processors, memory, motherboards, and other hardware
- **Audio Equipment** - Headphones, speakers, and audio devices  
- **Photography** - Cameras, lenses, and photography accessories

The application includes user authentication, role-based access control (Admin, Staff, User), product catalog management, and a responsive web interface.

## Technology Stack

This project is built with **Laravel 6**, a modern PHP web framework that provides:

- Elegant routing and MVC architecture
- Eloquent ORM for database interactions
- Blade templating engine for views
- Built-in authentication and authorization
- Database migrations and seeding
- Asset compilation with Laravel Mix

### Key Laravel Features Used

- **Authentication & Authorization**: Role-based access with Admin, Staff, and User roles
- **Eloquent Models**: Product, Category, and User management
- **Blade Templates**: Responsive UI with reusable layouts
- **Routing**: RESTful routes for catalog, products, and admin functions
- **Database**: MySQL with migrations and seeders
- **Middleware**: Route protection and role verification

## Installation

1. Clone the repository
```bash
git clone https://github.com/vittorioandreotti/PROJECT-Web-Technologies.git
cd PROJECT-Web-Technologies
```

2. Install dependencies
```bash
composer install
npm install
```

3. Configure environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Setup database
```bash
php artisan migrate
php artisan db:seed
```

5. Build assets
```bash
npm run dev
```

6. Start the development server
```bash
php artisan serve
```

## Project Structure

- **Controllers**: Handle business logic for public, admin, staff, and user areas
- **Models**: Product, Category, and User data models
- **Views**: Blade templates organized by functionality
- **Routes**: Web routes for all application features
- **Database**: Migrations and seeders for initial data setup

## Features

- **Public Catalog**: Browse products by category with search functionality
- **User System**: Registration, authentication, and profile management  
- **Admin Panel**: User and staff management
- **Staff Panel**: Product and category management
- **Responsive Design**: Mobile-friendly interface
- **Product Management**: CRUD operations for inventory

## License

This project is licensed under the [MIT license](https://opensource.org/licenses/MIT).

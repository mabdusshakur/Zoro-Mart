# Zoro Mart : E-Commerce Website

This is a simple e-commerce website built with Laravel Livewire. It includes the following features:

- Stripe and COD (Cash on Delivery) payment methods
- Product delivery status notifications via email
- General help section with optionalities
- Wishlist functionality
- Add to cart functionality
- Contact and about pages
- Review optionalities
- Stripe webhook functionality

## Installation

1. Clone the repository: `git clone https://github.com/mabdusshakur/Zoro-Mart.git`
2. Install dependencies: `composer install`
3. Set up your environment variables: Rename `.env.example` to `.env` and update the necessary values.
4. Add your Stripe API secrets: Open the `.env` file and add your Stripe API keys in the `STRIPE_KEY`, `STRIPE_SECRET` and `STRIPE_WEBHOOK_SECRET` variables.
5. Configure your mail server: Open the `.env` file and update the `MAIL_*` variables with your mail server configurations.
6. Connect the database: Open the `.env` file and update the `DB_*` variables with your database connection details.
7. Generate an application key: `php artisan key:generate`
8. Run database migrations: `php artisan migrate`
9. Start the development server: `php artisan serve`

## Usage

- Visit the website in your browser: `http://localhost:8000`
- Explore the different pages and functionalities of the e-commerce website.

## Contributing

Contributors are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.
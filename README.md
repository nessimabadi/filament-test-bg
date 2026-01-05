# Filament Test Project

## Input Background Bug on Dark Mode

To reproduce the bug 
1. Clone the repository
2. Run `composer install`
3. Run `php artisan serve`
4. Visit `http://localhost:8000`
5. Click the dark mode button to enable dark mode
6. Observe the wrong background for the text input
7. Comment out the `@plugin "@tailwindcss/forms";` in `resources/css/app.css`
8. Observe the right background for the text input

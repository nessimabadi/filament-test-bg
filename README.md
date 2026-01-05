# Filament Test Project

## Input Background Bug on Dark Mode

To reproduce the bug 
1. Clone the repository
2. Run `composer install`
3. Run `npm install`
4. Run `npm run dev`
5. Run `php artisan serve`
6. Visit `http://localhost:8000`
7. Click the dark mode button to enable dark mode
8. Observe the wrong background for the text input
9. Comment out the `@plugin "@tailwindcss/forms";` in `resources/css/app.css`
10. Observe the right background for the text input

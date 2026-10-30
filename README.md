# Reading List App

## About the App

Reading List is a simple Laravel application that helps users keep track of books they want to read, are currently reading, or have finished. Users can add, view, edit, delete, and filter books by their reading status.

## How to Run the App

1. Clone the repository:

   ```bash
   git clone https://github.com/anjalitiwari7820-lgtm/reading-list.git
   cd reading-list
   ```

2. Install dependencies:

   ```bash
   composer install
   ```

3. Set up the environment file:

   **Windows (PowerShell):**
   ```powershell
   Copy-Item .env.example .env
   ```

   **Mac/Linux:**
   ```bash
   cp .env.example .env
   ```

4. Generate the application key:

   ```bash
   php artisan key:generate
   ```

5. Make sure the `.env` file uses SQLite:

   ```env
   DB_CONNECTION=sqlite
   ```

6. Create the SQLite database file if it does not already exist:

   **Windows (PowerShell):**
   ```powershell
   New-Item database/database.sqlite -ItemType File -Force
   ```

   **Mac/Linux:**
   ```bash
   touch database/database.sqlite
   ```

7. Run the database migrations:

   ```bash
   php artisan migrate
   ```

8. Start the Laravel development server:

   ```bash
   php artisan serve
   ```

9. Open the app in your browser:

   `http://127.0.0.1:8000/books`

## AI Usage

I used ChatGPT during this project to understand Laravel concepts and get step-by-step guidance. I asked it to explain resource routes, database migrations, controllers, form validation, CRUD operations, delete confirmation, and filtering books by status. I also used its example code snippets as guidance while implementing and testing the features myself.
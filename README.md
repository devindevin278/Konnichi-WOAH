# Konnichi-WOAH! [Japanese Learning Website]
Welcome to Konnichi-WOAH! 
A captivating Japanese language learning platform!
Are you looking for an easy and fun way to learn Japanese? Look no further than Konnichiwoah! We offer a wide range of exciting features to help you master the Japanese language with ease and effectiveness.

Konnichi-WOAH! is an online Japanese language learning platform designed for students, teachers, and administrators. This README provides an overview of the website's features and functionality.

## Key Features

### For Students

- Accessible home page with easy navigation.
- Learn page featuring interactive games, a notebook for conversational Japanese, flashcards for hiragana and katakana, and a leaderboard to track progress.
- Article page offering a wide range of articles in English and Japanese for reading practice.
- Teacher page to find qualified instructors for advanced language learning.
- Profile section for personalizing user information.

### For Teachers

- Accessible home page with easy navigation.
- Notification section to manage student registrations efficiently.
- Article section providing teaching resources and materials.
- Profile section for maintaining and updating personal information.

### For Administrators

- Accessible home page with easy navigation.
- Verify Teacher section to review and verify qualifications of potential instructors.
- Article section with full control for adding and editing content.
- Profile section for managing personal information securely.

## Technologies Used

- Laravel : PHP framework for backend development.
- MySQL : Database management system.
- Bootstrap : Frontend CSS framework.
- Socialite : Authentication library for social logins.
- Other dependencies as listed in the project's `composer.json` and `package.json` files.

# Website Installation Guide

This guide provides step-by-step instructions on how to install and set up your Konnichi-WOAH! website, a Japanese language learning website, using Visual Studio Code (VSCode) and Laravel framework. It assumes that you have already installed XAMPP, Laravel, and have a basic understanding of Laravel's directory structure and concepts.

## Prerequisites

Before proceeding with the installation, make sure you have the following software installed on your system:

- [XAMPP](https://www.apachefriends.org/index.html) : A local development environment that includes Apache, MySQL, and PHP.
- [Composer](https://getcomposer.org/) : A dependency manager for PHP.
- [Node.js and npm](https://nodejs.org/) : Required for frontend asset management.

## Installation Steps

Please follow the steps below to install and run your Konnichi-WOAH! website:

1. **Clone the Repository:** Clone the repository containing your Konnichi-WOAH! website project to your local machine using Git or download it as a ZIP file and extract it to your desired location.

    ```bash
    git clone https://github.com/devindevin278/Konnichi-WOAH.git

2. **Open the Project in VSCode:** Launch VSCode and open the project folder by selecting "Open Folder" from the "File" menu. Navigate to the folder where you cloned or extracted the project.

3. **Install Dependencies:** Open the integrated terminal in VSCode by selecting "View" -> "Terminal" from the menu. In the terminal, navigate to the project's root directory (where the `composer.json` file is located) and run the following command to install the required dependencies:

    ```bash
    composer install

4. **Install Frontend Dependencies:** Still in the terminal, run the following command to install the frontend dependencies using npm:
    ```bash
    npm install
    
5. **Set Up Environment Variables:** Copy the `.env.example` file in the project root directory and rename the copy to `.env`. Open the `.env` file and update the configuration options such as database connection details according to your local environment:
    ```bash
    cp .env.example .env

6. **Generate Application Key:** In the VSCode terminal, run the following command to generate an application key:

    ```bash
    php artisan key:generate

7. **Create Symbolic Link for Storage:** To access files stored in the Laravel `storage` directory, you need to create a symbolic link. Run the following command in the VSCode terminal:

   ```bash
    php artisan storage:link

8. **Database Setup:** Start XAMPP and ensure that Apache and MySQL are running. Create a new MySQL database for your Konnichi-WOAH! application. Open the `.env` file and update the database configuration options (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`) with your database details.

9. **Run Migrations:** In the VSCode terminal, run the following command to run the database migrations and set up the required tables:

    ```bash
    php artisan migrate

10. **Set Up Google OAuth Credentials:** To enable Google login using Socialite, you need to set up OAuth credentials from the Google Developer Console. Follow these steps:
    - Go to the [Google Developer Console](https://console.developers.google.com/) and create a new project.
    - Enable the Google+ API for your project.
    - Under the "Credentials" tab, create a new OAuth client ID.
    - Set the authorized redirect URI to `http://localhost:8000/login/google/callback`.
    - Copy the client ID and client secret.
    - Open the `.env` file in your project and add the following lines, replacing `<YOUR_CLIENT_ID>` and         `<YOUR_CLIENT_SECRET>` with your actual values:
      
      ```
      GOOGLE_CLIENT_ID=<YOUR_CLIENT_ID>
      GOOGLE_CLIENT_SECRET=<YOUR_CLIENT_SECRET>
      GOOGLE_REDIRECT_URI=http://localhost:8000/login/google/callback
      ```
  
11. **Build Frontend Assets:** In the VSCode terminal, run the following command to build the frontend assets:
    
     ```
     npm run build
     ```

12. **Start the Development Server:** In the VSCode terminal, run the following command to start the Laravel development server:
    
     ```
     php artisan serve
     ```

14. **Access Your Website:** Open a web browser and visit `http://localhost:8000` to access your Konnichi-WOAH! website. If everything is set up correctly, you should see your application running.

## Additional Information

- To make changes to your Konnichi-WOAH! website, you can edit the relevant files in the project's directory structure. Routes are defined in the `routes/web.php` file, controllers can be found in the `app/Http/Controllers` directory, and views are located in the `resources/views` directory.

- For more information on Laravel and its features, refer to the official [Laravel documentation](https://laravel.com/docs).

- If you encounter any issues during the installation process or while running your Konnichi-WOAH! website, consult the error messages in the VSCode terminal, Laravel documentation, or search for solutions on Laravel forums or Stack Overflow.

- Remember to secure your Laravel application in production environments by following best practices such as setting up proper file permissions, configuring HTTPS, and protecting sensitive data.

That's it! You have successfully installed and set up your Konnichi-WOAH! website using Visual Studio Code. Happy coding!


# Movable WebApp

## Overview
Movable WebApp is a Symfony-based web application designed to provide a seamless experience for managing educational content and functionalities. It integrates front-end and back-end templates, CRUD operations, input validation, QR code generation, and API integration.

## Features

### Frontend
- **Responsive Design**: Built with Bootstrap for mobile-friendly layouts.
- **Dynamic Content**: Uses Twig templates for dynamic rendering of pages.
- **Custom Styling**: Includes custom CSS for enhanced user experience.

### Backend
- **CRUD Operations**: Full Create, Read, Update, and Delete functionality with database relationships.
- **Input Validation**: Ensures data integrity and user-friendly error handling.
- **API Integration**: Secure and filtered API implementation for external data.
- **QR Code Bundle**: Generate and display QR codes for various use cases.

### Additional Functionalities
- **Event Management**: Manage events with advanced features.
- **User Authentication**: Secure login and registration system.
- **Data Relationships**: Handles complex relationships between entities.

## File Structure

### Templates
- **`templates/index.html.twig`**: Main structure for the homepage, including hero, features, and call-to-action sections.
- **`templates/base.html.twig`**: Base layout for consistent styling across pages.

### Assets
- **`assets/css/custom.css`**: Custom styles for the application.
- **`assets/js/custom.js`**: Custom JavaScript for additional interactivity.

### Controllers
- **`src/Controller`**: Contains Symfony controllers for handling requests and rendering views.

### Entities
- **`src/Entity`**: Defines database entities and their relationships.

### Migrations
- **`migrations/`**: Tracks database schema changes.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/celestial-unit/Movable-WebApp.git
   ```
2. Navigate to the project directory:
   ```bash
   cd Movable-WebApp
   ```
3. Install dependencies:
   ```bash
   composer install
   npm install
   ```
4. Set up the database:
   ```bash
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```
5. Run the development server:
   ```bash
   symfony server:start
   ```

## Usage
- Access the application at `http://localhost:8000`.
- Explore features such as CRUD operations, QR code generation, and more.

## Branches
- **EVENTS**: Contains the latest updates and features.

## Contributing
1. Fork the repository.
2. Create a new branch for your feature or bug fix:
   ```bash
   git checkout -b feature-name
   ```
3. Commit your changes:
   ```bash
   git commit -m "Description of changes"
   ```
4. Push to your branch:
   ```bash
   git push origin feature-name
   ```
5. Submit a pull request.

## License
This project is licensed under the MIT License.

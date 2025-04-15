# Movable WebApp

## Overview
Movable WebApp is a Symfony-based web application designed to provide a seamless experience for managing educational content. It integrates front-end and back-end templates, CRUD operations, input validation, and additional functionalities such as QR code generation and API integration.

## Features
- **Integrated Templates**: Combines front-end and back-end templates for a cohesive user experience.
- **CRUD Operations**: Full Create, Read, Update, and Delete functionality with database relationships.
- **Input Validation**: Ensures data integrity and user-friendly error handling.
- **QR Code Bundle**: Generate and display QR codes for various use cases.
- **Censored API**: Secure and filtered API implementation.
- **Responsive Design**: Built with Bootstrap for mobile-friendly layouts.

## File Structure
- **templates/index.html.twig**: Contains the main structure for the homepage, including a hero section and custom content.
- **assets/css/custom.css**: Custom styles for the application.
- **assets/js/custom.js**: Custom JavaScript for additional interactivity.

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
Feel free to fork the repository and submit pull requests for improvements or bug fixes.

## License
This project is licensed under the MIT License.

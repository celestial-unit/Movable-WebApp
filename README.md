# Movable WebApp

## Overview
Movable WebApp is a Symfony-based web application that integrates front-end and back-end templates, CRUD operations with relationships, input validation, additional functionalities, a censored API, and a QR code bundle.

## Features
- **Integrated Templates**: Seamless integration of front-end and back-end templates.
- **CRUD Operations**: Full Create, Read, Update, and Delete functionality with database relationships.
- **Input Validation**: Ensures data integrity and user-friendly error handling.
- **Additional Functionalities**: Includes advanced features to enhance user experience.
- **Censored API**: Secure and filtered API implementation.
- **QR Code Bundle**: Generate and display QR codes for various use cases.

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
- Explore the features, including CRUD operations, QR code generation, and more.

## Branches
- **EVENTS**: Contains the latest updates and features.

## Contributing
Feel free to fork the repository and submit pull requests for improvements or bug fixes.

## License
This project is licensed under the MIT License.

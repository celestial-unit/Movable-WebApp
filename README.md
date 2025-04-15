# Movable WebApp

## Overview
Movable WebApp is a comprehensive Symfony-based web application for managing educational content, events, and user interactions. It features a modular architecture, robust CRUD operations, event management, event registration, user authentication, API integration, and QR code generation.

## Main Features
- **User Authentication**: Secure registration, login, and user management.
- **Event Management**: Create, update, list, and delete events with detailed information.
- **Event Registration**: Users can register for events; admins can manage registrations.
- **CRUD Operations**: Full create, read, update, and delete for all main entities.
- **Input Validation**: Ensures data integrity and user-friendly error handling.
- **API Integration**: Secure, filtered API endpoints for external data access.
- **QR Code Generation**: Generate QR codes for events or other resources.
- **Responsive Frontend**: Built with Bootstrap and custom CSS for a modern, mobile-friendly UI.

## Project Structure & Relationships

### Templates (Twig)
- **base.html.twig**: The main layout, includes header, footer, and links to CSS/JS.
- **index.html.twig**: Homepage, extends base layout, features hero, features, and CTA sections.
- **event/index.html.twig**: Lists all events. Loops through all Event entities and displays summary info for each.
- **event/show.html.twig**: Shows details for a single event, including all its properties and a registration link/form if available.
- **event_registration/new.html.twig**: Event registration form. Displays a form for users to register for a specific event, handles validation errors, and shows success messages.
- **event_registration/index.html.twig**: (If present) Lists all registrations for an event, typically for admin use.
- **user/**: User-related templates (login, register, profile, etc.).

### Assets
- **assets/css/custom.css**: Custom styles for the application.
- **assets/js/custom.js**: Custom JavaScript for interactivity.
- **assets/img/**: Images used in the UI.

### Controllers
- **HomeController**: Renders the homepage.
- **EventController**: Handles all event CRUD operations and event detail views. Methods include:
  - `index()`: Lists all events.
  - `show($id)`: Shows details for a single event.
  - `new()`: Displays and processes the event creation form.
  - `edit($id)`: Displays and processes the event edit form.
  - `delete($id)`: Handles event deletion.
- **EventRegistrationController**: Manages event registration forms and logic. Methods include:
  - `new($eventId)`: Displays and processes the registration form for a specific event.
  - `index()`: (If present) Lists all registrations, often filtered by event or user.
  - `delete($id)`: (If present) Allows admins to remove a registration.
- **UserController**: Handles user authentication and profile management.
- **ApiController**: Provides API endpoints for external access.

### Entities
- **User**: Represents application users. Related to EventRegistration (one-to-many).
- **Event**: Represents events. , etc. Has a one-to-many relationship with EventRegistration.
- **EventRegistration**: Links users to events (many-to-one to both User and Event)., and possibly status or notes.

### Migrations
- **migrations/**: Contains database migration files for schema changes.

### Configuration
- **config/routes.yaml**: Maps URLs to controller actions. Includes routes for event listing, event details, event creation/editing, and event registration.
- **config/services.yaml**: Service definitions and dependency injection.
- **.env**: Environment variables (database, mail, etc.).

### Public
- **public/**: Web root, contains index.php and static assets.

## How the Pieces Work Together
- **Controllers** receive HTTP requests, interact with **Entities** (database), and render **Templates**.
- **Entities** define the database structure and relationships (e.g., EventRegistration links User and Event).
- **Templates** display data and forms to users, extending the base layout for consistency.
- **Assets** provide styling and interactivity for the frontend.
- **Configuration** files wire everything together, including routing and services.

## Event & Event Registration Flow
1. **Event Creation**: Admin creates an event via EventController; data saved in Event entity.
2. **Event Listing**: Users view events via event/index.html.twig.
3. **Event Details**: Users see event details via event/show.html.twig.
4. **Registration**: Users register for events via EventRegistrationController and event_registration/new.html.twig; data saved in EventRegistration entity, linked to both User and Event.
5. **Admin Management**: Admins can view/manage all registrations and events.

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
- Access the app at `http://localhost:8000`.
- Register/login as a user, browse events, and register for them.
- Admins can manage events and registrations.

## Branches
- **EVENTS**: Main development branch for event-related features.

## Contributing
1. Fork the repository.
2. Create a new branch:
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
MIT License.

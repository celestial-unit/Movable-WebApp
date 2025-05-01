# Movable - Transportation Management System

Movable is a comprehensive transportation management system built with Symfony, designed to provide accessible and convenient travel solutions.

## Features

### User Management
- User registration and authentication
- Profile management
- Role-based access control (User, Admin, Driver)
- User banning system
- Account activity tracking

### Claims (Reclamations) System
- Create and manage claims
- Multiple claim categories
- Status tracking (Pending, Resolved, Rejected)
- Admin dashboard for claims management
- Filtering and sorting capabilities

## Technical Requirements

- PHP 8.1 or higher
- MariaDB 10.4.32 or higher (or MySQL 8.0.32+)
- Symfony 6.x
- Composer
- XAMPP (for local development)

## Installation

1. Clone the repository:
```bash
git clone [repository-url]
cd Movable
```

2. Install dependencies:
```bash
composer install
```

3. Configure your database in `.env`:
```
DATABASE_URL="mysql://username:password@127.0.0.1:3306/movable?serverVersion=10.4.32-MariaDB&charset=utf8mb4"
```

4. Create database and run migrations:
```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

5. Start the Symfony development server:
```bash
symfony server:start
```

## Project Structure

```
Movable/
├── src/
│   ├── Controller/
│   │   ├── HomeController.php
│   │   ├── UserController.php
│   │   └── ReclamationController.php
│   ├── Entity/
│   │   ├── User.php
│   │   └── Reclamation.php
│   └── Form/
│       ├── UserProfileType.php
│       ├── UserPasswordType.php
│       ├── UserAdminType.php
│       └── ReclamationType.php
├── templates/
│   ├── home/
│   │   └── index.html.twig
│   ├── user/
│   │   ├── profile.html.twig
│   │   └── view.html.twig
│   ├── reclamation/
│   │   ├── index.html.twig
│   │   ├── show.html.twig
│   │   ├── new.html.twig
│   │   └── edit.html.twig
│   └── admin/
│       ├── users.html.twig
│       └── reclamation_dashboard.html.twig
└── public/
     └── assets/
```

## Database Schema

### Core Tables

1. **Users** (`users`)
   - Primary user management table
   - Fields: id, firstName, lastName, email, password, role
   - Roles: USER, ADMIN, DRIVER
   - Tracks: ban status, login history, face ID enablement
   - Primary authentication and authorization store

2. **Reclamations** (`reclamations`)
   - Claims and feedback management
   - Fields: id, title, description, status, category, user_id
   - Status options: Pending, Resolved, Rejected
   - Categories: General, Contact, Billing
   - Links to users for tracking ownership

3. **Events** (`event`)
   - Transportation event management
   - Fields: id, title, description, duration, type, status
   - Includes date and time tracking
   - Status tracking for event lifecycle

4. **Event Registrations** (`event_registration`)
   - Event participation tracking
   - Fields: id, event_id, registration_date, status
   - Status options: Confirmed, Cancelled, Pending
   - Links events to participants

5. **Destinations** (`destination`)
   - Location and route management
   - Fields: id_destination, name, location, category, status
   - Includes: rating system, route information
   - Stores contact details and descriptions

6. **Transport** (`transport`)
   - Vehicle and transport management
   - Fields: id, type, capacity, disponibility, destination
   - Tracks availability and capacity
   - Links to specific destinations

7. **Reservations** (`reservation`)
   - Booking management system
   - Fields: id, firstName, email, date, seats, status
   - Links: transport_id, driver_id, destination_id
   - Handles payment tracking and seat allocation

### Statistical Views

1. **Reclamation Category Distribution** (`reclamation_category_distribution`)
   - Analyzes claim distribution by category
   - Calculates percentages and counts
   - Helps identify common issues

2. **Reclamation Monthly Trends** (`reclamation_monthly_trends`)
   - Tracks claims over time
   - Monthly aggregation of data
   - Useful for trend analysis

3. **Reclamation Statistics** (`reclamation_statistics`)
   - Overall claims metrics
   - Tracks resolution rates
   - Daily statistical summaries

### Key Relationships

- Users → Reclamations: One-to-many
- Events → Event Registrations: One-to-many
- Transport → Reservations: One-to-many
- Destinations → Transport: One-to-many
- Users → Reservations: One-to-many (for drivers)

## User Roles

1. **Regular User**
   - Manage personal profile
   - Submit and track claims
   - View claim history

2. **Admin**
   - Manage all users
   - Handle user bans
   - Process claims
   - Access admin dashboard
   - View system statistics

3. **Driver**
   - Specialized role for transportation providers
   - Access to route-specific features

## Templates

The project uses a modern admin template with:
- Bootstrap 5
- BoxIcons
- Responsive design
- Dark/light mode support

## Development Guidelines

1. **Coding Standards**
   - Follow Symfony best practices
   - Use type hints and return types
   - Document classes and methods
   - Use consistent naming conventions

2. **Security**
   - Implement CSRF protection
   - Validate user input
   - Use proper role-based access control
   - Sanitize data output

3. **Performance**
   - Use Doctrine's lazy loading
   - Implement caching where appropriate
   - Optimize database queries
   - Use pagination for large datasets

## Contributing

1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## License

This project is proprietary and confidential.

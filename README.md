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
- MySQL/MariaDB
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
DATABASE_URL="mysql://username:password@127.0.0.1:3306/movable?serverVersion=8.0.32&charset=utf8mb4"
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

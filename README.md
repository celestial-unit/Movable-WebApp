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

### Prerequisites
- **PHP 8.1 or higher**
  - Windows: Install via [XAMPP](https://www.apachefriends.org/download.html) or [PHP for Windows](https://windows.php.net/download/)
  - Ensure PHP is in your PATH environment variable
- **MariaDB 10.4.32 or higher (or MySQL 8.0.32+)**
  - Windows: Included with XAMPP or install [MySQL Installer](https://dev.mysql.com/downloads/installer/)
- **Symfony 6.x**
  - Install Symfony CLI: [Symfony Installation](https://symfony.com/download)
- **Composer**
  - Windows: [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe)
- **Node.js and npm**
  - Windows: [Node.js installer](https://nodejs.org/en/download/) (LTS version recommended)
- **Python 3.9 or higher**
  - Windows: [Python installer](https://www.python.org/downloads/windows/) (Check "Add to PATH" during installation)
- **WKHTMLTOPDF and WKHTMLTOIMAGE**
  - Windows: [wkhtmltopdf installer](https://wkhtmltopdf.org/downloads.html)
- **Git**
  - Windows: [Git for Windows](https://git-scm.com/download/win)

## Installation

### 1. Clone the repository:

**Windows PowerShell/CMD:**
```powershell
git clone https://github.com/celestial-unit/Movable-WebApp.git
cd Movable-WebApp
```

### 2. Install PHP dependencies:

**Windows:**
```powershell
composer install
```

If you encounter memory limit issues:
```powershell
composer COMPOSER_MEMORY_LIMIT=-1 install
```

### 3. Install frontend dependencies and build assets:

**Windows:**
```powershell
npm install
npm run build
```

### 4. Configure your environment:

**Windows PowerShell:**
```powershell
Copy-Item .env.example .env
```

**Windows CMD:**
```cmd
copy .env.example .env
```

Edit the `.env` file with your specific configuration:
- Database connection:
  ```
  # For XAMPP on Windows, typically:
  DATABASE_URL="mysql://root:@127.0.0.1:3306/movable?serverVersion=mariadb-10.4.32&charset=utf8mb4"
  
  # For standalone MySQL installation:
  DATABASE_URL="mysql://your_username:your_password@127.0.0.1:3306/movable?serverVersion=8.0.32&charset=utf8mb4"
  ```
- API keys for external services (Google OAuth, Twilio, ReCaptcha, etc.)
- WKHTMLTOPDF tool paths for Windows (use forward slashes or escaped backslashes):
  ```
  WKHTMLTOPDF_PATH="C:/Program Files/wkhtmltopdf/bin/wkhtmltopdf.exe"
  WKHTMLTOIMAGE_PATH="C:/Program Files/wkhtmltopdf/bin/wkhtmltoimage.exe"
  ```
- Other service URLs and configurations

> **Note for Windows users:** It's recommended to create a separate `.env.local` file for your sensitive configurations rather than modifying the `.env` file directly. Symfony will prioritize values in `.env.local` over `.env`.

### 5. Create database and run migrations:

First, ensure your MySQL/MariaDB server is running. With XAMPP, start MySQL from the XAMPP Control Panel.

**Windows:**
```powershell
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

When prompted during migrations, type `yes` to continue.

### 6. (Optional) Load fixtures for test data:

**Windows:**
```powershell
php bin/console doctrine:fixtures:load
```

When prompted, type `yes` to continue. This will erase your current database and load sample data.

### 7. Set up Python Sign Language Service:

#### Windows:

```powershell
cd python_service
python -m venv venv
.\venv\Scripts\activate
pip install -r requirements.txt
```

If you encounter issues with pip installations:
```powershell
pip install --upgrade pip
pip install -r requirements.txt
```

For specific library issues (like TensorFlow):
```powershell
pip install tensorflow==2.11.0
pip install -r requirements.txt --no-deps
```

Make sure the URL configured in your Symfony `.env` (`APP_SIGN_LANGUAGE_SERVICE_URL`) matches the running service address.

#### Linux/macOS:
```bash
cd python_service
python -m venv venv
source venv/bin/activate
pip install -r requirements.txt
```

### 8. Start the servers:

#### Symfony Application:

**Windows (Using Symfony CLI - recommended):**
```powershell
symfony server:start
```

**Windows (Using PHP's built-in server):**
```powershell
php -S 127.0.0.1:8000 -t public
```

#### Python Service:

**Windows (Open a new PowerShell/CMD window):**
```powershell
cd python_service
.\venv\Scripts\activate
python main.py
```

The service should start on http://localhost:5000 by default.

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

## Environment Variables

The application uses various environment variables for configuration. Key variables include:

### Database Configuration
```
DATABASE_URL="mysql://username:password@127.0.0.1:3306/movable?serverVersion=10.4.32-MariaDB&charset=utf8mb4"
```

### Google OAuth
```
GOOGLE_CLIENT_ID=your_client_id
GOOGLE_CLIENT_SECRET=your_client_secret
```

### Twilio SMS Service
```
TWILIO_ACCOUNT_SID=your_account_sid
TWILIO_AUTH_TOKEN=your_auth_token
TWILIO_FROM_NUMBER=your_twilio_phone_number
```

### ReCaptcha for Form Security
```
RECAPTCHA_SITE_KEY=your_site_key
RECAPTCHA_SECRET_KEY=your_secret_key
```

### Sign Language Python Service
```
APP_SIGN_LANGUAGE_SERVICE_URL=http://localhost:5000
```

### PDF Generation Tools
```
WKHTMLTOPDF_PATH=/path/to/wkhtmltopdf
WKHTMLTOIMAGE_PATH=/path/to/wkhtmltoimage
```

> **Important**: Never commit `.env` files with real credentials to source control. The `.env.example` file should be used as a template.

## Git Workflow

### Initial Setup

If you're setting up a new local repository to push to the existing GitHub repo:

1. Initialize Git in your project directory:
   ```bash
   git init
   ```

2. Add the remote origin:
   ```bash
   git remote add origin https://github.com/celestial-unit/Movable-WebApp.git
   ```

3. Ensure your `.gitignore` properly excludes:
   - Python virtual environments (`python_service/venv/`, etc.)
   - Cache and log files
   - `.env` files with real credentials
   - Vendor and node_modules directories

4. Stage, commit, and push your changes:
   ```bash
   git add .
   git commit -m "Initial commit"
   git push origin master
   ```

## Troubleshooting

### Windows-Specific Issues

#### PHP/Symfony Issues

1. **PHP not recognized in command line**
   - Make sure PHP is added to your PATH environment variable
   - XAMPP users: Add `C:\xampp\php` to your system PATH
   - Restart your terminal/PowerShell after changing PATH

2. **Permission errors**
   - Run PowerShell/CMD as Administrator
   - Check Windows Defender or antivirus blocking access to files

3. **"Cannot start server, address already in use"**
   - Find the process using the port: `netstat -ano | findstr :8000`
   - Kill the process: `taskkill /PID [PID_NUMBER] /F`

4. **Composer memory limit error**
   - Use `COMPOSER_MEMORY_LIMIT=-1` before composer commands
   - Increase PHP memory_limit in php.ini

#### Database Issues

1. **Cannot connect to MySQL/MariaDB**
   - Verify the MySQL service is running in XAMPP Control Panel
   - Check credentials in `.env.local`
   - Try creating the database manually in phpMyAdmin or MySQL Workbench

2. **Migration errors**
   - Reset the database: `php bin/console doctrine:database:drop --force`
   - Recreate: `php bin/console doctrine:database:create`
   - Run migrations again: `php bin/console doctrine:migrations:migrate`

#### Node.js/NPM Issues

1. **"Node modules not found" or other npm errors**
   - Delete the `node_modules` folder and `package-lock.json`
   - Run `npm install` again
   - Make sure Node.js is properly installed: `node -v`

#### Python Service Issues

1. **Missing Python modules or installation errors**
   - Use a fresh virtual environment: `rmdir /s /q venv` then `python -m venv venv`
   - Update pip: `python -m pip install --upgrade pip`
   - Install packages individually if needed

2. **TensorFlow compatibility issues**
   - Install a compatible version: `pip install tensorflow==2.11.0`
   - Ensure Python version is compatible (3.9+ recommended)
   - Check for CUDA requirements if using GPU acceleration

3. **Port already in use**
   - Find the process: `netstat -ano | findstr :5000`
   - Kill it: `taskkill /PID [PID_NUMBER] /F`

## Common Workflows

### Regular Development Workflow

1. Pull latest changes: `git pull origin master`
2. Update dependencies: `composer install && npm install`
3. Apply database migrations: `php bin/console doctrine:migrations:migrate`
4. Start Symfony server: `symfony server:start`
5. Start Python service in a separate terminal
6. Make your changes
7. Test thoroughly
8. Commit and push your changes

### Environment Management

It's recommended to create separate environment files for different purposes:

- `.env`: Base configuration, tracked in Git, contains defaults
- `.env.local`: Local overrides, not tracked in Git, contains sensitive information
- `.env.test`: Used for automated tests

Example `.env.local` for development:
```
# Override database for local development
DATABASE_URL="mysql://root:@127.0.0.1:3306/movable_dev?serverVersion=mariadb-10.4.32"

# Local API keys
GOOGLE_CLIENT_ID=your_dev_client_id
GOOGLE_CLIENT_SECRET=your_dev_client_secret

# Local service URLs
APP_SIGN_LANGUAGE_SERVICE_URL=http://localhost:5000
```

## Contributing

1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## License

This project is proprietary and confidential.

## Support

For questions or assistance, please contact the project maintainers.

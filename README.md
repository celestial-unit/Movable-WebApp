# Movable WebApp - Event Management System

## Overview
A comprehensive Symfony-based event management system with user and admin interfaces, featuring event creation, registration management, QR code generation, and PDF export capabilities.

## Core Features

### Event Management
- Create, read, update, and delete events
- Event filtering and search functionality
- Event status tracking (Active/Inactive)
- Event details include title, description, date, time, type, and status
- Calendar view for events

### Event Registration System
- User registration for events
- Admin approval system for registrations
- Registration status tracking (Pending/Confirmed/Cancelled)
- QR code generation for registrations
- PDF export of registration details
- Validation for registration dates 

## Project Structure

### Entity Layer
1. **Event Entity** (`src/Entity/Event.php`)
   - Core properties: id, title, description, duration, type, status, dateevent, startEvent
   - One-to-Many relationship with EventRegistration
   - Date formatting helpers
   - Validation constraints for required fields

2. **EventRegistration Entity** (`src/Entity/EventRegistration.php`)
   - Properties: id, event (ManyToOne), registration_date, status
   - Complex validation:
     - Date format validation
     - Future date validation
     - Registration must match event date
     - Status choices (Pending/Confirmed/Cancelled)

### Controller Layer

#### Frontend Controllers
1. **EventController** (`src/Controller/EventController.php`)
   - Public event listing
   - Event details view
   - Search and filter functionality
   - Upcoming events display

2. **EventRegistrationController** (`src/Controller/EventRegistrationController.php`)
   - User registration management
   - Registration viewing/editing
   - PDF generation (`/{id}/pdf`)
   - QR code generation (`/{id}/qrcode`)
   - Status updates

#### Backend Controllers
1. **eventControllerback** (`src/Controller/eventControllerback.php`)
   - Admin event management
   - Event CRUD operations
   - Profanity filtering for content
   - Calendar view integration

2. **registrationback** (`src/Controller/registrationback.php`)
   - Admin registration management
   - Registration approval/rejection
   - Bulk operations support

### Templates

#### Event Templates
1. **Frontend**
   - `templates/event/index.html.twig`: Public event listing
   - `templates/event/show.html.twig`: Event details
   - Custom styling and responsive design

2. **Backend**
   - `templates/event/eventback.html.twig`: Admin event dashboard
   - `templates/event/edit1.html.twig`: Admin event editing
   - `templates/event/new1.html.twig`: Event creation form

#### Registration Templates
1. **Frontend**
   - `templates/event_registration/index.html.twig`: User's registrations
   - `templates/event_registration/new.html.twig`: Registration form
   - `templates/event_registration/show.html.twig`: Registration details
   - `templates/event_registration/edit.html.twig`: Edit registration
   - `templates/event_registration/pdf.html.twig`: PDF export template

2. **Backend**
   - `templates/event_registration/eventregistrationback.html.twig`: Admin registration dashboard
   - `templates/event_registration/new1.html.twig`: Admin registration creation
   - `templates/event_registration/show1.html.twig`: Admin registration view
   - `templates/event_registration/edit1.html.twig`: Admin registration editing

### Services
- **PdfGenerator** (`src/Service/PdfGenerator.php`): Handles PDF generation for registration details
- QR Code Generation using Endroid/QrCode bundle

### Repository Layer
- **EventRegistrationRepository**: Custom queries for registration management
- Includes findAllWithEvent() for optimized queries

## Key Features Implementation

### Registration Flow
1. User selects an event
2. Fills registration form (date validation)
3. Submission sets status to "Pending"
4. Admin reviews and updates status
5. User can view status, download PDF, or get QR code

### Admin Features
1. Complete event management
2. Registration approval system
3. Calendar view for events
4. Statistical reporting
5. Bulk operations

### Security Features
1. Input validation
2. CSRF protection
3. Profanity filtering
4. Role-based access control

## Technical Implementation

### Database Structure
- Event table with core event details
- EventRegistration table with foreign key to Event
- Cascade deletion for registrations when event is deleted

### Form Types
1. **EventType**
   - Event creation/editing form
   - Field validations
   - Custom constraints

2. **EventRegistrationType**
   - Registration form
   - Date/time picker integration
   - Status management

### Validation
1. **Entity-level**
   - Date format validation
   - Status choices
   - Required fields

2. **Form-level**
   - Client-side validation
   - Custom validators
   - Error messaging

## Installation & Setup

1. Clone the repository:
```bash
git clone [repository-url]
```

2. Install dependencies:
```bash
composer install
```

3. Configure database:
```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

4. Start server:
```bash
symfony server:start
```

## Usage

### User Interface
- Browse events: `/events`
- View registrations: `/event/registration/`
- Register for event: `/event/registration/new/{eventId}`

### Admin Interface
- Event management: `/event/eventback`
- Registration management: `/event/registrationback`
- Calendar view: `/calendar`

## Contributing
1. Fork the repository
2. Create feature branch
3. Commit changes
4. Push to branch
5. Create Pull Request

## License
MIT License

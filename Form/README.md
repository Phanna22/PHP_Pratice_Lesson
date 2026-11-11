# PHP Form Lab - 10 Projects

## Setup
1. Extract `php-form-projects` into `C:\xampp\htdocs\`.
2. Open XAMPP Control Panel and start Apache.
3. Visit `http://localhost/php-form-projects/`.
4. Click a project.

## Projects
1. Personal Information Form
2. Student Registration
3. Smart Calculator
4. Login Form (demo credentials: student / Learn123!)
5. User Registration Validation
6. Exam Result Calculator
7. Contact Us (validation preview only; does not send email)
8. Product Order Calculator
9. Form Validation Lab
10. Student Management (PHP session only; not permanent database storage)

## Important
- These are learning demos, not production-ready applications.
- Client-side browser checks are not security. PHP validates submitted values too.
- User-provided output is escaped with `htmlspecialchars()`.
- For a real login/registration app, use a database, PDO prepared statements, `password_hash()` and `password_verify()`, HTTPS, CSRF protection and secure session settings.
- Project 10 stores records in the current PHP session only. Data is not permanent.

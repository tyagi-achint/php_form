This is a PHP script for a simple web form that allows users to input their name, email, and a subject. The data entered in the form is then inserted into a MySQL database. Below is a README for this code:

PHP Web Form with Database Integration
Purpose
This PHP script serves the purpose of creating a web form where users can submit their information (name, email, and subject). The submitted data is then stored in a MySQL database.

Prerequisites
Before using this code, make sure you have the following:

A web server with PHP support (e.g., Apache or Nginx).
MySQL server installed and running.
PHP configured to work with the web server.
Configuration
Modify the database connection details:

$server: Set the MySQL server hostname (typically "localhost" if it's running on the same server).
$username: Set the MySQL username.
$password: Set the MySQL password.
Create a MySQL database named php_project if it doesn't already exist.

Create a table named normal_form with the following structure:

CREATE TABLE `normal_form` (
`id` INT AUTO_INCREMENT PRIMARY KEY,
`NAME` VARCHAR(255) NOT NULL,
`EMAIL` VARCHAR(255) NOT NULL,
`SUBJECT` TEXT NOT NULL,
`TIME` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Usage
Create an HTML form in your web page. The form fields should have the following names: NAME, EMAIL, and SUBJECT. The form's action attribute should point to the PHP script (e.g., "index.php").

When a user submits the form, the PHP script will attempt to insert the form data into the normal_form table in the database.

If the insertion is successful, a success message will be displayed.

If there's an error during insertion, an error message will be displayed.

Styling
The HTML form uses CSS from an external stylesheet (index.css) to style the form and display messages.

Note
This code does not perform any input validation or sanitization, so it's recommended to add data validation and security measures if you plan to use it in a production environment.

Make sure to protect your database credentials and consider using environment variables or configuration files to store sensitive information.

The code uses the CURRENT_TIMESTAMP function to record the timestamp when the data is inserted into the database.

For improved security, you should consider using prepared statements or an ORM (Object-Relational Mapping) library to interact with the database instead of directly interpolating user input into SQL queries.

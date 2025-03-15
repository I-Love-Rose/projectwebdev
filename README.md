This is a simple PHP-based CRUD (Create, Read, Update, Delete) application that allows users to manage records in a MySQL database. The project features an intuitive interface with a pink and blue theme for buttons and uses Franklin Gothic Medium as the primary font.

📌 Features

Create → Add new records to the database.

Read → Display all records in a table format.

Update → Modify existing records.

Delete → Remove specific records from the database.

📂 File Structure

|-- index.php       # Displays records with Edit & Delete buttons
|-- add.php         # Form to add new records
|-- update.php      # Form to update existing records
|-- delete.php      # Deletes records from the database
|-- connection.php  # Database connection file
|-- style.css       # (Optional) Custom styles for the UI

📋 Database Setup

Open phpMyAdmin or MySQL command line.

Create the database:

CREATE DATABASE student;

Select the database:

USE student;

Create the info table:

CREATE TABLE info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    address VARCHAR(255) NOT NULL
);

🔌 Database Connection

Modify connection.php with your database credentials:

$host = "localhost";
$user = "root";
$pass = "yourpassword";
$db = "student";

$connect = mysqli_connect($host, $user, $pass, $db);

if (!$connect) {
    die("Connection Failed: " . mysqli_connect_error());
}

🚀 Usage

Add a Record → Click the + ADD button at the bottom of index.php.

Edit a Record → Click the Edit button beside a record.

Delete a Record → Click the Delete button beside a record.

🎨 UI Design

Pink Edit Button (#ff69b4 → hover #d64b8a)

Blue Delete Button (#3498db → hover #217dbb)

Green Add Button (#28a745 → hover #218838)

Uses Franklin Gothic Medium font

📌 Notes

Ensure Apache and MySQL are running (if using XAMPP/WAMP).

Data is retrieved using MySQLi.

Use confirm('Are you sure?') for delete confirmation.

🛠 Future Enhancements

Improve form validation.

Add a search/filter feature.

Enhance security with prepared statements.

Created by miguel :)))
credits to the chatgpt readme hehe :))

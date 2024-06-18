# -Pharmacy-Management---Web-Application

## Project Purpose

The purpose of this project is to facilitate the management of medications and sales within a pharmacy. The application allows the pharmacy manager to add, modify, filter, delete, and search for medications in the database. Additionally, the system records sales transactions.

## Functionalities

- **Authentication**:
  - Authentication system for users (pharmacists and clients).

- **Medication Management**:
  - Addition, search, filtering, modification, and deletion of medications.

- **Customer Management**:
  - Addition, search, filtering, and modification of customer information.

- **Prescription Management**:
  - Recording of issued prescriptions.

- **Sales Management**:
  - Recording of sales transactions and generation of invoices.

- **Data Export**:
  - Export of medication, customer, and sales lists in Excel format.

## Technologies Used

- **PHP**: Server-side programming language for dynamic web page development.
- **MySQL**: Relational database management system.
- **HTML and CSS**: Technologies for structuring and styling web pages.
- **JavaScript**: Programming language for client-side interactivity.
- **PDO (PHP Data Objects)**: PHP extension for accessing databases.

## Database Design

The application uses a MySQL database with the following tables:

- **AUTHENTICATION**: For managing users (idAutentificare, email, password, role).
- **MEDICATION**: For storing medication information (idMedicament, name, price, stock, manufacturer).
- **CUSTOMER**: For managing customer information (codc, name, surname, age, sex).
- **PRESCRIPTION**: For recording prescriptions (codr, codc, issuer, issuer_name, diagnosis, prescription_type).
- **SALE**: For recording sales (codv, idMedicament, sale_date).

## Conclusion
This project represents a complex web application developed for managing a pharmacy. Its purpose is to simplify the management of medications and sales within a pharmacy. The application enables pharmacy managers to efficiently add, modify, filter, delete, and search for medications in the database. Additionally, it records sales transactions and manages customer information. Using technologies such as PHP, MySQL, HTML, CSS, JavaScript, and PDO, the project ensures robust functionalities and smooth interactions for pharmacists and clients.


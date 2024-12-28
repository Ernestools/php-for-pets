# PetStore PHP Application

## Overview
This project is a PHP-based web application for managing a pet store, developed following the **MVC architecture**. The application allows for managing users and products, as well as providing functionalities for both admins and regular users.

---

## Initial Setup

### 1. Database Configuration
To set up the database, follow these steps:
- **Create a database** named `rimo-pets`.
- **Execute the SQL script** provided in the `rimo-pets.sql` file to create the required tables and populate them with initial data.

### 2. Starting the Application
Access the application via the following URL:
```
http://localhost/petStore-php/App/public/
```
Ensure that your server is correctly configured and running.

---

## Admin Credentials
The application includes a hardcoded admin account with the following credentials:
- **Username**: `admin`
- **Password**: `admin`

Admins have elevated privileges, including the ability to:
- Add and delete users.
- Add and delete products.

---

## Functionalities

### General Features
- **Homepage**: Serves as the landing page of the application.
- **Login System**: Accessible via a login button, allowing two types of users to authenticate:
  1. **Admin**:
     - Can add and delete users.
     - Can add and delete products.
  2. **Regular User**:
     - Can view the list of products.
     - Can interact with the shopping cart (panier).

- **Logout**: Allows users to securely exit the application.

### Application Structure
This project strictly adheres to the **MVC architecture**, with the following structure:
- **Models**: Handle database interactions.
- **Views**: Render the user interface.
- **Controllers**: Handle the logic and mediate between models and views.

---

## Notes
- The **CSS design** has been simplified compared to the last iteration. This decision was made to prioritize PHP functionality and back-end development.

---

## Remarks
For any issues or questions, please feel free to reach out. Thank you for reviewing this project!

# Rent A Sound

Created This Project in First Semester.

Rent A Sound is a website that allows musicians to rent musical instruments for daily use. It also functions as a platform where people can list their own instruments to rent out to others, making it a complete rental marketplace. I built this project to learn how to manage user data, process payments, and keep a website secure.

### Main Features

Marketplace for Instruments
Users can browse the website to find instruments to rent. People who own instruments can also add their gear to the site to earn money.

Subscription Plans
The site offers different membership levels like Silver, Gold, and Platinum. These plans give users special benefits when they rent instruments.

Secure Login and Accounts
User passwords are encrypted so they are safe. I also programmed the site so that once a user logs out, they cannot go back to their private account page by clicking the back button in their browser.

Payment Integration
I integrated the Razorpay system. This allows users to pay for their rentals directly on the website securely.

Responsive Design
The website is built to look good on both computer screens and mobile phones. It includes background music and smooth animations to make the site feel more interactive.

### Technical Details

Frontend
The visible part of the website is built using HTML, CSS, JavaScript, and Bootstrap to make it look clean and work on different screen sizes.

Backend
I used PHP to handle the logic, such as logging users in, processing data, and moving between pages.

Database
I used MySQL to store all the information, including user account details, instrument listings, and rental information.

Payments
The payment system uses the Razorpay API to handle money transactions.

### How to Install and Run Locally

You will need XAMPP installed on your computer to run this project.

1. Clone this repository to your computer.

2. Move the folder into the htdocs folder inside your XAMPP installation directory.

3. Open the XAMPP Control Panel and start the Apache and MySQL modules.

4. Open your web browser and go to http://localhost/phpmyadmin.

5. Create a new database with the name rentasound.

6. Import the rentasound.sql file included in the project folder into your new database.

7. Once the database is ready, open your browser and go to http://localhost/website/start.html to view the website.

### Security Notes

This repository does not contain any real personal information or private payment keys. I have removed my real email addresses, phone numbers, and address. The database connection settings are set to the default local settings, which means the username is root and the password field is empty.

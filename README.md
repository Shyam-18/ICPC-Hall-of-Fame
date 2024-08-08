# ICPC Hall of Fame

## Overview

The **ICPC Hall of Fame** is a project dedicated to celebrating the achievements of top-performing teams and individuals in the International Collegiate Programming Contest (ICPC). This platform serves as a comprehensive repository of past winners, their accomplishments, and significant contributions to the competitive programming community.

## Features

- **Hall of Fame Listing**: A detailed list of ICPC winners, including team names, university affiliations, and individual contributors.
- **Search and Filter**: Easily search and filter winners by year, university, country, or individual team members.
- **Team and Member Profiles**: Each team and member has a dedicated profile page with detailed information on their achievements.
- **Interactive Timeline**: A visual timeline showcasing key events and milestones in ICPC history.
- **Data Visualization**: Charts and graphs that highlight trends like country-wise performance and university dominance.
- **Contribution Guide**: An open platform for community members to submit updates, corrections, or new data.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/Shyam-18/icpc-hall-of-fame.git
   ```
2. **Navigate to the project directory**:
   ```bash
   cd icpc-hall-of-fame
   ```
3. **Set up the database**:
   - Create a new MySQL database.
   - Import the provided SQL file into your database:
     ```bash
     mysql -u username -p database_name < database/icpc_hall_of_fame.sql
     ```
   - Update the database connection settings in `config.php`:
     ```php
     <?php
     $servername = "localhost";
     $username = "your_username";
     $password = "your_password";
     $dbname = "icpc_hall_of_fame";
     ?>
     ```

4. **Deploy the project**:
   - Copy the project files to your web server’s root directory (e.g., `/var/www/html` for Apache).
   - Make sure the server is configured to handle PHP and has access to the MySQL database.

5. **Access the application**:
   - Open your browser and navigate to `http://localhost/icpc-hall-of-fame` or your server's URL to see the application in action.

## Usage

- **View the Hall of Fame**: Browse the Hall of Fame section to see past ICPC winners.
- **Search and Filter**: Use the search bar and filters to find specific teams or individuals.
- **Explore Profiles**: Click on any team or member to view their detailed profile.
- **Contribute**: Follow the contribution guide to submit updates or new information.

## Contributing

We welcome contributions! To contribute:

1. **Fork the repository**.
2. **Create a new branch** for your feature or bug fix:
   ```bash
   git checkout -b feature-name
   ```
3. **Commit your changes**:
   ```bash
   git commit -m "Add some feature"
   ```
4. **Push to your branch**:
   ```bash
   git push origin feature-name
   ```
5. **Create a pull request** and describe your changes.

## Contact

For any inquiries or feedback, feel free to reach out at shyamkolisetty@gmail.com

**Ongoing Development**
The ICPC Hall of Fame is an evolving project, and we recognize that there are many areas where we can make improvements. We are actively working on enhancing the platform, including adding new features, improving the user interface, and optimizing performance.

We appreciate any feedback or suggestions from the community. If you encounter any issues or have ideas for new features, please feel free to contribute or reach out to us.

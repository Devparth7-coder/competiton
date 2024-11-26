-- Create the database
CREATE DATABASE IF NOT EXISTS tech_spark;

-- Use the database
USE tech_spark;

-- Create the registrations table
CREATE TABLE IF NOT EXISTS registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,      -- Auto-increment ID field
    name VARCHAR(255) NOT NULL,              -- Name of the registrant
    email VARCHAR(255) NOT NULL,             -- Email of the registrant
    phone VARCHAR(15) NOT NULL,              -- Phone number of the registrant
    category VARCHAR(50) NOT NULL,           -- Category of the participant (e.g., Junior, Senior)
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Timestamp when the record was created
);

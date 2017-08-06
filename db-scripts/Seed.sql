-- UNTESTED

INSERT INTO tradie_users (user_email, user_phone) VALUES
('s3542360@student.rmit.edu.au', '1234123123'),
('abc@gmail.com', '1234123123');

-- This part might create an error
INSERT INTO tradie_requests (location, description, submission_date, user_id) VALUES
('location1', 'descriptive description', '2017-08-05', 1),
('location2', 'descriptive description', '2017-08-05', 2);

-- List of services and their names
INSERT INTO tradie_services (service_name) VALUES
('Gas'),
('Plumbing'),
('Electrical'),
('Fencing'),
('Painting');

INSERT INTO request_services (request_id, service_id) VALUES
(1, 1),
(1, 2),
(2, 3);
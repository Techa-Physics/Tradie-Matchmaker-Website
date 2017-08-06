-- UNTESTED

INSERT INTO tradie_users (user_email, user_phone) VALUES
('s3542360@student.rmit.edu.au', '1234123123'),
('abc@gmail.com', '1234123123');

-- This part might create an error
INSERT INTO tradie_requests (location, description, submission_date, user_id) VALUES
('location1', 'descriptive description', '2017-08-05', 1),
('location2', 'descriptive description', '2017-08-05', 2);
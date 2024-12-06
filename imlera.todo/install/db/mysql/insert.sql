-- Employees
INSERT INTO `itb_ivanova_employees` (`NAME`, `AGE`, `GENDER`, `CREATE_AT`)
VALUES
    ('Alice Johnson', 29, 'female', NOW() - INTERVAL 5 DAY),
    ('Bob Smith', 34, 'male', NOW() - INTERVAL 7 DAY),
    ('Charlie Brown', 28, 'male', NOW() - INTERVAL 10 DAY),
    ('Diana Prince', 31, 'female', NOW() - INTERVAL 3 DAY),
    ('Evan Miller', 25, 'male', NOW() - INTERVAL 15 DAY),
    ('Fiona Scott', 40, 'female', NOW() - INTERVAL 2 DAY),
    ('George Clark', 36, 'male', NOW() - INTERVAL 1 MONTH),
    ('Hannah Adams', 30, 'female', NOW() - INTERVAL 20 DAY),
    ('Ian Carter', 45, 'male', NOW() - INTERVAL 12 DAY),
    ('Jackie Lee', 27, 'female', NOW() - INTERVAL 25 DAY),
    ('Karen Davis', 33, 'female', NOW() - INTERVAL 2 MONTH),
    ('Leo Carter', 22, 'male', NOW() - INTERVAL 1 WEEK),
    ('Mia Lopez', 38, 'female', NOW() - INTERVAL 30 DAY),
    ('Nathan Parker', 29, 'male', NOW() - INTERVAL 8 DAY),
    ('Olivia Harris', 26, 'female', NOW() - INTERVAL 6 DAY),
    ('Paul Walker', 35, 'male', NOW() - INTERVAL 10 DAY),
    ('Quinn Martin', 32, 'male', NOW() - INTERVAL 4 DAY),
    ('Rachel Green', 28, 'female', NOW() - INTERVAL 40 DAY),
    ('Steve Rogers', 42, 'male', NOW() - INTERVAL 15 DAY),
    ('Tina Evans', 24, 'female', NOW() - INTERVAL 3 MONTH);

-- Employee Profiles
INSERT INTO `itb_ivanova_employee_profiles` (`PHONE`, `EMAIL`, `ADDRESS`, `EMPLOYEE_ID`, `CREATE_AT`)
VALUES
    ('+1234567890', 'alice.johnson@example.com', '123 Elm Street', 1, NOW()),
    ('+1234567891', 'bob.smith@example.com', '456 Oak Avenue', 2, NOW() - INTERVAL 1 DAY),
    ('+1234567892', 'charlie.brown@example.com', '789 Pine Lane', 3, NOW() - INTERVAL 2 DAY),
    ('+1234567893', 'diana.prince@example.com', '321 Maple Street', 4, NOW() - INTERVAL 3 DAY),
    ('+1234567894', 'evan.miller@example.com', '654 Cedar Drive', 5, NOW() - INTERVAL 5 DAY),
    ('+1234567895', 'fiona.scott@example.com', '987 Spruce Road', 6, NOW() - INTERVAL 1 WEEK),
    ('+1234567896', 'george.clark@example.com', '231 Birch Avenue', 7, NOW() - INTERVAL 10 DAY),
    ('+1234567897', 'hannah.adams@example.com', '564 Willow Path', 8, NOW() - INTERVAL 12 DAY),
    ('+1234567898', 'ian.carter@example.com', '897 Cherry Way', 9, NOW() - INTERVAL 15 DAY),
    ('+1234567899', 'jackie.lee@example.com', '321 Ash Boulevard', 10, NOW() - INTERVAL 20 DAY);

-- Tasks
INSERT INTO `itb_ivanova_tasks` (`NAME`, `PRIORITY`, `DESC`, `STATUS`, `IS_ARCHIVED`, `EMPLOYEE_ID`, `CREATE_AT`)
VALUES
    ('Prepare Report', 1, 'Prepare the quarterly financial report.', 'pending', 'N', 1, NOW()),
    ('Update CRM', 2, 'Update customer information in the CRM system.', 'in_progress', 'N', 2, NOW() - INTERVAL 1 DAY),
    ('Schedule Meeting', 3, 'Schedule a meeting with the marketing team.', 'done', 'N', 3, NOW() - INTERVAL 2 DAY),
    ('Organize Files', 3, 'Organize old files in the storage.', 'pending', 'N', 5, NOW() - INTERVAL 5 DAY),
    ('Draft Proposal', 1, 'Draft a proposal for the new project.', 'pending', 'N', 6, NOW() - INTERVAL 1 WEEK),
    ('Review Code', 2, 'Review the latest code changes.', 'in_progress', 'N', 7, NOW() - INTERVAL 8 DAY),
    ('Fix Bugs', 1, 'Fix critical bugs in the system.', 'done', 'N', 8, NOW() - INTERVAL 10 DAY),
    ('Update Documentation', 3, 'Update user documentation.', 'pending', 'N', 9, NOW() - INTERVAL 15 DAY),
    ('Client Follow-up', 2, 'Follow up with a major client.', 'in_progress', 'N', 10, NOW() - INTERVAL 20 DAY),
    ('Conduct Training', 1, 'Conduct training for new hires.', 'done', 'N', 4, NOW() - INTERVAL 25 DAY);
-- Создание базы данных
CREATE DATABASE IF NOT EXISTS university_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE university_db;

-- Таблица студентов
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    age INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Таблица курсов
CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    credits INT DEFAULT 3,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Промежуточная таблица (связь многие-ко-многим)
CREATE TABLE enrollments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    course_id INT NOT NULL,
    enrollment_date DATE NOT NULL,
    grade DECIMAL(4,2),
    FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE,
    UNIQUE KEY unique_enrollment (student_id, course_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Заполнение таблицы студентов
INSERT INTO students (name, email, age) VALUES
('Иван Петров', 'ivan.petrov@example.com', 20),
('Мария Сидорова', 'maria.sidorova@example.com', 22),
('Алексей Смирнов', 'alexey.smirnov@example.com', 19),
('Елена Козлова', 'elena.kozlova@example.com', 21),
('Дмитрий Новиков', 'dmitry.novikov@example.com', 23);

-- Заполнение таблицы курсов
INSERT INTO courses (title, description, credits) VALUES
('Математический анализ', 'Основы математического анализа: пределы, производные, интегралы', 5),
('Программирование на PHP', 'Изучение PHP для веб-разработки', 4),
('Базы данных', 'Проектирование и работа с реляционными базами данных', 4),
('Веб-разработка', 'Создание современных веб-приложений', 3),
('Алгоритмы и структуры данных', 'Фундаментальные алгоритмы и структуры данных', 5);

-- Заполнение промежуточной таблицы (какие студенты на каких курсах)
INSERT INTO enrollments (student_id, course_id, enrollment_date, grade) VALUES
(1, 1, '2025-09-01', 4.5),
(1, 2, '2025-09-01', 5.0),
(1, 3, '2025-09-01', NULL),
(2, 1, '2025-09-01', 4.0),
(2, 4, '2025-09-01', 4.8),
(3, 2, '2025-09-01', 3.5),
(3, 3, '2025-09-01', 4.2),
(3, 5, '2025-09-01', NULL),
(4, 1, '2025-09-01', 5.0),
(4, 5, '2025-09-01', 4.7),
(5, 2, '2025-09-01', 4.0),
(5, 3, '2025-09-01', 3.8),
(5, 4, '2025-09-01', NULL);


-- 1 кредит	≈ 25-30 часов работы студента (лекции + самостоятельная работа)
-- 3 кредита	≈ 75-90 часов работы
-- 5 кредитов	≈ 125-150 часов работы
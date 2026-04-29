<?php
// ===============================
// SDLC: DEVELOPMENT - DATABASE
// Using SQLite (Chromebook-friendly)
// ===============================

$conn = new PDO("sqlite:students.db");

// Create table if not exists
$conn->exec("CREATE TABLE IF NOT EXISTS students (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT,
    course TEXT,
    year TEXT,
    email TEXT
)");
?>
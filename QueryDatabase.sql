CREATE DATABASE be5085;

CREATE TABLE dosen (
    id_dosen INT AUTO_INCREMENT PRIMARY KEY,
    nama_dosen VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE matakuliah (
    id_matakuliah INT AUTO_INCREMENT PRIMARY KEY,
    nama_matakuliah VARCHAR(100) NOT NULL,
    id_dosen INT,
    FOREIGN KEY (id_dosen) REFERENCES dosen(id_dosen)
);

CREATE TABLE mahasiswa (
    id_mahasiswa INT AUTO_INCREMENT PRIMARY KEY,
    nama_mahasiswa VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL UNIQUE
);

CREATE TABLE mahasiswa_matakuliah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_mahasiswa INT,
    id_matakuliah INT,
    nilai INT DEFAULT NULL,
    FOREIGN KEY (id_mahasiswa) REFERENCES mahasiswa(id_mahasiswa),
    FOREIGN KEY (id_matakuliah) REFERENCES matakuliah(id_matakuliah)
);

INSERT INTO dosen (nama_dosen, username, password) VALUES
('Prof. David', 'david', 'pwd11111'),
('Prof. Sudarsono', 'darso', 'pwd22222'),
('Prof. Jurianto', 'juri', 'pwd33333');

INSERT INTO matakuliah (nama_matakuliah, id_dosen) VALUES
('Jaringan', 1),
('Pemrograman Web', 2),
('Pengolahan Basis Data', 2),
('Backend', 3),
('Animasi', 1);

INSERT INTO mahasiswa (nama_mahasiswa, nim) VALUES
('Frumentios David Ivan Satria', '23.01.5085'),
('Kalua Hapsoro', '23.01.5000'),
('Kerto Nova', '23.01.5001'),
('Bahul Aini', '23.01.5003'),
('Sano Kulka', '23.01.5002');

INSERT INTO mahasiswa_matakuliah (id_mahasiswa, id_matakuliah, nilai) VALUES
(1, 1, 85),
(2, 1, 90),
(3, 2, 88),
(4, 3, 75),
(5, 4, 80),
(1, 2, 78),
(2, 3, 82),
(3, 4, 87),
(4, 5, 90),
(5, 5, 85);

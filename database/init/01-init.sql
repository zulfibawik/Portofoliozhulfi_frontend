CREATE TABLE IF NOT EXISTS contoh_portfolio (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  keterangan TEXT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO contoh_portfolio (nama, keterangan)
VALUES ('Zhulfi Bajra', 'Contoh data awal untuk cek koneksi MySQLi')
ON DUPLICATE KEY UPDATE nama = nama;

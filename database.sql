USE sac;

CREATE TABLE pengguna (
	Id_Pengguna INT NOT NULL AUTO_INCREMENT,
    Username VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Pass VARCHAR(100) NOT NULL,
    PRIMARY KEY(Id_Pengguna)
);

CREATE TABLE eventt (
	Id_Event INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nama_Event VARCHAR(100) NOT NULL,
    Deskripsi_Event VARCHAR(1000) NOT NULL,
    Tanggal_Event DATE NOT NULL
);

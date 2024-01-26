create table utenti
(
    Nome char(20),
    Cognome char(20),
    Username char(20),
    Password char (20) primary key
);


insert into utenti ( Nome, Cognome, Username, Password) values 
('Adele', 'Santomauro', 'Adesanto', 'adelesantomauro01' ),
('Simone','Mastromatteo', 'simomastro', 'simomastro02'),
('Giuseppe', 'Tubi', 'Giusetubi', 'Giusetubi03'),
('Diego', 'Cattoni', 'Diego08', 'Diegocattoni04'),
('Martina', 'Spione','Martispione', 'Martinaspione05'),
('Stefano', 'Di Luca', 'Stediluca', 'Stefanodiluca06');

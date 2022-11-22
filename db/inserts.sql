-- Active: 1668044754368@@127.0.0.1@3306@imperial
INSERT INTO cargo (id, nome, descricao, salario, cargaHoraria) VALUES
(2022110001, 'Administrador', 'responsável por organizar, planejar e orientar o uso dos recursos financeiros, físicos, tecnológicos e humanos das empresas, buscando soluções para todo tipo de problema administrativo', '3094', '50 horas semanais'),
(2022110002, 'Analista de Desenvolvimento de Sistemas', 'responsável por gerar aplicações informatizadas, desenvolvendo, implantando e mantendo sistemas de acordo com metodologia e técnicas adequadas, visando atender aos objetivos estabelecidos quanto à qualidade, custos, prazos e benefícios', '3745', '45 horas semanais'),
(2022110003, 'Contador', 'responsável por lidar com toda área financeira, econômica e patrimonial de uma empresa', '2280', '40 horas semanais'),
(2022110004, 'Analista de Treinamento', 'responsável por desenvolver técnicas e métodos de treinamento relacionados às necessidades da empresa', '2045', '40 horas semanais'),
(2022110005, 'Diretor de Recursos Humanos', 'responsável pela organização de todos os funcionários da empresa', '3025', '42 horas semanais'),
(2022110006, 'Desenvolvedor Front-end', 'responsável por organizar e planejar o site de forma que fique mais agradavel para o usuário final', '3435', '45 horas semanais');
INSERT INTO desenvolvedores (cnpj, nome) VALUES
('85.554.333/0001-15.', 'Betagames Group'),
('03.001.068/0001-83.', 'Ubisoft'),
('24.925.304/0001-28.', 'Epic Games'),
('13.236.060/0002-30.', 'Steam'),
('11.824.486/0001-07.', 'Blizzard'),
('15.409.786/0001-72.', 'Riot Games Servicos Ltda');
INSERT INTO produtos (id, nome, descricao, valor, idDesenvolvedor) VALUES
(202211101, '171', '171 é um jogo de ação e aventura de mundo aberto com ambientação inspirada no Brasil', 'R$:99,70', '85.554.333/0001-15.'),
(202211102, 'Tom Clancy`s Rainbow Six® Siege', 'O Tom Clancy`s Rainbow Six Siege é o próximo lançamento da aclamada franquia de FPS desenvolvida pelo renomado estúdio Ubisoft Montreal', 'R$:59,99', '03.001.068/0001-83'),
(202211103, 'Fortnite', 'Fortnite é um jogo de ação e aventura desenvolvido pela Epic Games', 'R$:0,00', '24.925.304/0001-28'),
(202211104, 'Counter-Strike: Global Offensive', 'Counter-Strike: Global Offensive (CS: GO) estende o jogo de tiro em primeira pessoa competitivo para a nova geração de consoles e PC', 'R$:0,00', '13.236.060/0002-30'),
(202211105, 'World of Warcraft', 'World of Warcraft é um jogo de RPG de ação e aventura desenvolvido pela Blizzard Entertainment', 'R$:0,00', '11.824.486/0001-07'),
(202211006, 'League of Legends', 'League of Legends é um jogo de estratégia em tempo real desenvolvido pela Riot Games', 'R$:0,00', '15.409.786/0001-72');
INSERT INTO usuario (nome, username, email, telefone, senha) VALUES
('João da Silva', 'Crushz1n', 'joao.silva@gmail.com', '(43) 99999-9999', 'hpz3uk52oFjB6V'),
('Maria Clara', 'Vampirinha', 'maria123@outlook.com', '(43) 98888-8888', 'pQGd3LE5oka25X'),
('Pedro Henrique', 'Pedrin', 'xaulin.2004@gmail.com', '(43) 97777-7777', '5KkPSjz7a59eBD'),
('Matheus Frizzo', 'Frizzo', 'Matheus.Frizzo@gmail.com', '(43) 96666-6666', '6sPEAfAEi79xB3'),
('Lucas Costa', 'Lukinhas', 'lukinhas@gmail.com', '(43) 95555-5555', 'Y8DrgX8VydTJMN'),
('Bruno Oliveira', 'BruninhoHC', 'bruninhoHC@gmail.com', '(43) 94444-4444', 'xA8petMGP4i5Md');
INSERT INTO biblioteca (idUsuario, idProduto) VALUES
(2022112001, 202211102),
(2022112001, 202211103),
(2022112001, 202211104),
(2022112001, 202211106),
(2022112002, 202211101),
(2022112002, 202211102),
(2022112002, 202211103),
(2022112002, 202211104),
(2022112006, 202211101),
(2022112006, 202211102),
(2022112006, 202211103),
(2022112006, 202211104),
(2022112006, 202211105),
(2022112004, 202211102),
(2022112004, 202211104);
INSERT INTO endereco (id, rua, numero, bairro, complemento, cidade, estado) VALUES
(2022113001, 'Rua Mary Aparecida', '10', 'Jardim São José', 'N/A', '1630', '11'),
(2022113002, 'Av Cacilda', '157', 'Centro', 'N/A', '5095', '26'),
(2022113003, 'Rua Ernâni Lacerda de Atayde', '22', 'Gleba Fazenda Palhano', 'ap:622', '2976', '18'),
(2022113004, 'Rua Almenio Correia Lima', '20', 'Centro', 'N/A', '2976', '18'),
(2022113005, 'Av Maringa', '378', 'Jardim Itamarati', 'N/A', '2976', '18'),
(2022113006, 'Av Madre Leonia Milito', '1027', 'Gleba Fazenda Palhano', 'N/A', '2976', '18');
INSERT INTO funcionario (cpf, nome, telefone, email, senha, idCargo, idEndereco) VALUES
(2022114001, 'Taina Pereira', '(43) 99999-9999', 'taina.pereira@imperial.com', 'MaMr9SkTNk6pJ9', 2022110001, 2022113001),
(2022114002, 'João Vittor Venturini', '(43) 98888-8888', 'joao.venturini@imperial.com', 'jJ6pNy38PdebP2', 2022110002, 2022113003),
(2022114003, 'Ana Vitoria', '(43) 97777-7777', 'ana.vitoria@imperial.com', 'PzT3bBsw3AQuhW', 2022110003, 2022113004),
(2022114004, 'Gabriel Henrique', '(43) 96666-6666', 'gabriel.henrique@imperial.com', 'ssoFtQF9LL9i36', 2022110004, 2022113005),
(2022114005, 'Larissa Silva', '(43) 95555-5555', 'lari.silva@gmail.com', 'spsiKfdVotq4U4', 2022110005, 2022113006),
(2022114006, 'Bruno Oliveira', '(43) 94444-4444', 'bruno.oliveira@imperial', 'WfWaz6DqXHiSkS', 2022110006, 2022113002);

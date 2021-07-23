create database idiarn_cofac;

CREATE TABLE IF NOT EXISTS `tb_beneficiario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(20),
  `nome` varchar(90),
  `funcao` varchar(50),
  `municipio` varchar(50),
  `classe` varchar(6),
  `cargo` varchar(50),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

INSERT INTO tb_beneficiario (matricula, nome, funcao, municipio, classe) VALUES ('197.677-0', 'Acácio Emanuel de Oliveira Barbosa', 'Agente Fiscal', 'Mossoró', 'IV');
INSERT INTO tb_beneficiario (matricula, nome, funcao, municipio, classe) VALUES ('174.754-1', 'Adriano Gomes Torres', 'Agente Fiscal', 'Parnamirim', 'IV');
INSERT INTO tb_beneficiario (matricula, nome, funcao, municipio, classe) VALUES ('11751-0', 'Ailda Alves de Souza', 'Setor da CAF', 'Natal', 'IV');
INSERT INTO tb_beneficiario (matricula, nome, funcao, classe) VALUES ('008.208.824-10', 'Aldo Ronaldo Dantas', 'Colaborador Eventual', 'IV');

CREATE TABLE IF NOT EXISTS `tb_atividade_vegetal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(5),
  `nome` varchar(150),
  `acao` int(5),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (17.1, 'Fiscalização Trânsito móvel animal e vegetal', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (17.2, 'Fiscalização Trânsito Fixo animal e Vegetal', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (17.3, 'Fiscalização móvel vegetal', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (17.4, 'Fiscalização Fixa vegetal', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (18.1, 'Fiscalização de UP - Cucurbitáceas', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (18.2, 'Fiscalização de UP - Mamão', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (18.3, 'Fiscalização de UP - Manga', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (18.4, 'Fiscalização de UP - Banana', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (18.5, 'Fiscalização de UC', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (19.1, 'Curso de capacitação de técnicos para emissão de CFO', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (19.2, 'Curso de procedimentos fiscais - FEA', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (19.3, 'Curso de Procedimentos fiscais - AFEA', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (20.1, 'Cadastro de propriedades rural com produção comercial, rural não comercial e em área urbana', 16740);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (20.2, 'Cadastro de viveiros de mudas', 16740);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (21.1, 'Levantamento para verificação da presença do Moko da Bananeira e Sigatoka Negra', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (21.2, 'Levantamento para a avaliação da expansão da cochonilha do carmim', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (21.3, 'Levantamento para verificação da presença de Pragas Quarentenária', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (22.1, 'Amostra preparada para envio ao laboratório', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (23.1, 'Fiscalizar pomares para detecção e erradicação de plantas acometidas por viroses', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (24.1, 'Programa Área livre e SMS para as pragas Anastrepha grandis, Sigatoka Negra, Ralstonia Solanacearum e pragas de importância econômica no RN', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (25.1, 'Palestras relacionadas aos programas', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (25.2, 'Distribuição de folders', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (25.3, 'Distribuição de cartazes', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (25.4, 'Distribuição de Banners', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (25.5, 'Atuação técnica educativa: palestras, reuniões, dia de campo, entre outras', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (25.6, 'Reuniões técnicas com multiplicadores', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (25.7, 'Educação fitossanitária continuada', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (26.1, 'Reuniões técnicas de avaliação com a coordenação central e ulsav´s', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (27.1, 'Monitoramento de armadilhas instaladas em áreas urbana da área livre e tampão da mosca das frutas - Anastrepha grandis', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (27.2, 'Implantação e Monitoramento de armadilhas instaladas nos pontos identificados nos planos de contigência', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (28.1, 'Fiscalização do comércio de sementes e mudas', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (28.1, 'Fiscalização do comércio de sementes e mudas', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (28.2, 'Fiscalização do comércio de mudas (diversas)', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (28.2, 'Fiscalização do comércio de mudas (diversas)', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (29.1, 'Fiscalização de revendas registradas', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (29.2, 'Fiscalização de propriedades', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (29.3, 'Fiscalização das revendas não registradas', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (29.4, 'Participação em eventos envolvendo agrotóxicos e afins', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (29.5, 'Coletas de amostras para o programa de análise de resíduos de agrotóxicos', 22130);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (29.6, 'Capacitação técnica (cursos, treinamentos, congresso, seminário e afins)', 22150);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (33.1, 'Ações de controle de pragas em focos iniciais de programas oficiais', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (34.1, 'Vigilância em área considerada de maior risco fitossanitário', 16810);
INSERT INTO tb_atividade_vegetal (numero, nome, acao) VALUES (35.1, 'Atendimento a suspeita ou focos de pragas quarentenárias', 16810);

CREATE TABLE IF NOT EXISTS `tb_atividade_animal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(5),
  `nome` longtext,
  `acao` int(5),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;
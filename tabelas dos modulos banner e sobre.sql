CREATE TABLE banner (
  idbanner int(10) UNSIGNED NOT NULL,
  titulo varchar(255) DEFAULT NULL,
  subtitulo varchar(255) DEFAULT NULL,
  legenda varchar(250) DEFAULT NULL,
  destino varchar(255) DEFAULT NULL,
  imagem varchar(255) DEFAULT NULL,
  mobile varchar(255) DEFAULT NULL,
  datainicio date DEFAULT NULL,
  datafim date DEFAULT NULL,
  datacadastro datetime DEFAULT NULL,
  codigo text,
  video varchar(255) DEFAULT NULL,
  situacao enum('A','I') DEFAULT 'A',
  inativo enum('S','N') DEFAULT 'N',
  ordem int(10) UNSIGNED DEFAULT NULL,
  _rash varchar(36) DEFAULT NULL,
  _ordem int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela sobre
--

CREATE TABLE sobre (
  idsobre int(10) UNSIGNED NOT NULL,
  titulo varchar(150) DEFAULT NULL,
  legenda varchar(100) DEFAULT NULL,
  nivel int(1) DEFAULT '1',
  coluna int(11) DEFAULT NULL,
  imagem varchar(150) DEFAULT NULL,
  conteudo text,
  quebra enum('S') DEFAULT NULL,
  inativo enum('S','N') NOT NULL DEFAULT 'N',
  _ordem int(10) UNSIGNED DEFAULT NULL,
  _rash varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table banner
--
ALTER TABLE banner
  ADD PRIMARY KEY (idbanner);

--
-- Indexes for table sobre
--
ALTER TABLE sobre
  ADD PRIMARY KEY (idsobre);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table banner
--
ALTER TABLE banner
  MODIFY idbanner int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table sobre
--
ALTER TABLE sobre
  MODIFY idsobre int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
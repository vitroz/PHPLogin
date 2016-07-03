--
-- Estrutura da tabela `usuario_adm`
--

DROP TABLE IF EXISTS `usuario_adm`;
CREATE TABLE IF NOT EXISTS `usuario_adm` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `uid_UNIQUE` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario_adm`
--

INSERT INTO `usuario_adm` (`uid`, `name`, `email`, `pass`) VALUES
(1, 'user', 'user@user.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

--
-- Constraints for dumped tables
--


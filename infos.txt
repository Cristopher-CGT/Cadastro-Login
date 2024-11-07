#Página de Cadastro de Usuário e Login

##Para utilizar esse sistema, será necessário ter o MySQL baixado e um servidor web para interpretar o PHP
###Tecnologias utilizadas

Front-End
HTML
CSS
JavaScript

Back-End
PHP -> Xampp
MySQL

É necessário executar o código abaixo no seu MySQL para a criação da tabela de usuários consumida pelo sistema

```
CREATE TABLE `test`.`users` (
`in_user` INT NOT NULL AUTO_INCREMENT,
`name_user` VARCHAR(30) NOT NULL,
`email_user` VARCHAR(40) NOT NULL,
`password_user` VARCHAR(128) NOT NULL,
`title_user` VARCHAR(74) NOT NULL,
`code_user` VARCHAR(40) NOT NULL,
PRIMARY KEY (`in_user`)
) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Também, altere as informações de acesso do seu banco de dados no arquivo "db.connect.php".

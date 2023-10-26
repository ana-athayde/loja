# Projeto do Site de Programação para Internet

Este é o repositório do projeto desenvolvido durante a disciplina de Programação para Internet no semestre 2018/2 do curso Técnico em Informática no IFSC Campus Lages. O projeto consiste em um site que foi desenvolvido em conjunto com o professor.

## Estrutura do Projeto

O projeto está organizado em três principais diretórios:

- `controller`: Este diretório contém os arquivos relacionados ao controle do site. Os principais controladores são:

  - `ClienteController.class.php`: Este controlador lida com a lógica relacionada aos clientes no site.
  
  - `ProdutoController.class.php`: Este controlador cuida das operações relacionadas aos produtos no site.

- `model`: Aqui estão os arquivos que descrevem a estrutura de dados e a lógica de negócios do site. Alguns dos principais arquivos no diretório `model` são:

  - `Cliente.class.php`: Descreve a estrutura da classe Cliente.
  
  - `ClienteBusiness.class.php`: Contém a lógica de negócios relacionada a clientes.
  
  - `ClienteDAO.class.php`: Oferece métodos para acessar os dados de clientes no banco.
  
  - `Produto.class.php`: Descreve a estrutura da classe Produto.
  
  - `ProdutoBusiness.class.php`: Contém a lógica de negócios relacionada a produtos.
  
  - `ProdutoDAO.class.php`: Oferece métodos para acessar os dados de produtos no banco.

- `view`: O diretório `view` contém os arquivos relacionados à interface do usuário. A estrutura é a seguinte:

  - `clientes` Contém os arquivos relacionados à visualização dos clientes, incluindo páginas de cadastro e listagem.
  
  - `css`: Armazena os arquivos de estilos para o site. Alguns dos principais arquivos neste diretório são:

    - `estilo.css`: Folha de estilos principal do site.
  
    - `menu.css`: Estilos específicos para o menu do site.
  
  - `produtos`: Contém os arquivos relacionados à visualização dos produtos. Os principais arquivos neste diretório são:

    - `cadastrar.html`: Formulário de cadastro de produtos.
  
    - `listar.php`: Página de listagem de produtos.
  
    - `suporte_cadastrar.php`: Página de suporte ao cadastro de produtos.
  
    - `suporte_listar.php`: Página de suporte à listagem de produtos.
  
  - `index.html`: A página principal do site.

## Como Executar

Para executar o projeto localmente, você pode seguir estas etapas:

1. Clone este repositório em sua máquina local:

   ```bash
   git clone https://github.com/ana-athayde/loja_programacao_web

2. Configure um ambiente de servidor web local, se necessário, para executar o projeto.

3. Abra o site no navegador

## Contribuições
Este é um projeto acadêmico desenvolvido em colaboração com o professor. Contribuições, sugestões e comentários são bem-vindos.



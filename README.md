# Módulos Joomla

Este repositório contém os módulos criados durante o curso de Joomla! do canal [Desenvolvimento Web DF](https://www.youtube.com/@DesenvolvimentoWebDF).

Todo o material disponibilizado aqui pode ser usado e personalizado conforme necessário. Pedimos apenas que você siga nosso canal, deixe seu like e marque nosso repositório com uma estrela.

## Módulos Disponíveis

Aqui estão os módulos Joomla disponíveis neste repositório:

- [Joomla! 1 - Instalaçaõ](https://youtu.be/naFc8iI4_Os?si=1UhWuXCOf7aaiyGK)
- [Joomla! 2 - Criaçaõ de modulo e instalação de plugins básicos](https://youtu.be/tLdrCCuh4Xs?si=IRjc_Ba0bmAeebUc)
- [Joomla! 3 - Criar/alterar posição de modulo / criar menu / entender personalização](https://youtu.be/flCttAFCeG4?si=_QwWeugbS6OONcAu)
- [Joomla! 4 - Criar um bootstrap Carousel](https://youtu.be/J7XZsIg9v2A)

## Como Usar

1. Clone este repositório para sua máquina local:
    ```bash
    git clone https://github.com/emailparaojp/joomla-modules.git
    ```
2. Navegue até o diretório do módulo que você deseja usar:
    ```bash
    cd joomla-modules
    ```
3. Siga as instruções no arquivo `README.md` de cada módulo para instalar e personalizar conforme necessário.

## Contribuições

Contribuições são bem-vindas! Se você tiver sugestões, relatórios de bugs ou quiser adicionar novas funcionalidades, sinta-se à vontade para abrir um [issue](link para os issues) ou enviar um pull request.

## Licença

Este projeto é de uso livre.

---

# Explicação sobre os arquivos dos módulos (exemplo do módulo custom_carousel)

## mod_custom_carousel.xml

**Propósito:**
Este é o arquivo de manifesto XML que define o módulo. Ele informa ao Joomla sobre o módulo, descrevendo os arquivos incluídos, os parâmetros de configuração e outros metadados necessários para a instalação e operação do módulo.

**Funções:**
- Define o nome, autor, versão e descrição do módulo.
- Lista os arquivos que compõem o módulo.
- Define os parâmetros configuráveis do módulo, como os itens do carousel e se eles são ou não destacados.

## mod_custom_carousel.php

**Propósito:**
Este é o arquivo principal do módulo. Ele serve como o ponto de entrada para o módulo quando o Joomla renderiza a página.

**Funções:**
- Inclui o `helper.php` para utilizar funções auxiliares.
- Obtém os itens do carousel filtrados usando a função do helper.
- Carrega o layout definido em `tmpl/default.php` para renderizar a saída do módulo.

## helper.php

**Propósito:**
Este arquivo contém funções auxiliares que ajudam a processar os dados do módulo. Ele é utilizado para separar a lógica de negócios da lógica de apresentação, mantendo o código mais organizado e modular.

**Funções:**
- Filtrar os itens do carousel para exibir apenas aqueles que estão setados como destaque.

## tmpl/default.php

**Propósito:**
Este arquivo define a apresentação do módulo, ou seja, a marcação HTML que será gerada e enviada ao navegador. Ele usa os dados processados pelo `mod_custom_carousel.php` e pelo `helper.php` para renderizar o carousel.

**Funções:**
- Adiciona as dependências do Bootstrap (CSS e JS).
- Gera a estrutura HTML do Bootstrap Carousel, iterando sobre os itens filtrados para criar os slides do carousel.

Cada um desses arquivos desempenha um papel crucial na criação de um módulo Joomla funcional e bem estruturado, garantindo que a lógica e a apresentação do módulo estejam separadas e que os administradores do site possam configurar o módulo conforme necessário.

**Adicionando CSS ou JS Personalizado:**
Para adicionar um arquivo CSS ou JS personalizado, você pode utilizar as funções do Joomla no `mod_custom_carousel.php`:

```php
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'modules/mod_custom_carousel/css/custom.css');
$document->addScript(JURI::base() . 'modules/mod_custom_carousel/js/custom.js');
Coloque estas linhas no início do mod_custom_carousel.php para incluir arquivos CSS e JS adicionais.

**Obrigado por apoiar o canal Desenvolvimento Web DF!**

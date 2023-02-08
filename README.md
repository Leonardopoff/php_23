##  primeiro commit 31/01/2023
## aula 07/02
# php_23 Manual de passasos.
    1: verificar se estamos no ubuntu.
    2: File -> Open folder
    2.1: Apaga o conteudo 
    2.2: Informe o caminho /var/www/html
    2.3: Abre essa pasta (com enter ou clicando com o mouse em html)
    3: Terminal, novo terminal
    4: No terminal executar o comando -> git clone LINK_DO_REPOSITORIO (github)
    5: Informar o caminho /var/www/html/php_23
    5.1: Abra essa pasta (com enter ou clicando com o mouse em html)
    6: Configurar o Git (git email e name da pagina 4 da apostila)
    7: Verificar se o apache esta rodando/executando.
    7.1: Acessar o navegador com localhost ou 127.0.0.1 (Deve aparecer a configuração inicial de apache)
    7.2: Sudo service apache2 statuos (apache is running)
    7.3: Sudo service apache2 start.
    7.4: Executar novamente os passos 7.1 e 7.2.

111+1=112
abc

# Para Salvar no github:
    1: git add. (onde, todos os arquivos ou especificar por nome, Ex: git add index.php)
    2: git commit -m "Descrever o que foi feito"
    3: git push
    4: Verificar no github se ficou salvo

## para o Merge:
    1: git checkout NOME_DA_BRANCH
    2: git pull (Obter as atualizações)
    3: git merge NOME_BRANCH_DA_TRAZER_AS_MUDANÇAS
        Ex:
            Estamos na branch "Develop" e queremos levar as mudanças para a master/main
                1 - git checkout "master"
                2 - git pull (master)
                3 - git merge "develop"
                4 - Resolver os conflitos se houver
                4.1 - Com Conflitos: git add . e git commit -m "..."
                4.2 - Sem conflitos: so executar o push
                5 - git push
            Estamos na branch "master/main" e queremos levar as mudanças para a develop
                1 - git checkout "develop"
                2 - git pull (develop)
                3 - git merge "master"
                4 - Resolver os conflitos se houver
                4.1- Com Conflitos: git add . e git commit -m "..."
                4.2 - Sem conflitos: so executar o push
                5 - git push

123
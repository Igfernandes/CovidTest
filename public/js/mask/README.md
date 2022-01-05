# Developer: Igor Fernandes Barreto
# Company: Internit: Desenvolvedora Web 
# URI DEMO: 

# Dependências: 
- inTellInput
- jQueryMask

# Explicação Geral: 
- Os três elementos dentros do arquivo JS criam a estrutura de um mascara de números, com funções diferentes. A função "flag" cria a mascara só com as bandeiras, enquanto a "mask" gera apenas uma mascara que irá reorganizar os números que forem sendo colocados para entrar as organização com "parânteses e etc", exemplo: (21) 0000-0000; A ultima é uma combinação de ambos elementos para a produção de um conteúdo completo.

## cmd.flag() 

- O desenvolvedor pode utilizar a classe "input-flag" em seus inputs "type=tel" ou "type=text" e terá como resultado bandeiras aparecendo na lateral do seu input com placeholders personalizando, dependendo da bandeira que o usuário clique. Caso ele prefira mudar a coordenada e colocar em outro parâmetro, apenas é necessário declarar dentro da função a nova posição. Exemplo: 

cmd.flag("#novoCel")

### Obser: Não se preocupe o quanto a checagem de existência do parâmetro ou qualquer outro problema, já está configurado para lidar com esses problemas, até a config de executar após a página recarregar por completo já está configurada, a única ação que terá é declarar a função novamente toda vez que for precisar colocar em novo parâmetro. 


====================//========================//===============

## cmd.mask() 

- O desenvolvedor pode utilizar a classe "input-mask" em seus inputs "type=tel" ou "type=text" e terá como resultado campos personalizados que irão formatar para criar datas, telefones e outras informações. O valor default é para datas, mas voce pode modificar no que desejar, apenas substitua os valores que serão modificados por "0". Além disso, voce pode declarar novas coordenadas na função. Exemplo: 

cmd.flag("00/00/00","#novodate")

### Obser: Não se preocupe o quanto a checagem de existência do parâmetro ou qualquer outro problema, já está configurado para lidar com esses problemas, até a config de executar após a página recarregar por completo já está configurada, a única ação que terá é declarar a função novamente toda vez que for precisar colocar em novo parâmetro. 


====================//========================//===============

## cmd.mask() 

- O desenvolvedor pode utilizar a classe "input-celular" em seus inputs "type=tel" ou "type=text" e terá como resultado bandeiras aparecendo na lateral do seu input com placeholders e campos personalizados para telefone. Caso ele prefira mudar a coordenada e colocar em outro parâmetro, apenas é necessário declarar dentro da função a nova posição. Exemplo: 

cmd.cel("#novoCel")

### Obser: Não se preocupe o quanto a checagem de existência do parâmetro ou qualquer outro problema, já está configurado para lidar com esses problemas, até a config de executar após a página recarregar por completo já está configurada, a única ação que terá é declarar a função novamente toda vez que for precisar colocar em novo parâmetro. 
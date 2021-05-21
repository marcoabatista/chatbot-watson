# FURB - Pós Data Science - Trabalho final de Chatbots
Professor: Cristiano Roberto Franco.

## Equipe:
- Marco Antonio Batista
- Felipe Eduardo Gomes
- João Carlos Haag

## Objetivo do trabalho:
Construir um chatbot em portugues utilizando qualquer uma das tecnologias vistas em sala (rasa, watson, dialog flow, luis...se for usar algo diferente me avisar por email) com pelo menos 10 intenções;

## Funcionamento:
Foi desenvolvido um chatbot de zelador virtual para condomínios utilizando o IBM Watson com integrações via webhooks em PHP.

Link para o chatbot: http://projeto-chatbot.tecnologia.ws/

### Fluxo de diálogo:
![grafico](https://raw.githubusercontent.com/marcoabatista/chatbot-watson/main/fluxo_do_dialogo.png)

## Indicadores e métricas
A seguir são apresentados alguns indicadores e métricas das conversas com o ChatBot no período de 17/05/2021 até 19/05/2021.
- Total de conversas: 19
- Total de mensagens: 86

Seguem alguns gráficos estatísticos elaborados através do Python, sendo que as conversas foram extraídas através da API Assistant V1, fornecida pela IBM.
1) Número de ocorrências por intenções:
![grafico](https://raw.githubusercontent.com/marcoabatista/chatbot-watson/main/indicadores_e_metrica_1.png)
 
2) Quantidade de conversas e mensagens:
![grafico](https://raw.githubusercontent.com/marcoabatista/chatbot-watson/main/indicadores_e_metrica_2.png)
 
3) Grau de confiança das intenções:
![grafico](https://raw.githubusercontent.com/marcoabatista/chatbot-watson/main/indicadores_e_metrica_3.png)

## Entregas
* PDF do fluxo de dialogo;
* Fonte do projeto (frontend, backend, se for watson deve conter o json do bot, se for rasa o projeto todo menos o modelo);
* Jupyter notebook com os indicadores/métricas no github;
* Se a persistência for feita na cloud, não precisa demonstrar como, basta deixar claro no readme.md ou documentacao e se houver conversão, faze-la dentro do jupyter; 

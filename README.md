-- Tema: Gerenciamento de Insumos cervejeiros.

Afim de melhorar a gestão do próprio insumo cervejeiro, cria-se uma aplicação 
que ajuda o produtor no gerenciamento de seus insumos e auxilia-o na sua caminhada cervejeira. A aplicação deverá ter como principal objetivo transformar-se em um companheiro inseparável do cervejeiro artesanal, com funcionalidades que vão desde ajudar o cervejeiro a escolher o estilo da próxima leva, até mostrar suas levas com 
todos os dados necessários para a criação de outras.

-- Lista de Cadastros (CRUD)--

    1-Usuario(id, email, senha, dataNascimento)

    2-Malte (.id, nome, descricao)

    3-Fermento (id, nome, marca, descricao)
       
    4-Lupulo (id, nome, descricao, origem)
      
    5-Leva (id, dataFabricacao, fervuraInicial, fervuraFinal, quantidadeAgua, quantidadeFermento, id_fermento, id_lupulo)
       
    6-Malte_Leva (id, quantidade, id_leva, id_malte)

    7-Estilo_Leva (id, tipoLeva, descricao, id_Leva)
       
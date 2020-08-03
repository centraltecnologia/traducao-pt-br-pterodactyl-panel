<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'O FQDN ou o endereço IP fornecido não resolve para um endereço IP válido. ',
        'fqdn_required_for_ssl' => 'É necessário um nome de domínio totalmente qualificado que resolva um endereço IP público para usar o SSL para este node. ',
    ],
    'notices' => [
        'allocations_added' => 'Alocações foram adicionadas com sucesso a este node.',
        'node_deleted' => 'Node foi removido com sucesso do painel. ',
        'location_required' => 'Você deve ter pelo menos um local configurado antes de poder adicionar um node a este painel. ',
        'node_created' => 'Novo node criado com sucesso. Você pode configurar automaticamente o daemon nesta máquina, visitando a guia \ 'Configuração \'. <strong> Antes de adicionar qualquer servidor, você deve alocar pelo menos um endereço IP e porta. </strong> ',
        'node_updated' => 'As informações do node foram atualizadas. Se alguma configuração do daemon foi alterada, será necessário reiniciá-lo para que essas alterações entrem em vigor. ',
        'unallocated_deleted' => 'Excluídas todas as portas não alocadas para <code>:ip</code>.',
    ],
];

<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => 'Um novo ninho,: name, foi criado com sucesso.',
        'deleted' => 'Excluiu com êxito o ninho solicitado do Painel.',
        'updated' => 'Atualizou com sucesso as opções de configuração do ninho.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Importou com sucesso este ovo e suas variáveis ​​associadas.',
            'updated_via_import' => 'Este ovo foi atualizado usando o arquivo fornecido.',
            'deleted' => 'Excluiu com sucesso o ovo solicitado do Painel.',
            'updated' => 'A configuração do ovo foi atualizada com sucesso.',
            'script_updated' => 'O script de instalação do ovo foi atualizado e será executado sempre que os servidores estiverem instalados.',
            'egg_created' => 'Um novo ovo foi posto com sucesso. Você precisará reiniciar todos os daemons em execução para aplicar este novo ovo. ',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'A variável ":variable" foi excluído e não estará mais disponível para servidores depois de reconstruído. ',
            'variable_updated' => 'A variável ":variable" Tem sido atualizado. Você precisará reconstruir qualquer servidor usando essa variável para aplicar as alterações. ',
            'variable_created' => 'Nova variável foi criada e atribuída com sucesso a este ovo. ',
        ],
    ],
];

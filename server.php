<?php

return [
    'index' => [
        'title' => 'Visualizando servidor :name',
        'header' => 'Console do servidor',
        'header_sub' => 'Controle seu servidor em tempo real.',
    ],
    'schedule' => [
        'header' => 'Gerenciador de agendamento',
        'header_sub' => 'Gerenciar todos os agendamentos deste servidor em um único local.',
        'current' => 'Agendas atuais',
        'new' => [
            'header' => 'Criar novo agendamento',
            'header_sub' => 'Crie um novo conjunto de tarefas agendadas para este servidor.',
            'submit' => 'Criar agendamento',
        ],
        'manage' => [
            'header' => 'Gerenciar agendamento',
            'submit' => 'Update Schedule',
            'delete' => 'Excluir agendamento',
        ],
        'task' => [
            'time' => 'Depois',
            'action' => 'Executar ação',
            'payload' => 'Com carga útil',
            'add_more' => 'Adicionar outra tarefa',
        ],
        'actions' => [
            'command' => 'Enviar comando',
            'power' => 'Power action',
        ],
        'toggle' => 'Alternar status',
        'run_now' => 'Programação do acionador',
        'schedule_created' => 'Criou um novo agendamento para este servidor.',
        'schedule_updated' => 'O cronograma foi atualizado.',
        'unnamed' => 'Agenda sem nome',
        'setup' => 'Programar configuração',
        'day_of_week' => 'Dia da semana',
        'day_of_month' => 'Dia do mês',
        'hour' => 'Hora do dia',
        'minute' => 'Minuto da hora',
        'time_help' => 'O sistema de agendamento suporta o uso da sintaxe do Cronjob ao definir quando as tarefas devem começar a ser executadas. Use os campos acima para especificar quando essas tarefas devem começar a ser executadas ou selecionar opções nos vários menus de seleção. ',
        'task_help' => 'Os horários das tarefas são relativos à tarefa definida anteriormente. Cada agendamento pode ter no máximo 5 tarefas e não pode ser agendado com mais de 15 minutos de intervalo. ',
    ],
    'tasks' => [
        'task_created' => 'Criou uma nova tarefa com sucesso no Painel.',
        'task_updated' => 'A tarefa foi atualizada com sucesso. Quaisquer ações da tarefa na fila no momento serão canceladas e executadas novamente no próximo horário definido. ',
        'header' => 'Tarefas agendadas',
        'header_sub' => 'Automatize seu servidor.',
        'current' => 'Tarefas agendadas atuais',
        'actions' => [
            'command' => 'Send Command',
            'power' => 'Enviar opção de energia',
        ],
        'new_task' => 'Adicionar nova tarefa',
        'toggle' => 'Alternar status',
        'new' => [
            'header' => 'Nova tarefa',
            'header_sub' => 'Crie uma nova tarefa agendada para este servidor.',
            'task_name' => 'Nome da tarefa',
            'day_of_week' => 'Dia da semana',
            'custom' => 'Valor personalizado',
            'day_of_month' => 'Dia do mês',
            'hour' => 'Hour',
            'minute' => 'Minute',
            'sun' => 'domingo',
            'mon' => 'Segunda-feira',
            'tues' => 'terça-feira',
            'wed' => 'quarta-feira',
            'thurs' => 'quinta-feira',
            'fri' => 'Sexta-feira',
            'sat' => 'sábado',
            'submit' => 'Criar tarefa',
            'type' => 'Task Type',
            'chain_then' => 'Then, After',
            'chain_do' => 'Fazer',
            'chain_arguments' => 'Com argumentos',
            'payload' => 'Carga útil da tarefa',
            'payload_help' => 'Por exemplo, se você selecionou <code> Send Command </code>, digite o comando aqui. Se você selecionou <code> Send Power Option </code>, coloque a ação de energia aqui (por exemplo, <code> restart </code>). ',
        ],
        'edit' => [
            'header' => 'Gerenciar tarefas',
            'submit' => 'Atualizar tarefa',
        ],
    ],
    'users' => [
        'header' => 'Gerenciar usuários',
        'header_sub' => 'Controle quem pode acessar seu servidor.',
        'configure' => 'Configurar permissões',
        'list' => 'Contas com acesso',
        'add' => 'Adicionar novo subusuário',
        'update' => 'Atualizar subusuário',
        'user_assigned' => 'Designou um novo subusuário com sucesso para este servidor.',
        'user_updated' => 'Permissões atualizadas com sucesso.',
        'edit' => [
            'header' => 'Edit Subuser',
            'header_sub' => 'Modifique o acesso do usuário ao servidor.',
        ],
        'new' => [
            'header' => 'Adicionar novo usuário',
            'header_sub' => 'Adicione um novo usuário com permissões a este servidor.',
            'email' => 'Endereço de email',
            'email_help' => 'Digite o endereço de email do usuário que você deseja convidar para gerenciar este servidor.',
            'power_header' => 'Gerenciamento de energia',
            'file_header' => 'Gerenciamento de arquivos',
            'subuser_header' => 'Gerenciamento de subusuários',
            'server_header' => 'Gerenciamento do servidor',
            'task_header' => 'Gerenciamento de agendamento',
            'database_header' => 'Gerenciamento de banco de dados',
            'power_start' => [
                'title' => 'Iniciar servidor',
                'description' => 'Permite ao usuário iniciar o servidor.',
            ],
            'power_stop' => [
                'title' => 'Parar servidor',
                'description' => 'Permite que o usuário pare o servidor.',
            ],
            'power_restart' => [
                'title' => 'Reiniciar servidor',
                'description' => 'Permite ao usuário reiniciar o servidor.',
            ],
            'power_kill' => [
                'title' => 'Kill Server',
                'description' => 'Permite ao usuário interromper o processo do servidor.',
            ],
            'send_command' => [
                'title' => 'Enviar comando do console',
                'description' => 'Permite enviar um comando a partir do console. Se o usuário não tiver permissões de parada ou reinicialização, não poderá enviar o comando de parada do aplicativo. ',
            ],
            'access_sftp' => [
                'title' => 'SFTP permitido',
                'description' => 'Permite que o usuário se conecte ao servidor SFTP fornecido pelo daemon.',
            ],
            'list_files' => [
                'title' => 'Listar arquivos',
                'description' => 'Permite ao usuário listar todos os arquivos e pastas no servidor, mas não exibir o conteúdo do arquivo.',
            ],
            'edit_files' => [
                'title' => 'Editar arquivos',
                'description' => 'Permite que o usuário abra um arquivo apenas para visualização. O SFTP não é efetuado por esta permissão. ',
            ],
            'save_files' => [
                'title' => 'Salvar arquivos',
                'description' => 'Permite que o usuário salve o conteúdo do arquivo modificado. O SFTP não é efetuado por esta permissão. ',
            ],
            'move_files' => [
                'title' => 'Renomear e mover arquivos',
                'description' => 'Permite ao usuário mover e renomear arquivos e pastas no sistema de arquivos.',
            ],
            'copy_files' => [
                'title' => 'Copiar arquivos',
                'description' => 'Permite ao usuário copiar arquivos e pastas no sistema de arquivos.',
            ],
            'compress_files' => [
                'title' => 'Compactar arquivos',
                'description' => 'Permite ao usuário criar arquivos de arquivos e pastas no sistema.',
            ],
            'decompress_files' => [
                'title' => 'Descomprimir arquivos',
                'description' => 'Permite ao usuário descompactar arquivos .zip e .tar (.gz).',
            ],
            'create_files' => [
                'title' => 'Criar arquivos',
                'description' => 'Permite ao usuário criar um novo arquivo dentro do painel.',
            ],
            'upload_files' => [
                'title' => 'Upload de arquivos',
                'description' => 'Permite ao usuário fazer upload de arquivos através do gerenciador de arquivos.',
            ],
            'delete_files' => [
                'title' => 'Excluir arquivos',
                'description' => 'Permite ao usuário excluir arquivos do sistema.',
            ],
            'download_files' => [
                'title' => 'Baixar arquivos',
                'description' => 'Permite ao usuário baixar arquivos. Se um usuário receber essa permissão, ele poderá baixar e visualizar o conteúdo do arquivo, mesmo que essa permissão não esteja atribuída no painel. ',
            ],
            'list_subusers' => [
                'title' => 'Listar subusers',
                'description' => 'Permite ao usuário visualizar uma lista de todos os subusuários atribuídos ao servidor.',
            ],
            'view_subuser' => [
                'title' => 'Visualizar subusuário',
                'description' => 'Permite que o usuário visualize as permissões atribuídas aos subutilizadores.',
            ],
            'edit_subuser' => [
                'title' => 'Editar subusuário',
                'description' => 'Permite que um usuário edite as permissões atribuídas a outros subusuários.',
            ],
            'create_subuser' => [
                'title' => 'Criar subusuário',
                'description' => 'Permite que o usuário crie subusers adicionais no servidor.',
            ],
            'delete_subuser' => [
                'title' => 'Excluir subusuário',
                'description' => 'Permite que um usuário exclua outros subutilizadores no servidor.',
            ],
            'view_allocations' => [
                'title' => 'Visualizar alocações',
                'description' => 'Permite que o usuário visualize todos os IPs e portas atribuídos a um servidor.',
            ],
            'edit_allocation' => [
                'title' => 'Editar conexão padrão',
                'description' => 'Permite que o usuário altere a alocação de conexão padrão a ser usada em um servidor.',
            ],
            'view_startup' => [
                'title' => 'Exibir comando de inicialização',
                'description' => 'Permite que o usuário visualize o comando de inicialização e as variáveis ​​associadas a um servidor.',
            ],
            'edit_startup' => [
                'title' => 'Editar comando de inicialização',
                'description' => 'Permite que um usuário modifique variáveis ​​de inicialização para um servidor.',
            ],
            'list_schedules' => [
                'title' => 'Listar agendas',
                'description' => 'Permite que um usuário liste todos os agendamentos (ativados e desativados) para este servidor.',
            ],
            'view_schedule' => [
                'title' => 'Visualizar programação',
                'description' => 'Permite que um usuário visualize os detalhes de uma agenda específica, incluindo todas as tarefas atribuídas.',
            ],
            'toggle_schedule' => [
                'title' => 'Alternar agendamento',
                'description' => 'Permite que um usuário alterne um agendamento para estar ativo ou inativo.',
            ],
            'queue_schedule' => [
                'title' => 'Programação da fila',
                'description' => 'Permite que um usuário enfileire uma agenda para executar suas tarefas no próximo ciclo do processo.',
            ],
            'edit_schedule' => [
                'title' => 'Editar programação',
                'description' => 'Permite que um usuário edite uma agenda incluindo todas as tarefas da agenda. Isso permitirá que o usuário remova tarefas individuais, mas não exclua a programação em si. ',
            ],
            'create_schedule' => [
                'title' => 'Criar agendamento',
                'description' => 'Permite que um usuário crie uma nova programação.',
            ],
            'delete_schedule' => [
                'title' => 'Excluir agendamento',
                'description' => 'Permite que um usuário exclua uma programação do servidor.',
            ],
            'view_databases' => [
                'title' => 'Visualizar detalhes do banco de dados',
                'description' => 'Permite que o usuário visualize todos os bancos de dados associados a este servidor, incluindo os nomes de usuário e senhas dos bancos de dados.',
            ],
            'reset_db_password' => [
                'title' => 'Redefinir senha do banco de dados',
                'description' => 'Permite que um usuário redefina senhas para bancos de dados.',
            ],
            'delete_database' => [
                'title' => 'Excluir bancos de dados',
                'description' => 'Permite que um usuário exclua bancos de dados para este servidor do painel.',
            ],
            'create_database' => [
                'title' => 'Criar banco de dados',
                'description' => 'Permite que um usuário crie bancos de dados adicionais para este servidor.',
            ],
        ],
    ],
    'allocations' => [
        'mass_actions' => 'Ações em massa',
        'delete' => 'Excluir alocações',
    ],
    'files' => [
        'exceptions' => [
            'invalid_mime' => 'Este tipo de arquivo não pode ser editado através do editor embutido do Painel.',
            'max_size' => 'Este arquivo é muito grande para ser editado pelo editor interno do painel.',
        ],
        'header' => 'Gerenciador de arquivos',
        'header_sub' => 'Gerencie todos os seus arquivos diretamente da web.',
        'loading' => 'Carregando a estrutura inicial do arquivo, isso pode levar alguns segundos.',
        'path' => 'Ao configurar qualquer caminho de arquivo nos plugins ou configurações do servidor, você deve usar: path como o caminho base. O tamanho máximo para upload de arquivos baseados na Web neste nó é: size. ',
        'seconds_ago' => 'segundos atrás',
        'file_name' => 'Nome do arquivo',
        'size' => 'Tamanho',
        'last_modified' => 'Última modificação',
        'add_new' => 'Adicionar novo arquivo',
        'add_folder' => 'Adicionar nova pasta',
        'mass_actions' => 'Ações em massa',
        'delete' => 'Excluir arquivos',
        'edit' => [
            'header' => 'Editar arquivo',
            'header_sub' => 'Modifique um arquivo da Web.',
            'save' => 'Salvar arquivo',
            'return' => 'Return to File Manager',
        ],
        'add' => [
            'header' => 'Novo arquivo',
            'header_sub' => 'Crie um novo arquivo no seu servidor.',
            'name' => 'Nome do arquivo',
            'create' => 'Criar arquivo',
        ],
    ],
    'config' => [
        'name' => [
            'header' => 'Nome do servidor',
            'header_sub' => 'Altere o nome deste servidor.',
            'details' => 'O nome do servidor é apenas uma referência a este servidor no painel e não afetará nenhuma configuração específica do servidor que possa ser exibida aos usuários nos jogos.',
        ],
        'startup' => [
            'header' => 'Iniciar configuração',
            'header_sub' => 'Controlar argumentos de inicialização do servidor.',
            'command' => 'Comando de inicialização',
            'edit_params' => 'Editar parâmetros',
            'update' => 'Atualizar parâmetros de inicialização',
            'startup_regex' => 'Regras de entrada',
            'edited' => 'Variáveis ​​de inicialização foram editadas com sucesso. Eles entrarão em vigor na próxima vez que este servidor for iniciado. ',
        ],
        'sftp' => [
            'header' => 'Configuração SFTP',
            'header_sub' => 'Detalhes da conta para conexões SFTP.',
            'details' => 'Detalhes do SFTP',
            'conn_addr' => 'Endereço de conexão',
            'warning' => 'A senha do SFTP é a senha da sua conta. Verifique se o seu cliente está configurado para usar SFTP e não FTP ou FTPS para conexões, existe uma diferença entre os protocolos. ',
        ],
        'database' => [
            'header' => 'Bancos de dados',
            'header_sub' => 'Todos os bancos de dados disponíveis para este servidor.',
            'your_dbs' => 'Bancos de dados configurados',
            'host' => 'Host MySQL',
            'reset_password' => 'Redefinir senha',
            'no_dbs' => 'Não há bancos de dados listados para este servidor.',
            'add_db' => 'Adicione um novo banco de dados.',
        ],
        'allocation' => [
            'header' => 'Alocações de servidor',
            'header_sub' => 'Controle os IPs e portas disponíveis neste servidor.',
            'available' => 'Alocações disponíveis',
            'help' => 'Ajuda de alocação',
            'help_text' => 'A lista à esquerda inclui todos os IPs e portas disponíveis abertos para o servidor usar nas conexões de entrada.',
        ],
    ],
];

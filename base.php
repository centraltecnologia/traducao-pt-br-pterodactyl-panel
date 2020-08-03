<?php

return [
    'validation_error' => 'Ocorreu um erro com um ou mais campos na solicitação.',
    'errors' => [
        'return' => 'Voltar à página anterior',
        'home' => 'Ir para casa',
        '403' => [
            'header' => 'Proibido',
            'desc' => 'Você não tem permissão para acessar este recurso neste servidor.',
        ],
        '404' => [
            'header' => 'Arquivo não encontrado',
            'desc' => 'Não foi possível localizar o recurso solicitado no servidor.',
        ],
        'installing' => [
            'header' => 'Instalando servidor',
            'desc' => 'O servidor solicitado ainda está concluindo o processo de instalação. Verifique novamente em alguns minutos. Você receberá um e-mail assim que esse processo for concluído. ',
        ],
        'suspended' => [
            'header' => 'Servidor suspenso',
            'desc' => 'Este servidor foi suspenso e não pode ser acessado.',
        ],
        'maintenance' => [
            'header' => 'Node em manutenção',
            'title' => 'Temporariamente indisponível',
            'desc' => 'Este nó está em manutenção, portanto, seu servidor não pode ser acessado temporariamente.',
        ],
    ],
    'index' => [
        'header' => 'Seus servidores ',
        'header_sub' => 'Servidores aos quais você tem acesso.',
        'list' => 'Lista de servidores',
    ],
    'api' => [
        'index' => [
            'list' => 'Suas chaves',
            'header' => "API da conta",
            'header_sub' => 'Gerenciar teclas de acesso que permitem executar ações no painel.',
            'create_new' => 'Criar nova chave de API',
            'keypair_created' => 'Uma chave de API foi gerada com sucesso e está listada abaixo. ',
        ],
        'new' => [
            'header' => 'Nova chave de API',
            'header_sub' => 'Crie uma nova chave de acesso à conta.',
            'form_title' => 'Detalhes',
            'descriptive_memo' => [
                'title' => 'Descrição',
                'description' => 'Digite uma breve descrição dessa chave que será útil para referência.',
            ],
            'allowed_ips' => [
                'title' => 'IPs permitidos',
                'description' => 'Digite uma lista delimitada por linha de IPs com permissão para acessar a API usando essa chave. A notação CIDR é permitida. Deixe em branco para permitir qualquer IP. ',
            ],
        ],
    ],
    'account' => [
        'details_updated' => 'Os detalhes de sua conta foram atualizados com sucesso.',
        'invalid_password' => 'A senha fornecida para sua conta não era válida.',
        'header' => 'Sua conta',
        'header_sub' => 'Gerenciar os detalhes da sua conta.',
        'update_pass' => 'Atualizar senha',
        'update_email' => 'Atualizar endereço de email',
        'current_password' => 'Senha atual',
        'new_password' => 'Nova senha',
        'new_password_again' => 'Repita a nova senha',
        'new_email' => 'Novo Endereço de Email',
        'first_name' => 'Primeiro nome',
        'last_name' => 'Último nome',
        'update_identity' => 'Atualizar identidade',
        'username_help' => 'Seu nome de usuário deve ser exclusivo da sua conta e pode conter apenas os seguintes caracteres: :requirements.',
        'language' => 'Língua',
    ],
    'security' => [
        'session_mgmt_disabled' => 'Seu host não ativou a capacidade de gerenciar sessões da conta por meio dessa interface. ',
        'header' => 'Segurança da conta',
        'header_sub' => 'Controlar sessões ativas e autenticação de 2 fatores.',
        'sessions' => 'Sessões ativas',
        '2fa_header' => 'Autenticação de 2 fatores ',
        '2fa_token_help' => 'Digite o token 2FA gerado pelo seu aplicativo (Google Authenticator, Authy, etc.). ',
        'disable_2fa' => 'Desativar autenticação de dois fatores',
        '2fa_enabled' => 'A autenticação de dois fatores está ativada nesta conta e será necessária para fazer login no painel. Se você deseja desativar o 2FA, basta inserir um token válido abaixo e enviar o formulário. ',
        '2fa_disabled' => 'A autenticação de dois fatores está desativada em sua conta! Você deve ativar o 2FA para adicionar um nível extra de proteção à sua conta. ',
        'enable_2fa' => 'Ativar autenticação de dois fatores',
        '2fa_qr' => 'Configurar 2FA no seu dispositivo ',
        '2fa_checkpoint_help' => 'Use o aplicativo 2FA no seu telefone para tirar uma foto do código QR à esquerda ou digite manualmente o código abaixo dele. Depois de fazer isso, gere um token e digite-o abaixo. ',
        '2fa_disable_error' => 'O token 2FA fornecido não era válido. A proteção não foi desativada para esta conta. ',
    ],
];

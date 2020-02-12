<?php

return [
    
    'alipay' => [
        'app_id'         => '2016091900550007', // hgrhbi7452@sandbox.com
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwupt4eS495iFbEHEcZV2xWpntPKPHklUfO5G3Vk5T6rZWzDreAsiCa/8y7kYcCPlZGfYocf2V5rKKNQ65NQOW19EKRodw9qNloj5Ih551Sx93uoFxTXQnvsT/3+sfuvNF0uXSdXinHUTAPUZ1gIgvOR4aIXVH3O+Yken35MqoA7qqoOJT3sS3paDjFJuiMw0NzSFoX5AXqRafXcuchDTOdyT24nFf/RaDjTdLAjDOVY9PRceUJmtoF/I5ocgSczWhRhwjVHNR3Kez1RSjCk/RBX5sDqQZ1aGmeCSt/0GGC6X3kHlJq8KiCiiaeH1UcuP1rRy67TgNKDrBGPqk1vLsQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA20uZDqUVr8Ux0zO0SK174uYGCNRqSWnm3/7BchMcswakHNZqni19jBttGc5YY4d57283aX044UEoPTX+8oZQEbxsk8h8DbnP4bQKbs9gs8hNQkiCU7MI5N8k+ZBBQFThwmk3IpSVNRD0yPMFIQe5ZwVOQ0QSnPszxgRLETp3cFNYC9Au9LV5Icb5/GzRynCuzziw+9lDDdsElzwtdcqs68xh3+nF07t5NKV3APFi69qyUdPl4UOVSxbuVDeVuaJryyhdRuxLUm3ZuTUTdtgdnv8K+hBDdCuculEcFaiPIA4UYjTwyGoz66aaNr3C8rOVsp8y132mDO2Qme9j6HUGkwIDAQABAoIBAQCjf6On9ZFLsXxKeTwrC51YOCO7pZNxFNIbozbbNECrgYIONhbbxBLcyP34xY3E9xcEWyk3LzOfThMQQBfK/jToZFGXhVxoZ2cEYlV89ISmxepERwdUHCG/cleA8fqUWjTP295Nm/X60J+Qyw/B5p5mnuAQ6snt3KRnOIA3Yh320et8tUiRvDz1CyWgMvubfOVWn5LntOdZ2weRFV674qQghufFbEEYLEMnbu8WKfudbuxJIMPN1dR6p0VuLiS5RJR60upp4QJTbDudWfWO8C+ZCT/oJkrNdSEqUTfh5MNDtJqn7MixkyvHhJXzOn42xAwBiKgOEP0GSRFgNHq5byFxAoGBAO4ftT0V0+0dy/elovORUXNRgyaJ2A8kO5JaggwSedudntJdTduPsoaIQ46TTV0URu0bxVv4qgF8dd6gQL2yBJ7lbBjI8kVVnY7tjsKa5bzzcPPi2kamDC/H1TlWI+A0sw76Wyqod0xkKe4ZO0Br1N9VqEq9qpdxlSTZWq2h1KDPAoGBAOvCCmHRRpZfP2Nk67xNQk9fC1dVxCOapPteXlxatKVnpVFUQIeLsLOdi2EKWfZGLMStLmYfFFoplXC0ivPdG9uiHvKOfmhWHm9w4yDU4AmWZP/EyTntcX1mvaMgm82hHbsEHo0uzC3mMI8yE6Z+LpNLOI55fNLneJzTrGjUbsb9AoGAIkj2c2EdLlrH71Qt7hvSOmRWGcpnDWcOHLhjWRGf8frzzx4YA7Dg53XfJDwZO3mb7K++7ssSzzv4TKGOMMHc4HPv6HGmUE1PbjDOCT78LQRwEu1quBlYT9jZ3nOEntd3oIRzc+TlqF4Tm3COk2vzLmTK4lgEo+F6s9+HqtBOKQkCgYAsTf7dexKk16l16FVUwcAgYmAjPX7qofk3M/jPqkwgeWXb7tVho6LFXmn/Bo75dR6cp1782gJdH0tyLrueMIM3tzPRqW2f9e8qSjCkztx7cMPyPO0D8ddOFay1pz8gWZLYvmFvbsf4KDYf8u02cKgYDh7Gx5XpnI5SCoVv/dwDkQKBgHehFnY/jiVafhyVD+oKKwKK1R4b2YgR6OdHLMR5b1LzE4qTBxITVS+MReaW+vNVo+OiAlN/pGHhr/txde9s6VHgkLmH6K83IVPoOkiZ2Ljkb/EETwst/TOIidzoe74rrotKJlvDLsh3Rqbabwc+SqoTe3Q7DMMRDzGtHuftyC7V',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];

<?php

return [
    // 默认发送的分组 支持多个
    'default' => ['feishu.jishu'],
    // 发送消息的服务器env 如: production/development 等
    'env' => env('REBOT_ENV', 'production'),
    // HTTP 请求的超时时间(秒)
    'timeout' => 5,
    // 机器人提供商 feishu : 飞书 / wecom : 企业微信 / dingding : 钉钉
    'channels' => [
        // 飞书
        'feishu' => [
            // 分组可灵活配置
            'groups' => [
                // demo 技术组
                'jishu' => [
                    // 【必填】技术组的 webhook 地址
                    'webhook' => 'https://open.feishu.cn/open-apis/bot/v2/hook/***',
                    // 【可选】分组默认 at 的成员 手机号或者/all
                    'at' => ['all'],
                    // 【可选】默认不校验密钥
                    'secret' => '',
                    // 【可选】默认不显示 bool值 是否显示服务器env 为 true 消息头部将会显示服务器env
                    'show_env' => true,
                    // 【可选】专门给这个群组制定HTTP请求超时时间
                    'timeout' => 3,
                ],
            ],
        ],
        // 企业微信 配置解释参考飞书(企业微信没有密钥校验策略)
        'wecom' => [
            'groups' => [
                'jishu' => [
                    'webhook' => 'https://qyapi.weixin.qq.com/cgi-bin/webhook/send?key=***',
                    'at' => ['all'],
                    'show_env' => true,
                    'timeout' => 3,
                ],
            ],
        ],
        // 钉钉 配置解释参考飞书
        'dingding' => [
            'groups' => [
                'jishu' => [
                    'webhook' => 'https://oapi.dingtalk.com/robot/send?access_token=***',
                    'at' => ['13888888888'],
                    'secret' => '',
                    'show_env' => true,
                    'timeout' => 3,
                ],
            ],
        ],
    ],
];

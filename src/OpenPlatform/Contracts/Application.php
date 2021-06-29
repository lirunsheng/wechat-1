<?php

declare(strict_types=1);

namespace EasyWeChat\OpenPlatform\Contracts;

use EasyWeChat\Kernel\Contracts\AccessToken;
use EasyWeChat\Kernel\UriBuilder;
use EasyWeChat\Kernel\Contracts\Config;
use EasyWeChat\Kernel\Encryptor;
use EasyWeChat\MiniApp\Application as MiniAppApplication;
use EasyWeChat\OfficialAccount\Application as OfficialAccountApplication;
use EasyWeChat\OpenPlatform\AuthorizerAccessToken;
use Overtrue\Socialite\Providers\WeChat;
use Psr\Http\Message\ServerRequestInterface;
use Psr\SimpleCache\CacheInterface;

interface Application
{
    public function getAccount(): Account;

    public function getEncryptor(): Encryptor;

    public function getServer(): Server;

    public function getRequest(): ServerRequestInterface;

    public function getClient(): UriBuilder;

    public function getHttpClient(): HttpClient;

    public function getConfig(): Config;

    public function getComponentAccessToken(): AccessToken;

    public function getCache(): CacheInterface;

    public function getOAuth(): WeChat;

    public function getOfficialAccount(
        AuthorizerAccessToken $authorizerAccessToken,
        array $config
    ): OfficialAccountApplication;

    public function getMiniApp(
        AuthorizerAccessToken $authorizerAccessToken,
        array $config
    ): MiniAppApplication;
}
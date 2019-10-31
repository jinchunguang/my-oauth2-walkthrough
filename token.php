<?php
/**
 * 令牌控制器
 * User: jinchunguang
 * Date: 19-8-23
 * Time: 下午12:53
 */
// include our OAuth2 Server object
require_once __DIR__.'/server.php';

// Handle a request for an OAuth2.0 Access Token and send the response to the client
$server->handleTokenRequest(OAuth2\Request::createFromGlobals())->send();

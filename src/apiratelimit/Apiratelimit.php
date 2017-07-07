<?php
namespace apiratelimit;

use Pb;

class Apiratelimit {
    public static function checkRateLimit($keyId, $keyType, $url)
    {
        $host = config("apiratelimit.host");
        $client = new Pb\ApiratelimitServiceClient($host, [
            'credentials' => Grpc\ChannelCredentials::createInsecure(),
        ]);

        $request = new Pb\CheckRateLimitRequest();
        $request->setKeyid($keyId);
        $request->setKeytype($keyType);
        $request->setUrl($url);
        list($reply, $status) = $client->CheckRateLimit($request)->wait();
        $message = $reply->getRes();

        return $message;
    }

    public static function setRateLimit($keyId, $keyType, $url, $limit, $limitType)
    {
        $host = config("apiratelimit.host");
        $client = new Pb\ApiratelimitServiceClient($host, [
            'credentials' => Grpc\ChannelCredentials::createInsecure(),
        ]);

        $request = new Pb\SetRateLimitRequest();
        $request->setKeyid($keyId);
        $request->setKeytype($keyType);
        $request->setUrl($url);
        $request->setLimit($limit);
        $request->setLimitType($limitType);
        list($reply, $status) = $client->SetRateLimit($request)->wait();
        $message = $reply->getRes();

        return $message;
    }

    public static function delRateLimit($keyId, $keyType, $url, $limitType)
    {
        $host = config("apiratelimit.host");
        $client = new Pb\ApiratelimitServiceClient($host, [
            'credentials' => Grpc\ChannelCredentials::createInsecure(),
        ]);

        $request = new Pb\DelRateLimitRequest();
        $request->setKeyid($keyId);
        $request->setKeytype($keyType);
        $request->setUrl($url);
        $request->setLimitType($limitType);
        list($reply, $status) = $client->DelRateLimit($request)->wait();
        $message = $reply->getRes();

        return $message;
    }
}


<?php


namespace App\Service\Openpayd;


class Openpayd
{
    protected $token;
    /**
     * @var \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
     */
    protected $endpoint;

    public function __construct()
    {
        $this->endpoint = config('app.env') == 'local' ? config('bridge.api_endpoint.sandbox') : config('bridge.api_endpoint.live');
        $this->token = $this->auth()->access_token;

    }

    private function auth()
    {
        $base = base64_encode(config('bridge.username') . ':' . config('bridge.password'));
        return \Http::withHeaders([
            'Accept' => 'application/json',
            "Authorization" => "Basic YnpobTojOXBsQGljTjhO",
            "Content-Type" => "application/x-www-form-urlencoded"
        ])->post($this->endpoint . 'oauth/token?grant_type=client_credentials')->object();
    }

    public function get($uri,array $data = [])
    {
        $query = http_build_query($data);
        return \Http::withToken($this->token)->withHeaders([
            'content-type' => 'application/json',
            'X-ACCOUNT-HOLDER-ID' => config('bridge.api_endpoint.holder')
        ])->get($this->endpoint.$uri, $query)->object();
    }

    public function post($uri, $data)
    {
        return \Http::withToken($this->token)->withHeaders([
            'content-type' => 'application/json',
            'X-ACCOUNT-HOLDER-ID' => config('bridge.api_endpoint.holder')
        ])->post($this->endpoint.$uri, $data)->object();
    }

    public function put($uri, $data)
    {
        return \Http::withToken($this->token)->withHeaders([
            'content-type' => 'application/json',
            'X-ACCOUNT-HOLDER-ID' => config('bridge.api_endpoint.holder')
        ])->put($this->endpoint.$uri, $data)->object();
    }

    public function delete($uri)
    {
        return \Http::withToken($this->token)->withHeaders([
            'content-type' => 'application/json',
            'X-ACCOUNT-HOLDER-ID' => config('bridge.api_endpoint.holder')
        ])->delete($this->endpoint.$uri)->object();
    }
}

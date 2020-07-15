<?php

namespace Sabirepo\Repository\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\Response as ResponseStatus;
use Illuminate\Support\Arr;

class ResponseResource extends JsonResource
{
    public static $wrap = '';
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $status = Arr::exists($this->resource, 'status') ? $this->resource['status'] : ResponseStatus::HTTP_INTERNAL_SERVER_ERROR;
        $message = Arr::exists($this->resource, 'message') ? $this->resource['message'] : [];
        $body = Arr::exists($this->resource, 'body') ? $this->resource['body'] : [];

        return [
            'head' => [
                'status' => $status,
                "message" => $message
            ],
            'body' => $body
        ];
    }

    /**
     * Customize the outgoing response for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response  $response
     * @return void
     */
    public function withResponse($request, $response)
    {
        foreach (config('repository.response.headers') as $key => $value) {
            $response->header($key, $value);
        }
    }
}

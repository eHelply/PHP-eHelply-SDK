<?php
/**
 * TagApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eHelply SDK - 1.1.104
 *
 * eHelply SDK for SuperStack Services
 *
 * The version of the OpenAPI document: 1.1.104
 * Contact: support@ehelply.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * TagApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TagApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation deleteTag
     *
     * Deletetag
     *
     * @param  string $tag_uuid tag_uuid (required)
     * @param  string $x_access_token x_access_token (optional)
     * @param  string $x_secret_token x_secret_token (optional)
     * @param  string $authorization authorization (optional)
     * @param  string $ehelply_active_participant ehelply_active_participant (optional)
     * @param  string $ehelply_project ehelply_project (optional)
     * @param  string $ehelply_data ehelply_data (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return mixed|\OpenAPI\Client\Model\HTTPValidationError
     */
    public function deleteTag($tag_uuid, $x_access_token = null, $x_secret_token = null, $authorization = null, $ehelply_active_participant = null, $ehelply_project = null, $ehelply_data = null)
    {
        list($response) = $this->deleteTagWithHttpInfo($tag_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
        return $response;
    }

    /**
     * Operation deleteTagWithHttpInfo
     *
     * Deletetag
     *
     * @param  string $tag_uuid (required)
     * @param  string $x_access_token (optional)
     * @param  string $x_secret_token (optional)
     * @param  string $authorization (optional)
     * @param  string $ehelply_active_participant (optional)
     * @param  string $ehelply_project (optional)
     * @param  string $ehelply_data (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of mixed|\OpenAPI\Client\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteTagWithHttpInfo($tag_uuid, $x_access_token = null, $x_secret_token = null, $authorization = null, $ehelply_active_participant = null, $ehelply_project = null, $ehelply_data = null)
    {
        $request = $this->deleteTagRequest($tag_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('mixed' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('mixed' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'mixed', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\OpenAPI\Client\Model\HTTPValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\HTTPValidationError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\HTTPValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'mixed';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'mixed',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\HTTPValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteTagAsync
     *
     * Deletetag
     *
     * @param  string $tag_uuid (required)
     * @param  string $x_access_token (optional)
     * @param  string $x_secret_token (optional)
     * @param  string $authorization (optional)
     * @param  string $ehelply_active_participant (optional)
     * @param  string $ehelply_project (optional)
     * @param  string $ehelply_data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTagAsync($tag_uuid, $x_access_token = null, $x_secret_token = null, $authorization = null, $ehelply_active_participant = null, $ehelply_project = null, $ehelply_data = null)
    {
        return $this->deleteTagAsyncWithHttpInfo($tag_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteTagAsyncWithHttpInfo
     *
     * Deletetag
     *
     * @param  string $tag_uuid (required)
     * @param  string $x_access_token (optional)
     * @param  string $x_secret_token (optional)
     * @param  string $authorization (optional)
     * @param  string $ehelply_active_participant (optional)
     * @param  string $ehelply_project (optional)
     * @param  string $ehelply_data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTagAsyncWithHttpInfo($tag_uuid, $x_access_token = null, $x_secret_token = null, $authorization = null, $ehelply_active_participant = null, $ehelply_project = null, $ehelply_data = null)
    {
        $returnType = 'mixed';
        $request = $this->deleteTagRequest($tag_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteTag'
     *
     * @param  string $tag_uuid (required)
     * @param  string $x_access_token (optional)
     * @param  string $x_secret_token (optional)
     * @param  string $authorization (optional)
     * @param  string $ehelply_active_participant (optional)
     * @param  string $ehelply_project (optional)
     * @param  string $ehelply_data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteTagRequest($tag_uuid, $x_access_token = null, $x_secret_token = null, $authorization = null, $ehelply_active_participant = null, $ehelply_project = null, $ehelply_data = null)
    {
        // verify the required parameter 'tag_uuid' is set
        if ($tag_uuid === null || (is_array($tag_uuid) && count($tag_uuid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tag_uuid when calling deleteTag'
            );
        }

        $resourcePath = '/places/tags/{tag_uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_access_token !== null) {
            $headerParams['x-access-token'] = ObjectSerializer::toHeaderValue($x_access_token);
        }
        // header params
        if ($x_secret_token !== null) {
            $headerParams['x-secret-token'] = ObjectSerializer::toHeaderValue($x_secret_token);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }
        // header params
        if ($ehelply_active_participant !== null) {
            $headerParams['ehelply-active-participant'] = ObjectSerializer::toHeaderValue($ehelply_active_participant);
        }
        // header params
        if ($ehelply_project !== null) {
            $headerParams['ehelply-project'] = ObjectSerializer::toHeaderValue($ehelply_project);
        }
        // header params
        if ($ehelply_data !== null) {
            $headerParams['ehelply-data'] = ObjectSerializer::toHeaderValue($ehelply_data);
        }

        // path params
        if ($tag_uuid !== null) {
            $resourcePath = str_replace(
                '{' . 'tag_uuid' . '}',
                ObjectSerializer::toPathValue($tag_uuid),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}

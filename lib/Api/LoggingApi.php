<?php
/**
 * LoggingApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eHelply SDK - 1.1.114
 *
 * eHelply SDK for SuperStack Services
 *
 * The version of the OpenAPI document: 1.1.114
 * Contact: support@ehelply.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
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
 * LoggingApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LoggingApi
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
     * Operation getSubjectLogs
     *
     * Getsubjectlogs
     *
     * @param  string $service service (required)
     * @param  string $subject subject (required)
     * @param  string $date_start date_start (optional)
     * @param  string $date_end date_end (optional)
     * @param  bool $desc desc (optional, default to true)
     * @param  int $limit limit (optional, default to 50)
     * @param  string $x_access_token x_access_token (optional)
     * @param  string $x_secret_token x_secret_token (optional)
     * @param  string $authorization authorization (optional)
     * @param  string $ehelply_active_participant ehelply_active_participant (optional)
     * @param  string $ehelply_project ehelply_project (optional)
     * @param  string $ehelply_data ehelply_data (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\LoggingDynamo[]|\OpenAPI\Client\Model\HTTPValidationError
     */
    public function getSubjectLogs($service, $subject, $date_start = null, $date_end = null, $desc = true, $limit = 50, $x_access_token = null, $x_secret_token = null, $authorization = null, $ehelply_active_participant = null, $ehelply_project = null, $ehelply_data = null)
    {
        list($response) = $this->getSubjectLogsWithHttpInfo($service, $subject, $date_start, $date_end, $desc, $limit, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
        return $response;
    }

    /**
     * Operation getSubjectLogsWithHttpInfo
     *
     * Getsubjectlogs
     *
     * @param  string $service (required)
     * @param  string $subject (required)
     * @param  string $date_start (optional)
     * @param  string $date_end (optional)
     * @param  bool $desc (optional, default to true)
     * @param  int $limit (optional, default to 50)
     * @param  string $x_access_token (optional)
     * @param  string $x_secret_token (optional)
     * @param  string $authorization (optional)
     * @param  string $ehelply_active_participant (optional)
     * @param  string $ehelply_project (optional)
     * @param  string $ehelply_data (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\LoggingDynamo[]|\OpenAPI\Client\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubjectLogsWithHttpInfo($service, $subject, $date_start = null, $date_end = null, $desc = true, $limit = 50, $x_access_token = null, $x_secret_token = null, $authorization = null, $ehelply_active_participant = null, $ehelply_project = null, $ehelply_data = null)
    {
        $request = $this->getSubjectLogsRequest($service, $subject, $date_start, $date_end, $desc, $limit, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);

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
                    if ('\OpenAPI\Client\Model\LoggingDynamo[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\LoggingDynamo[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\LoggingDynamo[]', []),
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

            $returnType = '\OpenAPI\Client\Model\LoggingDynamo[]';
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
                        '\OpenAPI\Client\Model\LoggingDynamo[]',
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
     * Operation getSubjectLogsAsync
     *
     * Getsubjectlogs
     *
     * @param  string $service (required)
     * @param  string $subject (required)
     * @param  string $date_start (optional)
     * @param  string $date_end (optional)
     * @param  bool $desc (optional, default to true)
     * @param  int $limit (optional, default to 50)
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
    public function getSubjectLogsAsync($service, $subject, $date_start = null, $date_end = null, $desc = true, $limit = 50, $x_access_token = null, $x_secret_token = null, $authorization = null, $ehelply_active_participant = null, $ehelply_project = null, $ehelply_data = null)
    {
        return $this->getSubjectLogsAsyncWithHttpInfo($service, $subject, $date_start, $date_end, $desc, $limit, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSubjectLogsAsyncWithHttpInfo
     *
     * Getsubjectlogs
     *
     * @param  string $service (required)
     * @param  string $subject (required)
     * @param  string $date_start (optional)
     * @param  string $date_end (optional)
     * @param  bool $desc (optional, default to true)
     * @param  int $limit (optional, default to 50)
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
    public function getSubjectLogsAsyncWithHttpInfo($service, $subject, $date_start = null, $date_end = null, $desc = true, $limit = 50, $x_access_token = null, $x_secret_token = null, $authorization = null, $ehelply_active_participant = null, $ehelply_project = null, $ehelply_data = null)
    {
        $returnType = '\OpenAPI\Client\Model\LoggingDynamo[]';
        $request = $this->getSubjectLogsRequest($service, $subject, $date_start, $date_end, $desc, $limit, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);

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
     * Create request for operation 'getSubjectLogs'
     *
     * @param  string $service (required)
     * @param  string $subject (required)
     * @param  string $date_start (optional)
     * @param  string $date_end (optional)
     * @param  bool $desc (optional, default to true)
     * @param  int $limit (optional, default to 50)
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
    public function getSubjectLogsRequest($service, $subject, $date_start = null, $date_end = null, $desc = true, $limit = 50, $x_access_token = null, $x_secret_token = null, $authorization = null, $ehelply_active_participant = null, $ehelply_project = null, $ehelply_data = null)
    {
        // verify the required parameter 'service' is set
        if ($service === null || (is_array($service) && count($service) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service when calling getSubjectLogs'
            );
        }
        // verify the required parameter 'subject' is set
        if ($subject === null || (is_array($subject) && count($subject) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $subject when calling getSubjectLogs'
            );
        }

        $resourcePath = '/sam/logging/logs/services/{service}/subjects/{subject}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_start,
            'date_start', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_end,
            'date_end', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $desc,
            'desc', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

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
        if ($service !== null) {
            $resourcePath = str_replace(
                '{' . 'service' . '}',
                ObjectSerializer::toPathValue($service),
                $resourcePath
            );
        }
        // path params
        if ($subject !== null) {
            $resourcePath = str_replace(
                '{' . 'subject' . '}',
                ObjectSerializer::toPathValue($subject),
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
            'GET',
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

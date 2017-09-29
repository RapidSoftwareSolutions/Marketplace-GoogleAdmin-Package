<?php

$app->post('/api/GoogleAdmin/addUser', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'familyName', 'givenName', 'password', 'primaryEmail']);

    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['accessToken' => 'accessToken', 'familyName' => 'familyName', 'givenName' => 'givenName', 'password' => 'password', 'primaryEmail' => 'primaryEmail'];
    $optionalParams = ['addresses' => 'addresses', 'changePasswordAtNextLogin' => 'changePasswordAtNextLogin', 'emails' => 'emails', 'externalIds' => 'externalIds', 'hashFunction' => 'hashFunction', 'ims' => 'ims', 'includeInGlobalAddressList' => 'includeInGlobalAddressList', 'ipWhitelisted' => 'ipWhitelisted', 'locations' => 'locations', 'notesContentType' => 'notesContentType', 'notesValue' => 'notesValue', 'orgUnitPath' => 'orgUnitPath', 'organizations' => 'organizations', 'phones' => 'phones', 'posixAccounts' => 'posixAccounts', 'relations' => 'relations', 'sshPublicKeys' => 'sshPublicKeys', 'suspended' => 'suspended', 'websites' => 'websites'];
    $bodyParams = [
        'json' => ['kind', 'websites', 'suspended', 'name', 'password', 'primaryEmail', 'addresses', 'changePasswordAtNextLogin', 'emails', 'externalIds', 'hashFunction', 'ims', 'includeInGlobalAddressList', 'ipWhitelisted', 'locations', 'notes', 'orgUnitPath', 'organizations', 'phones', 'posixAccounts', 'relations', 'sshPublicKeys']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);
    $client = $this->httpClient;
    $query_str = "https://www.googleapis.com/admin/directory/v1/users";
    if (strlen($data['notesValue']) > 0) {
        $data['notes']['ContentType'] = $data['notesContentType'];
        $data['notes']['value'] = $data['notesValue'];
    }
    $data['name']['familyName'] = $data['familyName'];
    $data['name']['givenName'] = $data['givenName'];

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = ["Authorization" => "Bearer {$data['accessToken']}"];


    try {
        $resp = $client->post($query_str, $requestParams);
        $responseBody = $resp->getBody()->getContents();

        if (in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if (empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if (empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if (empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});
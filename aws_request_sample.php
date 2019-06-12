<?php
include('./aws_secure_request.php');

// Configuration values
$host					= 's3.amazonaws.com';
$accessKey	 			= 'somekey';
$secretKey 				= 'somekeys/PE4Nd9r5X';
$region 				= 'us-east-1';
$service 				= 's3';

/**
* You should modify the script
* for
*	1. full request url
*	2. uri for AWS signature
*	3. request method GET / POST / PUT
* 	4. actual data of the request
* and call the above functions
*/
$requestUrl	= 'https://s3.amazonaws.com/somefolder/test.png';
$uri = '/somefolder/test.png';
$httpRequestMethod = 'GET';

$data = json_encode(array());

$headers = calcualteAwsSignatureAndReturnHeaders($host, $uri, $requestUrl,
			$accessKey, $secretKey, $region, $service,
			$httpRequestMethod, $data, TRUE);

$result = callToAPI($requestUrl, $httpRequestMethod, $headers, $data, TRUE);
// print_r($headers);
print_r($result);

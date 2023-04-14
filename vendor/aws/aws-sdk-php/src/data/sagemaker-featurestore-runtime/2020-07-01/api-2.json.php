<?php
// This file was auto-generated from sdk-root/src/data/sagemaker-featurestore-runtime/2020-07-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2020-07-01', 'endpointPrefix' => 'featurestore-runtime.sagemaker', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon SageMaker Feature Store Runtime', 'serviceId' => 'SageMaker FeatureStore Runtime', 'signatureVersion' => 'v4', 'signingName' => 'sagemaker', 'uid' => 'sagemaker-featurestore-runtime-2020-07-01', ], 'operations' => [ 'BatchGetRecord' => [ 'name' => 'BatchGetRecord', 'http' => [ 'method' => 'POST', 'requestUri' => '/BatchGetRecord', ], 'input' => [ 'shape' => 'BatchGetRecordRequest', ], 'output' => [ 'shape' => 'BatchGetRecordResponse', ], 'errors' => [ [ 'shape' => 'ValidationError', ], [ 'shape' => 'InternalFailure', ], [ 'shape' => 'ServiceUnavailable', ], [ 'shape' => 'AccessForbidden', ], ], ], 'DeleteRecord' => [ 'name' => 'DeleteRecord', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/FeatureGroup/{FeatureGroupName}', ], 'input' => [ 'shape' => 'DeleteRecordRequest', ], 'errors' => [ [ 'shape' => 'ValidationError', ], [ 'shape' => 'InternalFailure', ], [ 'shape' => 'ServiceUnavailable', ], [ 'shape' => 'AccessForbidden', ], ], ], 'GetRecord' => [ 'name' => 'GetRecord', 'http' => [ 'method' => 'GET', 'requestUri' => '/FeatureGroup/{FeatureGroupName}', ], 'input' => [ 'shape' => 'GetRecordRequest', ], 'output' => [ 'shape' => 'GetRecordResponse', ], 'errors' => [ [ 'shape' => 'ValidationError', ], [ 'shape' => 'ResourceNotFound', ], [ 'shape' => 'InternalFailure', ], [ 'shape' => 'ServiceUnavailable', ], [ 'shape' => 'AccessForbidden', ], ], ], 'PutRecord' => [ 'name' => 'PutRecord', 'http' => [ 'method' => 'PUT', 'requestUri' => '/FeatureGroup/{FeatureGroupName}', ], 'input' => [ 'shape' => 'PutRecordRequest', ], 'errors' => [ [ 'shape' => 'ValidationError', ], [ 'shape' => 'InternalFailure', ], [ 'shape' => 'ServiceUnavailable', ], [ 'shape' => 'AccessForbidden', ], ], ], ], 'shapes' => [ 'AccessForbidden' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 403, ], 'exception' => true, 'synthetic' => true, ], 'BatchGetRecordError' => [ 'type' => 'structure', 'required' => [ 'FeatureGroupName', 'RecordIdentifierValueAsString', 'ErrorCode', 'ErrorMessage', ], 'members' => [ 'FeatureGroupName' => [ 'shape' => 'ValueAsString', ], 'RecordIdentifierValueAsString' => [ 'shape' => 'ValueAsString', ], 'ErrorCode' => [ 'shape' => 'ValueAsString', ], 'ErrorMessage' => [ 'shape' => 'Message', ], ], ], 'BatchGetRecordErrors' => [ 'type' => 'list', 'member' => [ 'shape' => 'BatchGetRecordError', ], 'min' => 0, ], 'BatchGetRecordIdentifier' => [ 'type' => 'structure', 'required' => [ 'FeatureGroupName', 'RecordIdentifiersValueAsString', ], 'members' => [ 'FeatureGroupName' => [ 'shape' => 'FeatureGroupName', ], 'RecordIdentifiersValueAsString' => [ 'shape' => 'RecordIdentifiers', ], 'FeatureNames' => [ 'shape' => 'FeatureNames', ], ], ], 'BatchGetRecordIdentifiers' => [ 'type' => 'list', 'member' => [ 'shape' => 'BatchGetRecordIdentifier', ], 'max' => 10, 'min' => 1, ], 'BatchGetRecordRequest' => [ 'type' => 'structure', 'required' => [ 'Identifiers', ], 'members' => [ 'Identifiers' => [ 'shape' => 'BatchGetRecordIdentifiers', ], ], ], 'BatchGetRecordResponse' => [ 'type' => 'structure', 'required' => [ 'Records', 'Errors', 'UnprocessedIdentifiers', ], 'members' => [ 'Records' => [ 'shape' => 'BatchGetRecordResultDetails', ], 'Errors' => [ 'shape' => 'BatchGetRecordErrors', ], 'UnprocessedIdentifiers' => [ 'shape' => 'UnprocessedIdentifiers', ], ], ], 'BatchGetRecordResultDetail' => [ 'type' => 'structure', 'required' => [ 'FeatureGroupName', 'RecordIdentifierValueAsString', 'Record', ], 'members' => [ 'FeatureGroupName' => [ 'shape' => 'ValueAsString', ], 'RecordIdentifierValueAsString' => [ 'shape' => 'ValueAsString', ], 'Record' => [ 'shape' => 'Record', ], ], ], 'BatchGetRecordResultDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'BatchGetRecordResultDetail', ], 'min' => 0, ], 'DeleteRecordRequest' => [ 'type' => 'structure', 'required' => [ 'FeatureGroupName', 'RecordIdentifierValueAsString', 'EventTime', ], 'members' => [ 'FeatureGroupName' => [ 'shape' => 'FeatureGroupName', 'location' => 'uri', 'locationName' => 'FeatureGroupName', ], 'RecordIdentifierValueAsString' => [ 'shape' => 'ValueAsString', 'location' => 'querystring', 'locationName' => 'RecordIdentifierValueAsString', ], 'EventTime' => [ 'shape' => 'ValueAsString', 'location' => 'querystring', 'locationName' => 'EventTime', ], 'TargetStores' => [ 'shape' => 'TargetStores', 'location' => 'querystring', 'locationName' => 'TargetStores', ], ], ], 'FeatureGroupName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[a-zA-Z0-9](-*[a-zA-Z0-9]){0,63}', ], 'FeatureName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[a-zA-Z0-9]([-_]*[a-zA-Z0-9]){0,63}', ], 'FeatureNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'FeatureName', ], 'min' => 1, ], 'FeatureValue' => [ 'type' => 'structure', 'required' => [ 'FeatureName', 'ValueAsString', ], 'members' => [ 'FeatureName' => [ 'shape' => 'FeatureName', ], 'ValueAsString' => [ 'shape' => 'ValueAsString', ], ], ], 'GetRecordRequest' => [ 'type' => 'structure', 'required' => [ 'FeatureGroupName', 'RecordIdentifierValueAsString', ], 'members' => [ 'FeatureGroupName' => [ 'shape' => 'FeatureGroupName', 'location' => 'uri', 'locationName' => 'FeatureGroupName', ], 'RecordIdentifierValueAsString' => [ 'shape' => 'ValueAsString', 'location' => 'querystring', 'locationName' => 'RecordIdentifierValueAsString', ], 'FeatureNames' => [ 'shape' => 'FeatureNames', 'location' => 'querystring', 'locationName' => 'FeatureName', ], ], ], 'GetRecordResponse' => [ 'type' => 'structure', 'members' => [ 'Record' => [ 'shape' => 'Record', ], ], ], 'InternalFailure' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, 'synthetic' => true, ], 'Message' => [ 'type' => 'string', 'max' => 2048, ], 'PutRecordRequest' => [ 'type' => 'structure', 'required' => [ 'FeatureGroupName', 'Record', ], 'members' => [ 'FeatureGroupName' => [ 'shape' => 'FeatureGroupName', 'location' => 'uri', 'locationName' => 'FeatureGroupName', ], 'Record' => [ 'shape' => 'Record', ], 'TargetStores' => [ 'shape' => 'TargetStores', ], ], ], 'Record' => [ 'type' => 'list', 'member' => [ 'shape' => 'FeatureValue', ], 'min' => 1, ], 'RecordIdentifiers' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValueAsString', ], 'max' => 100, 'min' => 1, ], 'ResourceNotFound' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'ServiceUnavailable' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 503, ], 'exception' => true, 'fault' => true, 'synthetic' => true, ], 'TargetStore' => [ 'type' => 'string', 'enum' => [ 'OnlineStore', 'OfflineStore', ], ], 'TargetStores' => [ 'type' => 'list', 'member' => [ 'shape' => 'TargetStore', ], 'max' => 2, 'min' => 1, ], 'UnprocessedIdentifiers' => [ 'type' => 'list', 'member' => [ 'shape' => 'BatchGetRecordIdentifier', ], 'min' => 0, ], 'ValidationError' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, 'synthetic' => true, ], 'ValueAsString' => [ 'type' => 'string', 'max' => 358400, 'pattern' => '.*', ], ],];

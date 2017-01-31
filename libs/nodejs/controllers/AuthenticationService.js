'use strict';

exports.oauth2TokenClientPOST = function(args, res, next) {
  /**
   * parameters expected in the args:
  * payload (Payload)
  **/
    var examples = {};
  examples['application/json'] = {
  "scope" : {
    "partition" : {
      "id" : "",
      "name" : "aeiou"
    },
    "user" : "",
    "partitionName" : "aeiou"
  },
  "expires_in" : "",
  "refresh_token" : "aeiou",
  "access_token" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.oauth2TokenMeetingPOST = function(args, res, next) {
  /**
   * parameters expected in the args:
  * payload (Payload_1)
  **/
    var examples = {};
  examples['application/json'] = {
  "scope" : {
    "partition" : {
      "id" : "",
      "name" : "aeiou"
    },
    "user" : "",
    "partitionName" : "aeiou"
  },
  "expires_in" : "",
  "refresh_token" : "aeiou",
  "access_token" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.oauth2TokenPasswordPOST = function(args, res, next) {
  /**
   * parameters expected in the args:
  * payload (Payload_2)
  **/
    var examples = {};
  examples['application/json'] = {
  "scope" : {
    "partition" : {
      "id" : "",
      "name" : "aeiou"
    },
    "user" : "",
    "partitionName" : "aeiou"
  },
  "expires_in" : "",
  "refresh_token" : "aeiou",
  "access_token" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}


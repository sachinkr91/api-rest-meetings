'use strict';

exports.v1EnterpriseEnterprise_idIndigoAnalyticsEndpointsDistributionGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * enterprise_id (Integer)
  * filter (String)
  **/
    var examples = {};
  examples['application/json'] = {
  "distribution" : [ {
    "PSTN" : "",
    "Lync" : "",
    "SIP" : "",
    "Skype" : "",
    "WebRTC" : "",
    "Level3" : "",
    "Jabber" : "",
    "Browser" : "",
    "Android" : "",
    "H323" : "",
    "InterCall" : "",
    "Telepresence" : "",
    "ISDN" : "",
    "BlueJeansApp" : "",
    "Google" : "",
    "iOS" : ""
  } ]
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1EnterpriseEnterprise_idIndigoAnalyticsFeedbackCommentsGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * enterprise_id (Integer)
  * start (String)
  * end (String)
  **/
    var examples = {};
  examples['application/json'] = {
  "comments" : [ {
    "qualaroo_comments" : "aeiou",
    "meeting_uuid" : "aeiou",
    "callguid" : "aeiou",
    "qualaroo_feedback" : "aeiou"
  } ]
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1EnterpriseEnterprise_idIndigoAnalyticsMeetingsUsageGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * enterprise_id (Integer)
  * clientTZ (String)
  * filter (String)
  **/
    var examples = {};
  examples['application/json'] = {
  "usage" : [ {
    "numEndpoints" : "",
    "endpointMinutes" : "",
    "Date" : "",
    "numMeetings" : ""
  } ]
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1EnterpriseEnterprise_idIndigoAnalyticsRoi_rangesGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * enterprise_id (Integer)
  * filter (String)
  **/
    var examples = {};
  examples['application/json'] = {
  "roi_ranges" : [ {
    "distance" : 1.3579000000000001069366817318950779736042022705078125,
    "distance_range" : "aeiou"
  } ]
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1EnterpriseEnterprise_idIndigoAnalyticsUsersUsageGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * enterprise_id (Integer)
  * filter (String)
  **/
    var examples = {};
  examples['application/json'] = {
  "usage" : [ {
    "first_name" : "aeiou",
    "lastMeetingTime" : "",
    "participantMinutes" : 1.3579000000000001069366817318950779736042022705078125,
    "userId" : "",
    "last_name" : "aeiou",
    "userName" : "aeiou"
  } ]
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1EnterpriseEnterprise_idIndigoFeedbackCountGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * enterprise_id (Integer)
  * start (String)
  * end (String)
  **/
    var examples = {};
  examples['application/json'] = {
  "Good" : "",
  "Great" : "",
  "Okay" : "",
  "Bad" : "",
  "Poor" : ""
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}


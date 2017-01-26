'use strict';

exports.v1EnterpriseEnterprise_idMeeting_historyGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * enterprise_id (Integer)
  **/
    var examples = {};
  examples['application/json'] = {
  "numericMeetingId" : "aeiou",
  "id" : "",
  "timezone" : "aeiou",
  "title" : "aeiou",
  "attendeePasscode" : "aeiou",
  "start" : "",
  "description" : "aeiou",
  "end" : ""
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1EnterpriseEnterprise_idMeeting_historyMeeting_guidGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * enterprise_id (Integer)
  * meeting_guid (String)
  **/
    var examples = {};
  examples['application/json'] = {
  "numericMeetingId" : "aeiou",
  "id" : "",
  "timezone" : "aeiou",
  "title" : "aeiou",
  "attendeePasscode" : "aeiou",
  "start" : "",
  "description" : "aeiou",
  "end" : ""
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idMeeting_historyGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meetingId (String)
  * startDate (String)
  * endDate (String)
  * pageSize (Integer)
  * pageNumber (Integer)
  * order (String)
  **/
    var examples = {};
  examples['application/json'] = {
  "numericMeetingId" : "aeiou",
  "id" : "",
  "timezone" : "aeiou",
  "title" : "aeiou",
  "attendeePasscode" : "aeiou",
  "start" : "",
  "description" : "aeiou",
  "end" : ""
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idMeeting_historyMeeting_guidGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_guid (String)
  **/
    var examples = {};
  examples['application/json'] = {
  "numericMeetingId" : "aeiou",
  "id" : "",
  "timezone" : "aeiou",
  "title" : "aeiou",
  "attendeePasscode" : "aeiou",
  "start" : "",
  "description" : "aeiou",
  "end" : ""
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idMeeting_historyRecordingsGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * pageSize (Integer)
  * pageNumber (Integer)
  * sortBy (String)
  * order (String)
  **/
    var examples = {};
  examples['application/json'] = "";
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}


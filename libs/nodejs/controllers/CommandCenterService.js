'use strict';

exports.v1EnterpriseEnterprise_idIndigoMeetingsGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * enterprise_id (Integer)
  * offset (Integer)
  * limit (Integer)
  * filter (String)
  **/
    var examples = {};
  examples['application/json'] = {
  "numericMeetingId" : "aeiou",
  "id" : "",
  "timezone" : "aeiou",
  "title" : "aeiou",
  "attendeePasscode" : "aeiou",
  "endPointVersion" : "aeiou",
  "start" : "",
  "description" : "aeiou",
  "advancedMeetingOptions" : {
    "muteParticipantsOnEntry" : true,
    "autoRecord" : true,
    "moderatorLess" : true,
    "showAllAttendeesInMeetingInvite" : true,
    "videoBestFit" : true,
    "publishMeeting" : true,
    "disallowChat" : true,
    "encryptionType" : "aeiou"
  },
  "end" : "",
  "endPointType" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1EnterpriseEnterprise_idIndigoMeetingsLiveGET = function(args, res, next) {
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
  "endPointVersion" : "aeiou",
  "start" : "",
  "description" : "aeiou",
  "advancedMeetingOptions" : {
    "muteParticipantsOnEntry" : true,
    "autoRecord" : true,
    "moderatorLess" : true,
    "showAllAttendeesInMeetingInvite" : true,
    "videoBestFit" : true,
    "publishMeeting" : true,
    "disallowChat" : true,
    "encryptionType" : "aeiou"
  },
  "end" : "",
  "endPointType" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1EnterpriseEnterprise_idIndigoMeetingsLiveMeeting_guidEndpointsGET = function(args, res, next) {
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
  "endPointVersion" : "aeiou",
  "start" : "",
  "description" : "aeiou",
  "advancedMeetingOptions" : {
    "muteParticipantsOnEntry" : true,
    "autoRecord" : true,
    "moderatorLess" : true,
    "showAllAttendeesInMeetingInvite" : true,
    "videoBestFit" : true,
    "publishMeeting" : true,
    "disallowChat" : true,
    "encryptionType" : "aeiou"
  },
  "end" : "",
  "endPointType" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1EnterpriseEnterprise_idIndigoMeetingsMeeting_guidGET = function(args, res, next) {
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
  "endPointVersion" : "aeiou",
  "start" : "",
  "description" : "aeiou",
  "advancedMeetingOptions" : {
    "muteParticipantsOnEntry" : true,
    "autoRecord" : true,
    "moderatorLess" : true,
    "showAllAttendeesInMeetingInvite" : true,
    "videoBestFit" : true,
    "publishMeeting" : true,
    "disallowChat" : true,
    "encryptionType" : "aeiou"
  },
  "end" : "",
  "endPointType" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idIndigoMeetingsGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  **/
    var examples = {};
  examples['application/json'] = {
  "numericMeetingId" : "aeiou",
  "id" : "",
  "timezone" : "aeiou",
  "title" : "aeiou",
  "attendeePasscode" : "aeiou",
  "endPointVersion" : "aeiou",
  "start" : "",
  "description" : "aeiou",
  "advancedMeetingOptions" : {
    "muteParticipantsOnEntry" : true,
    "autoRecord" : true,
    "moderatorLess" : true,
    "showAllAttendeesInMeetingInvite" : true,
    "videoBestFit" : true,
    "publishMeeting" : true,
    "disallowChat" : true,
    "encryptionType" : "aeiou"
  },
  "end" : "",
  "endPointType" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idIndigoMeetingsMeeting_guidGET = function(args, res, next) {
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
  "endPointVersion" : "aeiou",
  "start" : "",
  "description" : "aeiou",
  "advancedMeetingOptions" : {
    "muteParticipantsOnEntry" : true,
    "autoRecord" : true,
    "moderatorLess" : true,
    "showAllAttendeesInMeetingInvite" : true,
    "videoBestFit" : true,
    "publishMeeting" : true,
    "disallowChat" : true,
    "encryptionType" : "aeiou"
  },
  "end" : "",
  "endPointType" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}


'use strict';

exports.v1EnterpriseEnterprise_idUsersGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * enterprise_id (Integer)
  * pageSize (Integer)
  * pageNumber (Integer)
  * emailId (String)
  **/
    var examples = {};
  examples['application/json'] = {
  "numericId" : "aeiou",
  "muteParticipantsOnEntry" : true,
  "isLargeMeeting" : true,
  "personalMeetingId" : "",
  "showAllParticipantsInIcs" : true,
  "originPopId" : "",
  "backgroundImage" : "aeiou",
  "moderatorLess" : true,
  "showVideoAnimations" : true,
  "publishMeeting" : true,
  "encryptionType" : "aeiou",
  "id" : "",
  "enforceMeetingEncryption" : true,
  "playAudioAlerts" : true,
  "idleTimeout" : "",
  "name" : "aeiou",
  "moderatorPasscode" : "aeiou",
  "defaultLayout" : "aeiou",
  "isModeratorLess" : true,
  "enforceMeetingEncryptionAllowPSTN" : true,
  "videoBestFit" : true,
  "participantPasscode" : "aeiou",
  "disallowChat" : true,
  "welcomeMessage" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1EnterpriseEnterprise_idUsersPOST = function(args, res, next) {
  /**
   * parameters expected in the args:
  * enterprise_id (Integer)
  * forcePasswordChange (Boolean)
  * sendVerificationMail (Boolean)
  **/
    var examples = {};
  examples['application/json'] = {
  "numericId" : "aeiou",
  "muteParticipantsOnEntry" : true,
  "isLargeMeeting" : true,
  "personalMeetingId" : "",
  "showAllParticipantsInIcs" : true,
  "originPopId" : "",
  "backgroundImage" : "aeiou",
  "moderatorLess" : true,
  "showVideoAnimations" : true,
  "publishMeeting" : true,
  "encryptionType" : "aeiou",
  "id" : "",
  "enforceMeetingEncryption" : true,
  "playAudioAlerts" : true,
  "idleTimeout" : "",
  "name" : "aeiou",
  "moderatorPasscode" : "aeiou",
  "defaultLayout" : "aeiou",
  "isModeratorLess" : true,
  "enforceMeetingEncryptionAllowPSTN" : true,
  "videoBestFit" : true,
  "participantPasscode" : "aeiou",
  "disallowChat" : true,
  "welcomeMessage" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1EnterpriseEnterprise_idUsersUser_idDELETE = function(args, res, next) {
  /**
   * parameters expected in the args:
  * enterprise_id (Integer)
  * user_id (Integer)
  **/
    var examples = {};
  examples['application/json'] = {
  "numericId" : "aeiou",
  "muteParticipantsOnEntry" : true,
  "isLargeMeeting" : true,
  "personalMeetingId" : "",
  "showAllParticipantsInIcs" : true,
  "originPopId" : "",
  "backgroundImage" : "aeiou",
  "moderatorLess" : true,
  "showVideoAnimations" : true,
  "publishMeeting" : true,
  "encryptionType" : "aeiou",
  "id" : "",
  "enforceMeetingEncryption" : true,
  "playAudioAlerts" : true,
  "idleTimeout" : "",
  "name" : "aeiou",
  "moderatorPasscode" : "aeiou",
  "defaultLayout" : "aeiou",
  "isModeratorLess" : true,
  "enforceMeetingEncryptionAllowPSTN" : true,
  "videoBestFit" : true,
  "participantPasscode" : "aeiou",
  "disallowChat" : true,
  "welcomeMessage" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idEnterprise_profileGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  **/
    var examples = {};
  examples['application/json'] = {
  "joinDate" : "",
  "id" : "",
  "expiryDate" : "",
  "enterpriseAdmin" : true,
  "enterprise" : ""
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}


'use strict';

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

exports.v1UserUser_idGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  **/
    var examples = {};
  examples['application/json'] = {
  "middleName" : "aeiou",
  "id" : "",
  "lastName" : "aeiou",
  "timezone" : "aeiou",
  "phone" : "aeiou",
  "title" : "aeiou",
  "emailId" : "aeiou",
  "username" : "aeiou",
  "profilePicture" : "aeiou",
  "company" : "aeiou",
  "timeFormat" : "",
  "language" : "aeiou",
  "firstName" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idPUT = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * user (User)
  **/
    var examples = {};
  examples['application/json'] = {
  "middleName" : "aeiou",
  "id" : "",
  "lastName" : "aeiou",
  "timezone" : "aeiou",
  "phone" : "aeiou",
  "title" : "aeiou",
  "emailId" : "aeiou",
  "username" : "aeiou",
  "profilePicture" : "aeiou",
  "company" : "aeiou",
  "timeFormat" : "",
  "language" : "aeiou",
  "firstName" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idRoomGET = function(args, res, next) {
  /**
   * parameters expected in the args:
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

exports.v1UserUser_idRoomPUT = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * room (Room)
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

exports.v1UserUser_idScheduled_meetingGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  **/
    var examples = {};
  examples['application/json'] = [ {
  "numericMeetingId" : "aeiou",
  "id" : "",
  "timezone" : "aeiou",
  "title" : "aeiou",
  "attendeePasscode" : "aeiou",
  "start" : "",
  "description" : "aeiou",
  "end" : ""
} ];
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}


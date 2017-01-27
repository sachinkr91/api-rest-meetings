'use strict';

exports.v1UserUser_idCmsContent_idisDownloadabletrueGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * content_id (Integer)
  **/
    var examples = {};
  examples['application/json'] = {
  "contentDescription" : "aeiou",
  "contentSize" : "",
  "contentCategory" : "aeiou",
  "contentType" : "aeiou",
  "contentName" : "aeiou",
  "contentDuration" : "",
  "modified" : "",
  "id" : "",
  "created" : "",
  "contentStatus" : "aeiou",
  "userId" : "",
  "contentLocation" : "aeiou",
  "contentProperties" : {
    "duration" : "",
    "thumbnail" : "aeiou",
    "hdsUrl" : "aeiou",
    "thumbnailInterval" : "",
    "thumbnailHeight" : "",
    "thumbnailWidth" : "",
    "hlsUrl" : "aeiou",
    "thumbnailCount" : "",
    "thumbnailSprite" : "aeiou"
  }
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idLive_meetingsMeeting_idRecordingsGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
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

exports.v1UserUser_idLive_meetingsMeeting_idRecordingsactionstartPOST = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
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

exports.v1UserUser_idLive_meetingsMeeting_idRecordingsactionstopPUT = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
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

exports.v1UserUser_idLive_meetingsMeeting_idRecordingsmeetingGuidmeeting_guidGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
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

exports.v1UserUser_idMeeting_historyMeeting_guidRecordingsDELETE = function(args, res, next) {
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

exports.v1UserUser_idMeeting_historyMeeting_idRecordingsRecording_chapter_idDELETE = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
  * recording_chapter_id (Integer)
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


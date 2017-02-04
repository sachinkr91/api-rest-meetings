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
  examples['application/json'] = [ {
  "recordingEntityId" : "",
  "chapterCount" : "",
  "showPremiumRecordingTag" : true,
  "aggregatedStatus" : "aeiou",
  "totalDuration" : "",
  "created" : "",
  "meetingGuid" : "aeiou",
  "recordingName" : "aeiou",
  "totalSize" : "",
  "recordingThumbnail" : "aeiou",
  "lastRecordingDate" : "aeiou",
  "isPremiumRecording" : true
} ];
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idMeeting_historyRecordingsRecording_entity_idGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * recording_entity_id (Integer)
  **/
    var examples = {};
  examples['application/json'] = {
  "showPremiumRecordingTag" : true,
  "lastRecordingDate" : "",
  "isPremiumRecording" : true,
  "recordingEntityId" : "",
  "recordingChapters" : [ {
    "id" : "",
    "chapterId" : "aeiou",
    "startTimeOffset" : "",
    "endTimeOffset" : "",
    "chapterName" : "aeiou",
    "compositeContentId" : "",
    "totalSize" : "",
    "recordingSessions" : [ {
      "id" : "",
      "duration" : "",
      "startTimeOffset" : "",
      "startedBy" : {
        "endpointGuid" : "aeiou",
        "endpointName" : "aeiou"
      },
      "contentStatus" : "aeiou",
      "endTimeOffset" : "",
      "thumbnailUrl" : "aeiou",
      "stoppedBy" : "",
      "contentId" : "",
      "recordingType" : "aeiou"
    } ],
    "viewCount" : "",
    "parentRecordingId" : "",
    "compositeContentStatus" : "aeiou"
  } ],
  "chapterCount" : "",
  "totalDuration" : "",
  "aggregatedStatus" : "aeiou",
  "created" : "",
  "aggregatedViewCount" : "",
  "meetingGuid" : "aeiou",
  "recordingName" : "aeiou",
  "recordingEntityGuid" : "aeiou",
  "totalSize" : "",
  "recordingThumbnail" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}


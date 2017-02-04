'use strict';

exports.v1UserUser_idLive_meetingsMeeting_idEndpointsEndpoint_guidGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
  * endpoint_guid (String)
  **/
    var examples = {};
  examples['application/json'] = {
  "conaddress" : "aeiou",
  "audio.remote.address" : "aeiou",
  "visibility" : "aeiou",
  "ContentSend" : "aeiou",
  "AudioRecvLocalMute" : "aeiou",
  "medaddress" : "aeiou",
  "RDCControlleeCapable" : "aeiou",
  "AudioCapName" : "aeiou",
  "MixerGuid" : "aeiou",
  "video.remote.rtcpAddress" : "aeiou",
  "ContentRecvLocalMute" : "aeiou",
  "RDCControllerCapable" : "aeiou",
  "pairedremoteaddress" : "aeiou",
  "VideoRecvRemoteMute" : "aeiou",
  "SIPHTTPProxyTransport" : "aeiou",
  "SessionInRelay" : "aeiou",
  "mhaddress" : "aeiou",
  "EcMode" : "aeiou",
  "SessionOutRelay" : "aeiou",
  "content.local.address" : "aeiou",
  "endpoint" : "aeiou",
  "Layout" : "aeiou",
  "remoteaddress" : "aeiou",
  "VideoRecvLocalMute" : "aeiou",
  "ProxyInfo" : "aeiou",
  "SessionRelay" : "aeiou",
  "MovieCapable" : "aeiou",
  "SessionIn" : "aeiou",
  "version" : "aeiou",
  "ContentRecv" : "aeiou",
  "BJNUserId" : "aeiou",
  "transport" : "aeiou",
  "CallQualitySend" : "aeiou",
  "content.remote.address" : "aeiou",
  "CallQualityRecv" : "aeiou",
  "connecttime" : "aeiou",
  "ContentRtcpTransport" : "aeiou",
  "CountryCode" : "aeiou",
  "mixaddress" : "aeiou",
  "ContentRecvCodec" : "aeiou",
  "video.local.rtcpAddress" : "aeiou",
  "vendor" : "aeiou",
  "EndpointCpuParams" : "aeiou",
  "VideoRtcpTranspor" : "aeiou",
  "creationtime" : "aeiou",
  "RemoteConnectionCount" : "aeiou",
  "MeetingInfoMode" : "aeiou",
  "VideoRecv" : "aeiou",
  "audio.remote.rtcpAddress" : "aeiou",
  "AudioSend" : "aeiou",
  "VideoRecvWidth" : "aeiou",
  "SecureCall" : "aeiou",
  "AudioRtpRelay" : "aeiou",
  "AudioPlayID" : "aeiou",
  "RDCVersion" : "aeiou",
  "meetingid" : "aeiou",
  "MeetingGuid" : "aeiou",
  "VideoSendCodec" : "aeiou",
  "VideoRtpTransport" : "aeiou",
  "ContentRtcpRelay" : "aeiou",
  "BondedVideoName" : "aeiou",
  "callrate" : "aeiou",
  "VideoSendHeight" : "aeiou",
  "RelayNodeId" : "aeiou",
  "localName" : "aeiou",
  "AudioRecvRemoteMute" : "aeiou",
  "content.remote.rtcpAddress" : "aeiou",
  "ParticipantDTMFMenus" : "aeiou",
  "VideoRecvCodec" : "aeiou",
  "SubLayout" : "aeiou",
  "SessionOut" : "aeiou",
  "locales" : "aeiou",
  "CallQuality" : "aeiou",
  "content.local.rtcpAddress" : "aeiou",
  "AudioRtcpRelay" : "aeiou",
  "Id" : "aeiou",
  "isInRoster" : true,
  "audio.local.address" : "aeiou",
  "AudioRecv" : "aeiou",
  "pairedname" : "aeiou",
  "BondedAudioGuid" : "aeiou",
  "callguid" : "aeiou",
  "VideoRtpRelay" : "aeiou",
  "callhostname" : "aeiou",
  "localaddress" : "aeiou",
  "AudioCapID" : "aeiou",
  "AudioPlayName" : "aeiou",
  "meetingjointime" : "aeiou",
  "ContentRtpTransport" : "aeiou",
  "ContentRtpRelay" : "aeiou",
  "video.remote.address" : "aeiou",
  "VideoSendWidth" : "aeiou",
  "BondedVideoGuid" : "aeiou",
  "name" : "aeiou",
  "AudioRecvCodec" : "aeiou",
  "VideoCapID" : "aeiou",
  "VideoDrop" : "aeiou",
  "VideoSend" : "aeiou",
  "Leader" : "aeiou",
  "sessionid" : "aeiou",
  "AudioRtpTransport" : "aeiou",
  "AudioCapSelectID" : "aeiou",
  "video.local.address" : "aeiou",
  "AudioRtcpTransport" : "aeiou",
  "VideoRtcpRelay" : "aeiou",
  "ContentRelayServer" : "aeiou",
  "audio.local.rtcpAddress" : "aeiou",
  "TalkDetected" : "aeiou",
  "VideoRecvHeight" : "aeiou",
  "HtmlLayoutGuid" : "aeiou",
  "AudioSendCodec" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idLive_meetingsMeeting_idEndpointsEndpoint_guidLayoutGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
  * endpoint_guid (String)
  **/
    var examples = {};
  examples['application/json'] = {
  "layoutMode" : "aeiou",
  "subLayoutMode" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idLive_meetingsMeeting_idEndpointsEndpoint_guidLayoutPUT = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
  * endpoint_guid (String)
  * isLeader (Boolean)
  * push (Boolean)
  **/
    var examples = {};
  examples['application/json'] = {
  "layoutMode" : "aeiou",
  "subLayoutMode" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idLive_meetingsMeeting_idEndpointsEndpoint_guidPUT = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
  * endpoint_guid (String)
  * muteAudio (Boolean)
  * muteVideo (Boolean)
  * leaveMeeting (Boolean)
  **/
    var examples = {};
  examples['application/json'] = {
  "conaddress" : "aeiou",
  "audio.remote.address" : "aeiou",
  "visibility" : "aeiou",
  "ContentSend" : "aeiou",
  "AudioRecvLocalMute" : "aeiou",
  "medaddress" : "aeiou",
  "RDCControlleeCapable" : "aeiou",
  "AudioCapName" : "aeiou",
  "MixerGuid" : "aeiou",
  "video.remote.rtcpAddress" : "aeiou",
  "ContentRecvLocalMute" : "aeiou",
  "RDCControllerCapable" : "aeiou",
  "pairedremoteaddress" : "aeiou",
  "VideoRecvRemoteMute" : "aeiou",
  "SIPHTTPProxyTransport" : "aeiou",
  "SessionInRelay" : "aeiou",
  "mhaddress" : "aeiou",
  "EcMode" : "aeiou",
  "SessionOutRelay" : "aeiou",
  "content.local.address" : "aeiou",
  "endpoint" : "aeiou",
  "Layout" : "aeiou",
  "remoteaddress" : "aeiou",
  "VideoRecvLocalMute" : "aeiou",
  "ProxyInfo" : "aeiou",
  "SessionRelay" : "aeiou",
  "MovieCapable" : "aeiou",
  "SessionIn" : "aeiou",
  "version" : "aeiou",
  "ContentRecv" : "aeiou",
  "BJNUserId" : "aeiou",
  "transport" : "aeiou",
  "CallQualitySend" : "aeiou",
  "content.remote.address" : "aeiou",
  "CallQualityRecv" : "aeiou",
  "connecttime" : "aeiou",
  "ContentRtcpTransport" : "aeiou",
  "CountryCode" : "aeiou",
  "mixaddress" : "aeiou",
  "ContentRecvCodec" : "aeiou",
  "video.local.rtcpAddress" : "aeiou",
  "vendor" : "aeiou",
  "EndpointCpuParams" : "aeiou",
  "VideoRtcpTranspor" : "aeiou",
  "creationtime" : "aeiou",
  "RemoteConnectionCount" : "aeiou",
  "MeetingInfoMode" : "aeiou",
  "VideoRecv" : "aeiou",
  "audio.remote.rtcpAddress" : "aeiou",
  "AudioSend" : "aeiou",
  "VideoRecvWidth" : "aeiou",
  "SecureCall" : "aeiou",
  "AudioRtpRelay" : "aeiou",
  "AudioPlayID" : "aeiou",
  "RDCVersion" : "aeiou",
  "meetingid" : "aeiou",
  "MeetingGuid" : "aeiou",
  "VideoSendCodec" : "aeiou",
  "VideoRtpTransport" : "aeiou",
  "ContentRtcpRelay" : "aeiou",
  "BondedVideoName" : "aeiou",
  "callrate" : "aeiou",
  "VideoSendHeight" : "aeiou",
  "RelayNodeId" : "aeiou",
  "localName" : "aeiou",
  "AudioRecvRemoteMute" : "aeiou",
  "content.remote.rtcpAddress" : "aeiou",
  "ParticipantDTMFMenus" : "aeiou",
  "VideoRecvCodec" : "aeiou",
  "SubLayout" : "aeiou",
  "SessionOut" : "aeiou",
  "locales" : "aeiou",
  "CallQuality" : "aeiou",
  "content.local.rtcpAddress" : "aeiou",
  "AudioRtcpRelay" : "aeiou",
  "Id" : "aeiou",
  "isInRoster" : true,
  "audio.local.address" : "aeiou",
  "AudioRecv" : "aeiou",
  "pairedname" : "aeiou",
  "BondedAudioGuid" : "aeiou",
  "callguid" : "aeiou",
  "VideoRtpRelay" : "aeiou",
  "callhostname" : "aeiou",
  "localaddress" : "aeiou",
  "AudioCapID" : "aeiou",
  "AudioPlayName" : "aeiou",
  "meetingjointime" : "aeiou",
  "ContentRtpTransport" : "aeiou",
  "ContentRtpRelay" : "aeiou",
  "video.remote.address" : "aeiou",
  "VideoSendWidth" : "aeiou",
  "BondedVideoGuid" : "aeiou",
  "name" : "aeiou",
  "AudioRecvCodec" : "aeiou",
  "VideoCapID" : "aeiou",
  "VideoDrop" : "aeiou",
  "VideoSend" : "aeiou",
  "Leader" : "aeiou",
  "sessionid" : "aeiou",
  "AudioRtpTransport" : "aeiou",
  "AudioCapSelectID" : "aeiou",
  "video.local.address" : "aeiou",
  "AudioRtcpTransport" : "aeiou",
  "VideoRtcpRelay" : "aeiou",
  "ContentRelayServer" : "aeiou",
  "audio.local.rtcpAddress" : "aeiou",
  "TalkDetected" : "aeiou",
  "VideoRecvHeight" : "aeiou",
  "HtmlLayoutGuid" : "aeiou",
  "AudioSendCodec" : "aeiou"
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idLive_meetingsMeeting_idEndpointsGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
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

exports.v1UserUser_idLive_meetingsMeeting_idEndpointsPUT = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
  * mute (Boolean)
  * media (String)
  **/
  // no response value expected for this operation
  res.end();
}

exports.v1UserUser_idLive_meetingsMeeting_idGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
  **/
    var examples = {};
  examples['application/json'] = {
  "audioEndpointCount" : "",
  "isLargeMeeting" : "aeiou",
  "participantWebJoinURL" : "aeiou",
  "status" : "aeiou",
  "meetingMarkedForDelayedTermination" : true,
  "inactiveMeetingStatus" : "aeiou",
  "videoMuteOnEntry" : true,
  "moderatorLess" : true,
  "audioMuteOnEntry" : true,
  "recordingEnabled" : true,
  "videoEndpointCount" : "",
  "isContentSharingActive" : true,
  "title" : "aeiou",
  "recordinginfo" : {
    "contentStatus" : "aeiou",
    "recorded" : true,
    "active" : true,
    "recordingStartTime" : ""
  },
  "bridged" : true,
  "features" : [ "aeiou" ],
  "meetingId" : "aeiou",
  "meetingGuid" : "aeiou",
  "delayedMeetingEndTime" : "",
  "locked" : true,
  "meetingState" : "aeiou",
  "smStreams" : "aeiou",
  "pinnedEndpointGuid" : "aeiou",
  "chatEnabled" : true
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idLive_meetingsMeeting_idInvitePOST = function(args, res, next) {
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

exports.v1UserUser_idLive_meetingsMeeting_idPUT = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
  * meeting (Meeting)
  * delay (Integer)
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

exports.v1UserUser_idLive_meetingsMeeting_idPairing_codeSIPPOST = function(args, res, next) {
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

exports.v1UserUser_idMeetingsMeeting_idNumbersGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
  **/
    var examples = {};
  examples['application/json'] = {
  "pstnLocalizationSupported" : true,
  "precision" : "aeiou",
  "numbers" : [ {
    "id" : "",
    "countryName" : "aeiou",
    "default" : true,
    "premium" : true,
    "defaultSettingsInherited" : true,
    "state" : "aeiou",
    "label" : {
      "default" : "aeiou"
    },
    "number" : "aeiou",
    "tollfree" : true,
    "city" : "aeiou",
    "country" : "aeiou",
    "custom" : true
  } ],
  "moderatorPasscode" : "aeiou",
  "meetingId" : "aeiou",
  "pstnNumbersUrl" : "aeiou",
  "useAttendeePasscode" : true,
  "partnerIntegratedMeeting" : true,
  "allowDirectDial" : true
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
} ];
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

exports.v1UserUser_idScheduled_meetingMeeting_idDELETE = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
  **/
  // no response value expected for this operation
  res.end();
}

exports.v1UserUser_idScheduled_meetingMeeting_idEmailsGET = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
  * type (String)
  * role (String)
  * action (String)
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

exports.v1UserUser_idScheduled_meetingMeeting_idGET = function(args, res, next) {
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

exports.v1UserUser_idScheduled_meetingMeeting_idPUT = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting_id (Integer)
  * meeting (Meeting)
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

exports.v1UserUser_idScheduled_meetingPOST = function(args, res, next) {
  /**
   * parameters expected in the args:
  * user_id (Integer)
  * meeting (Meeting)
  * email (Boolean)
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


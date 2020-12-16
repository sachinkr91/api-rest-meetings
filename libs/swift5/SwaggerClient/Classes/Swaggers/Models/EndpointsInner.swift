//
// EndpointsInner.swift
//
// Generated by swagger-codegen
// https://github.com/swagger-api/swagger-codegen
//

import Foundation



public struct EndpointsInner: Codable {

    public var meetingid: String?
    public var name: String?
    public var callQuality: String?
    public var leader: String?
    public var callguid: String?
    public var endpoint: String?
    public var talkDetected: String?
    public var secureCall: String?
    public var layout: String?
    public var subLayout: String?
    public var videoRecv: String?
    public var videoRecvLocalMute: String?
    public var videoRecvRemoteMute: String?
    public var audioRecv: String?
    public var audioRecvLocalMute: String?
    public var audioRecvRemoteMute: String?
    public var audioRecvCodec: String?
    public var audioSendCodec: String?
    public var videoRecvCodec: String?
    public var videoRecvHeight: String?
    public var videoRecvWidth: String?
    public var videoSendCodec: String?
    public var videoSendHeight: String?
    public var videoSendWidth: String?
    public var visibility: String?
    public var chatEndpointGuid: String?
    public var endpointGuid: String?
    public var rDCVersion: String?
    public var rDCControllerCapable: String?
    public var rDCControlleeCapable: String?
    public var connections: [EndpointsInnerConnections]?

    public init(meetingid: String?, name: String?, callQuality: String?, leader: String?, callguid: String?, endpoint: String?, talkDetected: String?, secureCall: String?, layout: String?, subLayout: String?, videoRecv: String?, videoRecvLocalMute: String?, videoRecvRemoteMute: String?, audioRecv: String?, audioRecvLocalMute: String?, audioRecvRemoteMute: String?, audioRecvCodec: String?, audioSendCodec: String?, videoRecvCodec: String?, videoRecvHeight: String?, videoRecvWidth: String?, videoSendCodec: String?, videoSendHeight: String?, videoSendWidth: String?, visibility: String?, chatEndpointGuid: String?, endpointGuid: String?, rDCVersion: String?, rDCControllerCapable: String?, rDCControlleeCapable: String?, connections: [EndpointsInnerConnections]?) {
        self.meetingid = meetingid
        self.name = name
        self.callQuality = callQuality
        self.leader = leader
        self.callguid = callguid
        self.endpoint = endpoint
        self.talkDetected = talkDetected
        self.secureCall = secureCall
        self.layout = layout
        self.subLayout = subLayout
        self.videoRecv = videoRecv
        self.videoRecvLocalMute = videoRecvLocalMute
        self.videoRecvRemoteMute = videoRecvRemoteMute
        self.audioRecv = audioRecv
        self.audioRecvLocalMute = audioRecvLocalMute
        self.audioRecvRemoteMute = audioRecvRemoteMute
        self.audioRecvCodec = audioRecvCodec
        self.audioSendCodec = audioSendCodec
        self.videoRecvCodec = videoRecvCodec
        self.videoRecvHeight = videoRecvHeight
        self.videoRecvWidth = videoRecvWidth
        self.videoSendCodec = videoSendCodec
        self.videoSendHeight = videoSendHeight
        self.videoSendWidth = videoSendWidth
        self.visibility = visibility
        self.chatEndpointGuid = chatEndpointGuid
        self.endpointGuid = endpointGuid
        self.rDCVersion = rDCVersion
        self.rDCControllerCapable = rDCControllerCapable
        self.rDCControlleeCapable = rDCControlleeCapable
        self.connections = connections
    }

    public enum CodingKeys: String, CodingKey { 
        case meetingid
        case name
        case callQuality = "CallQuality"
        case leader = "Leader"
        case callguid
        case endpoint
        case talkDetected = "TalkDetected"
        case secureCall = "SecureCall"
        case layout = "Layout"
        case subLayout = "SubLayout"
        case videoRecv = "VideoRecv"
        case videoRecvLocalMute = "VideoRecvLocalMute"
        case videoRecvRemoteMute = "VideoRecvRemoteMute"
        case audioRecv = "AudioRecv"
        case audioRecvLocalMute = "AudioRecvLocalMute"
        case audioRecvRemoteMute = "AudioRecvRemoteMute"
        case audioRecvCodec = "AudioRecvCodec"
        case audioSendCodec = "AudioSendCodec"
        case videoRecvCodec = "VideoRecvCodec"
        case videoRecvHeight = "VideoRecvHeight"
        case videoRecvWidth = "VideoRecvWidth"
        case videoSendCodec = "VideoSendCodec"
        case videoSendHeight = "VideoSendHeight"
        case videoSendWidth = "VideoSendWidth"
        case visibility
        case chatEndpointGuid
        case endpointGuid
        case rDCVersion = "RDCVersion"
        case rDCControllerCapable = "RDCControllerCapable"
        case rDCControlleeCapable = "RDCControlleeCapable"
        case connections
    }


}


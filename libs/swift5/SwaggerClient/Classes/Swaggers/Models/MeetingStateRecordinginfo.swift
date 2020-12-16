//
// MeetingStateRecordinginfo.swift
//
// Generated by swagger-codegen
// https://github.com/swagger-api/swagger-codegen
//

import Foundation



public struct MeetingStateRecordinginfo: Codable {

    public var contentStatus: String?
    public var recordingStartTime: Int?
    public var active: Bool?
    public var recorded: Bool?

    public init(contentStatus: String?, recordingStartTime: Int?, active: Bool?, recorded: Bool?) {
        self.contentStatus = contentStatus
        self.recordingStartTime = recordingStartTime
        self.active = active
        self.recorded = recorded
    }


}


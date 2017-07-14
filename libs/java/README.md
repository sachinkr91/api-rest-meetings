# api-rest-onvideo

## Requirements

Building the API client library requires [Maven](https://maven.apache.org/) to be installed.

## Installation

To install the API client library to your local Maven repository, simply execute:

```shell
mvn install
```

To deploy it to a remote Maven repository instead, configure the settings of the repository and execute:

```shell
mvn deploy
```

Refer to the [official documentation](https://maven.apache.org/plugins/maven-deploy-plugin/usage.html) for more information.

### Maven users

Add this dependency to your project's POM:

```xml
<dependency>
    <groupId>com.bluejeans</groupId>
    <artifactId>api-rest-onvideo</artifactId>
    <version>1.0.0</version>
    <scope>compile</scope>
</dependency>
```

### Gradle users

Add this dependency to your project's build file:

```groovy
compile "com.bluejeans:api-rest-onvideo:1.0.0"
```

### Others

At first generate the JAR by executing:

    mvn package

Then manually install the following JARs:

* target/api-rest-onvideo-1.0.0.jar
* target/lib/*.jar

## Getting Started

Please follow the [installation](#installation) instruction and execute the following Java code:

```java

import com.bluejeans.api.rest.onvideo.*;
import com.bluejeans.api.rest.onvideo.auth.*;
import com.bluejeans.api.rest.onvideo.model.*;
import com.bluejeans.api.rest.onvideo.api.ApplicationApi;

import java.io.File;
import java.util.*;

public class ApplicationApiExample {

    public static void main(String[] args) {
        ApiClient defaultClient = Configuration.getDefaultApiClient();
        
        // Configure API key authorization: access_token
        ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
        access_token.setApiKey("YOUR API KEY");
        // Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
        //access_token.setApiKeyPrefix("Token");

        ApplicationApi apiInstance = new ApplicationApi();
        Integer userId = 56; // Integer | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
        Application application = new Application(); // Application | The information about the new client application.
        try {
            Application result = apiInstance.createClientApplication(userId, application);
            System.out.println(result);
        } catch (ApiException e) {
            System.err.println("Exception when calling ApplicationApi#createClientApplication");
            e.printStackTrace();
        }
    }
}

```

## Documentation for API Endpoints

All URIs are relative to *https://api.bluejeans.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApplicationApi* | [**createClientApplication**](docs/ApplicationApi.md#createClientApplication) | **POST** /v1/user/{user_id}/developer_applications | Create Client Application
*ApplicationApi* | [**regenerateClientApplicationSecret**](docs/ApplicationApi.md#regenerateClientApplicationSecret) | **PUT** /v1/user/{user_id}/developer_applications/{client_id}/secret | Regenerate Client Application Secret
*ApplicationApi* | [**updateClientApplication**](docs/ApplicationApi.md#updateClientApplication) | **PUT** /v1/user/{user_id}/developer_applications/{client_id} | Update Client Application
*AuthenticationApi* | [**getAuthorizationCode**](docs/AuthenticationApi.md#getAuthorizationCode) | **GET** /oauth2/authorize | Get Authorization Code
*AuthenticationApi* | [**getTokenByClient**](docs/AuthenticationApi.md#getTokenByClient) | **POST** /oauth2/token?Client | Authentication via Client Grant Type
*AuthenticationApi* | [**getTokenByCode**](docs/AuthenticationApi.md#getTokenByCode) | **POST** /oauth2/token?Code | Authentication via Code Grant Type
*AuthenticationApi* | [**getTokenByMeeting**](docs/AuthenticationApi.md#getTokenByMeeting) | **POST** /oauth2/token?Meeting | Authentication via Meeting Grant Type
*AuthenticationApi* | [**getTokenByPassword**](docs/AuthenticationApi.md#getTokenByPassword) | **POST** /oauth2/token?Password | Authentication via Password Grant Type
*AuthenticationApi* | [**getTokenByRefresh**](docs/AuthenticationApi.md#getTokenByRefresh) | **POST** /oauth2/token?Refresh | Authentication via Refresh Grant Type
*AuthenticationApi* | [**getTokenInfo**](docs/AuthenticationApi.md#getTokenInfo) | **GET** /oauth2/tokenInfo | Validate a Token
*AuthenticationApi* | [**revokeAccessToken**](docs/AuthenticationApi.md#revokeAccessToken) | **DELETE** /oauth2/token?Revoke | Revoke Access Token
*CommandCenterApi* | [**getEndpointDistribution**](docs/CommandCenterApi.md#getEndpointDistribution) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution | Endpoint Distribution
*CommandCenterApi* | [**getFeedbackComments**](docs/CommandCenterApi.md#getFeedbackComments) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/feedback/comments | Survey Feedback Comments
*CommandCenterApi* | [**getFeedbackCount**](docs/CommandCenterApi.md#getFeedbackCount) | **GET** /v1/enterprise/{enterprise_id}/indigo/feedback/count | Survey Feedback Scores
*CommandCenterApi* | [**getMeetingLiveByEnterprise**](docs/CommandCenterApi.md#getMeetingLiveByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_uuid}/endpoints/ | List Live Meeting Endpoints by Enterprise
*CommandCenterApi* | [**getMeetingPastByEnterprise**](docs/CommandCenterApi.md#getMeetingPastByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_uuid} | List Meeting Endpoints &amp; Stats by Enterprise
*CommandCenterApi* | [**getMeetingPastByUser**](docs/CommandCenterApi.md#getMeetingPastByUser) | **GET** /v1/user/{user_id}/indigo/meetings/{meeting_uuid} | List Meeting Endpoints &amp; Stats by User
*CommandCenterApi* | [**getMeetingUsage**](docs/CommandCenterApi.md#getMeetingUsage) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/meetings/usage | Meeting Usage Over Time
*CommandCenterApi* | [**getMeetingsLiveByEnterprise**](docs/CommandCenterApi.md#getMeetingsLiveByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live | Live Meetings Summary by Enterprise
*CommandCenterApi* | [**getMeetingsPastByEnterprise**](docs/CommandCenterApi.md#getMeetingsPastByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings | List Past Meetings by Enterprise
*CommandCenterApi* | [**getMeetingsPastByUser**](docs/CommandCenterApi.md#getMeetingsPastByUser) | **GET** /v1/user/{user_id}/indigo/meetings | List Past Meetings by User
*CommandCenterApi* | [**getRoiRanges**](docs/CommandCenterApi.md#getRoiRanges) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/roi_ranges | ROI Data
*CommandCenterApi* | [**getTopUsers**](docs/CommandCenterApi.md#getTopUsers) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/users/usage | Top Users
*EnterpriseApi* | [**createUser**](docs/EnterpriseApi.md#createUser) | **POST** /v1/enterprise/{enterprise_id}/users | Create Enterprise User
*EnterpriseApi* | [**exportUsers**](docs/EnterpriseApi.md#exportUsers) | **GET** /v1/enterprise/{enterprise_id}/users/export | Export Enterprise Users
*EnterpriseApi* | [**listUsers**](docs/EnterpriseApi.md#listUsers) | **GET** /v1/enterprise/{enterprise_id}/users | List Enterprise Users
*EnterpriseApi* | [**removeUser**](docs/EnterpriseApi.md#removeUser) | **DELETE** /v1/enterprise/{enterprise_id}/users/{user_id} | Remove Enterprise User
*HistoryApi* | [**getHistoryByEnterprise**](docs/HistoryApi.md#getHistoryByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/meeting_history/{meeting_guid} | Get Meeting History by Enterprise
*HistoryApi* | [**getHistoryByUser**](docs/HistoryApi.md#getHistoryByUser) | **GET** /v1/user/{user_id}/meeting_history/{meeting_guid} | Get Meeting History by User
*HistoryApi* | [**getHistorySharingByUser**](docs/HistoryApi.md#getHistorySharingByUser) | **GET** /v1/user/{user_id}/meeting_history/{meeting_guid}/sharing | Get Meeting History Sharing by User
*HistoryApi* | [**getRecording**](docs/HistoryApi.md#getRecording) | **GET** /v1/user/{user_id}/meeting_history/recordings/{recording_entity_id} | Get Recording
*HistoryApi* | [**listHistoryByEnterprise**](docs/HistoryApi.md#listHistoryByEnterprise) | **GET** /v1/enterprise/{enterprise_id}/meeting_history | List History by Enterprise
*HistoryApi* | [**listHistoryByUser**](docs/HistoryApi.md#listHistoryByUser) | **GET** /v1/user/{user_id}/meeting_history | List History by User
*HistoryApi* | [**listRecordings**](docs/HistoryApi.md#listRecordings) | **GET** /v1/user/{user_id}/meeting_history/recordings | List Meeting Recordings
*MeetingApi* | [**cancelMeeting**](docs/MeetingApi.md#cancelMeeting) | **DELETE** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Cancel Meeting
*MeetingApi* | [**createMeeting**](docs/MeetingApi.md#createMeeting) | **POST** /v1/user/{user_id}/scheduled_meeting | Create Meeting
*MeetingApi* | [**generatePairingCodeSip**](docs/MeetingApi.md#generatePairingCodeSip) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/SIP | Generate Pairing Code (SIP)
*MeetingApi* | [**generatePairingCodeWebRtc**](docs/MeetingApi.md#generatePairingCodeWebRtc) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/pairing_code/webrtc | Generate Pairing Code (WebRTC)
*MeetingApi* | [**getEndpointLayout**](docs/MeetingApi.md#getEndpointLayout) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout | Get Endpoint Layout
*MeetingApi* | [**getMeeting**](docs/MeetingApi.md#getMeeting) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Get Meeting
*MeetingApi* | [**getMeetingEmails**](docs/MeetingApi.md#getMeetingEmails) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails | Get Meeting Email
*MeetingApi* | [**getMeetingEndpoint**](docs/MeetingApi.md#getMeetingEndpoint) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid} | Get Endpoint Information
*MeetingApi* | [**getMeetingEndpoints**](docs/MeetingApi.md#getMeetingEndpoints) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints | List Meeting Endpoints
*MeetingApi* | [**getMeetingNumbers**](docs/MeetingApi.md#getMeetingNumbers) | **GET** /v1/user/{user_id}/meetings/{meeting_id}/numbers | Get Meeting Join Info
*MeetingApi* | [**getMeetingState**](docs/MeetingApi.md#getMeetingState) | **GET** /v1/user/{user_id}/live_meetings/{numeric_meeting_id} | Get Meeting State
*MeetingApi* | [**listMeetings**](docs/MeetingApi.md#listMeetings) | **GET** /v1/user/{user_id}/scheduled_meeting | List Meetings
*MeetingApi* | [**sendMeetingInvite**](docs/MeetingApi.md#sendMeetingInvite) | **POST** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/invite | Send Email Invite
*MeetingApi* | [**updateEndpointLayout**](docs/MeetingApi.md#updateEndpointLayout) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid}/layout | Update Endpoint Layout
*MeetingApi* | [**updateMeeting**](docs/MeetingApi.md#updateMeeting) | **PUT** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Update Meeting
*MeetingApi* | [**updateMeetingEndpoint**](docs/MeetingApi.md#updateMeetingEndpoint) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints/{endpoint_guid} | Update Endpoint Video/Audio State
*MeetingApi* | [**updateMeetingEndpoints**](docs/MeetingApi.md#updateMeetingEndpoints) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id}/endpoints | Update Meeting Endpoints State
*MeetingApi* | [**updateMeetingState**](docs/MeetingApi.md#updateMeetingState) | **PUT** /v1/user/{user_id}/live_meetings/{numeric_meeting_id} | Update Meeting State
*RecordingApi* | [**getMeetingRecordings**](docs/RecordingApi.md#getMeetingRecordings) | **GET** /v1/user/{user_id}/meeting_history/{meeting_id}/recordings | Get All Recordings for a Specified Meeting ID
*RecordingApi* | [**getRecordingContent**](docs/RecordingApi.md#getRecordingContent) | **GET** /v1/user/{user_id}/cms/{content_id} | Get Recording Download Link
*RecordingApi* | [**startRecording**](docs/RecordingApi.md#startRecording) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings | Start Recording
*RecordingApi* | [**stopRecording**](docs/RecordingApi.md#stopRecording) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings | Stop Recording
*RecordingApi* | [**v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete**](docs/RecordingApi.md#v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/ | Delete All Recordings for a Specified Meeting GUID
*RecordingApi* | [**v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete**](docs/RecordingApi.md#v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/ | Delete a Specified Recording Chapter
*UserApi* | [**getEnterpriseProfile**](docs/UserApi.md#getEnterpriseProfile) | **GET** /v1/user/{user_id}/enterprise_profile | Get Enterprise Profile
*UserApi* | [**getGrantedApplications**](docs/UserApi.md#getGrantedApplications) | **GET** /v1/user/{user_id}/granted_applications | Get Granted Applications
*UserApi* | [**getGroups**](docs/UserApi.md#getGroups) | **GET** /v1/user/{user_id}/groups | Get User Feature Groups
*UserApi* | [**getRoom**](docs/UserApi.md#getRoom) | **GET** /v1/user/{user_id}/room | Get User’s Default Meeting Settings
*UserApi* | [**getUser**](docs/UserApi.md#getUser) | **GET** /v1/user/{user_id} | Get User Account Details
*UserApi* | [**revokeGrantedApplication**](docs/UserApi.md#revokeGrantedApplication) | **DELETE** /v1/user/{user_id}/granted_applications/{client_id} | Remoke Granted Application
*UserApi* | [**setGroups**](docs/UserApi.md#setGroups) | **PUT** /v1/user/{user_id}/groups | Set User Feature Groups
*UserApi* | [**updateRoom**](docs/UserApi.md#updateRoom) | **PUT** /v1/user/{user_id}/room | Update User’s Default Meeting Settings
*UserApi* | [**updateUser**](docs/UserApi.md#updateUser) | **PUT** /v1/user/{user_id} | Update User Account Details


## Documentation for Models

 - [AnalyticsEndpointDistribution](docs/AnalyticsEndpointDistribution.md)
 - [AnalyticsEndpointDistributionDistribution](docs/AnalyticsEndpointDistributionDistribution.md)
 - [AnalyticsFeedbackComments](docs/AnalyticsFeedbackComments.md)
 - [AnalyticsFeedbackCommentsComments](docs/AnalyticsFeedbackCommentsComments.md)
 - [AnalyticsFeedbackScores](docs/AnalyticsFeedbackScores.md)
 - [AnalyticsRoiData](docs/AnalyticsRoiData.md)
 - [AnalyticsRoiDataRoiRanges](docs/AnalyticsRoiDataRoiRanges.md)
 - [AnalyticsTopUsers](docs/AnalyticsTopUsers.md)
 - [AnalyticsTopUsersUsage](docs/AnalyticsTopUsersUsage.md)
 - [AnalyticsUsage](docs/AnalyticsUsage.md)
 - [AnalyticsUsageUsage](docs/AnalyticsUsageUsage.md)
 - [Application](docs/Application.md)
 - [ApplicationSecret](docs/ApplicationSecret.md)
 - [Attendee](docs/Attendee.md)
 - [Content](docs/Content.md)
 - [ContentContentProperties](docs/ContentContentProperties.md)
 - [ContentContentPropertiesLevels](docs/ContentContentPropertiesLevels.md)
 - [Endpoint](docs/Endpoint.md)
 - [EndpointIndigo](docs/EndpointIndigo.md)
 - [EndpointIndigoEndpointAttributes1](docs/EndpointIndigoEndpointAttributes1.md)
 - [EndpointIndigoLocation](docs/EndpointIndigoLocation.md)
 - [EndpointIndigoSummaryStats](docs/EndpointIndigoSummaryStats.md)
 - [EndpointIndigoTraceroute](docs/EndpointIndigoTraceroute.md)
 - [EndpointIndigoTracerouteTracePath](docs/EndpointIndigoTracerouteTracePath.md)
 - [Endpoints](docs/Endpoints.md)
 - [EndpointsInner](docs/EndpointsInner.md)
 - [EndpointsInnerConnections](docs/EndpointsInnerConnections.md)
 - [Enterprise](docs/Enterprise.md)
 - [EnterpriseUserList](docs/EnterpriseUserList.md)
 - [EnterpriseUserListUsers](docs/EnterpriseUserListUsers.md)
 - [Error](docs/Error.md)
 - [GrantClient](docs/GrantClient.md)
 - [GrantClientScope](docs/GrantClientScope.md)
 - [GrantCode](docs/GrantCode.md)
 - [GrantCodeScope](docs/GrantCodeScope.md)
 - [GrantCodeScopeAppPermissions](docs/GrantCodeScopeAppPermissions.md)
 - [GrantMeeting](docs/GrantMeeting.md)
 - [GrantMeetingScope](docs/GrantMeetingScope.md)
 - [GrantMeetingScopeMeeting](docs/GrantMeetingScopeMeeting.md)
 - [GrantPassword](docs/GrantPassword.md)
 - [GrantPasswordScope](docs/GrantPasswordScope.md)
 - [GrantRefresh](docs/GrantRefresh.md)
 - [GrantRefreshScope](docs/GrantRefreshScope.md)
 - [GrantRequestClient](docs/GrantRequestClient.md)
 - [GrantRequestCode](docs/GrantRequestCode.md)
 - [GrantRequestMeeting](docs/GrantRequestMeeting.md)
 - [GrantRequestPassword](docs/GrantRequestPassword.md)
 - [GrantRequestRefresh](docs/GrantRequestRefresh.md)
 - [GrantRequestRevoke](docs/GrantRequestRevoke.md)
 - [GrantedApplications](docs/GrantedApplications.md)
 - [InlineResponse200](docs/InlineResponse200.md)
 - [Layout](docs/Layout.md)
 - [Meeting](docs/Meeting.md)
 - [MeetingAdvancedMeetingOptions](docs/MeetingAdvancedMeetingOptions.md)
 - [MeetingExtendedIndigo](docs/MeetingExtendedIndigo.md)
 - [MeetingHistory](docs/MeetingHistory.md)
 - [MeetingHistoryLeaderInfo](docs/MeetingHistoryLeaderInfo.md)
 - [MeetingHistoryParticipantList](docs/MeetingHistoryParticipantList.md)
 - [MeetingHistorySharing](docs/MeetingHistorySharing.md)
 - [MeetingIndigo](docs/MeetingIndigo.md)
 - [MeetingIndigoList](docs/MeetingIndigoList.md)
 - [MeetingState](docs/MeetingState.md)
 - [MeetingStateRecordinginfo](docs/MeetingStateRecordinginfo.md)
 - [Numbers](docs/Numbers.md)
 - [NumbersLabel](docs/NumbersLabel.md)
 - [NumbersNumbers](docs/NumbersNumbers.md)
 - [PairingCodeSIP](docs/PairingCodeSIP.md)
 - [PairingCodeSIPTurnservers](docs/PairingCodeSIPTurnservers.md)
 - [PairingCodeWebRTC](docs/PairingCodeWebRTC.md)
 - [Partition](docs/Partition.md)
 - [PayloadInvite](docs/PayloadInvite.md)
 - [PayloadMeetingState](docs/PayloadMeetingState.md)
 - [PayloadPairingCodeSIP](docs/PayloadPairingCodeSIP.md)
 - [PayloadPairingCodeWebRTC](docs/PayloadPairingCodeWebRTC.md)
 - [Recording](docs/Recording.md)
 - [RecordingHistory](docs/RecordingHistory.md)
 - [RecordingHistoryList](docs/RecordingHistoryList.md)
 - [RecordingRecordingChapters](docs/RecordingRecordingChapters.md)
 - [RecordingSession](docs/RecordingSession.md)
 - [RecordingSessionStartedBy](docs/RecordingSessionStartedBy.md)
 - [RecordingSummary](docs/RecordingSummary.md)
 - [Room](docs/Room.md)
 - [User](docs/User.md)
 - [UserId](docs/UserId.md)


## Documentation for Authorization

Authentication schemes defined for the API:
### access_token

- **Type**: API key
- **API key parameter name**: access_token
- **Location**: URL query string


## Recommendation

It's recommended to create an instance of `ApiClient` per thread in a multithreaded environment to avoid any potential issues.

## Author

brandon@bluejeans.com


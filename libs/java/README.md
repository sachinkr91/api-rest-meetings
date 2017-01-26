# api

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
    <artifactId>api</artifactId>
    <version>1.0.0</version>
    <scope>compile</scope>
</dependency>
```

### Gradle users

Add this dependency to your project's build file:

```groovy
compile "com.bluejeans:api:1.0.0"
```

### Others

At first generate the JAR by executing:

    mvn package

Then manually install the following JARs:

* target/api-1.0.0.jar
* target/lib/*.jar

## Getting Started

Please follow the [installation](#installation) instruction and execute the following Java code:

```java

import com.bluejeans.api.*;
import com.bluejeans.api.auth.*;
import com.bluejeans.api.model.*;
import com.bluejeans.api.rest.AnalyticsApi;

import java.io.File;
import java.util.*;

public class AnalyticsApiExample {

    public static void main(String[] args) {
        ApiClient defaultClient = Configuration.getDefaultApiClient();
        
        // Configure API key authorization: access_token
        ApiKeyAuth access_token = (ApiKeyAuth) defaultClient.getAuthentication("access_token");
        access_token.setApiKey("YOUR API KEY");
        // Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
        //access_token.setApiKeyPrefix("Token");

        AnalyticsApi apiInstance = new AnalyticsApi();
        Integer enterpriseId = 56; // Integer | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
        String filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"creation_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"creation_time\"}]"; // String | URL-encoded JSON string
        try {
            AnalyticsEndpointDistribution result = apiInstance.v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet(enterpriseId, filter);
            System.out.println(result);
        } catch (ApiException e) {
            System.err.println("Exception when calling AnalyticsApi#v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet");
            e.printStackTrace();
        }
    }
}

```

## Documentation for API Endpoints

All URIs are relative to *https://api.bluejeans.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnalyticsApi* | [**v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet**](docs/AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution | Endpoint Distribution
*AnalyticsApi* | [**v1EnterpriseEnterpriseIdIndigoAnalyticsFeedbackCommentsGet**](docs/AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoAnalyticsFeedbackCommentsGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/feedback/comments | Survey Feedback Comments
*AnalyticsApi* | [**v1EnterpriseEnterpriseIdIndigoAnalyticsMeetingsUsageGet**](docs/AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoAnalyticsMeetingsUsageGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/meetings/usage | Meeting Usage Over Time
*AnalyticsApi* | [**v1EnterpriseEnterpriseIdIndigoAnalyticsRoiRangesGet**](docs/AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoAnalyticsRoiRangesGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/roi_ranges | ROI Data
*AnalyticsApi* | [**v1EnterpriseEnterpriseIdIndigoAnalyticsUsersUsageGet**](docs/AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoAnalyticsUsersUsageGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/users/usage | Top Users
*AnalyticsApi* | [**v1EnterpriseEnterpriseIdIndigoFeedbackCountGet**](docs/AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoFeedbackCountGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/feedback/count | Survey Feedback Scores
*AuthenticationApi* | [**oauth2TokenclientPost**](docs/AuthenticationApi.md#oauth2TokenclientPost) | **POST** /oauth2/token?client | Authentication via Client Grant Type
*AuthenticationApi* | [**oauth2TokenmeetingPost**](docs/AuthenticationApi.md#oauth2TokenmeetingPost) | **POST** /oauth2/token?meeting | Authentication via Meeting Grant Type
*AuthenticationApi* | [**oauth2TokenpasswordPost**](docs/AuthenticationApi.md#oauth2TokenpasswordPost) | **POST** /oauth2/token?password | Authentication via Password Grant Type
*CommandCenterApi* | [**v1EnterpriseEnterpriseIdIndigoMeetingsGet**](docs/CommandCenterApi.md#v1EnterpriseEnterpriseIdIndigoMeetingsGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings | List Past Meetings by Enterprise
*CommandCenterApi* | [**v1EnterpriseEnterpriseIdIndigoMeetingsLiveGet**](docs/CommandCenterApi.md#v1EnterpriseEnterpriseIdIndigoMeetingsLiveGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live | Live Meetings Summary by Enterprise
*CommandCenterApi* | [**v1EnterpriseEnterpriseIdIndigoMeetingsLiveMeetingGuidEndpointsGet**](docs/CommandCenterApi.md#v1EnterpriseEnterpriseIdIndigoMeetingsLiveMeetingGuidEndpointsGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_guid}/endpoints/ | List Live Meeting Endpoints by Enterprise
*CommandCenterApi* | [**v1EnterpriseEnterpriseIdIndigoMeetingsMeetingGuidGet**](docs/CommandCenterApi.md#v1EnterpriseEnterpriseIdIndigoMeetingsMeetingGuidGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_guid} | List Meeting Endpoints &amp; Stats by Enterprise
*CommandCenterApi* | [**v1UserUserIdIndigoMeetingsGet**](docs/CommandCenterApi.md#v1UserUserIdIndigoMeetingsGet) | **GET** /v1/user/{user_id}/indigo/meetings | List Past Meetings by User
*CommandCenterApi* | [**v1UserUserIdIndigoMeetingsMeetingGuidGet**](docs/CommandCenterApi.md#v1UserUserIdIndigoMeetingsMeetingGuidGet) | **GET** /v1/user/{user_id}/indigo/meetings/{meeting_guid} | List Meeting Endpoints &amp; Stats by User
*EnterpriseApi* | [**v1EnterpriseEnterpriseIdUsersGet**](docs/EnterpriseApi.md#v1EnterpriseEnterpriseIdUsersGet) | **GET** /v1/enterprise/{enterprise_id}/users | List Enterprise Users
*EnterpriseApi* | [**v1EnterpriseEnterpriseIdUsersPost**](docs/EnterpriseApi.md#v1EnterpriseEnterpriseIdUsersPost) | **POST** /v1/enterprise/{enterprise_id}/users | Create Enterprise User
*EnterpriseApi* | [**v1EnterpriseEnterpriseIdUsersUserIdDelete**](docs/EnterpriseApi.md#v1EnterpriseEnterpriseIdUsersUserIdDelete) | **DELETE** /v1/enterprise/{enterprise_id}/users/{user_id} | Remove Enterprise User
*EnterpriseApi* | [**v1UserUserIdEnterpriseProfileGet**](docs/EnterpriseApi.md#v1UserUserIdEnterpriseProfileGet) | **GET** /v1/user/{user_id}/enterprise_profile | Get Enterprise Profile
*HistoryApi* | [**v1EnterpriseEnterpriseIdMeetingHistoryGet**](docs/HistoryApi.md#v1EnterpriseEnterpriseIdMeetingHistoryGet) | **GET** /v1/enterprise/{enterprise_id}/meeting_history | List Meetings
*HistoryApi* | [**v1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet**](docs/HistoryApi.md#v1EnterpriseEnterpriseIdMeetingHistoryMeetingGuidGet) | **GET** /v1/enterprise/{enterprise_id}/meeting_history/{meeting_guid} | List Meetings
*HistoryApi* | [**v1UserUserIdMeetingHistoryGet**](docs/HistoryApi.md#v1UserUserIdMeetingHistoryGet) | **GET** /v1/user/{user_id}/meeting_history | List Meetings
*HistoryApi* | [**v1UserUserIdMeetingHistoryMeetingGuidGet**](docs/HistoryApi.md#v1UserUserIdMeetingHistoryMeetingGuidGet) | **GET** /v1/user/{user_id}/meeting_history/{meeting_guid} | List Meetings
*HistoryApi* | [**v1UserUserIdMeetingHistoryRecordingsGet**](docs/HistoryApi.md#v1UserUserIdMeetingHistoryRecordingsGet) | **GET** /v1/user/{user_id}/meeting_history/recordings | List Meeting Recordings
*MeetingApi* | [**v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet**](docs/MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid} | Get Endpoint Information
*MeetingApi* | [**v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet**](docs/MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid}/layout | Get Current Endpoint Layout
*MeetingApi* | [**v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut**](docs/MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidLayoutPut) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid}/layout | Update Endpoint Layout
*MeetingApi* | [**v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut**](docs/MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsEndpointGuidPut) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints/{endpoint_guid} | Update Endpoint Video/Audio State
*MeetingApi* | [**v1UserUserIdLiveMeetingsMeetingIdEndpointsGet**](docs/MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdEndpointsGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/endpoints | List Meeting Endpoints
*MeetingApi* | [**v1UserUserIdLiveMeetingsMeetingIdGet**](docs/MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id} | Get Meeting State
*MeetingApi* | [**v1UserUserIdLiveMeetingsMeetingIdInvitePost**](docs/MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdInvitePost) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/invite | Send Email Invite
*MeetingApi* | [**v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost**](docs/MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdPairingCodeSIPPost) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/pairing_code/SIP | Generate SIP Pairing Code
*MeetingApi* | [**v1UserUserIdLiveMeetingsMeetingIdPut**](docs/MeetingApi.md#v1UserUserIdLiveMeetingsMeetingIdPut) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id} | Update Meeting State
*MeetingApi* | [**v1UserUserIdScheduledMeetingGet**](docs/MeetingApi.md#v1UserUserIdScheduledMeetingGet) | **GET** /v1/user/{user_id}/scheduled_meeting | Meeting
*MeetingApi* | [**v1UserUserIdScheduledMeetingMeetingIdDelete**](docs/MeetingApi.md#v1UserUserIdScheduledMeetingMeetingIdDelete) | **DELETE** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Meeting
*MeetingApi* | [**v1UserUserIdScheduledMeetingMeetingIdEmailsGet**](docs/MeetingApi.md#v1UserUserIdScheduledMeetingMeetingIdEmailsGet) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id}/emails | Meeting
*MeetingApi* | [**v1UserUserIdScheduledMeetingMeetingIdGet**](docs/MeetingApi.md#v1UserUserIdScheduledMeetingMeetingIdGet) | **GET** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Meeting
*MeetingApi* | [**v1UserUserIdScheduledMeetingMeetingIdPut**](docs/MeetingApi.md#v1UserUserIdScheduledMeetingMeetingIdPut) | **PUT** /v1/user/{user_id}/scheduled_meeting/{meeting_id} | Meeting
*MeetingApi* | [**v1UserUserIdScheduledMeetingPost**](docs/MeetingApi.md#v1UserUserIdScheduledMeetingPost) | **POST** /v1/user/{user_id}/scheduled_meeting | Meeting
*RecordingApi* | [**v1UserUserIdCmsContentIdisDownloadabletrueGet**](docs/RecordingApi.md#v1UserUserIdCmsContentIdisDownloadabletrueGet) | **GET** /v1/user/{user_id}/cms/{content_id}?isDownloadable&#x3D;true | Get Recording Download Link
*RecordingApi* | [**v1UserUserIdLiveMeetingsMeetingIdRecordingsGet**](docs/RecordingApi.md#v1UserUserIdLiveMeetingsMeetingIdRecordingsGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings | Get All Recordings for a Specified Meeting ID
*RecordingApi* | [**v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstartPost**](docs/RecordingApi.md#v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstartPost) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings?action&#x3D;start | Start Recording
*RecordingApi* | [**v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstopPut**](docs/RecordingApi.md#v1UserUserIdLiveMeetingsMeetingIdRecordingsactionstopPut) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings?action&#x3D;stop | Stop Recording
*RecordingApi* | [**v1UserUserIdLiveMeetingsMeetingIdRecordingsmeetingGuidmeetingGuidGet**](docs/RecordingApi.md#v1UserUserIdLiveMeetingsMeetingIdRecordingsmeetingGuidmeetingGuidGet) | **GET** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings?meetingGuid&#x3D;{meeting_guid} | Get All Recordings for a Specified Meeting GUID
*RecordingApi* | [**v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete**](docs/RecordingApi.md#v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_guid}/recordings | Delete All Recordings for a Specified Meeting GUID
*RecordingApi* | [**v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete**](docs/RecordingApi.md#v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/ | Delete a Specified Recording Chapter
*UserApi* | [**v1UserUserIdEnterpriseProfileGet**](docs/UserApi.md#v1UserUserIdEnterpriseProfileGet) | **GET** /v1/user/{user_id}/enterprise_profile | Get Enterprise Profile
*UserApi* | [**v1UserUserIdGet**](docs/UserApi.md#v1UserUserIdGet) | **GET** /v1/user/{user_id} | Get User Account Details
*UserApi* | [**v1UserUserIdPut**](docs/UserApi.md#v1UserUserIdPut) | **PUT** /v1/user/{user_id} | Update User Account Details
*UserApi* | [**v1UserUserIdRoomGet**](docs/UserApi.md#v1UserUserIdRoomGet) | **GET** /v1/user/{user_id}/room | Get User’s Default Meeting Settings
*UserApi* | [**v1UserUserIdRoomPut**](docs/UserApi.md#v1UserUserIdRoomPut) | **PUT** /v1/user/{user_id}/room | Update User’s Default Meeting Settings
*UserApi* | [**v1UserUserIdScheduledMeetingGet**](docs/UserApi.md#v1UserUserIdScheduledMeetingGet) | **GET** /v1/user/{user_id}/scheduled_meeting | Meeting


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
 - [Enterprise](docs/Enterprise.md)
 - [Error](docs/Error.md)
 - [Grant](docs/Grant.md)
 - [Meeting](docs/Meeting.md)
 - [Partition](docs/Partition.md)
 - [Payload](docs/Payload.md)
 - [Payload1](docs/Payload1.md)
 - [Payload2](docs/Payload2.md)
 - [Recording](docs/Recording.md)
 - [RecordingInner](docs/RecordingInner.md)
 - [Room](docs/Room.md)
 - [Scope](docs/Scope.md)
 - [User](docs/User.md)


## Documentation for Authorization

Authentication schemes defined for the API:
### access_token

- **Type**: API key
- **API key parameter name**: access_token
- **Location**: URL query string


## Recommendation

It's recommended to create an instance of `ApiClient` per thread in a multithreaded environment to avoid any potential issue.

## Author

brandon@bluejeans.com


# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 

    OpenAPI spec version: 1.0.0.mm44 (7/06/2018)
    Contact: glenn@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from __future__ import absolute_import

# import models into model package
from .analytics_endpoint_distribution import AnalyticsEndpointDistribution
from .analytics_endpoint_distribution_distribution import AnalyticsEndpointDistributionDistribution
from .analytics_endpoint_distribution_v2 import AnalyticsEndpointDistributionV2
from .analytics_endpoint_distribution_v2_distribution_new import AnalyticsEndpointDistributionV2DistributionNew
from .analytics_feedback_comments import AnalyticsFeedbackComments
from .analytics_feedback_comments_comments import AnalyticsFeedbackCommentsComments
from .analytics_feedback_scores import AnalyticsFeedbackScores
from .analytics_roi_data import AnalyticsRoiData
from .analytics_roi_data_roi_ranges import AnalyticsRoiDataRoiRanges
from .analytics_top_users import AnalyticsTopUsers
from .analytics_top_users_usage import AnalyticsTopUsersUsage
from .analytics_usage import AnalyticsUsage
from .analytics_usage_usage import AnalyticsUsageUsage
from .application import Application
from .application_list import ApplicationList
from .application_list_inner import ApplicationListInner
from .application_secret import ApplicationSecret
from .attendee import Attendee
from .content import Content
from .content_content_properties import ContentContentProperties
from .content_content_properties_levels import ContentContentPropertiesLevels
from .countries_count_rec import CountriesCountRec
from .country_endpoint import CountryEndpoint
from .dialout_pstn import DialoutPstn
from .endpoint import Endpoint
from .endpoint_indigo import EndpointIndigo
from .endpoint_indigo_endpoint_attributes1 import EndpointIndigoEndpointAttributes1
from .endpoint_indigo_location import EndpointIndigoLocation
from .endpoint_indigo_summary_stats import EndpointIndigoSummaryStats
from .endpoint_indigo_traceroute import EndpointIndigoTraceroute
from .endpoint_indigo_traceroute_trace_path import EndpointIndigoTracerouteTracePath
from .endpoint_location_summary import EndpointLocationSummary
from .endpoints import Endpoints
from .endpoints_inner import EndpointsInner
from .endpoints_inner_connections import EndpointsInnerConnections
from .enterprise import Enterprise
from .enterprise_create_user import EnterpriseCreateUser
from .enterprise_daily_users import EnterpriseDailyUsers
from .enterprise_user_list import EnterpriseUserList
from .enterprise_user_list_users import EnterpriseUserListUsers
from .enterprise_user_search import EnterpriseUserSearch
from .enterprise_users_active import EnterpriseUsersActive
from .error import Error
from .filter_high_low_ts import FilterHighLowTs
from .filter_object import FilterObject
from .filter_specification import FilterSpecification
from .filter_ts import FilterTs
from .grant_client import GrantClient
from .grant_client_scope import GrantClientScope
from .grant_code import GrantCode
from .grant_code_scope import GrantCodeScope
from .grant_code_scope_app_permissions import GrantCodeScopeAppPermissions
from .grant_meeting import GrantMeeting
from .grant_meeting_scope import GrantMeetingScope
from .grant_meeting_scope_meeting import GrantMeetingScopeMeeting
from .grant_password import GrantPassword
from .grant_password_scope import GrantPasswordScope
from .grant_refresh import GrantRefresh
from .grant_refresh_scope import GrantRefreshScope
from .grant_request_client import GrantRequestClient
from .grant_request_code import GrantRequestCode
from .grant_request_meeting import GrantRequestMeeting
from .grant_request_password import GrantRequestPassword
from .grant_request_refresh import GrantRequestRefresh
from .grant_request_revoke import GrantRequestRevoke
from .granted_applications import GrantedApplications
from .inline_response_200 import InlineResponse200
from .layout import Layout
from .meeting import Meeting
from .meeting_advanced_meeting_options import MeetingAdvancedMeetingOptions
from .meeting_advanced_meeting_options_editability import MeetingAdvancedMeetingOptionsEditability
from .meeting_deprecated import MeetingDeprecated
from .meeting_deprecated_advanced_meeting_options import MeetingDeprecatedAdvancedMeetingOptions
from .meeting_emails import MeetingEmails
from .meeting_emails_moderator import MeetingEmailsModerator
from .meeting_emails_participant import MeetingEmailsParticipant
from .meeting_emails_property import MeetingEmailsProperty
from .meeting_history import MeetingHistory
from .meeting_history_leader_info import MeetingHistoryLeaderInfo
from .meeting_history_participant_list import MeetingHistoryParticipantList
from .meeting_history_sharing import MeetingHistorySharing
from .meeting_indigo import MeetingIndigo
from .meeting_indigo_list import MeetingIndigoList
from .meeting_moderator import MeetingModerator
from .meeting_recurrence_pattern import MeetingRecurrencePattern
from .meeting_sharing import MeetingSharing
from .meeting_sharing_properties import MeetingSharingProperties
from .meeting_state import MeetingState
from .meeting_state_recordinginfo import MeetingStateRecordinginfo
from .meeting_summary_info import MeetingSummaryInfo
from .meetings_summary_rec import MeetingsSummaryRec
from .modify_sharing import ModifySharing
from .numbers import Numbers
from .numbers_label import NumbersLabel
from .numbers_numbers import NumbersNumbers
from .pairing_code_pstn import PairingCodePSTN
from .pairing_code_sip import PairingCodeSIP
from .pairing_code_sip_turnservers import PairingCodeSIPTurnservers
from .pairing_code_web_rtc import PairingCodeWebRTC
from .partition import Partition
from .payload_dialout import PayloadDialout
from .payload_invite import PayloadInvite
from .payload_meeting_state import PayloadMeetingState
from .payload_pairing_code_pstn import PayloadPairingCodePstn
from .payload_pairing_code_sip import PayloadPairingCodeSIP
from .payload_pairing_code_web_rtc import PayloadPairingCodeWebRTC
from .personal_meeting_room import PersonalMeetingRoom
from .personal_meeting_room_advanced_meeting_options import PersonalMeetingRoomAdvancedMeetingOptions
from .personal_meeting_room_advanced_meeting_options_editability import PersonalMeetingRoomAdvancedMeetingOptionsEditability
from .personal_meeting_room_attendees import PersonalMeetingRoomAttendees
from .personal_meeting_room_first import PersonalMeetingRoomFirst
from .personal_meeting_room_last import PersonalMeetingRoomLast
from .personal_meeting_room_moderator import PersonalMeetingRoomModerator
from .personal_meeting_room_next import PersonalMeetingRoomNext
from .recording import Recording
from .recording_history import RecordingHistory
from .recording_history_list import RecordingHistoryList
from .recording_recording_chapters import RecordingRecordingChapters
from .recording_session import RecordingSession
from .recording_session_started_by import RecordingSessionStartedBy
from .recording_summary import RecordingSummary
from .room import Room
from .set_sharing import SetSharing
from .start_end import StartEnd
from .user import User
from .user_deprecated import UserDeprecated
from .user_id import UserId
from .meeting_extended_indigo import MeetingExtendedIndigo

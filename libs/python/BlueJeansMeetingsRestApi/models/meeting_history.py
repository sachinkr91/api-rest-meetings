# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 

    OpenAPI spec version: 1.0.0.mm44 (7/06/2018)
    Contact: glenn@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class MeetingHistory(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """


    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'meeting_guid': 'str',
        'meeting_numeric_id': 'str',
        'title': 'str',
        'description': 'str',
        'leader_info': 'MeetingHistoryLeaderInfo',
        'user_id': 'int',
        'meeting_duration': 'int',
        'max_participant_count': 'int',
        'total_participant_minutes': 'int',
        'max_participant_minutes': 'int',
        'extra_participant_minutes': 'int',
        'isdn_endpoints': 'int',
        'total_dialout_minutes': 'int',
        'total_toll_free_minutes': 'int',
        'call_did_minutes': 'int',
        'start_time': 'int',
        'end_time': 'int',
        'meeting_status': 'str',
        'meeting_thumbnail': 'str',
        'start_time_zone': 'str',
        'processing_status': 'str',
        'concurrent_calls': 'str',
        'upload_status': 'str',
        'pstnonly': 'bool',
        'participant_list': 'list[MeetingHistoryParticipantList]'
    }

    attribute_map = {
        'meeting_guid': 'meetingGuid',
        'meeting_numeric_id': 'meetingNumericId',
        'title': 'title',
        'description': 'description',
        'leader_info': 'leaderInfo',
        'user_id': 'userId',
        'meeting_duration': 'meetingDuration',
        'max_participant_count': 'maxParticipantCount',
        'total_participant_minutes': 'totalParticipantMinutes',
        'max_participant_minutes': 'maxParticipantMinutes',
        'extra_participant_minutes': 'extraParticipantMinutes',
        'isdn_endpoints': 'isdnEndpoints',
        'total_dialout_minutes': 'totalDialoutMinutes',
        'total_toll_free_minutes': 'totalTollFreeMinutes',
        'call_did_minutes': 'callDIDMinutes',
        'start_time': 'startTime',
        'end_time': 'endTime',
        'meeting_status': 'meetingStatus',
        'meeting_thumbnail': 'meetingThumbnail',
        'start_time_zone': 'startTimeZone',
        'processing_status': 'processingStatus',
        'concurrent_calls': 'concurrentCalls',
        'upload_status': 'uploadStatus',
        'pstnonly': 'pstnonly',
        'participant_list': 'participantList'
    }

    def __init__(self, meeting_guid=None, meeting_numeric_id=None, title=None, description=None, leader_info=None, user_id=None, meeting_duration=None, max_participant_count=None, total_participant_minutes=None, max_participant_minutes=None, extra_participant_minutes=None, isdn_endpoints=None, total_dialout_minutes=None, total_toll_free_minutes=None, call_did_minutes=None, start_time=None, end_time=None, meeting_status=None, meeting_thumbnail=None, start_time_zone=None, processing_status=None, concurrent_calls=None, upload_status=None, pstnonly=None, participant_list=None):
        """
        MeetingHistory - a model defined in Swagger
        """

        self._meeting_guid = None
        self._meeting_numeric_id = None
        self._title = None
        self._description = None
        self._leader_info = None
        self._user_id = None
        self._meeting_duration = None
        self._max_participant_count = None
        self._total_participant_minutes = None
        self._max_participant_minutes = None
        self._extra_participant_minutes = None
        self._isdn_endpoints = None
        self._total_dialout_minutes = None
        self._total_toll_free_minutes = None
        self._call_did_minutes = None
        self._start_time = None
        self._end_time = None
        self._meeting_status = None
        self._meeting_thumbnail = None
        self._start_time_zone = None
        self._processing_status = None
        self._concurrent_calls = None
        self._upload_status = None
        self._pstnonly = None
        self._participant_list = None

        if meeting_guid is not None:
          self.meeting_guid = meeting_guid
        if meeting_numeric_id is not None:
          self.meeting_numeric_id = meeting_numeric_id
        if title is not None:
          self.title = title
        if description is not None:
          self.description = description
        if leader_info is not None:
          self.leader_info = leader_info
        if user_id is not None:
          self.user_id = user_id
        if meeting_duration is not None:
          self.meeting_duration = meeting_duration
        if max_participant_count is not None:
          self.max_participant_count = max_participant_count
        if total_participant_minutes is not None:
          self.total_participant_minutes = total_participant_minutes
        if max_participant_minutes is not None:
          self.max_participant_minutes = max_participant_minutes
        if extra_participant_minutes is not None:
          self.extra_participant_minutes = extra_participant_minutes
        if isdn_endpoints is not None:
          self.isdn_endpoints = isdn_endpoints
        if total_dialout_minutes is not None:
          self.total_dialout_minutes = total_dialout_minutes
        if total_toll_free_minutes is not None:
          self.total_toll_free_minutes = total_toll_free_minutes
        if call_did_minutes is not None:
          self.call_did_minutes = call_did_minutes
        if start_time is not None:
          self.start_time = start_time
        if end_time is not None:
          self.end_time = end_time
        if meeting_status is not None:
          self.meeting_status = meeting_status
        if meeting_thumbnail is not None:
          self.meeting_thumbnail = meeting_thumbnail
        if start_time_zone is not None:
          self.start_time_zone = start_time_zone
        if processing_status is not None:
          self.processing_status = processing_status
        if concurrent_calls is not None:
          self.concurrent_calls = concurrent_calls
        if upload_status is not None:
          self.upload_status = upload_status
        if pstnonly is not None:
          self.pstnonly = pstnonly
        if participant_list is not None:
          self.participant_list = participant_list

    @property
    def meeting_guid(self):
        """
        Gets the meeting_guid of this MeetingHistory.

        :return: The meeting_guid of this MeetingHistory.
        :rtype: str
        """
        return self._meeting_guid

    @meeting_guid.setter
    def meeting_guid(self, meeting_guid):
        """
        Sets the meeting_guid of this MeetingHistory.

        :param meeting_guid: The meeting_guid of this MeetingHistory.
        :type: str
        """

        self._meeting_guid = meeting_guid

    @property
    def meeting_numeric_id(self):
        """
        Gets the meeting_numeric_id of this MeetingHistory.

        :return: The meeting_numeric_id of this MeetingHistory.
        :rtype: str
        """
        return self._meeting_numeric_id

    @meeting_numeric_id.setter
    def meeting_numeric_id(self, meeting_numeric_id):
        """
        Sets the meeting_numeric_id of this MeetingHistory.

        :param meeting_numeric_id: The meeting_numeric_id of this MeetingHistory.
        :type: str
        """

        self._meeting_numeric_id = meeting_numeric_id

    @property
    def title(self):
        """
        Gets the title of this MeetingHistory.

        :return: The title of this MeetingHistory.
        :rtype: str
        """
        return self._title

    @title.setter
    def title(self, title):
        """
        Sets the title of this MeetingHistory.

        :param title: The title of this MeetingHistory.
        :type: str
        """

        self._title = title

    @property
    def description(self):
        """
        Gets the description of this MeetingHistory.

        :return: The description of this MeetingHistory.
        :rtype: str
        """
        return self._description

    @description.setter
    def description(self, description):
        """
        Sets the description of this MeetingHistory.

        :param description: The description of this MeetingHistory.
        :type: str
        """

        self._description = description

    @property
    def leader_info(self):
        """
        Gets the leader_info of this MeetingHistory.

        :return: The leader_info of this MeetingHistory.
        :rtype: MeetingHistoryLeaderInfo
        """
        return self._leader_info

    @leader_info.setter
    def leader_info(self, leader_info):
        """
        Sets the leader_info of this MeetingHistory.

        :param leader_info: The leader_info of this MeetingHistory.
        :type: MeetingHistoryLeaderInfo
        """

        self._leader_info = leader_info

    @property
    def user_id(self):
        """
        Gets the user_id of this MeetingHistory.

        :return: The user_id of this MeetingHistory.
        :rtype: int
        """
        return self._user_id

    @user_id.setter
    def user_id(self, user_id):
        """
        Sets the user_id of this MeetingHistory.

        :param user_id: The user_id of this MeetingHistory.
        :type: int
        """

        self._user_id = user_id

    @property
    def meeting_duration(self):
        """
        Gets the meeting_duration of this MeetingHistory.

        :return: The meeting_duration of this MeetingHistory.
        :rtype: int
        """
        return self._meeting_duration

    @meeting_duration.setter
    def meeting_duration(self, meeting_duration):
        """
        Sets the meeting_duration of this MeetingHistory.

        :param meeting_duration: The meeting_duration of this MeetingHistory.
        :type: int
        """

        self._meeting_duration = meeting_duration

    @property
    def max_participant_count(self):
        """
        Gets the max_participant_count of this MeetingHistory.

        :return: The max_participant_count of this MeetingHistory.
        :rtype: int
        """
        return self._max_participant_count

    @max_participant_count.setter
    def max_participant_count(self, max_participant_count):
        """
        Sets the max_participant_count of this MeetingHistory.

        :param max_participant_count: The max_participant_count of this MeetingHistory.
        :type: int
        """

        self._max_participant_count = max_participant_count

    @property
    def total_participant_minutes(self):
        """
        Gets the total_participant_minutes of this MeetingHistory.

        :return: The total_participant_minutes of this MeetingHistory.
        :rtype: int
        """
        return self._total_participant_minutes

    @total_participant_minutes.setter
    def total_participant_minutes(self, total_participant_minutes):
        """
        Sets the total_participant_minutes of this MeetingHistory.

        :param total_participant_minutes: The total_participant_minutes of this MeetingHistory.
        :type: int
        """

        self._total_participant_minutes = total_participant_minutes

    @property
    def max_participant_minutes(self):
        """
        Gets the max_participant_minutes of this MeetingHistory.

        :return: The max_participant_minutes of this MeetingHistory.
        :rtype: int
        """
        return self._max_participant_minutes

    @max_participant_minutes.setter
    def max_participant_minutes(self, max_participant_minutes):
        """
        Sets the max_participant_minutes of this MeetingHistory.

        :param max_participant_minutes: The max_participant_minutes of this MeetingHistory.
        :type: int
        """

        self._max_participant_minutes = max_participant_minutes

    @property
    def extra_participant_minutes(self):
        """
        Gets the extra_participant_minutes of this MeetingHistory.

        :return: The extra_participant_minutes of this MeetingHistory.
        :rtype: int
        """
        return self._extra_participant_minutes

    @extra_participant_minutes.setter
    def extra_participant_minutes(self, extra_participant_minutes):
        """
        Sets the extra_participant_minutes of this MeetingHistory.

        :param extra_participant_minutes: The extra_participant_minutes of this MeetingHistory.
        :type: int
        """

        self._extra_participant_minutes = extra_participant_minutes

    @property
    def isdn_endpoints(self):
        """
        Gets the isdn_endpoints of this MeetingHistory.

        :return: The isdn_endpoints of this MeetingHistory.
        :rtype: int
        """
        return self._isdn_endpoints

    @isdn_endpoints.setter
    def isdn_endpoints(self, isdn_endpoints):
        """
        Sets the isdn_endpoints of this MeetingHistory.

        :param isdn_endpoints: The isdn_endpoints of this MeetingHistory.
        :type: int
        """

        self._isdn_endpoints = isdn_endpoints

    @property
    def total_dialout_minutes(self):
        """
        Gets the total_dialout_minutes of this MeetingHistory.

        :return: The total_dialout_minutes of this MeetingHistory.
        :rtype: int
        """
        return self._total_dialout_minutes

    @total_dialout_minutes.setter
    def total_dialout_minutes(self, total_dialout_minutes):
        """
        Sets the total_dialout_minutes of this MeetingHistory.

        :param total_dialout_minutes: The total_dialout_minutes of this MeetingHistory.
        :type: int
        """

        self._total_dialout_minutes = total_dialout_minutes

    @property
    def total_toll_free_minutes(self):
        """
        Gets the total_toll_free_minutes of this MeetingHistory.

        :return: The total_toll_free_minutes of this MeetingHistory.
        :rtype: int
        """
        return self._total_toll_free_minutes

    @total_toll_free_minutes.setter
    def total_toll_free_minutes(self, total_toll_free_minutes):
        """
        Sets the total_toll_free_minutes of this MeetingHistory.

        :param total_toll_free_minutes: The total_toll_free_minutes of this MeetingHistory.
        :type: int
        """

        self._total_toll_free_minutes = total_toll_free_minutes

    @property
    def call_did_minutes(self):
        """
        Gets the call_did_minutes of this MeetingHistory.

        :return: The call_did_minutes of this MeetingHistory.
        :rtype: int
        """
        return self._call_did_minutes

    @call_did_minutes.setter
    def call_did_minutes(self, call_did_minutes):
        """
        Sets the call_did_minutes of this MeetingHistory.

        :param call_did_minutes: The call_did_minutes of this MeetingHistory.
        :type: int
        """

        self._call_did_minutes = call_did_minutes

    @property
    def start_time(self):
        """
        Gets the start_time of this MeetingHistory.

        :return: The start_time of this MeetingHistory.
        :rtype: int
        """
        return self._start_time

    @start_time.setter
    def start_time(self, start_time):
        """
        Sets the start_time of this MeetingHistory.

        :param start_time: The start_time of this MeetingHistory.
        :type: int
        """

        self._start_time = start_time

    @property
    def end_time(self):
        """
        Gets the end_time of this MeetingHistory.

        :return: The end_time of this MeetingHistory.
        :rtype: int
        """
        return self._end_time

    @end_time.setter
    def end_time(self, end_time):
        """
        Sets the end_time of this MeetingHistory.

        :param end_time: The end_time of this MeetingHistory.
        :type: int
        """

        self._end_time = end_time

    @property
    def meeting_status(self):
        """
        Gets the meeting_status of this MeetingHistory.

        :return: The meeting_status of this MeetingHistory.
        :rtype: str
        """
        return self._meeting_status

    @meeting_status.setter
    def meeting_status(self, meeting_status):
        """
        Sets the meeting_status of this MeetingHistory.

        :param meeting_status: The meeting_status of this MeetingHistory.
        :type: str
        """
        allowed_values = ["Complete"]
        if meeting_status not in allowed_values:
            raise ValueError(
                "Invalid value for `meeting_status` ({0}), must be one of {1}"
                .format(meeting_status, allowed_values)
            )

        self._meeting_status = meeting_status

    @property
    def meeting_thumbnail(self):
        """
        Gets the meeting_thumbnail of this MeetingHistory.

        :return: The meeting_thumbnail of this MeetingHistory.
        :rtype: str
        """
        return self._meeting_thumbnail

    @meeting_thumbnail.setter
    def meeting_thumbnail(self, meeting_thumbnail):
        """
        Sets the meeting_thumbnail of this MeetingHistory.

        :param meeting_thumbnail: The meeting_thumbnail of this MeetingHistory.
        :type: str
        """

        self._meeting_thumbnail = meeting_thumbnail

    @property
    def start_time_zone(self):
        """
        Gets the start_time_zone of this MeetingHistory.

        :return: The start_time_zone of this MeetingHistory.
        :rtype: str
        """
        return self._start_time_zone

    @start_time_zone.setter
    def start_time_zone(self, start_time_zone):
        """
        Sets the start_time_zone of this MeetingHistory.

        :param start_time_zone: The start_time_zone of this MeetingHistory.
        :type: str
        """

        self._start_time_zone = start_time_zone

    @property
    def processing_status(self):
        """
        Gets the processing_status of this MeetingHistory.

        :return: The processing_status of this MeetingHistory.
        :rtype: str
        """
        return self._processing_status

    @processing_status.setter
    def processing_status(self, processing_status):
        """
        Sets the processing_status of this MeetingHistory.

        :param processing_status: The processing_status of this MeetingHistory.
        :type: str
        """
        allowed_values = ["PROCESSED"]
        if processing_status not in allowed_values:
            raise ValueError(
                "Invalid value for `processing_status` ({0}), must be one of {1}"
                .format(processing_status, allowed_values)
            )

        self._processing_status = processing_status

    @property
    def concurrent_calls(self):
        """
        Gets the concurrent_calls of this MeetingHistory.

        :return: The concurrent_calls of this MeetingHistory.
        :rtype: str
        """
        return self._concurrent_calls

    @concurrent_calls.setter
    def concurrent_calls(self, concurrent_calls):
        """
        Sets the concurrent_calls of this MeetingHistory.

        :param concurrent_calls: The concurrent_calls of this MeetingHistory.
        :type: str
        """

        self._concurrent_calls = concurrent_calls

    @property
    def upload_status(self):
        """
        Gets the upload_status of this MeetingHistory.

        :return: The upload_status of this MeetingHistory.
        :rtype: str
        """
        return self._upload_status

    @upload_status.setter
    def upload_status(self, upload_status):
        """
        Sets the upload_status of this MeetingHistory.

        :param upload_status: The upload_status of this MeetingHistory.
        :type: str
        """

        self._upload_status = upload_status

    @property
    def pstnonly(self):
        """
        Gets the pstnonly of this MeetingHistory.

        :return: The pstnonly of this MeetingHistory.
        :rtype: bool
        """
        return self._pstnonly

    @pstnonly.setter
    def pstnonly(self, pstnonly):
        """
        Sets the pstnonly of this MeetingHistory.

        :param pstnonly: The pstnonly of this MeetingHistory.
        :type: bool
        """

        self._pstnonly = pstnonly

    @property
    def participant_list(self):
        """
        Gets the participant_list of this MeetingHistory.

        :return: The participant_list of this MeetingHistory.
        :rtype: list[MeetingHistoryParticipantList]
        """
        return self._participant_list

    @participant_list.setter
    def participant_list(self, participant_list):
        """
        Sets the participant_list of this MeetingHistory.

        :param participant_list: The participant_list of this MeetingHistory.
        :type: list[MeetingHistoryParticipantList]
        """

        self._participant_list = participant_list

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        if not isinstance(other, MeetingHistory):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

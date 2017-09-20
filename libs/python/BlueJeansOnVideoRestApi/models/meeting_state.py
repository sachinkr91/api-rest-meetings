# coding: utf-8

"""
    BlueJeans onVideo REST API

     ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by an access code.  THe access code can ensure security of participants who can join, and also designate user(s) who need an ability to moderate a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>, and may be assigned a moderator passcode allowing designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About onVideo Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 

    OpenAPI spec version: 1.0.0
    Contact: brandon@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class MeetingState(object):
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
        'meeting_id': 'str',
        'meeting_guid': 'str',
        'meeting_state': 'str',
        'status': 'str',
        'is_content_sharing_active': 'bool',
        'bridged': 'bool',
        'locked': 'bool',
        'audio_mute_on_entry': 'bool',
        'video_mute_on_entry': 'bool',
        'moderator_less': 'bool',
        'title': 'str',
        'chat_enabled': 'bool',
        'pinned_endpoint_guid': 'str',
        'audio_endpoint_count': 'int',
        'video_endpoint_count': 'int',
        'recording_enabled': 'bool',
        'participant_web_join_url': 'str',
        'is_large_meeting': 'str',
        'features': 'list[str]',
        'delayed_meeting_end_time': 'int',
        'sm_streams': 'str',
        'inactive_meeting_status': 'str',
        'meeting_marked_for_delayed_termination': 'bool',
        'recordinginfo': 'MeetingStateRecordinginfo'
    }

    attribute_map = {
        'meeting_id': 'meetingId',
        'meeting_guid': 'meetingGuid',
        'meeting_state': 'meetingState',
        'status': 'status',
        'is_content_sharing_active': 'isContentSharingActive',
        'bridged': 'bridged',
        'locked': 'locked',
        'audio_mute_on_entry': 'audioMuteOnEntry',
        'video_mute_on_entry': 'videoMuteOnEntry',
        'moderator_less': 'moderatorLess',
        'title': 'title',
        'chat_enabled': 'chatEnabled',
        'pinned_endpoint_guid': 'pinnedEndpointGuid',
        'audio_endpoint_count': 'audioEndpointCount',
        'video_endpoint_count': 'videoEndpointCount',
        'recording_enabled': 'recordingEnabled',
        'participant_web_join_url': 'participantWebJoinURL',
        'is_large_meeting': 'isLargeMeeting',
        'features': 'features',
        'delayed_meeting_end_time': 'delayedMeetingEndTime',
        'sm_streams': 'smStreams',
        'inactive_meeting_status': 'inactiveMeetingStatus',
        'meeting_marked_for_delayed_termination': 'meetingMarkedForDelayedTermination',
        'recordinginfo': 'recordinginfo'
    }

    def __init__(self, meeting_id=None, meeting_guid=None, meeting_state=None, status=None, is_content_sharing_active=None, bridged=None, locked=None, audio_mute_on_entry=None, video_mute_on_entry=None, moderator_less=None, title=None, chat_enabled=None, pinned_endpoint_guid=None, audio_endpoint_count=None, video_endpoint_count=None, recording_enabled=None, participant_web_join_url=None, is_large_meeting=None, features=None, delayed_meeting_end_time=None, sm_streams=None, inactive_meeting_status=None, meeting_marked_for_delayed_termination=None, recordinginfo=None):
        """
        MeetingState - a model defined in Swagger
        """

        self._meeting_id = None
        self._meeting_guid = None
        self._meeting_state = None
        self._status = None
        self._is_content_sharing_active = None
        self._bridged = None
        self._locked = None
        self._audio_mute_on_entry = None
        self._video_mute_on_entry = None
        self._moderator_less = None
        self._title = None
        self._chat_enabled = None
        self._pinned_endpoint_guid = None
        self._audio_endpoint_count = None
        self._video_endpoint_count = None
        self._recording_enabled = None
        self._participant_web_join_url = None
        self._is_large_meeting = None
        self._features = None
        self._delayed_meeting_end_time = None
        self._sm_streams = None
        self._inactive_meeting_status = None
        self._meeting_marked_for_delayed_termination = None
        self._recordinginfo = None

        if meeting_id is not None:
          self.meeting_id = meeting_id
        if meeting_guid is not None:
          self.meeting_guid = meeting_guid
        if meeting_state is not None:
          self.meeting_state = meeting_state
        if status is not None:
          self.status = status
        if is_content_sharing_active is not None:
          self.is_content_sharing_active = is_content_sharing_active
        if bridged is not None:
          self.bridged = bridged
        if locked is not None:
          self.locked = locked
        if audio_mute_on_entry is not None:
          self.audio_mute_on_entry = audio_mute_on_entry
        if video_mute_on_entry is not None:
          self.video_mute_on_entry = video_mute_on_entry
        if moderator_less is not None:
          self.moderator_less = moderator_less
        if title is not None:
          self.title = title
        if chat_enabled is not None:
          self.chat_enabled = chat_enabled
        if pinned_endpoint_guid is not None:
          self.pinned_endpoint_guid = pinned_endpoint_guid
        if audio_endpoint_count is not None:
          self.audio_endpoint_count = audio_endpoint_count
        if video_endpoint_count is not None:
          self.video_endpoint_count = video_endpoint_count
        if recording_enabled is not None:
          self.recording_enabled = recording_enabled
        if participant_web_join_url is not None:
          self.participant_web_join_url = participant_web_join_url
        if is_large_meeting is not None:
          self.is_large_meeting = is_large_meeting
        if features is not None:
          self.features = features
        if delayed_meeting_end_time is not None:
          self.delayed_meeting_end_time = delayed_meeting_end_time
        if sm_streams is not None:
          self.sm_streams = sm_streams
        if inactive_meeting_status is not None:
          self.inactive_meeting_status = inactive_meeting_status
        if meeting_marked_for_delayed_termination is not None:
          self.meeting_marked_for_delayed_termination = meeting_marked_for_delayed_termination
        if recordinginfo is not None:
          self.recordinginfo = recordinginfo

    @property
    def meeting_id(self):
        """
        Gets the meeting_id of this MeetingState.

        :return: The meeting_id of this MeetingState.
        :rtype: str
        """
        return self._meeting_id

    @meeting_id.setter
    def meeting_id(self, meeting_id):
        """
        Sets the meeting_id of this MeetingState.

        :param meeting_id: The meeting_id of this MeetingState.
        :type: str
        """

        self._meeting_id = meeting_id

    @property
    def meeting_guid(self):
        """
        Gets the meeting_guid of this MeetingState.

        :return: The meeting_guid of this MeetingState.
        :rtype: str
        """
        return self._meeting_guid

    @meeting_guid.setter
    def meeting_guid(self, meeting_guid):
        """
        Sets the meeting_guid of this MeetingState.

        :param meeting_guid: The meeting_guid of this MeetingState.
        :type: str
        """

        self._meeting_guid = meeting_guid

    @property
    def meeting_state(self):
        """
        Gets the meeting_state of this MeetingState.

        :return: The meeting_state of this MeetingState.
        :rtype: str
        """
        return self._meeting_state

    @meeting_state.setter
    def meeting_state(self, meeting_state):
        """
        Sets the meeting_state of this MeetingState.

        :param meeting_state: The meeting_state of this MeetingState.
        :type: str
        """
        allowed_values = ["MeetingStarted"]
        if meeting_state not in allowed_values:
            raise ValueError(
                "Invalid value for `meeting_state` ({0}), must be one of {1}"
                .format(meeting_state, allowed_values)
            )

        self._meeting_state = meeting_state

    @property
    def status(self):
        """
        Gets the status of this MeetingState.

        :return: The status of this MeetingState.
        :rtype: str
        """
        return self._status

    @status.setter
    def status(self, status):
        """
        Sets the status of this MeetingState.

        :param status: The status of this MeetingState.
        :type: str
        """
        allowed_values = ["active"]
        if status not in allowed_values:
            raise ValueError(
                "Invalid value for `status` ({0}), must be one of {1}"
                .format(status, allowed_values)
            )

        self._status = status

    @property
    def is_content_sharing_active(self):
        """
        Gets the is_content_sharing_active of this MeetingState.

        :return: The is_content_sharing_active of this MeetingState.
        :rtype: bool
        """
        return self._is_content_sharing_active

    @is_content_sharing_active.setter
    def is_content_sharing_active(self, is_content_sharing_active):
        """
        Sets the is_content_sharing_active of this MeetingState.

        :param is_content_sharing_active: The is_content_sharing_active of this MeetingState.
        :type: bool
        """

        self._is_content_sharing_active = is_content_sharing_active

    @property
    def bridged(self):
        """
        Gets the bridged of this MeetingState.

        :return: The bridged of this MeetingState.
        :rtype: bool
        """
        return self._bridged

    @bridged.setter
    def bridged(self, bridged):
        """
        Sets the bridged of this MeetingState.

        :param bridged: The bridged of this MeetingState.
        :type: bool
        """

        self._bridged = bridged

    @property
    def locked(self):
        """
        Gets the locked of this MeetingState.

        :return: The locked of this MeetingState.
        :rtype: bool
        """
        return self._locked

    @locked.setter
    def locked(self, locked):
        """
        Sets the locked of this MeetingState.

        :param locked: The locked of this MeetingState.
        :type: bool
        """

        self._locked = locked

    @property
    def audio_mute_on_entry(self):
        """
        Gets the audio_mute_on_entry of this MeetingState.

        :return: The audio_mute_on_entry of this MeetingState.
        :rtype: bool
        """
        return self._audio_mute_on_entry

    @audio_mute_on_entry.setter
    def audio_mute_on_entry(self, audio_mute_on_entry):
        """
        Sets the audio_mute_on_entry of this MeetingState.

        :param audio_mute_on_entry: The audio_mute_on_entry of this MeetingState.
        :type: bool
        """

        self._audio_mute_on_entry = audio_mute_on_entry

    @property
    def video_mute_on_entry(self):
        """
        Gets the video_mute_on_entry of this MeetingState.

        :return: The video_mute_on_entry of this MeetingState.
        :rtype: bool
        """
        return self._video_mute_on_entry

    @video_mute_on_entry.setter
    def video_mute_on_entry(self, video_mute_on_entry):
        """
        Sets the video_mute_on_entry of this MeetingState.

        :param video_mute_on_entry: The video_mute_on_entry of this MeetingState.
        :type: bool
        """

        self._video_mute_on_entry = video_mute_on_entry

    @property
    def moderator_less(self):
        """
        Gets the moderator_less of this MeetingState.

        :return: The moderator_less of this MeetingState.
        :rtype: bool
        """
        return self._moderator_less

    @moderator_less.setter
    def moderator_less(self, moderator_less):
        """
        Sets the moderator_less of this MeetingState.

        :param moderator_less: The moderator_less of this MeetingState.
        :type: bool
        """

        self._moderator_less = moderator_less

    @property
    def title(self):
        """
        Gets the title of this MeetingState.

        :return: The title of this MeetingState.
        :rtype: str
        """
        return self._title

    @title.setter
    def title(self, title):
        """
        Sets the title of this MeetingState.

        :param title: The title of this MeetingState.
        :type: str
        """

        self._title = title

    @property
    def chat_enabled(self):
        """
        Gets the chat_enabled of this MeetingState.

        :return: The chat_enabled of this MeetingState.
        :rtype: bool
        """
        return self._chat_enabled

    @chat_enabled.setter
    def chat_enabled(self, chat_enabled):
        """
        Sets the chat_enabled of this MeetingState.

        :param chat_enabled: The chat_enabled of this MeetingState.
        :type: bool
        """

        self._chat_enabled = chat_enabled

    @property
    def pinned_endpoint_guid(self):
        """
        Gets the pinned_endpoint_guid of this MeetingState.

        :return: The pinned_endpoint_guid of this MeetingState.
        :rtype: str
        """
        return self._pinned_endpoint_guid

    @pinned_endpoint_guid.setter
    def pinned_endpoint_guid(self, pinned_endpoint_guid):
        """
        Sets the pinned_endpoint_guid of this MeetingState.

        :param pinned_endpoint_guid: The pinned_endpoint_guid of this MeetingState.
        :type: str
        """

        self._pinned_endpoint_guid = pinned_endpoint_guid

    @property
    def audio_endpoint_count(self):
        """
        Gets the audio_endpoint_count of this MeetingState.

        :return: The audio_endpoint_count of this MeetingState.
        :rtype: int
        """
        return self._audio_endpoint_count

    @audio_endpoint_count.setter
    def audio_endpoint_count(self, audio_endpoint_count):
        """
        Sets the audio_endpoint_count of this MeetingState.

        :param audio_endpoint_count: The audio_endpoint_count of this MeetingState.
        :type: int
        """

        self._audio_endpoint_count = audio_endpoint_count

    @property
    def video_endpoint_count(self):
        """
        Gets the video_endpoint_count of this MeetingState.

        :return: The video_endpoint_count of this MeetingState.
        :rtype: int
        """
        return self._video_endpoint_count

    @video_endpoint_count.setter
    def video_endpoint_count(self, video_endpoint_count):
        """
        Sets the video_endpoint_count of this MeetingState.

        :param video_endpoint_count: The video_endpoint_count of this MeetingState.
        :type: int
        """

        self._video_endpoint_count = video_endpoint_count

    @property
    def recording_enabled(self):
        """
        Gets the recording_enabled of this MeetingState.

        :return: The recording_enabled of this MeetingState.
        :rtype: bool
        """
        return self._recording_enabled

    @recording_enabled.setter
    def recording_enabled(self, recording_enabled):
        """
        Sets the recording_enabled of this MeetingState.

        :param recording_enabled: The recording_enabled of this MeetingState.
        :type: bool
        """

        self._recording_enabled = recording_enabled

    @property
    def participant_web_join_url(self):
        """
        Gets the participant_web_join_url of this MeetingState.

        :return: The participant_web_join_url of this MeetingState.
        :rtype: str
        """
        return self._participant_web_join_url

    @participant_web_join_url.setter
    def participant_web_join_url(self, participant_web_join_url):
        """
        Sets the participant_web_join_url of this MeetingState.

        :param participant_web_join_url: The participant_web_join_url of this MeetingState.
        :type: str
        """

        self._participant_web_join_url = participant_web_join_url

    @property
    def is_large_meeting(self):
        """
        Gets the is_large_meeting of this MeetingState.

        :return: The is_large_meeting of this MeetingState.
        :rtype: str
        """
        return self._is_large_meeting

    @is_large_meeting.setter
    def is_large_meeting(self, is_large_meeting):
        """
        Sets the is_large_meeting of this MeetingState.

        :param is_large_meeting: The is_large_meeting of this MeetingState.
        :type: str
        """

        self._is_large_meeting = is_large_meeting

    @property
    def features(self):
        """
        Gets the features of this MeetingState.

        :return: The features of this MeetingState.
        :rtype: list[str]
        """
        return self._features

    @features.setter
    def features(self, features):
        """
        Sets the features of this MeetingState.

        :param features: The features of this MeetingState.
        :type: list[str]
        """

        self._features = features

    @property
    def delayed_meeting_end_time(self):
        """
        Gets the delayed_meeting_end_time of this MeetingState.

        :return: The delayed_meeting_end_time of this MeetingState.
        :rtype: int
        """
        return self._delayed_meeting_end_time

    @delayed_meeting_end_time.setter
    def delayed_meeting_end_time(self, delayed_meeting_end_time):
        """
        Sets the delayed_meeting_end_time of this MeetingState.

        :param delayed_meeting_end_time: The delayed_meeting_end_time of this MeetingState.
        :type: int
        """

        self._delayed_meeting_end_time = delayed_meeting_end_time

    @property
    def sm_streams(self):
        """
        Gets the sm_streams of this MeetingState.

        :return: The sm_streams of this MeetingState.
        :rtype: str
        """
        return self._sm_streams

    @sm_streams.setter
    def sm_streams(self, sm_streams):
        """
        Sets the sm_streams of this MeetingState.

        :param sm_streams: The sm_streams of this MeetingState.
        :type: str
        """

        self._sm_streams = sm_streams

    @property
    def inactive_meeting_status(self):
        """
        Gets the inactive_meeting_status of this MeetingState.

        :return: The inactive_meeting_status of this MeetingState.
        :rtype: str
        """
        return self._inactive_meeting_status

    @inactive_meeting_status.setter
    def inactive_meeting_status(self, inactive_meeting_status):
        """
        Sets the inactive_meeting_status of this MeetingState.

        :param inactive_meeting_status: The inactive_meeting_status of this MeetingState.
        :type: str
        """

        self._inactive_meeting_status = inactive_meeting_status

    @property
    def meeting_marked_for_delayed_termination(self):
        """
        Gets the meeting_marked_for_delayed_termination of this MeetingState.

        :return: The meeting_marked_for_delayed_termination of this MeetingState.
        :rtype: bool
        """
        return self._meeting_marked_for_delayed_termination

    @meeting_marked_for_delayed_termination.setter
    def meeting_marked_for_delayed_termination(self, meeting_marked_for_delayed_termination):
        """
        Sets the meeting_marked_for_delayed_termination of this MeetingState.

        :param meeting_marked_for_delayed_termination: The meeting_marked_for_delayed_termination of this MeetingState.
        :type: bool
        """

        self._meeting_marked_for_delayed_termination = meeting_marked_for_delayed_termination

    @property
    def recordinginfo(self):
        """
        Gets the recordinginfo of this MeetingState.

        :return: The recordinginfo of this MeetingState.
        :rtype: MeetingStateRecordinginfo
        """
        return self._recordinginfo

    @recordinginfo.setter
    def recordinginfo(self, recordinginfo):
        """
        Sets the recordinginfo of this MeetingState.

        :param recordinginfo: The recordinginfo of this MeetingState.
        :type: MeetingStateRecordinginfo
        """

        self._recordinginfo = recordinginfo

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
        if not isinstance(other, MeetingState):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

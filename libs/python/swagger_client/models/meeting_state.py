# coding: utf-8

"""
    BlueJeans onVideo REST API

    _Video That Works Where You Do, from the world's leader in cloud video communication._ # Authentication Each API request that is sent to BlueJeans requires an access token, which is obtained through the BlueJeans Authentication API. There are several methods (grant types) for obtaining an access token, which follow the OAuth2.0 specification. ## Grant Types * Authorization Code Grant – This grant type is used in an authentication flow commonly referred to as \"three-legged OAuth\". The user authenticates via a BlueJeans page, which provides an authorization code. This code, along with a few other elements, can be used to obtain an access code. * Password Credentials Grant – This grant type is used in a two-legged OAuth flow. Username and password are sent to retrieve an access code. * Client Credentials Grant – This grant type is used in a two-legged OAuth flow.  ## Access & Permissions The access level that is associated with each access token is referred to as the scope. There are three basic levels of access that BlueJeans allows, which affect the level of scope.  Three access levels exist within the Blue Jeans service today. * Meeting-level – Authentication takes place using a meeting ID and passcode, and the scope is limited to APIs that relate to the individual meeting. * User-level – Authentication either takes place via three-legged OAuth, or else a direct authorization token request containing a username or password. Access level depends on the requested scope permissions. * App-level – An application is provisioned either by BlueJeans personnel, or within the BlueJeans Enterprise Admin interface. When provisioning an app, a client key and secret are provided, which is then used to obtain an access token, via the BlueJeans Authentication API. The scope that is associated with the token will provide access to an entire enterprise and all of its users.  All endpoints in this document that require Enterprise Admin access will be marked as such. ## Testing In order to make effective use of this page, you will first use one of the authentication methods to obtain an access token. Once the token is given, use the Authorize button up in the header to store the token. Each BlueJeans API called after that will use the access token provided. 

    OpenAPI spec version: 1.0.0
    Contact: brandon@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
"""

from pprint import pformat
from six import iteritems
import re


class MeetingState(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self, meeting_id=None, meeting_guid=None, meeting_state=None, status=None, is_content_sharing_active=None, bridged=None, locked=None, audio_mute_on_entry=None, video_mute_on_entry=None, moderator_less=None, title=None, chat_enabled=None, pinned_endpoint_guid=None, audio_endpoint_count=None, video_endpoint_count=None, recording_enabled=None, participant_web_join_url=None, is_large_meeting=None, features=None, delayed_meeting_end_time=None, sm_streams=None, inactive_meeting_status=None, meeting_marked_for_delayed_termination=None, recordinginfo=None):
        """
        MeetingState - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
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

        self.attribute_map = {
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

        self._meeting_id = meeting_id
        self._meeting_guid = meeting_guid
        self._meeting_state = meeting_state
        self._status = status
        self._is_content_sharing_active = is_content_sharing_active
        self._bridged = bridged
        self._locked = locked
        self._audio_mute_on_entry = audio_mute_on_entry
        self._video_mute_on_entry = video_mute_on_entry
        self._moderator_less = moderator_less
        self._title = title
        self._chat_enabled = chat_enabled
        self._pinned_endpoint_guid = pinned_endpoint_guid
        self._audio_endpoint_count = audio_endpoint_count
        self._video_endpoint_count = video_endpoint_count
        self._recording_enabled = recording_enabled
        self._participant_web_join_url = participant_web_join_url
        self._is_large_meeting = is_large_meeting
        self._features = features
        self._delayed_meeting_end_time = delayed_meeting_end_time
        self._sm_streams = sm_streams
        self._inactive_meeting_status = inactive_meeting_status
        self._meeting_marked_for_delayed_termination = meeting_marked_for_delayed_termination
        self._recordinginfo = recordinginfo

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
        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

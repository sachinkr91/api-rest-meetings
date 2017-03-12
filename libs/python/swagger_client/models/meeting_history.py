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


class MeetingHistory(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self, meeting_guid=None, meeting_numeric_id=None, title=None, description=None, leader_info=None, user_id=None, meeting_duration=None, max_participant_count=None, total_participant_minutes=None, max_participant_minutes=None, extra_participant_minutes=None, isdn_endpoints=None, total_dialout_minutes=None, total_toll_free_minutes=None, call_did_minutes=None, start_time=None, end_time=None, meeting_status=None, meeting_thumbnail=None, start_time_zone=None, processing_status=None, concurrent_calls=None, upload_status=None, pstnonly=None, participant_list=None):
        """
        MeetingHistory - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
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

        self.attribute_map = {
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

        self._meeting_guid = meeting_guid
        self._meeting_numeric_id = meeting_numeric_id
        self._title = title
        self._description = description
        self._leader_info = leader_info
        self._user_id = user_id
        self._meeting_duration = meeting_duration
        self._max_participant_count = max_participant_count
        self._total_participant_minutes = total_participant_minutes
        self._max_participant_minutes = max_participant_minutes
        self._extra_participant_minutes = extra_participant_minutes
        self._isdn_endpoints = isdn_endpoints
        self._total_dialout_minutes = total_dialout_minutes
        self._total_toll_free_minutes = total_toll_free_minutes
        self._call_did_minutes = call_did_minutes
        self._start_time = start_time
        self._end_time = end_time
        self._meeting_status = meeting_status
        self._meeting_thumbnail = meeting_thumbnail
        self._start_time_zone = start_time_zone
        self._processing_status = processing_status
        self._concurrent_calls = concurrent_calls
        self._upload_status = upload_status
        self._pstnonly = pstnonly
        self._participant_list = participant_list

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
        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

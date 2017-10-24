# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 

    OpenAPI spec version: 1.0.0
    Contact: brandon@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class RecordingSummary(object):
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
        'recording_entity_id': 'int',
        'recording_name': 'str',
        'meeting_guid': 'str',
        'chapter_count': 'int',
        'total_size': 'int',
        'total_duration': 'int',
        'last_recording_date': 'str',
        'aggregated_status': 'str',
        'recording_thumbnail': 'str',
        'created': 'int',
        'is_premium_recording': 'bool',
        'show_premium_recording_tag': 'bool'
    }

    attribute_map = {
        'recording_entity_id': 'recordingEntityId',
        'recording_name': 'recordingName',
        'meeting_guid': 'meetingGuid',
        'chapter_count': 'chapterCount',
        'total_size': 'totalSize',
        'total_duration': 'totalDuration',
        'last_recording_date': 'lastRecordingDate',
        'aggregated_status': 'aggregatedStatus',
        'recording_thumbnail': 'recordingThumbnail',
        'created': 'created',
        'is_premium_recording': 'isPremiumRecording',
        'show_premium_recording_tag': 'showPremiumRecordingTag'
    }

    def __init__(self, recording_entity_id=None, recording_name=None, meeting_guid=None, chapter_count=None, total_size=None, total_duration=None, last_recording_date=None, aggregated_status=None, recording_thumbnail=None, created=None, is_premium_recording=None, show_premium_recording_tag=None):
        """
        RecordingSummary - a model defined in Swagger
        """

        self._recording_entity_id = None
        self._recording_name = None
        self._meeting_guid = None
        self._chapter_count = None
        self._total_size = None
        self._total_duration = None
        self._last_recording_date = None
        self._aggregated_status = None
        self._recording_thumbnail = None
        self._created = None
        self._is_premium_recording = None
        self._show_premium_recording_tag = None

        if recording_entity_id is not None:
          self.recording_entity_id = recording_entity_id
        if recording_name is not None:
          self.recording_name = recording_name
        if meeting_guid is not None:
          self.meeting_guid = meeting_guid
        if chapter_count is not None:
          self.chapter_count = chapter_count
        if total_size is not None:
          self.total_size = total_size
        if total_duration is not None:
          self.total_duration = total_duration
        if last_recording_date is not None:
          self.last_recording_date = last_recording_date
        if aggregated_status is not None:
          self.aggregated_status = aggregated_status
        if recording_thumbnail is not None:
          self.recording_thumbnail = recording_thumbnail
        if created is not None:
          self.created = created
        if is_premium_recording is not None:
          self.is_premium_recording = is_premium_recording
        if show_premium_recording_tag is not None:
          self.show_premium_recording_tag = show_premium_recording_tag

    @property
    def recording_entity_id(self):
        """
        Gets the recording_entity_id of this RecordingSummary.

        :return: The recording_entity_id of this RecordingSummary.
        :rtype: int
        """
        return self._recording_entity_id

    @recording_entity_id.setter
    def recording_entity_id(self, recording_entity_id):
        """
        Sets the recording_entity_id of this RecordingSummary.

        :param recording_entity_id: The recording_entity_id of this RecordingSummary.
        :type: int
        """

        self._recording_entity_id = recording_entity_id

    @property
    def recording_name(self):
        """
        Gets the recording_name of this RecordingSummary.

        :return: The recording_name of this RecordingSummary.
        :rtype: str
        """
        return self._recording_name

    @recording_name.setter
    def recording_name(self, recording_name):
        """
        Sets the recording_name of this RecordingSummary.

        :param recording_name: The recording_name of this RecordingSummary.
        :type: str
        """

        self._recording_name = recording_name

    @property
    def meeting_guid(self):
        """
        Gets the meeting_guid of this RecordingSummary.

        :return: The meeting_guid of this RecordingSummary.
        :rtype: str
        """
        return self._meeting_guid

    @meeting_guid.setter
    def meeting_guid(self, meeting_guid):
        """
        Sets the meeting_guid of this RecordingSummary.

        :param meeting_guid: The meeting_guid of this RecordingSummary.
        :type: str
        """

        self._meeting_guid = meeting_guid

    @property
    def chapter_count(self):
        """
        Gets the chapter_count of this RecordingSummary.

        :return: The chapter_count of this RecordingSummary.
        :rtype: int
        """
        return self._chapter_count

    @chapter_count.setter
    def chapter_count(self, chapter_count):
        """
        Sets the chapter_count of this RecordingSummary.

        :param chapter_count: The chapter_count of this RecordingSummary.
        :type: int
        """

        self._chapter_count = chapter_count

    @property
    def total_size(self):
        """
        Gets the total_size of this RecordingSummary.

        :return: The total_size of this RecordingSummary.
        :rtype: int
        """
        return self._total_size

    @total_size.setter
    def total_size(self, total_size):
        """
        Sets the total_size of this RecordingSummary.

        :param total_size: The total_size of this RecordingSummary.
        :type: int
        """

        self._total_size = total_size

    @property
    def total_duration(self):
        """
        Gets the total_duration of this RecordingSummary.

        :return: The total_duration of this RecordingSummary.
        :rtype: int
        """
        return self._total_duration

    @total_duration.setter
    def total_duration(self, total_duration):
        """
        Sets the total_duration of this RecordingSummary.

        :param total_duration: The total_duration of this RecordingSummary.
        :type: int
        """

        self._total_duration = total_duration

    @property
    def last_recording_date(self):
        """
        Gets the last_recording_date of this RecordingSummary.

        :return: The last_recording_date of this RecordingSummary.
        :rtype: str
        """
        return self._last_recording_date

    @last_recording_date.setter
    def last_recording_date(self, last_recording_date):
        """
        Sets the last_recording_date of this RecordingSummary.

        :param last_recording_date: The last_recording_date of this RecordingSummary.
        :type: str
        """

        self._last_recording_date = last_recording_date

    @property
    def aggregated_status(self):
        """
        Gets the aggregated_status of this RecordingSummary.

        :return: The aggregated_status of this RecordingSummary.
        :rtype: str
        """
        return self._aggregated_status

    @aggregated_status.setter
    def aggregated_status(self, aggregated_status):
        """
        Sets the aggregated_status of this RecordingSummary.

        :param aggregated_status: The aggregated_status of this RecordingSummary.
        :type: str
        """

        self._aggregated_status = aggregated_status

    @property
    def recording_thumbnail(self):
        """
        Gets the recording_thumbnail of this RecordingSummary.

        :return: The recording_thumbnail of this RecordingSummary.
        :rtype: str
        """
        return self._recording_thumbnail

    @recording_thumbnail.setter
    def recording_thumbnail(self, recording_thumbnail):
        """
        Sets the recording_thumbnail of this RecordingSummary.

        :param recording_thumbnail: The recording_thumbnail of this RecordingSummary.
        :type: str
        """

        self._recording_thumbnail = recording_thumbnail

    @property
    def created(self):
        """
        Gets the created of this RecordingSummary.

        :return: The created of this RecordingSummary.
        :rtype: int
        """
        return self._created

    @created.setter
    def created(self, created):
        """
        Sets the created of this RecordingSummary.

        :param created: The created of this RecordingSummary.
        :type: int
        """

        self._created = created

    @property
    def is_premium_recording(self):
        """
        Gets the is_premium_recording of this RecordingSummary.

        :return: The is_premium_recording of this RecordingSummary.
        :rtype: bool
        """
        return self._is_premium_recording

    @is_premium_recording.setter
    def is_premium_recording(self, is_premium_recording):
        """
        Sets the is_premium_recording of this RecordingSummary.

        :param is_premium_recording: The is_premium_recording of this RecordingSummary.
        :type: bool
        """

        self._is_premium_recording = is_premium_recording

    @property
    def show_premium_recording_tag(self):
        """
        Gets the show_premium_recording_tag of this RecordingSummary.

        :return: The show_premium_recording_tag of this RecordingSummary.
        :rtype: bool
        """
        return self._show_premium_recording_tag

    @show_premium_recording_tag.setter
    def show_premium_recording_tag(self, show_premium_recording_tag):
        """
        Sets the show_premium_recording_tag of this RecordingSummary.

        :param show_premium_recording_tag: The show_premium_recording_tag of this RecordingSummary.
        :type: bool
        """

        self._show_premium_recording_tag = show_premium_recording_tag

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
        if not isinstance(other, RecordingSummary):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

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


class MeetingIndigo(object):
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
        'meeting_uuid': 'str',
        'user_name': 'str',
        'email': 'str',
        'encryption_type': 'int',
        'title': 'str',
        'user_full_name': 'str',
        'phone_number': 'str',
        'user_features': 'str',
        'scheduled_from': 'str',
        'invitee_count': 'int',
        'personal': 'bool',
        'mute_on_entry': 'bool',
        'auto_record': 'bool',
        'enterprise_name': 'str',
        'moderator_less': 'bool',
        'start_time': 'int',
        'end_time': 'int',
        'total_call_seconds': 'int',
        'create_time': 'int',
        'endpoints_count': 'int',
        'concurrent_endpoints': 'int',
        'live_visible_endpoints_count': 'int',
        'qualaroo_rating': 'int',
        'qualaroo_count': 'int',
        'meeting_recording': 'bool',
        'video_share': 'bool',
        'content_share': 'bool',
        'live_recording': 'bool',
        'live_video_share': 'bool',
        'live_content_share': 'bool',
        'large_meeting': 'bool',
        'roi_distance': 'float',
        'mpls': 'bool',
        'id': 'str'
    }

    attribute_map = {
        'meeting_id': 'meetingId',
        'meeting_uuid': 'meetingUUID',
        'user_name': 'userName',
        'email': 'email',
        'encryption_type': 'encryptionType',
        'title': 'title',
        'user_full_name': 'userFullName',
        'phone_number': 'phoneNumber',
        'user_features': 'userFeatures',
        'scheduled_from': 'scheduledFrom',
        'invitee_count': 'inviteeCount',
        'personal': 'personal',
        'mute_on_entry': 'muteOnEntry',
        'auto_record': 'autoRecord',
        'enterprise_name': 'enterpriseName',
        'moderator_less': 'moderatorLess',
        'start_time': 'startTime',
        'end_time': 'endTime',
        'total_call_seconds': 'totalCallSeconds',
        'create_time': 'createTime',
        'endpoints_count': 'endpointsCount',
        'concurrent_endpoints': 'concurrentEndpoints',
        'live_visible_endpoints_count': 'liveVisibleEndpointsCount',
        'qualaroo_rating': 'qualarooRating',
        'qualaroo_count': 'qualarooCount',
        'meeting_recording': 'meetingRecording',
        'video_share': 'videoShare',
        'content_share': 'contentShare',
        'live_recording': 'liveRecording',
        'live_video_share': 'liveVideoShare',
        'live_content_share': 'liveContentShare',
        'large_meeting': 'largeMeeting',
        'roi_distance': 'roiDistance',
        'mpls': 'mpls',
        'id': 'id'
    }

    def __init__(self, meeting_id=None, meeting_uuid=None, user_name=None, email=None, encryption_type=None, title=None, user_full_name=None, phone_number=None, user_features=None, scheduled_from=None, invitee_count=None, personal=None, mute_on_entry=None, auto_record=None, enterprise_name=None, moderator_less=None, start_time=None, end_time=None, total_call_seconds=None, create_time=None, endpoints_count=None, concurrent_endpoints=None, live_visible_endpoints_count=None, qualaroo_rating=None, qualaroo_count=None, meeting_recording=None, video_share=None, content_share=None, live_recording=None, live_video_share=None, live_content_share=None, large_meeting=None, roi_distance=None, mpls=None, id=None):
        """
        MeetingIndigo - a model defined in Swagger
        """

        self._meeting_id = None
        self._meeting_uuid = None
        self._user_name = None
        self._email = None
        self._encryption_type = None
        self._title = None
        self._user_full_name = None
        self._phone_number = None
        self._user_features = None
        self._scheduled_from = None
        self._invitee_count = None
        self._personal = None
        self._mute_on_entry = None
        self._auto_record = None
        self._enterprise_name = None
        self._moderator_less = None
        self._start_time = None
        self._end_time = None
        self._total_call_seconds = None
        self._create_time = None
        self._endpoints_count = None
        self._concurrent_endpoints = None
        self._live_visible_endpoints_count = None
        self._qualaroo_rating = None
        self._qualaroo_count = None
        self._meeting_recording = None
        self._video_share = None
        self._content_share = None
        self._live_recording = None
        self._live_video_share = None
        self._live_content_share = None
        self._large_meeting = None
        self._roi_distance = None
        self._mpls = None
        self._id = None

        if meeting_id is not None:
          self.meeting_id = meeting_id
        if meeting_uuid is not None:
          self.meeting_uuid = meeting_uuid
        if user_name is not None:
          self.user_name = user_name
        if email is not None:
          self.email = email
        if encryption_type is not None:
          self.encryption_type = encryption_type
        if title is not None:
          self.title = title
        if user_full_name is not None:
          self.user_full_name = user_full_name
        if phone_number is not None:
          self.phone_number = phone_number
        if user_features is not None:
          self.user_features = user_features
        if scheduled_from is not None:
          self.scheduled_from = scheduled_from
        if invitee_count is not None:
          self.invitee_count = invitee_count
        if personal is not None:
          self.personal = personal
        if mute_on_entry is not None:
          self.mute_on_entry = mute_on_entry
        if auto_record is not None:
          self.auto_record = auto_record
        if enterprise_name is not None:
          self.enterprise_name = enterprise_name
        if moderator_less is not None:
          self.moderator_less = moderator_less
        if start_time is not None:
          self.start_time = start_time
        if end_time is not None:
          self.end_time = end_time
        if total_call_seconds is not None:
          self.total_call_seconds = total_call_seconds
        if create_time is not None:
          self.create_time = create_time
        if endpoints_count is not None:
          self.endpoints_count = endpoints_count
        if concurrent_endpoints is not None:
          self.concurrent_endpoints = concurrent_endpoints
        if live_visible_endpoints_count is not None:
          self.live_visible_endpoints_count = live_visible_endpoints_count
        if qualaroo_rating is not None:
          self.qualaroo_rating = qualaroo_rating
        if qualaroo_count is not None:
          self.qualaroo_count = qualaroo_count
        if meeting_recording is not None:
          self.meeting_recording = meeting_recording
        if video_share is not None:
          self.video_share = video_share
        if content_share is not None:
          self.content_share = content_share
        if live_recording is not None:
          self.live_recording = live_recording
        if live_video_share is not None:
          self.live_video_share = live_video_share
        if live_content_share is not None:
          self.live_content_share = live_content_share
        if large_meeting is not None:
          self.large_meeting = large_meeting
        if roi_distance is not None:
          self.roi_distance = roi_distance
        if mpls is not None:
          self.mpls = mpls
        if id is not None:
          self.id = id

    @property
    def meeting_id(self):
        """
        Gets the meeting_id of this MeetingIndigo.
        This is the same as the numericMeetingId found elsewhere. We should have been more consistent.

        :return: The meeting_id of this MeetingIndigo.
        :rtype: str
        """
        return self._meeting_id

    @meeting_id.setter
    def meeting_id(self, meeting_id):
        """
        Sets the meeting_id of this MeetingIndigo.
        This is the same as the numericMeetingId found elsewhere. We should have been more consistent.

        :param meeting_id: The meeting_id of this MeetingIndigo.
        :type: str
        """

        self._meeting_id = meeting_id

    @property
    def meeting_uuid(self):
        """
        Gets the meeting_uuid of this MeetingIndigo.
        The universally unique identifier (UUID) of the meeting. This value is a string which contains 6 alphanumeric segments separated by dashes.

        :return: The meeting_uuid of this MeetingIndigo.
        :rtype: str
        """
        return self._meeting_uuid

    @meeting_uuid.setter
    def meeting_uuid(self, meeting_uuid):
        """
        Sets the meeting_uuid of this MeetingIndigo.
        The universally unique identifier (UUID) of the meeting. This value is a string which contains 6 alphanumeric segments separated by dashes.

        :param meeting_uuid: The meeting_uuid of this MeetingIndigo.
        :type: str
        """

        self._meeting_uuid = meeting_uuid

    @property
    def user_name(self):
        """
        Gets the user_name of this MeetingIndigo.

        :return: The user_name of this MeetingIndigo.
        :rtype: str
        """
        return self._user_name

    @user_name.setter
    def user_name(self, user_name):
        """
        Sets the user_name of this MeetingIndigo.

        :param user_name: The user_name of this MeetingIndigo.
        :type: str
        """

        self._user_name = user_name

    @property
    def email(self):
        """
        Gets the email of this MeetingIndigo.

        :return: The email of this MeetingIndigo.
        :rtype: str
        """
        return self._email

    @email.setter
    def email(self, email):
        """
        Sets the email of this MeetingIndigo.

        :param email: The email of this MeetingIndigo.
        :type: str
        """

        self._email = email

    @property
    def encryption_type(self):
        """
        Gets the encryption_type of this MeetingIndigo.

        :return: The encryption_type of this MeetingIndigo.
        :rtype: int
        """
        return self._encryption_type

    @encryption_type.setter
    def encryption_type(self, encryption_type):
        """
        Sets the encryption_type of this MeetingIndigo.

        :param encryption_type: The encryption_type of this MeetingIndigo.
        :type: int
        """

        self._encryption_type = encryption_type

    @property
    def title(self):
        """
        Gets the title of this MeetingIndigo.

        :return: The title of this MeetingIndigo.
        :rtype: str
        """
        return self._title

    @title.setter
    def title(self, title):
        """
        Sets the title of this MeetingIndigo.

        :param title: The title of this MeetingIndigo.
        :type: str
        """

        self._title = title

    @property
    def user_full_name(self):
        """
        Gets the user_full_name of this MeetingIndigo.

        :return: The user_full_name of this MeetingIndigo.
        :rtype: str
        """
        return self._user_full_name

    @user_full_name.setter
    def user_full_name(self, user_full_name):
        """
        Sets the user_full_name of this MeetingIndigo.

        :param user_full_name: The user_full_name of this MeetingIndigo.
        :type: str
        """

        self._user_full_name = user_full_name

    @property
    def phone_number(self):
        """
        Gets the phone_number of this MeetingIndigo.

        :return: The phone_number of this MeetingIndigo.
        :rtype: str
        """
        return self._phone_number

    @phone_number.setter
    def phone_number(self, phone_number):
        """
        Sets the phone_number of this MeetingIndigo.

        :param phone_number: The phone_number of this MeetingIndigo.
        :type: str
        """

        self._phone_number = phone_number

    @property
    def user_features(self):
        """
        Gets the user_features of this MeetingIndigo.

        :return: The user_features of this MeetingIndigo.
        :rtype: str
        """
        return self._user_features

    @user_features.setter
    def user_features(self, user_features):
        """
        Sets the user_features of this MeetingIndigo.

        :param user_features: The user_features of this MeetingIndigo.
        :type: str
        """

        self._user_features = user_features

    @property
    def scheduled_from(self):
        """
        Gets the scheduled_from of this MeetingIndigo.

        :return: The scheduled_from of this MeetingIndigo.
        :rtype: str
        """
        return self._scheduled_from

    @scheduled_from.setter
    def scheduled_from(self, scheduled_from):
        """
        Sets the scheduled_from of this MeetingIndigo.

        :param scheduled_from: The scheduled_from of this MeetingIndigo.
        :type: str
        """
        allowed_values = ["WEB_APP"]
        if scheduled_from not in allowed_values:
            raise ValueError(
                "Invalid value for `scheduled_from` ({0}), must be one of {1}"
                .format(scheduled_from, allowed_values)
            )

        self._scheduled_from = scheduled_from

    @property
    def invitee_count(self):
        """
        Gets the invitee_count of this MeetingIndigo.

        :return: The invitee_count of this MeetingIndigo.
        :rtype: int
        """
        return self._invitee_count

    @invitee_count.setter
    def invitee_count(self, invitee_count):
        """
        Sets the invitee_count of this MeetingIndigo.

        :param invitee_count: The invitee_count of this MeetingIndigo.
        :type: int
        """

        self._invitee_count = invitee_count

    @property
    def personal(self):
        """
        Gets the personal of this MeetingIndigo.

        :return: The personal of this MeetingIndigo.
        :rtype: bool
        """
        return self._personal

    @personal.setter
    def personal(self, personal):
        """
        Sets the personal of this MeetingIndigo.

        :param personal: The personal of this MeetingIndigo.
        :type: bool
        """

        self._personal = personal

    @property
    def mute_on_entry(self):
        """
        Gets the mute_on_entry of this MeetingIndigo.

        :return: The mute_on_entry of this MeetingIndigo.
        :rtype: bool
        """
        return self._mute_on_entry

    @mute_on_entry.setter
    def mute_on_entry(self, mute_on_entry):
        """
        Sets the mute_on_entry of this MeetingIndigo.

        :param mute_on_entry: The mute_on_entry of this MeetingIndigo.
        :type: bool
        """

        self._mute_on_entry = mute_on_entry

    @property
    def auto_record(self):
        """
        Gets the auto_record of this MeetingIndigo.

        :return: The auto_record of this MeetingIndigo.
        :rtype: bool
        """
        return self._auto_record

    @auto_record.setter
    def auto_record(self, auto_record):
        """
        Sets the auto_record of this MeetingIndigo.

        :param auto_record: The auto_record of this MeetingIndigo.
        :type: bool
        """

        self._auto_record = auto_record

    @property
    def enterprise_name(self):
        """
        Gets the enterprise_name of this MeetingIndigo.

        :return: The enterprise_name of this MeetingIndigo.
        :rtype: str
        """
        return self._enterprise_name

    @enterprise_name.setter
    def enterprise_name(self, enterprise_name):
        """
        Sets the enterprise_name of this MeetingIndigo.

        :param enterprise_name: The enterprise_name of this MeetingIndigo.
        :type: str
        """

        self._enterprise_name = enterprise_name

    @property
    def moderator_less(self):
        """
        Gets the moderator_less of this MeetingIndigo.

        :return: The moderator_less of this MeetingIndigo.
        :rtype: bool
        """
        return self._moderator_less

    @moderator_less.setter
    def moderator_less(self, moderator_less):
        """
        Sets the moderator_less of this MeetingIndigo.

        :param moderator_less: The moderator_less of this MeetingIndigo.
        :type: bool
        """

        self._moderator_less = moderator_less

    @property
    def start_time(self):
        """
        Gets the start_time of this MeetingIndigo.

        :return: The start_time of this MeetingIndigo.
        :rtype: int
        """
        return self._start_time

    @start_time.setter
    def start_time(self, start_time):
        """
        Sets the start_time of this MeetingIndigo.

        :param start_time: The start_time of this MeetingIndigo.
        :type: int
        """

        self._start_time = start_time

    @property
    def end_time(self):
        """
        Gets the end_time of this MeetingIndigo.

        :return: The end_time of this MeetingIndigo.
        :rtype: int
        """
        return self._end_time

    @end_time.setter
    def end_time(self, end_time):
        """
        Sets the end_time of this MeetingIndigo.

        :param end_time: The end_time of this MeetingIndigo.
        :type: int
        """

        self._end_time = end_time

    @property
    def total_call_seconds(self):
        """
        Gets the total_call_seconds of this MeetingIndigo.

        :return: The total_call_seconds of this MeetingIndigo.
        :rtype: int
        """
        return self._total_call_seconds

    @total_call_seconds.setter
    def total_call_seconds(self, total_call_seconds):
        """
        Sets the total_call_seconds of this MeetingIndigo.

        :param total_call_seconds: The total_call_seconds of this MeetingIndigo.
        :type: int
        """

        self._total_call_seconds = total_call_seconds

    @property
    def create_time(self):
        """
        Gets the create_time of this MeetingIndigo.

        :return: The create_time of this MeetingIndigo.
        :rtype: int
        """
        return self._create_time

    @create_time.setter
    def create_time(self, create_time):
        """
        Sets the create_time of this MeetingIndigo.

        :param create_time: The create_time of this MeetingIndigo.
        :type: int
        """

        self._create_time = create_time

    @property
    def endpoints_count(self):
        """
        Gets the endpoints_count of this MeetingIndigo.

        :return: The endpoints_count of this MeetingIndigo.
        :rtype: int
        """
        return self._endpoints_count

    @endpoints_count.setter
    def endpoints_count(self, endpoints_count):
        """
        Sets the endpoints_count of this MeetingIndigo.

        :param endpoints_count: The endpoints_count of this MeetingIndigo.
        :type: int
        """

        self._endpoints_count = endpoints_count

    @property
    def concurrent_endpoints(self):
        """
        Gets the concurrent_endpoints of this MeetingIndigo.

        :return: The concurrent_endpoints of this MeetingIndigo.
        :rtype: int
        """
        return self._concurrent_endpoints

    @concurrent_endpoints.setter
    def concurrent_endpoints(self, concurrent_endpoints):
        """
        Sets the concurrent_endpoints of this MeetingIndigo.

        :param concurrent_endpoints: The concurrent_endpoints of this MeetingIndigo.
        :type: int
        """

        self._concurrent_endpoints = concurrent_endpoints

    @property
    def live_visible_endpoints_count(self):
        """
        Gets the live_visible_endpoints_count of this MeetingIndigo.

        :return: The live_visible_endpoints_count of this MeetingIndigo.
        :rtype: int
        """
        return self._live_visible_endpoints_count

    @live_visible_endpoints_count.setter
    def live_visible_endpoints_count(self, live_visible_endpoints_count):
        """
        Sets the live_visible_endpoints_count of this MeetingIndigo.

        :param live_visible_endpoints_count: The live_visible_endpoints_count of this MeetingIndigo.
        :type: int
        """

        self._live_visible_endpoints_count = live_visible_endpoints_count

    @property
    def qualaroo_rating(self):
        """
        Gets the qualaroo_rating of this MeetingIndigo.

        :return: The qualaroo_rating of this MeetingIndigo.
        :rtype: int
        """
        return self._qualaroo_rating

    @qualaroo_rating.setter
    def qualaroo_rating(self, qualaroo_rating):
        """
        Sets the qualaroo_rating of this MeetingIndigo.

        :param qualaroo_rating: The qualaroo_rating of this MeetingIndigo.
        :type: int
        """

        self._qualaroo_rating = qualaroo_rating

    @property
    def qualaroo_count(self):
        """
        Gets the qualaroo_count of this MeetingIndigo.

        :return: The qualaroo_count of this MeetingIndigo.
        :rtype: int
        """
        return self._qualaroo_count

    @qualaroo_count.setter
    def qualaroo_count(self, qualaroo_count):
        """
        Sets the qualaroo_count of this MeetingIndigo.

        :param qualaroo_count: The qualaroo_count of this MeetingIndigo.
        :type: int
        """

        self._qualaroo_count = qualaroo_count

    @property
    def meeting_recording(self):
        """
        Gets the meeting_recording of this MeetingIndigo.

        :return: The meeting_recording of this MeetingIndigo.
        :rtype: bool
        """
        return self._meeting_recording

    @meeting_recording.setter
    def meeting_recording(self, meeting_recording):
        """
        Sets the meeting_recording of this MeetingIndigo.

        :param meeting_recording: The meeting_recording of this MeetingIndigo.
        :type: bool
        """

        self._meeting_recording = meeting_recording

    @property
    def video_share(self):
        """
        Gets the video_share of this MeetingIndigo.

        :return: The video_share of this MeetingIndigo.
        :rtype: bool
        """
        return self._video_share

    @video_share.setter
    def video_share(self, video_share):
        """
        Sets the video_share of this MeetingIndigo.

        :param video_share: The video_share of this MeetingIndigo.
        :type: bool
        """

        self._video_share = video_share

    @property
    def content_share(self):
        """
        Gets the content_share of this MeetingIndigo.

        :return: The content_share of this MeetingIndigo.
        :rtype: bool
        """
        return self._content_share

    @content_share.setter
    def content_share(self, content_share):
        """
        Sets the content_share of this MeetingIndigo.

        :param content_share: The content_share of this MeetingIndigo.
        :type: bool
        """

        self._content_share = content_share

    @property
    def live_recording(self):
        """
        Gets the live_recording of this MeetingIndigo.

        :return: The live_recording of this MeetingIndigo.
        :rtype: bool
        """
        return self._live_recording

    @live_recording.setter
    def live_recording(self, live_recording):
        """
        Sets the live_recording of this MeetingIndigo.

        :param live_recording: The live_recording of this MeetingIndigo.
        :type: bool
        """

        self._live_recording = live_recording

    @property
    def live_video_share(self):
        """
        Gets the live_video_share of this MeetingIndigo.

        :return: The live_video_share of this MeetingIndigo.
        :rtype: bool
        """
        return self._live_video_share

    @live_video_share.setter
    def live_video_share(self, live_video_share):
        """
        Sets the live_video_share of this MeetingIndigo.

        :param live_video_share: The live_video_share of this MeetingIndigo.
        :type: bool
        """

        self._live_video_share = live_video_share

    @property
    def live_content_share(self):
        """
        Gets the live_content_share of this MeetingIndigo.

        :return: The live_content_share of this MeetingIndigo.
        :rtype: bool
        """
        return self._live_content_share

    @live_content_share.setter
    def live_content_share(self, live_content_share):
        """
        Sets the live_content_share of this MeetingIndigo.

        :param live_content_share: The live_content_share of this MeetingIndigo.
        :type: bool
        """

        self._live_content_share = live_content_share

    @property
    def large_meeting(self):
        """
        Gets the large_meeting of this MeetingIndigo.

        :return: The large_meeting of this MeetingIndigo.
        :rtype: bool
        """
        return self._large_meeting

    @large_meeting.setter
    def large_meeting(self, large_meeting):
        """
        Sets the large_meeting of this MeetingIndigo.

        :param large_meeting: The large_meeting of this MeetingIndigo.
        :type: bool
        """

        self._large_meeting = large_meeting

    @property
    def roi_distance(self):
        """
        Gets the roi_distance of this MeetingIndigo.

        :return: The roi_distance of this MeetingIndigo.
        :rtype: float
        """
        return self._roi_distance

    @roi_distance.setter
    def roi_distance(self, roi_distance):
        """
        Sets the roi_distance of this MeetingIndigo.

        :param roi_distance: The roi_distance of this MeetingIndigo.
        :type: float
        """

        self._roi_distance = roi_distance

    @property
    def mpls(self):
        """
        Gets the mpls of this MeetingIndigo.

        :return: The mpls of this MeetingIndigo.
        :rtype: bool
        """
        return self._mpls

    @mpls.setter
    def mpls(self, mpls):
        """
        Sets the mpls of this MeetingIndigo.

        :param mpls: The mpls of this MeetingIndigo.
        :type: bool
        """

        self._mpls = mpls

    @property
    def id(self):
        """
        Gets the id of this MeetingIndigo.
        Same as the meetingUUID property in this object.

        :return: The id of this MeetingIndigo.
        :rtype: str
        """
        return self._id

    @id.setter
    def id(self, id):
        """
        Sets the id of this MeetingIndigo.
        Same as the meetingUUID property in this object.

        :param id: The id of this MeetingIndigo.
        :type: str
        """

        self._id = id

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
        if not isinstance(other, MeetingIndigo):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

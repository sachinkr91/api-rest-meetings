# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 

    OpenAPI spec version: 1.0.4407102018
    Contact: glenn@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class Meeting(object):
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
        'id': 'int',
        'uuid': 'str',
        'title': 'str',
        'description': 'str',
        'start': 'int',
        'end': 'int',
        'timezone': 'str',
        'advanced_meeting_options': 'MeetingAdvancedMeetingOptions',
        'notification_url': 'str',
        'notification_data': 'str',
        'moderator': 'MeetingModerator',
        'numeric_meeting_id': 'str',
        'attendee_passcode': 'str',
        'add_attendee_passcode': 'bool',
        'delete': 'bool',
        'allow720p': 'bool',
        'status': 'str',
        'locked': 'bool',
        'seqeuence_number': 'int',
        'ics_uid': 'str',
        'end_point_type': 'str',
        'end_point_version': 'str',
        'attendees': 'list[Attendee]',
        'is_large_meeting': 'bool',
        'created': 'int',
        'last_modified': 'int',
        'is_expired': 'bool',
        'parent_meeting_id': 'int',
        'parent_meeting_uuid': 'str',
        'next_occurrence': 'str',
        'timeless_meeting': 'bool',
        'endless_meeting': 'bool',
        'recurrence_pattern': 'MeetingRecurrencePattern',
        'first': 'StartEnd',
        'last': 'StartEnd',
        'next': 'StartEnd',
        'next_start': 'int',
        'next_end': 'int',
        'is_personal_meeting': 'bool',
        'invitee_join_option': 'int'
    }

    attribute_map = {
        'id': 'id',
        'uuid': 'uuid',
        'title': 'title',
        'description': 'description',
        'start': 'start',
        'end': 'end',
        'timezone': 'timezone',
        'advanced_meeting_options': 'advancedMeetingOptions',
        'notification_url': 'notificationUrl',
        'notification_data': 'notificationData',
        'moderator': 'moderator',
        'numeric_meeting_id': 'numericMeetingId',
        'attendee_passcode': 'attendeePasscode',
        'add_attendee_passcode': 'addAttendeePasscode',
        'delete': 'delete',
        'allow720p': 'allow720p',
        'status': 'status',
        'locked': 'locked',
        'seqeuence_number': 'seqeuenceNumber',
        'ics_uid': 'icsUid',
        'end_point_type': 'endPointType',
        'end_point_version': 'endPointVersion',
        'attendees': 'attendees',
        'is_large_meeting': 'isLargeMeeting',
        'created': 'created',
        'last_modified': 'lastModified',
        'is_expired': 'isExpired',
        'parent_meeting_id': 'parentMeetingId',
        'parent_meeting_uuid': 'parentMeetingUUID',
        'next_occurrence': 'nextOccurrence',
        'timeless_meeting': 'timelessMeeting',
        'endless_meeting': 'endlessMeeting',
        'recurrence_pattern': 'recurrencePattern',
        'first': 'first',
        'last': 'last',
        'next': 'next',
        'next_start': 'nextStart',
        'next_end': 'nextEnd',
        'is_personal_meeting': 'isPersonalMeeting',
        'invitee_join_option': 'inviteeJoinOption'
    }

    def __init__(self, id=None, uuid=None, title='My Test Meeting', description=None, start=None, end=None, timezone='America/New_York', advanced_meeting_options=None, notification_url=None, notification_data=None, moderator=None, numeric_meeting_id=None, attendee_passcode=None, add_attendee_passcode=None, delete=None, allow720p=None, status=None, locked=None, seqeuence_number=None, ics_uid=None, end_point_type='WEB_APP', end_point_version='2.10', attendees=None, is_large_meeting=None, created=None, last_modified=None, is_expired=None, parent_meeting_id=None, parent_meeting_uuid=None, next_occurrence=None, timeless_meeting=None, endless_meeting=None, recurrence_pattern=None, first=None, last=None, next=None, next_start=None, next_end=None, is_personal_meeting=False, invitee_join_option=None):
        """
        Meeting - a model defined in Swagger
        """

        self._id = None
        self._uuid = None
        self._title = None
        self._description = None
        self._start = None
        self._end = None
        self._timezone = None
        self._advanced_meeting_options = None
        self._notification_url = None
        self._notification_data = None
        self._moderator = None
        self._numeric_meeting_id = None
        self._attendee_passcode = None
        self._add_attendee_passcode = None
        self._delete = None
        self._allow720p = None
        self._status = None
        self._locked = None
        self._seqeuence_number = None
        self._ics_uid = None
        self._end_point_type = None
        self._end_point_version = None
        self._attendees = None
        self._is_large_meeting = None
        self._created = None
        self._last_modified = None
        self._is_expired = None
        self._parent_meeting_id = None
        self._parent_meeting_uuid = None
        self._next_occurrence = None
        self._timeless_meeting = None
        self._endless_meeting = None
        self._recurrence_pattern = None
        self._first = None
        self._last = None
        self._next = None
        self._next_start = None
        self._next_end = None
        self._is_personal_meeting = None
        self._invitee_join_option = None

        if id is not None:
          self.id = id
        if uuid is not None:
          self.uuid = uuid
        self.title = title
        if description is not None:
          self.description = description
        self.start = start
        self.end = end
        if timezone is not None:
          self.timezone = timezone
        if advanced_meeting_options is not None:
          self.advanced_meeting_options = advanced_meeting_options
        if notification_url is not None:
          self.notification_url = notification_url
        if notification_data is not None:
          self.notification_data = notification_data
        if moderator is not None:
          self.moderator = moderator
        if numeric_meeting_id is not None:
          self.numeric_meeting_id = numeric_meeting_id
        if attendee_passcode is not None:
          self.attendee_passcode = attendee_passcode
        if add_attendee_passcode is not None:
          self.add_attendee_passcode = add_attendee_passcode
        if delete is not None:
          self.delete = delete
        if allow720p is not None:
          self.allow720p = allow720p
        if status is not None:
          self.status = status
        if locked is not None:
          self.locked = locked
        if seqeuence_number is not None:
          self.seqeuence_number = seqeuence_number
        if ics_uid is not None:
          self.ics_uid = ics_uid
        self.end_point_type = end_point_type
        self.end_point_version = end_point_version
        if attendees is not None:
          self.attendees = attendees
        if is_large_meeting is not None:
          self.is_large_meeting = is_large_meeting
        if created is not None:
          self.created = created
        if last_modified is not None:
          self.last_modified = last_modified
        if is_expired is not None:
          self.is_expired = is_expired
        if parent_meeting_id is not None:
          self.parent_meeting_id = parent_meeting_id
        if parent_meeting_uuid is not None:
          self.parent_meeting_uuid = parent_meeting_uuid
        if next_occurrence is not None:
          self.next_occurrence = next_occurrence
        if timeless_meeting is not None:
          self.timeless_meeting = timeless_meeting
        if endless_meeting is not None:
          self.endless_meeting = endless_meeting
        if recurrence_pattern is not None:
          self.recurrence_pattern = recurrence_pattern
        if first is not None:
          self.first = first
        if last is not None:
          self.last = last
        if next is not None:
          self.next = next
        if next_start is not None:
          self.next_start = next_start
        if next_end is not None:
          self.next_end = next_end
        if is_personal_meeting is not None:
          self.is_personal_meeting = is_personal_meeting
        if invitee_join_option is not None:
          self.invitee_join_option = invitee_join_option

    @property
    def id(self):
        """
        Gets the id of this Meeting.
        Unique identifier for meeting.

        :return: The id of this Meeting.
        :rtype: int
        """
        return self._id

    @id.setter
    def id(self, id):
        """
        Sets the id of this Meeting.
        Unique identifier for meeting.

        :param id: The id of this Meeting.
        :type: int
        """

        self._id = id

    @property
    def uuid(self):
        """
        Gets the uuid of this Meeting.

        :return: The uuid of this Meeting.
        :rtype: str
        """
        return self._uuid

    @uuid.setter
    def uuid(self, uuid):
        """
        Sets the uuid of this Meeting.

        :param uuid: The uuid of this Meeting.
        :type: str
        """

        self._uuid = uuid

    @property
    def title(self):
        """
        Gets the title of this Meeting.

        :return: The title of this Meeting.
        :rtype: str
        """
        return self._title

    @title.setter
    def title(self, title):
        """
        Sets the title of this Meeting.

        :param title: The title of this Meeting.
        :type: str
        """
        if title is None:
            raise ValueError("Invalid value for `title`, must not be `None`")

        self._title = title

    @property
    def description(self):
        """
        Gets the description of this Meeting.

        :return: The description of this Meeting.
        :rtype: str
        """
        return self._description

    @description.setter
    def description(self, description):
        """
        Sets the description of this Meeting.

        :param description: The description of this Meeting.
        :type: str
        """

        self._description = description

    @property
    def start(self):
        """
        Gets the start of this Meeting.
        A [UNIX Timestamp](https://currentmillis.com/) in milliseconds

        :return: The start of this Meeting.
        :rtype: int
        """
        return self._start

    @start.setter
    def start(self, start):
        """
        Sets the start of this Meeting.
        A [UNIX Timestamp](https://currentmillis.com/) in milliseconds

        :param start: The start of this Meeting.
        :type: int
        """
        if start is None:
            raise ValueError("Invalid value for `start`, must not be `None`")

        self._start = start

    @property
    def end(self):
        """
        Gets the end of this Meeting.
        A [UNIX Timestamp](https://currentmillis.com/) in milliseconds

        :return: The end of this Meeting.
        :rtype: int
        """
        return self._end

    @end.setter
    def end(self, end):
        """
        Sets the end of this Meeting.
        A [UNIX Timestamp](https://currentmillis.com/) in milliseconds

        :param end: The end of this Meeting.
        :type: int
        """
        if end is None:
            raise ValueError("Invalid value for `end`, must not be `None`")

        self._end = end

    @property
    def timezone(self):
        """
        Gets the timezone of this Meeting.

        :return: The timezone of this Meeting.
        :rtype: str
        """
        return self._timezone

    @timezone.setter
    def timezone(self, timezone):
        """
        Sets the timezone of this Meeting.

        :param timezone: The timezone of this Meeting.
        :type: str
        """

        self._timezone = timezone

    @property
    def advanced_meeting_options(self):
        """
        Gets the advanced_meeting_options of this Meeting.

        :return: The advanced_meeting_options of this Meeting.
        :rtype: MeetingAdvancedMeetingOptions
        """
        return self._advanced_meeting_options

    @advanced_meeting_options.setter
    def advanced_meeting_options(self, advanced_meeting_options):
        """
        Sets the advanced_meeting_options of this Meeting.

        :param advanced_meeting_options: The advanced_meeting_options of this Meeting.
        :type: MeetingAdvancedMeetingOptions
        """

        self._advanced_meeting_options = advanced_meeting_options

    @property
    def notification_url(self):
        """
        Gets the notification_url of this Meeting.
        this property is not used in the BlueJeans Meetings product

        :return: The notification_url of this Meeting.
        :rtype: str
        """
        return self._notification_url

    @notification_url.setter
    def notification_url(self, notification_url):
        """
        Sets the notification_url of this Meeting.
        this property is not used in the BlueJeans Meetings product

        :param notification_url: The notification_url of this Meeting.
        :type: str
        """

        self._notification_url = notification_url

    @property
    def notification_data(self):
        """
        Gets the notification_data of this Meeting.
        this property is not used in the BlueJeans Meetings product

        :return: The notification_data of this Meeting.
        :rtype: str
        """
        return self._notification_data

    @notification_data.setter
    def notification_data(self, notification_data):
        """
        Sets the notification_data of this Meeting.
        this property is not used in the BlueJeans Meetings product

        :param notification_data: The notification_data of this Meeting.
        :type: str
        """

        self._notification_data = notification_data

    @property
    def moderator(self):
        """
        Gets the moderator of this Meeting.

        :return: The moderator of this Meeting.
        :rtype: MeetingModerator
        """
        return self._moderator

    @moderator.setter
    def moderator(self, moderator):
        """
        Sets the moderator of this Meeting.

        :param moderator: The moderator of this Meeting.
        :type: MeetingModerator
        """

        self._moderator = moderator

    @property
    def numeric_meeting_id(self):
        """
        Gets the numeric_meeting_id of this Meeting.
        The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.

        :return: The numeric_meeting_id of this Meeting.
        :rtype: str
        """
        return self._numeric_meeting_id

    @numeric_meeting_id.setter
    def numeric_meeting_id(self, numeric_meeting_id):
        """
        Sets the numeric_meeting_id of this Meeting.
        The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.

        :param numeric_meeting_id: The numeric_meeting_id of this Meeting.
        :type: str
        """

        self._numeric_meeting_id = numeric_meeting_id

    @property
    def attendee_passcode(self):
        """
        Gets the attendee_passcode of this Meeting.

        :return: The attendee_passcode of this Meeting.
        :rtype: str
        """
        return self._attendee_passcode

    @attendee_passcode.setter
    def attendee_passcode(self, attendee_passcode):
        """
        Sets the attendee_passcode of this Meeting.

        :param attendee_passcode: The attendee_passcode of this Meeting.
        :type: str
        """

        self._attendee_passcode = attendee_passcode

    @property
    def add_attendee_passcode(self):
        """
        Gets the add_attendee_passcode of this Meeting.
        Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting.

        :return: The add_attendee_passcode of this Meeting.
        :rtype: bool
        """
        return self._add_attendee_passcode

    @add_attendee_passcode.setter
    def add_attendee_passcode(self, add_attendee_passcode):
        """
        Sets the add_attendee_passcode of this Meeting.
        Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting.

        :param add_attendee_passcode: The add_attendee_passcode of this Meeting.
        :type: bool
        """

        self._add_attendee_passcode = add_attendee_passcode

    @property
    def delete(self):
        """
        Gets the delete of this Meeting.

        :return: The delete of this Meeting.
        :rtype: bool
        """
        return self._delete

    @delete.setter
    def delete(self, delete):
        """
        Sets the delete of this Meeting.

        :param delete: The delete of this Meeting.
        :type: bool
        """

        self._delete = delete

    @property
    def allow720p(self):
        """
        Gets the allow720p of this Meeting.

        :return: The allow720p of this Meeting.
        :rtype: bool
        """
        return self._allow720p

    @allow720p.setter
    def allow720p(self, allow720p):
        """
        Sets the allow720p of this Meeting.

        :param allow720p: The allow720p of this Meeting.
        :type: bool
        """

        self._allow720p = allow720p

    @property
    def status(self):
        """
        Gets the status of this Meeting.

        :return: The status of this Meeting.
        :rtype: str
        """
        return self._status

    @status.setter
    def status(self, status):
        """
        Sets the status of this Meeting.

        :param status: The status of this Meeting.
        :type: str
        """

        self._status = status

    @property
    def locked(self):
        """
        Gets the locked of this Meeting.

        :return: The locked of this Meeting.
        :rtype: bool
        """
        return self._locked

    @locked.setter
    def locked(self, locked):
        """
        Sets the locked of this Meeting.

        :param locked: The locked of this Meeting.
        :type: bool
        """

        self._locked = locked

    @property
    def seqeuence_number(self):
        """
        Gets the seqeuence_number of this Meeting.

        :return: The seqeuence_number of this Meeting.
        :rtype: int
        """
        return self._seqeuence_number

    @seqeuence_number.setter
    def seqeuence_number(self, seqeuence_number):
        """
        Sets the seqeuence_number of this Meeting.

        :param seqeuence_number: The seqeuence_number of this Meeting.
        :type: int
        """

        self._seqeuence_number = seqeuence_number

    @property
    def ics_uid(self):
        """
        Gets the ics_uid of this Meeting.

        :return: The ics_uid of this Meeting.
        :rtype: str
        """
        return self._ics_uid

    @ics_uid.setter
    def ics_uid(self, ics_uid):
        """
        Sets the ics_uid of this Meeting.

        :param ics_uid: The ics_uid of this Meeting.
        :type: str
        """

        self._ics_uid = ics_uid

    @property
    def end_point_type(self):
        """
        Gets the end_point_type of this Meeting.

        :return: The end_point_type of this Meeting.
        :rtype: str
        """
        return self._end_point_type

    @end_point_type.setter
    def end_point_type(self, end_point_type):
        """
        Sets the end_point_type of this Meeting.

        :param end_point_type: The end_point_type of this Meeting.
        :type: str
        """
        if end_point_type is None:
            raise ValueError("Invalid value for `end_point_type`, must not be `None`")

        self._end_point_type = end_point_type

    @property
    def end_point_version(self):
        """
        Gets the end_point_version of this Meeting.

        :return: The end_point_version of this Meeting.
        :rtype: str
        """
        return self._end_point_version

    @end_point_version.setter
    def end_point_version(self, end_point_version):
        """
        Sets the end_point_version of this Meeting.

        :param end_point_version: The end_point_version of this Meeting.
        :type: str
        """
        if end_point_version is None:
            raise ValueError("Invalid value for `end_point_version`, must not be `None`")

        self._end_point_version = end_point_version

    @property
    def attendees(self):
        """
        Gets the attendees of this Meeting.

        :return: The attendees of this Meeting.
        :rtype: list[Attendee]
        """
        return self._attendees

    @attendees.setter
    def attendees(self, attendees):
        """
        Sets the attendees of this Meeting.

        :param attendees: The attendees of this Meeting.
        :type: list[Attendee]
        """

        self._attendees = attendees

    @property
    def is_large_meeting(self):
        """
        Gets the is_large_meeting of this Meeting.
        If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins.

        :return: The is_large_meeting of this Meeting.
        :rtype: bool
        """
        return self._is_large_meeting

    @is_large_meeting.setter
    def is_large_meeting(self, is_large_meeting):
        """
        Sets the is_large_meeting of this Meeting.
        If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins.

        :param is_large_meeting: The is_large_meeting of this Meeting.
        :type: bool
        """

        self._is_large_meeting = is_large_meeting

    @property
    def created(self):
        """
        Gets the created of this Meeting.
        This is the epoch-based time (in milliseconds) when the meeting was initially created.

        :return: The created of this Meeting.
        :rtype: int
        """
        return self._created

    @created.setter
    def created(self, created):
        """
        Sets the created of this Meeting.
        This is the epoch-based time (in milliseconds) when the meeting was initially created.

        :param created: The created of this Meeting.
        :type: int
        """

        self._created = created

    @property
    def last_modified(self):
        """
        Gets the last_modified of this Meeting.
        This is the epoch-based time (in milliseconds) when the meeting was last changed.

        :return: The last_modified of this Meeting.
        :rtype: int
        """
        return self._last_modified

    @last_modified.setter
    def last_modified(self, last_modified):
        """
        Sets the last_modified of this Meeting.
        This is the epoch-based time (in milliseconds) when the meeting was last changed.

        :param last_modified: The last_modified of this Meeting.
        :type: int
        """

        self._last_modified = last_modified

    @property
    def is_expired(self):
        """
        Gets the is_expired of this Meeting.

        :return: The is_expired of this Meeting.
        :rtype: bool
        """
        return self._is_expired

    @is_expired.setter
    def is_expired(self, is_expired):
        """
        Sets the is_expired of this Meeting.

        :param is_expired: The is_expired of this Meeting.
        :type: bool
        """

        self._is_expired = is_expired

    @property
    def parent_meeting_id(self):
        """
        Gets the parent_meeting_id of this Meeting.
        This field contains the Meeting Id of the first meeting in a recurrence chain of meetings.

        :return: The parent_meeting_id of this Meeting.
        :rtype: int
        """
        return self._parent_meeting_id

    @parent_meeting_id.setter
    def parent_meeting_id(self, parent_meeting_id):
        """
        Sets the parent_meeting_id of this Meeting.
        This field contains the Meeting Id of the first meeting in a recurrence chain of meetings.

        :param parent_meeting_id: The parent_meeting_id of this Meeting.
        :type: int
        """

        self._parent_meeting_id = parent_meeting_id

    @property
    def parent_meeting_uuid(self):
        """
        Gets the parent_meeting_uuid of this Meeting.

        :return: The parent_meeting_uuid of this Meeting.
        :rtype: str
        """
        return self._parent_meeting_uuid

    @parent_meeting_uuid.setter
    def parent_meeting_uuid(self, parent_meeting_uuid):
        """
        Sets the parent_meeting_uuid of this Meeting.

        :param parent_meeting_uuid: The parent_meeting_uuid of this Meeting.
        :type: str
        """

        self._parent_meeting_uuid = parent_meeting_uuid

    @property
    def next_occurrence(self):
        """
        Gets the next_occurrence of this Meeting.

        :return: The next_occurrence of this Meeting.
        :rtype: str
        """
        return self._next_occurrence

    @next_occurrence.setter
    def next_occurrence(self, next_occurrence):
        """
        Sets the next_occurrence of this Meeting.

        :param next_occurrence: The next_occurrence of this Meeting.
        :type: str
        """

        self._next_occurrence = next_occurrence

    @property
    def timeless_meeting(self):
        """
        Gets the timeless_meeting of this Meeting.

        :return: The timeless_meeting of this Meeting.
        :rtype: bool
        """
        return self._timeless_meeting

    @timeless_meeting.setter
    def timeless_meeting(self, timeless_meeting):
        """
        Sets the timeless_meeting of this Meeting.

        :param timeless_meeting: The timeless_meeting of this Meeting.
        :type: bool
        """

        self._timeless_meeting = timeless_meeting

    @property
    def endless_meeting(self):
        """
        Gets the endless_meeting of this Meeting.

        :return: The endless_meeting of this Meeting.
        :rtype: bool
        """
        return self._endless_meeting

    @endless_meeting.setter
    def endless_meeting(self, endless_meeting):
        """
        Sets the endless_meeting of this Meeting.

        :param endless_meeting: The endless_meeting of this Meeting.
        :type: bool
        """

        self._endless_meeting = endless_meeting

    @property
    def recurrence_pattern(self):
        """
        Gets the recurrence_pattern of this Meeting.

        :return: The recurrence_pattern of this Meeting.
        :rtype: MeetingRecurrencePattern
        """
        return self._recurrence_pattern

    @recurrence_pattern.setter
    def recurrence_pattern(self, recurrence_pattern):
        """
        Sets the recurrence_pattern of this Meeting.

        :param recurrence_pattern: The recurrence_pattern of this Meeting.
        :type: MeetingRecurrencePattern
        """

        self._recurrence_pattern = recurrence_pattern

    @property
    def first(self):
        """
        Gets the first of this Meeting.
        Starting and ending times of the first meeting in a chain of recurring meetings.

        :return: The first of this Meeting.
        :rtype: StartEnd
        """
        return self._first

    @first.setter
    def first(self, first):
        """
        Sets the first of this Meeting.
        Starting and ending times of the first meeting in a chain of recurring meetings.

        :param first: The first of this Meeting.
        :type: StartEnd
        """

        self._first = first

    @property
    def last(self):
        """
        Gets the last of this Meeting.
        Starting and ending times of the last meeting in a chain of recurring meetings.

        :return: The last of this Meeting.
        :rtype: StartEnd
        """
        return self._last

    @last.setter
    def last(self, last):
        """
        Sets the last of this Meeting.
        Starting and ending times of the last meeting in a chain of recurring meetings.

        :param last: The last of this Meeting.
        :type: StartEnd
        """

        self._last = last

    @property
    def next(self):
        """
        Gets the next of this Meeting.
        Starting and ending times of the next meeting in a chain of recurring meetings.

        :return: The next of this Meeting.
        :rtype: StartEnd
        """
        return self._next

    @next.setter
    def next(self, next):
        """
        Sets the next of this Meeting.
        Starting and ending times of the next meeting in a chain of recurring meetings.

        :param next: The next of this Meeting.
        :type: StartEnd
        """

        self._next = next

    @property
    def next_start(self):
        """
        Gets the next_start of this Meeting.

        :return: The next_start of this Meeting.
        :rtype: int
        """
        return self._next_start

    @next_start.setter
    def next_start(self, next_start):
        """
        Sets the next_start of this Meeting.

        :param next_start: The next_start of this Meeting.
        :type: int
        """

        self._next_start = next_start

    @property
    def next_end(self):
        """
        Gets the next_end of this Meeting.

        :return: The next_end of this Meeting.
        :rtype: int
        """
        return self._next_end

    @next_end.setter
    def next_end(self, next_end):
        """
        Sets the next_end of this Meeting.

        :param next_end: The next_end of this Meeting.
        :type: int
        """

        self._next_end = next_end

    @property
    def is_personal_meeting(self):
        """
        Gets the is_personal_meeting of this Meeting.
        Use the scheduler's personal meeting room and Id for this meeting.

        :return: The is_personal_meeting of this Meeting.
        :rtype: bool
        """
        return self._is_personal_meeting

    @is_personal_meeting.setter
    def is_personal_meeting(self, is_personal_meeting):
        """
        Sets the is_personal_meeting of this Meeting.
        Use the scheduler's personal meeting room and Id for this meeting.

        :param is_personal_meeting: The is_personal_meeting of this Meeting.
        :type: bool
        """

        self._is_personal_meeting = is_personal_meeting

    @property
    def invitee_join_option(self):
        """
        Gets the invitee_join_option of this Meeting.

        :return: The invitee_join_option of this Meeting.
        :rtype: int
        """
        return self._invitee_join_option

    @invitee_join_option.setter
    def invitee_join_option(self, invitee_join_option):
        """
        Sets the invitee_join_option of this Meeting.

        :param invitee_join_option: The invitee_join_option of this Meeting.
        :type: int
        """

        self._invitee_join_option = invitee_join_option

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
        if not isinstance(other, Meeting):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

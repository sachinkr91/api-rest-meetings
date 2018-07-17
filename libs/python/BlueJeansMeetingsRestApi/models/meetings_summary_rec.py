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


class MeetingsSummaryRec(object):
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
        'meetings_count': 'int',
        'country_count': 'int',
        'registered_users': 'int',
        'active_users': 'int',
        'total_minutes': 'int',
        'average_call_duration': 'float',
        'total_participants': 'int',
        'recording_count': 'int',
        'average_participants': 'float',
        'video_share_count': 'int',
        'city_count': 'int',
        'recording_view_count': 'int'
    }

    attribute_map = {
        'meetings_count': 'meetings_count',
        'country_count': 'country_count',
        'registered_users': 'registered_users',
        'active_users': 'active_users',
        'total_minutes': 'total_minutes',
        'average_call_duration': 'average_call_duration',
        'total_participants': 'total_participants',
        'recording_count': 'recording_count',
        'average_participants': 'average_participants',
        'video_share_count': 'video_share_count',
        'city_count': 'city_count',
        'recording_view_count': 'recording_view_count'
    }

    def __init__(self, meetings_count=None, country_count=None, registered_users=None, active_users=None, total_minutes=None, average_call_duration=None, total_participants=None, recording_count=None, average_participants=None, video_share_count=None, city_count=None, recording_view_count=None):
        """
        MeetingsSummaryRec - a model defined in Swagger
        """

        self._meetings_count = None
        self._country_count = None
        self._registered_users = None
        self._active_users = None
        self._total_minutes = None
        self._average_call_duration = None
        self._total_participants = None
        self._recording_count = None
        self._average_participants = None
        self._video_share_count = None
        self._city_count = None
        self._recording_view_count = None

        if meetings_count is not None:
          self.meetings_count = meetings_count
        if country_count is not None:
          self.country_count = country_count
        if registered_users is not None:
          self.registered_users = registered_users
        if active_users is not None:
          self.active_users = active_users
        if total_minutes is not None:
          self.total_minutes = total_minutes
        if average_call_duration is not None:
          self.average_call_duration = average_call_duration
        if total_participants is not None:
          self.total_participants = total_participants
        if recording_count is not None:
          self.recording_count = recording_count
        if average_participants is not None:
          self.average_participants = average_participants
        if video_share_count is not None:
          self.video_share_count = video_share_count
        if city_count is not None:
          self.city_count = city_count
        if recording_view_count is not None:
          self.recording_view_count = recording_view_count

    @property
    def meetings_count(self):
        """
        Gets the meetings_count of this MeetingsSummaryRec.
        Number of meetings held

        :return: The meetings_count of this MeetingsSummaryRec.
        :rtype: int
        """
        return self._meetings_count

    @meetings_count.setter
    def meetings_count(self, meetings_count):
        """
        Sets the meetings_count of this MeetingsSummaryRec.
        Number of meetings held

        :param meetings_count: The meetings_count of this MeetingsSummaryRec.
        :type: int
        """

        self._meetings_count = meetings_count

    @property
    def country_count(self):
        """
        Gets the country_count of this MeetingsSummaryRec.
        Number of countries with participants in a meeting

        :return: The country_count of this MeetingsSummaryRec.
        :rtype: int
        """
        return self._country_count

    @country_count.setter
    def country_count(self, country_count):
        """
        Sets the country_count of this MeetingsSummaryRec.
        Number of countries with participants in a meeting

        :param country_count: The country_count of this MeetingsSummaryRec.
        :type: int
        """

        self._country_count = country_count

    @property
    def registered_users(self):
        """
        Gets the registered_users of this MeetingsSummaryRec.
        Number of registered BlueJeans users who were in meetings.

        :return: The registered_users of this MeetingsSummaryRec.
        :rtype: int
        """
        return self._registered_users

    @registered_users.setter
    def registered_users(self, registered_users):
        """
        Sets the registered_users of this MeetingsSummaryRec.
        Number of registered BlueJeans users who were in meetings.

        :param registered_users: The registered_users of this MeetingsSummaryRec.
        :type: int
        """

        self._registered_users = registered_users

    @property
    def active_users(self):
        """
        Gets the active_users of this MeetingsSummaryRec.

        :return: The active_users of this MeetingsSummaryRec.
        :rtype: int
        """
        return self._active_users

    @active_users.setter
    def active_users(self, active_users):
        """
        Sets the active_users of this MeetingsSummaryRec.

        :param active_users: The active_users of this MeetingsSummaryRec.
        :type: int
        """

        self._active_users = active_users

    @property
    def total_minutes(self):
        """
        Gets the total_minutes of this MeetingsSummaryRec.
        Total minutes of meetings.

        :return: The total_minutes of this MeetingsSummaryRec.
        :rtype: int
        """
        return self._total_minutes

    @total_minutes.setter
    def total_minutes(self, total_minutes):
        """
        Sets the total_minutes of this MeetingsSummaryRec.
        Total minutes of meetings.

        :param total_minutes: The total_minutes of this MeetingsSummaryRec.
        :type: int
        """

        self._total_minutes = total_minutes

    @property
    def average_call_duration(self):
        """
        Gets the average_call_duration of this MeetingsSummaryRec.
        Average number of minutes participants were in a meeting.

        :return: The average_call_duration of this MeetingsSummaryRec.
        :rtype: float
        """
        return self._average_call_duration

    @average_call_duration.setter
    def average_call_duration(self, average_call_duration):
        """
        Sets the average_call_duration of this MeetingsSummaryRec.
        Average number of minutes participants were in a meeting.

        :param average_call_duration: The average_call_duration of this MeetingsSummaryRec.
        :type: float
        """

        self._average_call_duration = average_call_duration

    @property
    def total_participants(self):
        """
        Gets the total_participants of this MeetingsSummaryRec.
        Total people who were in meetings.

        :return: The total_participants of this MeetingsSummaryRec.
        :rtype: int
        """
        return self._total_participants

    @total_participants.setter
    def total_participants(self, total_participants):
        """
        Sets the total_participants of this MeetingsSummaryRec.
        Total people who were in meetings.

        :param total_participants: The total_participants of this MeetingsSummaryRec.
        :type: int
        """

        self._total_participants = total_participants

    @property
    def recording_count(self):
        """
        Gets the recording_count of this MeetingsSummaryRec.
        Total number of meetings recorded.

        :return: The recording_count of this MeetingsSummaryRec.
        :rtype: int
        """
        return self._recording_count

    @recording_count.setter
    def recording_count(self, recording_count):
        """
        Sets the recording_count of this MeetingsSummaryRec.
        Total number of meetings recorded.

        :param recording_count: The recording_count of this MeetingsSummaryRec.
        :type: int
        """

        self._recording_count = recording_count

    @property
    def average_participants(self):
        """
        Gets the average_participants of this MeetingsSummaryRec.
        Average number of participants per meeting.

        :return: The average_participants of this MeetingsSummaryRec.
        :rtype: float
        """
        return self._average_participants

    @average_participants.setter
    def average_participants(self, average_participants):
        """
        Sets the average_participants of this MeetingsSummaryRec.
        Average number of participants per meeting.

        :param average_participants: The average_participants of this MeetingsSummaryRec.
        :type: float
        """

        self._average_participants = average_participants

    @property
    def video_share_count(self):
        """
        Gets the video_share_count of this MeetingsSummaryRec.

        :return: The video_share_count of this MeetingsSummaryRec.
        :rtype: int
        """
        return self._video_share_count

    @video_share_count.setter
    def video_share_count(self, video_share_count):
        """
        Sets the video_share_count of this MeetingsSummaryRec.

        :param video_share_count: The video_share_count of this MeetingsSummaryRec.
        :type: int
        """

        self._video_share_count = video_share_count

    @property
    def city_count(self):
        """
        Gets the city_count of this MeetingsSummaryRec.
        Total number of cities with meeting participants.

        :return: The city_count of this MeetingsSummaryRec.
        :rtype: int
        """
        return self._city_count

    @city_count.setter
    def city_count(self, city_count):
        """
        Sets the city_count of this MeetingsSummaryRec.
        Total number of cities with meeting participants.

        :param city_count: The city_count of this MeetingsSummaryRec.
        :type: int
        """

        self._city_count = city_count

    @property
    def recording_view_count(self):
        """
        Gets the recording_view_count of this MeetingsSummaryRec.
        Total number of times that recordings were viewed.

        :return: The recording_view_count of this MeetingsSummaryRec.
        :rtype: int
        """
        return self._recording_view_count

    @recording_view_count.setter
    def recording_view_count(self, recording_view_count):
        """
        Sets the recording_view_count of this MeetingsSummaryRec.
        Total number of times that recordings were viewed.

        :param recording_view_count: The recording_view_count of this MeetingsSummaryRec.
        :type: int
        """

        self._recording_view_count = recording_view_count

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
        if not isinstance(other, MeetingsSummaryRec):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

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


class Room(object):
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
        'numeric_id': 'str',
        'name': 'str',
        'origin_pop_id': 'int',
        'is_large_meeting': 'bool',
        'show_video_animations': 'bool',
        'background_image': 'str',
        'is_moderator_less': 'bool',
        'welcome_message': 'str',
        'disallow_chat': 'bool',
        'encryption_type': 'str',
        'show_all_participants_in_ics': 'bool',
        'participant_passcode': 'str',
        'publish_meeting': 'bool',
        'moderator_less': 'bool',
        'video_best_fit': 'bool',
        'mute_participants_on_entry': 'bool',
        'enforce_meeting_encryption': 'bool',
        'enforce_meeting_encryption_allow_pstn': 'bool',
        'idle_timeout': 'int',
        'default_layout': 'str',
        'play_audio_alerts': 'bool',
        'personal_meeting_id': 'int',
        'moderator_passcode': 'str'
    }

    attribute_map = {
        'id': 'id',
        'numeric_id': 'numericId',
        'name': 'name',
        'origin_pop_id': 'originPopId',
        'is_large_meeting': 'isLargeMeeting',
        'show_video_animations': 'showVideoAnimations',
        'background_image': 'backgroundImage',
        'is_moderator_less': 'isModeratorLess',
        'welcome_message': 'welcomeMessage',
        'disallow_chat': 'disallowChat',
        'encryption_type': 'encryptionType',
        'show_all_participants_in_ics': 'showAllParticipantsInIcs',
        'participant_passcode': 'participantPasscode',
        'publish_meeting': 'publishMeeting',
        'moderator_less': 'moderatorLess',
        'video_best_fit': 'videoBestFit',
        'mute_participants_on_entry': 'muteParticipantsOnEntry',
        'enforce_meeting_encryption': 'enforceMeetingEncryption',
        'enforce_meeting_encryption_allow_pstn': 'enforceMeetingEncryptionAllowPSTN',
        'idle_timeout': 'idleTimeout',
        'default_layout': 'defaultLayout',
        'play_audio_alerts': 'playAudioAlerts',
        'personal_meeting_id': 'personalMeetingId',
        'moderator_passcode': 'moderatorPasscode'
    }

    def __init__(self, id=None, numeric_id=None, name=None, origin_pop_id=None, is_large_meeting=None, show_video_animations=None, background_image=None, is_moderator_less=None, welcome_message=None, disallow_chat=None, encryption_type=None, show_all_participants_in_ics=None, participant_passcode=None, publish_meeting=None, moderator_less=None, video_best_fit=None, mute_participants_on_entry=None, enforce_meeting_encryption=None, enforce_meeting_encryption_allow_pstn=None, idle_timeout=None, default_layout=None, play_audio_alerts=None, personal_meeting_id=None, moderator_passcode=None):
        """
        Room - a model defined in Swagger
        """

        self._id = None
        self._numeric_id = None
        self._name = None
        self._origin_pop_id = None
        self._is_large_meeting = None
        self._show_video_animations = None
        self._background_image = None
        self._is_moderator_less = None
        self._welcome_message = None
        self._disallow_chat = None
        self._encryption_type = None
        self._show_all_participants_in_ics = None
        self._participant_passcode = None
        self._publish_meeting = None
        self._moderator_less = None
        self._video_best_fit = None
        self._mute_participants_on_entry = None
        self._enforce_meeting_encryption = None
        self._enforce_meeting_encryption_allow_pstn = None
        self._idle_timeout = None
        self._default_layout = None
        self._play_audio_alerts = None
        self._personal_meeting_id = None
        self._moderator_passcode = None

        if id is not None:
          self.id = id
        if numeric_id is not None:
          self.numeric_id = numeric_id
        if name is not None:
          self.name = name
        if origin_pop_id is not None:
          self.origin_pop_id = origin_pop_id
        if is_large_meeting is not None:
          self.is_large_meeting = is_large_meeting
        if show_video_animations is not None:
          self.show_video_animations = show_video_animations
        if background_image is not None:
          self.background_image = background_image
        if is_moderator_less is not None:
          self.is_moderator_less = is_moderator_less
        if welcome_message is not None:
          self.welcome_message = welcome_message
        if disallow_chat is not None:
          self.disallow_chat = disallow_chat
        if encryption_type is not None:
          self.encryption_type = encryption_type
        if show_all_participants_in_ics is not None:
          self.show_all_participants_in_ics = show_all_participants_in_ics
        if participant_passcode is not None:
          self.participant_passcode = participant_passcode
        if publish_meeting is not None:
          self.publish_meeting = publish_meeting
        if moderator_less is not None:
          self.moderator_less = moderator_less
        if video_best_fit is not None:
          self.video_best_fit = video_best_fit
        if mute_participants_on_entry is not None:
          self.mute_participants_on_entry = mute_participants_on_entry
        if enforce_meeting_encryption is not None:
          self.enforce_meeting_encryption = enforce_meeting_encryption
        if enforce_meeting_encryption_allow_pstn is not None:
          self.enforce_meeting_encryption_allow_pstn = enforce_meeting_encryption_allow_pstn
        if idle_timeout is not None:
          self.idle_timeout = idle_timeout
        if default_layout is not None:
          self.default_layout = default_layout
        if play_audio_alerts is not None:
          self.play_audio_alerts = play_audio_alerts
        if personal_meeting_id is not None:
          self.personal_meeting_id = personal_meeting_id
        if moderator_passcode is not None:
          self.moderator_passcode = moderator_passcode

    @property
    def id(self):
        """
        Gets the id of this Room.
        Unique identifier for room.

        :return: The id of this Room.
        :rtype: int
        """
        return self._id

    @id.setter
    def id(self, id):
        """
        Sets the id of this Room.
        Unique identifier for room.

        :param id: The id of this Room.
        :type: int
        """

        self._id = id

    @property
    def numeric_id(self):
        """
        Gets the numeric_id of this Room.
        Unique identifier for room.

        :return: The numeric_id of this Room.
        :rtype: str
        """
        return self._numeric_id

    @numeric_id.setter
    def numeric_id(self, numeric_id):
        """
        Sets the numeric_id of this Room.
        Unique identifier for room.

        :param numeric_id: The numeric_id of this Room.
        :type: str
        """

        self._numeric_id = numeric_id

    @property
    def name(self):
        """
        Gets the name of this Room.
        Name of the room.

        :return: The name of this Room.
        :rtype: str
        """
        return self._name

    @name.setter
    def name(self, name):
        """
        Sets the name of this Room.
        Name of the room.

        :param name: The name of this Room.
        :type: str
        """

        self._name = name

    @property
    def origin_pop_id(self):
        """
        Gets the origin_pop_id of this Room.

        :return: The origin_pop_id of this Room.
        :rtype: int
        """
        return self._origin_pop_id

    @origin_pop_id.setter
    def origin_pop_id(self, origin_pop_id):
        """
        Sets the origin_pop_id of this Room.

        :param origin_pop_id: The origin_pop_id of this Room.
        :type: int
        """

        self._origin_pop_id = origin_pop_id

    @property
    def is_large_meeting(self):
        """
        Gets the is_large_meeting of this Room.

        :return: The is_large_meeting of this Room.
        :rtype: bool
        """
        return self._is_large_meeting

    @is_large_meeting.setter
    def is_large_meeting(self, is_large_meeting):
        """
        Sets the is_large_meeting of this Room.

        :param is_large_meeting: The is_large_meeting of this Room.
        :type: bool
        """

        self._is_large_meeting = is_large_meeting

    @property
    def show_video_animations(self):
        """
        Gets the show_video_animations of this Room.

        :return: The show_video_animations of this Room.
        :rtype: bool
        """
        return self._show_video_animations

    @show_video_animations.setter
    def show_video_animations(self, show_video_animations):
        """
        Sets the show_video_animations of this Room.

        :param show_video_animations: The show_video_animations of this Room.
        :type: bool
        """

        self._show_video_animations = show_video_animations

    @property
    def background_image(self):
        """
        Gets the background_image of this Room.

        :return: The background_image of this Room.
        :rtype: str
        """
        return self._background_image

    @background_image.setter
    def background_image(self, background_image):
        """
        Sets the background_image of this Room.

        :param background_image: The background_image of this Room.
        :type: str
        """

        self._background_image = background_image

    @property
    def is_moderator_less(self):
        """
        Gets the is_moderator_less of this Room.

        :return: The is_moderator_less of this Room.
        :rtype: bool
        """
        return self._is_moderator_less

    @is_moderator_less.setter
    def is_moderator_less(self, is_moderator_less):
        """
        Sets the is_moderator_less of this Room.

        :param is_moderator_less: The is_moderator_less of this Room.
        :type: bool
        """

        self._is_moderator_less = is_moderator_less

    @property
    def welcome_message(self):
        """
        Gets the welcome_message of this Room.

        :return: The welcome_message of this Room.
        :rtype: str
        """
        return self._welcome_message

    @welcome_message.setter
    def welcome_message(self, welcome_message):
        """
        Sets the welcome_message of this Room.

        :param welcome_message: The welcome_message of this Room.
        :type: str
        """

        self._welcome_message = welcome_message

    @property
    def disallow_chat(self):
        """
        Gets the disallow_chat of this Room.

        :return: The disallow_chat of this Room.
        :rtype: bool
        """
        return self._disallow_chat

    @disallow_chat.setter
    def disallow_chat(self, disallow_chat):
        """
        Sets the disallow_chat of this Room.

        :param disallow_chat: The disallow_chat of this Room.
        :type: bool
        """

        self._disallow_chat = disallow_chat

    @property
    def encryption_type(self):
        """
        Gets the encryption_type of this Room.

        :return: The encryption_type of this Room.
        :rtype: str
        """
        return self._encryption_type

    @encryption_type.setter
    def encryption_type(self, encryption_type):
        """
        Sets the encryption_type of this Room.

        :param encryption_type: The encryption_type of this Room.
        :type: str
        """

        self._encryption_type = encryption_type

    @property
    def show_all_participants_in_ics(self):
        """
        Gets the show_all_participants_in_ics of this Room.

        :return: The show_all_participants_in_ics of this Room.
        :rtype: bool
        """
        return self._show_all_participants_in_ics

    @show_all_participants_in_ics.setter
    def show_all_participants_in_ics(self, show_all_participants_in_ics):
        """
        Sets the show_all_participants_in_ics of this Room.

        :param show_all_participants_in_ics: The show_all_participants_in_ics of this Room.
        :type: bool
        """

        self._show_all_participants_in_ics = show_all_participants_in_ics

    @property
    def participant_passcode(self):
        """
        Gets the participant_passcode of this Room.

        :return: The participant_passcode of this Room.
        :rtype: str
        """
        return self._participant_passcode

    @participant_passcode.setter
    def participant_passcode(self, participant_passcode):
        """
        Sets the participant_passcode of this Room.

        :param participant_passcode: The participant_passcode of this Room.
        :type: str
        """

        self._participant_passcode = participant_passcode

    @property
    def publish_meeting(self):
        """
        Gets the publish_meeting of this Room.

        :return: The publish_meeting of this Room.
        :rtype: bool
        """
        return self._publish_meeting

    @publish_meeting.setter
    def publish_meeting(self, publish_meeting):
        """
        Sets the publish_meeting of this Room.

        :param publish_meeting: The publish_meeting of this Room.
        :type: bool
        """

        self._publish_meeting = publish_meeting

    @property
    def moderator_less(self):
        """
        Gets the moderator_less of this Room.

        :return: The moderator_less of this Room.
        :rtype: bool
        """
        return self._moderator_less

    @moderator_less.setter
    def moderator_less(self, moderator_less):
        """
        Sets the moderator_less of this Room.

        :param moderator_less: The moderator_less of this Room.
        :type: bool
        """

        self._moderator_less = moderator_less

    @property
    def video_best_fit(self):
        """
        Gets the video_best_fit of this Room.

        :return: The video_best_fit of this Room.
        :rtype: bool
        """
        return self._video_best_fit

    @video_best_fit.setter
    def video_best_fit(self, video_best_fit):
        """
        Sets the video_best_fit of this Room.

        :param video_best_fit: The video_best_fit of this Room.
        :type: bool
        """

        self._video_best_fit = video_best_fit

    @property
    def mute_participants_on_entry(self):
        """
        Gets the mute_participants_on_entry of this Room.

        :return: The mute_participants_on_entry of this Room.
        :rtype: bool
        """
        return self._mute_participants_on_entry

    @mute_participants_on_entry.setter
    def mute_participants_on_entry(self, mute_participants_on_entry):
        """
        Sets the mute_participants_on_entry of this Room.

        :param mute_participants_on_entry: The mute_participants_on_entry of this Room.
        :type: bool
        """

        self._mute_participants_on_entry = mute_participants_on_entry

    @property
    def enforce_meeting_encryption(self):
        """
        Gets the enforce_meeting_encryption of this Room.

        :return: The enforce_meeting_encryption of this Room.
        :rtype: bool
        """
        return self._enforce_meeting_encryption

    @enforce_meeting_encryption.setter
    def enforce_meeting_encryption(self, enforce_meeting_encryption):
        """
        Sets the enforce_meeting_encryption of this Room.

        :param enforce_meeting_encryption: The enforce_meeting_encryption of this Room.
        :type: bool
        """

        self._enforce_meeting_encryption = enforce_meeting_encryption

    @property
    def enforce_meeting_encryption_allow_pstn(self):
        """
        Gets the enforce_meeting_encryption_allow_pstn of this Room.

        :return: The enforce_meeting_encryption_allow_pstn of this Room.
        :rtype: bool
        """
        return self._enforce_meeting_encryption_allow_pstn

    @enforce_meeting_encryption_allow_pstn.setter
    def enforce_meeting_encryption_allow_pstn(self, enforce_meeting_encryption_allow_pstn):
        """
        Sets the enforce_meeting_encryption_allow_pstn of this Room.

        :param enforce_meeting_encryption_allow_pstn: The enforce_meeting_encryption_allow_pstn of this Room.
        :type: bool
        """

        self._enforce_meeting_encryption_allow_pstn = enforce_meeting_encryption_allow_pstn

    @property
    def idle_timeout(self):
        """
        Gets the idle_timeout of this Room.

        :return: The idle_timeout of this Room.
        :rtype: int
        """
        return self._idle_timeout

    @idle_timeout.setter
    def idle_timeout(self, idle_timeout):
        """
        Sets the idle_timeout of this Room.

        :param idle_timeout: The idle_timeout of this Room.
        :type: int
        """

        self._idle_timeout = idle_timeout

    @property
    def default_layout(self):
        """
        Gets the default_layout of this Room.

        :return: The default_layout of this Room.
        :rtype: str
        """
        return self._default_layout

    @default_layout.setter
    def default_layout(self, default_layout):
        """
        Sets the default_layout of this Room.

        :param default_layout: The default_layout of this Room.
        :type: str
        """

        self._default_layout = default_layout

    @property
    def play_audio_alerts(self):
        """
        Gets the play_audio_alerts of this Room.

        :return: The play_audio_alerts of this Room.
        :rtype: bool
        """
        return self._play_audio_alerts

    @play_audio_alerts.setter
    def play_audio_alerts(self, play_audio_alerts):
        """
        Sets the play_audio_alerts of this Room.

        :param play_audio_alerts: The play_audio_alerts of this Room.
        :type: bool
        """

        self._play_audio_alerts = play_audio_alerts

    @property
    def personal_meeting_id(self):
        """
        Gets the personal_meeting_id of this Room.

        :return: The personal_meeting_id of this Room.
        :rtype: int
        """
        return self._personal_meeting_id

    @personal_meeting_id.setter
    def personal_meeting_id(self, personal_meeting_id):
        """
        Sets the personal_meeting_id of this Room.

        :param personal_meeting_id: The personal_meeting_id of this Room.
        :type: int
        """

        self._personal_meeting_id = personal_meeting_id

    @property
    def moderator_passcode(self):
        """
        Gets the moderator_passcode of this Room.

        :return: The moderator_passcode of this Room.
        :rtype: str
        """
        return self._moderator_passcode

    @moderator_passcode.setter
    def moderator_passcode(self, moderator_passcode):
        """
        Sets the moderator_passcode of this Room.

        :param moderator_passcode: The moderator_passcode of this Room.
        :type: str
        """

        self._moderator_passcode = moderator_passcode

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
        if not isinstance(other, Room):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

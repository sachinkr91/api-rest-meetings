# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/23/2018 </alert>Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr>   # noqa: E501

    OpenAPI spec version: 1.0.4407232018
    Contact: glenn@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


import pprint
import re  # noqa: F401

import six


class User(object):
    """NOTE: This class is auto generated by the swagger code generator program.

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
        'username': 'str',
        'first_name': 'str',
        'middle_name': 'str',
        'last_name': 'str',
        'email_id': 'str',
        'company': 'str',
        'title': 'str',
        'phone': 'str',
        'profile_picture': 'str',
        'timezone': 'str',
        'time_format': 'int',
        'language': 'str',
        'skype_id': 'str',
        'gtalk_id': 'str',
        'default_endpoint': 'str',
        'password_change_required': 'bool',
        'marketo_id': 'str',
        'opt_out_offers': 'bool',
        'opt_out_news': 'bool',
        'geo_info': 'str',
        'how_did_you_hear': 'str',
        'sfdc_token': 'str',
        'linkedin_profile_url': 'str',
        'last_login': 'int',
        'date_joined': 'int',
        'jid': 'str',
        'primary_phone': 'str',
        'failed_login_count': 'int',
        'is_initial_setup_done': 'bool',
        'channel_id': 'int',
        'is_verified': 'bool'
    }

    attribute_map = {
        'id': 'id',
        'username': 'username',
        'first_name': 'firstName',
        'middle_name': 'middleName',
        'last_name': 'lastName',
        'email_id': 'emailId',
        'company': 'company',
        'title': 'title',
        'phone': 'phone',
        'profile_picture': 'profilePicture',
        'timezone': 'timezone',
        'time_format': 'timeFormat',
        'language': 'language',
        'skype_id': 'skypeId',
        'gtalk_id': 'gtalkId',
        'default_endpoint': 'defaultEndpoint',
        'password_change_required': 'passwordChangeRequired',
        'marketo_id': 'marketoId',
        'opt_out_offers': 'optOutOffers',
        'opt_out_news': 'optOutNews',
        'geo_info': 'geoInfo',
        'how_did_you_hear': 'howDidYouHear',
        'sfdc_token': 'sfdcToken',
        'linkedin_profile_url': 'linkedinProfileUrl',
        'last_login': 'lastLogin',
        'date_joined': 'dateJoined',
        'jid': 'jid',
        'primary_phone': 'primaryPhone',
        'failed_login_count': 'failedLoginCount',
        'is_initial_setup_done': 'isInitialSetupDone',
        'channel_id': 'channel_id',
        'is_verified': 'isVerified'
    }

    def __init__(self, id=None, username=None, first_name=None, middle_name=None, last_name=None, email_id=None, company=None, title=None, phone=None, profile_picture=None, timezone=None, time_format=None, language=None, skype_id=None, gtalk_id=None, default_endpoint=None, password_change_required=None, marketo_id=None, opt_out_offers=None, opt_out_news=None, geo_info=None, how_did_you_hear=None, sfdc_token=None, linkedin_profile_url=None, last_login=None, date_joined=None, jid=None, primary_phone=None, failed_login_count=None, is_initial_setup_done=None, channel_id=None, is_verified=None):  # noqa: E501
        """User - a model defined in Swagger"""  # noqa: E501

        self._id = None
        self._username = None
        self._first_name = None
        self._middle_name = None
        self._last_name = None
        self._email_id = None
        self._company = None
        self._title = None
        self._phone = None
        self._profile_picture = None
        self._timezone = None
        self._time_format = None
        self._language = None
        self._skype_id = None
        self._gtalk_id = None
        self._default_endpoint = None
        self._password_change_required = None
        self._marketo_id = None
        self._opt_out_offers = None
        self._opt_out_news = None
        self._geo_info = None
        self._how_did_you_hear = None
        self._sfdc_token = None
        self._linkedin_profile_url = None
        self._last_login = None
        self._date_joined = None
        self._jid = None
        self._primary_phone = None
        self._failed_login_count = None
        self._is_initial_setup_done = None
        self._channel_id = None
        self._is_verified = None
        self.discriminator = None

        if id is not None:
            self.id = id
        if username is not None:
            self.username = username
        if first_name is not None:
            self.first_name = first_name
        if middle_name is not None:
            self.middle_name = middle_name
        if last_name is not None:
            self.last_name = last_name
        if email_id is not None:
            self.email_id = email_id
        if company is not None:
            self.company = company
        if title is not None:
            self.title = title
        if phone is not None:
            self.phone = phone
        if profile_picture is not None:
            self.profile_picture = profile_picture
        if timezone is not None:
            self.timezone = timezone
        if time_format is not None:
            self.time_format = time_format
        if language is not None:
            self.language = language
        if skype_id is not None:
            self.skype_id = skype_id
        if gtalk_id is not None:
            self.gtalk_id = gtalk_id
        if default_endpoint is not None:
            self.default_endpoint = default_endpoint
        if password_change_required is not None:
            self.password_change_required = password_change_required
        if marketo_id is not None:
            self.marketo_id = marketo_id
        if opt_out_offers is not None:
            self.opt_out_offers = opt_out_offers
        if opt_out_news is not None:
            self.opt_out_news = opt_out_news
        if geo_info is not None:
            self.geo_info = geo_info
        if how_did_you_hear is not None:
            self.how_did_you_hear = how_did_you_hear
        if sfdc_token is not None:
            self.sfdc_token = sfdc_token
        if linkedin_profile_url is not None:
            self.linkedin_profile_url = linkedin_profile_url
        if last_login is not None:
            self.last_login = last_login
        if date_joined is not None:
            self.date_joined = date_joined
        if jid is not None:
            self.jid = jid
        if primary_phone is not None:
            self.primary_phone = primary_phone
        if failed_login_count is not None:
            self.failed_login_count = failed_login_count
        if is_initial_setup_done is not None:
            self.is_initial_setup_done = is_initial_setup_done
        if channel_id is not None:
            self.channel_id = channel_id
        if is_verified is not None:
            self.is_verified = is_verified

    @property
    def id(self):
        """Gets the id of this User.  # noqa: E501

        Unique identifier for the user.  # noqa: E501

        :return: The id of this User.  # noqa: E501
        :rtype: int
        """
        return self._id

    @id.setter
    def id(self, id):
        """Sets the id of this User.

        Unique identifier for the user.  # noqa: E501

        :param id: The id of this User.  # noqa: E501
        :type: int
        """

        self._id = id

    @property
    def username(self):
        """Gets the username of this User.  # noqa: E501

        User's username  # noqa: E501

        :return: The username of this User.  # noqa: E501
        :rtype: str
        """
        return self._username

    @username.setter
    def username(self, username):
        """Sets the username of this User.

        User's username  # noqa: E501

        :param username: The username of this User.  # noqa: E501
        :type: str
        """

        self._username = username

    @property
    def first_name(self):
        """Gets the first_name of this User.  # noqa: E501

        User's first name  # noqa: E501

        :return: The first_name of this User.  # noqa: E501
        :rtype: str
        """
        return self._first_name

    @first_name.setter
    def first_name(self, first_name):
        """Sets the first_name of this User.

        User's first name  # noqa: E501

        :param first_name: The first_name of this User.  # noqa: E501
        :type: str
        """

        self._first_name = first_name

    @property
    def middle_name(self):
        """Gets the middle_name of this User.  # noqa: E501

        User's middle name  # noqa: E501

        :return: The middle_name of this User.  # noqa: E501
        :rtype: str
        """
        return self._middle_name

    @middle_name.setter
    def middle_name(self, middle_name):
        """Sets the middle_name of this User.

        User's middle name  # noqa: E501

        :param middle_name: The middle_name of this User.  # noqa: E501
        :type: str
        """

        self._middle_name = middle_name

    @property
    def last_name(self):
        """Gets the last_name of this User.  # noqa: E501

        User's last name  # noqa: E501

        :return: The last_name of this User.  # noqa: E501
        :rtype: str
        """
        return self._last_name

    @last_name.setter
    def last_name(self, last_name):
        """Sets the last_name of this User.

        User's last name  # noqa: E501

        :param last_name: The last_name of this User.  # noqa: E501
        :type: str
        """

        self._last_name = last_name

    @property
    def email_id(self):
        """Gets the email_id of this User.  # noqa: E501

        User's email address  # noqa: E501

        :return: The email_id of this User.  # noqa: E501
        :rtype: str
        """
        return self._email_id

    @email_id.setter
    def email_id(self, email_id):
        """Sets the email_id of this User.

        User's email address  # noqa: E501

        :param email_id: The email_id of this User.  # noqa: E501
        :type: str
        """

        self._email_id = email_id

    @property
    def company(self):
        """Gets the company of this User.  # noqa: E501

        User's company name  # noqa: E501

        :return: The company of this User.  # noqa: E501
        :rtype: str
        """
        return self._company

    @company.setter
    def company(self, company):
        """Sets the company of this User.

        User's company name  # noqa: E501

        :param company: The company of this User.  # noqa: E501
        :type: str
        """

        self._company = company

    @property
    def title(self):
        """Gets the title of this User.  # noqa: E501

        User's title  # noqa: E501

        :return: The title of this User.  # noqa: E501
        :rtype: str
        """
        return self._title

    @title.setter
    def title(self, title):
        """Sets the title of this User.

        User's title  # noqa: E501

        :param title: The title of this User.  # noqa: E501
        :type: str
        """

        self._title = title

    @property
    def phone(self):
        """Gets the phone of this User.  # noqa: E501

        User's phone  # noqa: E501

        :return: The phone of this User.  # noqa: E501
        :rtype: str
        """
        return self._phone

    @phone.setter
    def phone(self, phone):
        """Sets the phone of this User.

        User's phone  # noqa: E501

        :param phone: The phone of this User.  # noqa: E501
        :type: str
        """

        self._phone = phone

    @property
    def profile_picture(self):
        """Gets the profile_picture of this User.  # noqa: E501

        Path to user's profile picture  # noqa: E501

        :return: The profile_picture of this User.  # noqa: E501
        :rtype: str
        """
        return self._profile_picture

    @profile_picture.setter
    def profile_picture(self, profile_picture):
        """Sets the profile_picture of this User.

        Path to user's profile picture  # noqa: E501

        :param profile_picture: The profile_picture of this User.  # noqa: E501
        :type: str
        """

        self._profile_picture = profile_picture

    @property
    def timezone(self):
        """Gets the timezone of this User.  # noqa: E501

        User's timezone  # noqa: E501

        :return: The timezone of this User.  # noqa: E501
        :rtype: str
        """
        return self._timezone

    @timezone.setter
    def timezone(self, timezone):
        """Sets the timezone of this User.

        User's timezone  # noqa: E501

        :param timezone: The timezone of this User.  # noqa: E501
        :type: str
        """

        self._timezone = timezone

    @property
    def time_format(self):
        """Gets the time_format of this User.  # noqa: E501

        User's preference of 12 or 24 hour time display  # noqa: E501

        :return: The time_format of this User.  # noqa: E501
        :rtype: int
        """
        return self._time_format

    @time_format.setter
    def time_format(self, time_format):
        """Sets the time_format of this User.

        User's preference of 12 or 24 hour time display  # noqa: E501

        :param time_format: The time_format of this User.  # noqa: E501
        :type: int
        """

        self._time_format = time_format

    @property
    def language(self):
        """Gets the language of this User.  # noqa: E501

        User's language code, e.g., \"en\"  # noqa: E501

        :return: The language of this User.  # noqa: E501
        :rtype: str
        """
        return self._language

    @language.setter
    def language(self, language):
        """Sets the language of this User.

        User's language code, e.g., \"en\"  # noqa: E501

        :param language: The language of this User.  # noqa: E501
        :type: str
        """

        self._language = language

    @property
    def skype_id(self):
        """Gets the skype_id of this User.  # noqa: E501

        User's skype account identifier  # noqa: E501

        :return: The skype_id of this User.  # noqa: E501
        :rtype: str
        """
        return self._skype_id

    @skype_id.setter
    def skype_id(self, skype_id):
        """Sets the skype_id of this User.

        User's skype account identifier  # noqa: E501

        :param skype_id: The skype_id of this User.  # noqa: E501
        :type: str
        """

        self._skype_id = skype_id

    @property
    def gtalk_id(self):
        """Gets the gtalk_id of this User.  # noqa: E501

        User's Google Talk account identified  # noqa: E501

        :return: The gtalk_id of this User.  # noqa: E501
        :rtype: str
        """
        return self._gtalk_id

    @gtalk_id.setter
    def gtalk_id(self, gtalk_id):
        """Sets the gtalk_id of this User.

        User's Google Talk account identified  # noqa: E501

        :param gtalk_id: The gtalk_id of this User.  # noqa: E501
        :type: str
        """

        self._gtalk_id = gtalk_id

    @property
    def default_endpoint(self):
        """Gets the default_endpoint of this User.  # noqa: E501

        Default type of client user attends meetings  # noqa: E501

        :return: The default_endpoint of this User.  # noqa: E501
        :rtype: str
        """
        return self._default_endpoint

    @default_endpoint.setter
    def default_endpoint(self, default_endpoint):
        """Sets the default_endpoint of this User.

        Default type of client user attends meetings  # noqa: E501

        :param default_endpoint: The default_endpoint of this User.  # noqa: E501
        :type: str
        """

        self._default_endpoint = default_endpoint

    @property
    def password_change_required(self):
        """Gets the password_change_required of this User.  # noqa: E501

        Force user to change their password on next login  # noqa: E501

        :return: The password_change_required of this User.  # noqa: E501
        :rtype: bool
        """
        return self._password_change_required

    @password_change_required.setter
    def password_change_required(self, password_change_required):
        """Sets the password_change_required of this User.

        Force user to change their password on next login  # noqa: E501

        :param password_change_required: The password_change_required of this User.  # noqa: E501
        :type: bool
        """

        self._password_change_required = password_change_required

    @property
    def marketo_id(self):
        """Gets the marketo_id of this User.  # noqa: E501

        User's Marketo Account identifier  # noqa: E501

        :return: The marketo_id of this User.  # noqa: E501
        :rtype: str
        """
        return self._marketo_id

    @marketo_id.setter
    def marketo_id(self, marketo_id):
        """Sets the marketo_id of this User.

        User's Marketo Account identifier  # noqa: E501

        :param marketo_id: The marketo_id of this User.  # noqa: E501
        :type: str
        """

        self._marketo_id = marketo_id

    @property
    def opt_out_offers(self):
        """Gets the opt_out_offers of this User.  # noqa: E501

        Do not include in Product Offerings  # noqa: E501

        :return: The opt_out_offers of this User.  # noqa: E501
        :rtype: bool
        """
        return self._opt_out_offers

    @opt_out_offers.setter
    def opt_out_offers(self, opt_out_offers):
        """Sets the opt_out_offers of this User.

        Do not include in Product Offerings  # noqa: E501

        :param opt_out_offers: The opt_out_offers of this User.  # noqa: E501
        :type: bool
        """

        self._opt_out_offers = opt_out_offers

    @property
    def opt_out_news(self):
        """Gets the opt_out_news of this User.  # noqa: E501


        :return: The opt_out_news of this User.  # noqa: E501
        :rtype: bool
        """
        return self._opt_out_news

    @opt_out_news.setter
    def opt_out_news(self, opt_out_news):
        """Sets the opt_out_news of this User.


        :param opt_out_news: The opt_out_news of this User.  # noqa: E501
        :type: bool
        """

        self._opt_out_news = opt_out_news

    @property
    def geo_info(self):
        """Gets the geo_info of this User.  # noqa: E501

        JSON string containing User's geographic information including city,state,postal code, country (abbrev, i.e., \"US\"),time zone, country name (i.e.,\"United States\"), ISP, latitude, and longitude  # noqa: E501

        :return: The geo_info of this User.  # noqa: E501
        :rtype: str
        """
        return self._geo_info

    @geo_info.setter
    def geo_info(self, geo_info):
        """Sets the geo_info of this User.

        JSON string containing User's geographic information including city,state,postal code, country (abbrev, i.e., \"US\"),time zone, country name (i.e.,\"United States\"), ISP, latitude, and longitude  # noqa: E501

        :param geo_info: The geo_info of this User.  # noqa: E501
        :type: str
        """

        self._geo_info = geo_info

    @property
    def how_did_you_hear(self):
        """Gets the how_did_you_hear of this User.  # noqa: E501

        Description of how customer heard about BlueJeans  # noqa: E501

        :return: The how_did_you_hear of this User.  # noqa: E501
        :rtype: str
        """
        return self._how_did_you_hear

    @how_did_you_hear.setter
    def how_did_you_hear(self, how_did_you_hear):
        """Sets the how_did_you_hear of this User.

        Description of how customer heard about BlueJeans  # noqa: E501

        :param how_did_you_hear: The how_did_you_hear of this User.  # noqa: E501
        :type: str
        """

        self._how_did_you_hear = how_did_you_hear

    @property
    def sfdc_token(self):
        """Gets the sfdc_token of this User.  # noqa: E501

        OAuth token used for Salesforce integration  # noqa: E501

        :return: The sfdc_token of this User.  # noqa: E501
        :rtype: str
        """
        return self._sfdc_token

    @sfdc_token.setter
    def sfdc_token(self, sfdc_token):
        """Sets the sfdc_token of this User.

        OAuth token used for Salesforce integration  # noqa: E501

        :param sfdc_token: The sfdc_token of this User.  # noqa: E501
        :type: str
        """

        self._sfdc_token = sfdc_token

    @property
    def linkedin_profile_url(self):
        """Gets the linkedin_profile_url of this User.  # noqa: E501

        hyperlink to User's LinkedIn profile  # noqa: E501

        :return: The linkedin_profile_url of this User.  # noqa: E501
        :rtype: str
        """
        return self._linkedin_profile_url

    @linkedin_profile_url.setter
    def linkedin_profile_url(self, linkedin_profile_url):
        """Sets the linkedin_profile_url of this User.

        hyperlink to User's LinkedIn profile  # noqa: E501

        :param linkedin_profile_url: The linkedin_profile_url of this User.  # noqa: E501
        :type: str
        """

        self._linkedin_profile_url = linkedin_profile_url

    @property
    def last_login(self):
        """Gets the last_login of this User.  # noqa: E501

        Date and time (in milliseconds) of the User's last login  # noqa: E501

        :return: The last_login of this User.  # noqa: E501
        :rtype: int
        """
        return self._last_login

    @last_login.setter
    def last_login(self, last_login):
        """Sets the last_login of this User.

        Date and time (in milliseconds) of the User's last login  # noqa: E501

        :param last_login: The last_login of this User.  # noqa: E501
        :type: int
        """

        self._last_login = last_login

    @property
    def date_joined(self):
        """Gets the date_joined of this User.  # noqa: E501

        Date and time when BlueJeans account was created  # noqa: E501

        :return: The date_joined of this User.  # noqa: E501
        :rtype: int
        """
        return self._date_joined

    @date_joined.setter
    def date_joined(self, date_joined):
        """Sets the date_joined of this User.

        Date and time when BlueJeans account was created  # noqa: E501

        :param date_joined: The date_joined of this User.  # noqa: E501
        :type: int
        """

        self._date_joined = date_joined

    @property
    def jid(self):
        """Gets the jid of this User.  # noqa: E501

        User's Jabber Account Identifier  # noqa: E501

        :return: The jid of this User.  # noqa: E501
        :rtype: str
        """
        return self._jid

    @jid.setter
    def jid(self, jid):
        """Sets the jid of this User.

        User's Jabber Account Identifier  # noqa: E501

        :param jid: The jid of this User.  # noqa: E501
        :type: str
        """

        self._jid = jid

    @property
    def primary_phone(self):
        """Gets the primary_phone of this User.  # noqa: E501

        User's phone number  # noqa: E501

        :return: The primary_phone of this User.  # noqa: E501
        :rtype: str
        """
        return self._primary_phone

    @primary_phone.setter
    def primary_phone(self, primary_phone):
        """Sets the primary_phone of this User.

        User's phone number  # noqa: E501

        :param primary_phone: The primary_phone of this User.  # noqa: E501
        :type: str
        """

        self._primary_phone = primary_phone

    @property
    def failed_login_count(self):
        """Gets the failed_login_count of this User.  # noqa: E501

        Count of how many times a user tried to enter their account password  # noqa: E501

        :return: The failed_login_count of this User.  # noqa: E501
        :rtype: int
        """
        return self._failed_login_count

    @failed_login_count.setter
    def failed_login_count(self, failed_login_count):
        """Sets the failed_login_count of this User.

        Count of how many times a user tried to enter their account password  # noqa: E501

        :param failed_login_count: The failed_login_count of this User.  # noqa: E501
        :type: int
        """

        self._failed_login_count = failed_login_count

    @property
    def is_initial_setup_done(self):
        """Gets the is_initial_setup_done of this User.  # noqa: E501


        :return: The is_initial_setup_done of this User.  # noqa: E501
        :rtype: bool
        """
        return self._is_initial_setup_done

    @is_initial_setup_done.setter
    def is_initial_setup_done(self, is_initial_setup_done):
        """Sets the is_initial_setup_done of this User.


        :param is_initial_setup_done: The is_initial_setup_done of this User.  # noqa: E501
        :type: bool
        """

        self._is_initial_setup_done = is_initial_setup_done

    @property
    def channel_id(self):
        """Gets the channel_id of this User.  # noqa: E501


        :return: The channel_id of this User.  # noqa: E501
        :rtype: int
        """
        return self._channel_id

    @channel_id.setter
    def channel_id(self, channel_id):
        """Sets the channel_id of this User.


        :param channel_id: The channel_id of this User.  # noqa: E501
        :type: int
        """

        self._channel_id = channel_id

    @property
    def is_verified(self):
        """Gets the is_verified of this User.  # noqa: E501

        BlueJeans has validated authenticity of the account owner  # noqa: E501

        :return: The is_verified of this User.  # noqa: E501
        :rtype: bool
        """
        return self._is_verified

    @is_verified.setter
    def is_verified(self, is_verified):
        """Sets the is_verified of this User.

        BlueJeans has validated authenticity of the account owner  # noqa: E501

        :param is_verified: The is_verified of this User.  # noqa: E501
        :type: bool
        """

        self._is_verified = is_verified

    def to_dict(self):
        """Returns the model properties as a dict"""
        result = {}

        for attr, _ in six.iteritems(self.swagger_types):
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
        if issubclass(User, dict):
            for key, value in self.items():
                result[key] = value

        return result

    def to_str(self):
        """Returns the string representation of the model"""
        return pprint.pformat(self.to_dict())

    def __repr__(self):
        """For `print` and `pprint`"""
        return self.to_str()

    def __eq__(self, other):
        """Returns true if both objects are equal"""
        if not isinstance(other, User):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other

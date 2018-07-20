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


class AnalyticsEndpointDistributionDistribution(object):
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
        'google': 'int',
        'telepresence': 'int',
        'lync': 'int',
        'i_os': 'int',
        'h323': 'int',
        'inter_call': 'int',
        'jabber': 'int',
        'android': 'int',
        'skype': 'int',
        'isdn': 'int',
        'pstn': 'int',
        'level3': 'int',
        'sip': 'int',
        'blue_jeans_app': 'int',
        'browser': 'int',
        'web_rtc': 'int'
    }

    attribute_map = {
        'google': 'Google',
        'telepresence': 'Telepresence',
        'lync': 'Lync',
        'i_os': 'iOS',
        'h323': 'H323',
        'inter_call': 'InterCall',
        'jabber': 'Jabber',
        'android': 'Android',
        'skype': 'Skype',
        'isdn': 'ISDN',
        'pstn': 'PSTN',
        'level3': 'Level3',
        'sip': 'SIP',
        'blue_jeans_app': 'BlueJeansApp',
        'browser': 'Browser',
        'web_rtc': 'WebRTC'
    }

    def __init__(self, google=None, telepresence=None, lync=None, i_os=None, h323=None, inter_call=None, jabber=None, android=None, skype=None, isdn=None, pstn=None, level3=None, sip=None, blue_jeans_app=None, browser=None, web_rtc=None):
        """
        AnalyticsEndpointDistributionDistribution - a model defined in Swagger
        """

        self._google = None
        self._telepresence = None
        self._lync = None
        self._i_os = None
        self._h323 = None
        self._inter_call = None
        self._jabber = None
        self._android = None
        self._skype = None
        self._isdn = None
        self._pstn = None
        self._level3 = None
        self._sip = None
        self._blue_jeans_app = None
        self._browser = None
        self._web_rtc = None

        if google is not None:
          self.google = google
        if telepresence is not None:
          self.telepresence = telepresence
        if lync is not None:
          self.lync = lync
        if i_os is not None:
          self.i_os = i_os
        if h323 is not None:
          self.h323 = h323
        if inter_call is not None:
          self.inter_call = inter_call
        if jabber is not None:
          self.jabber = jabber
        if android is not None:
          self.android = android
        if skype is not None:
          self.skype = skype
        if isdn is not None:
          self.isdn = isdn
        if pstn is not None:
          self.pstn = pstn
        if level3 is not None:
          self.level3 = level3
        if sip is not None:
          self.sip = sip
        if blue_jeans_app is not None:
          self.blue_jeans_app = blue_jeans_app
        if browser is not None:
          self.browser = browser
        if web_rtc is not None:
          self.web_rtc = web_rtc

    @property
    def google(self):
        """
        Gets the google of this AnalyticsEndpointDistributionDistribution.

        :return: The google of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._google

    @google.setter
    def google(self, google):
        """
        Sets the google of this AnalyticsEndpointDistributionDistribution.

        :param google: The google of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._google = google

    @property
    def telepresence(self):
        """
        Gets the telepresence of this AnalyticsEndpointDistributionDistribution.

        :return: The telepresence of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._telepresence

    @telepresence.setter
    def telepresence(self, telepresence):
        """
        Sets the telepresence of this AnalyticsEndpointDistributionDistribution.

        :param telepresence: The telepresence of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._telepresence = telepresence

    @property
    def lync(self):
        """
        Gets the lync of this AnalyticsEndpointDistributionDistribution.

        :return: The lync of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._lync

    @lync.setter
    def lync(self, lync):
        """
        Sets the lync of this AnalyticsEndpointDistributionDistribution.

        :param lync: The lync of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._lync = lync

    @property
    def i_os(self):
        """
        Gets the i_os of this AnalyticsEndpointDistributionDistribution.

        :return: The i_os of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._i_os

    @i_os.setter
    def i_os(self, i_os):
        """
        Sets the i_os of this AnalyticsEndpointDistributionDistribution.

        :param i_os: The i_os of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._i_os = i_os

    @property
    def h323(self):
        """
        Gets the h323 of this AnalyticsEndpointDistributionDistribution.

        :return: The h323 of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._h323

    @h323.setter
    def h323(self, h323):
        """
        Sets the h323 of this AnalyticsEndpointDistributionDistribution.

        :param h323: The h323 of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._h323 = h323

    @property
    def inter_call(self):
        """
        Gets the inter_call of this AnalyticsEndpointDistributionDistribution.

        :return: The inter_call of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._inter_call

    @inter_call.setter
    def inter_call(self, inter_call):
        """
        Sets the inter_call of this AnalyticsEndpointDistributionDistribution.

        :param inter_call: The inter_call of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._inter_call = inter_call

    @property
    def jabber(self):
        """
        Gets the jabber of this AnalyticsEndpointDistributionDistribution.

        :return: The jabber of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._jabber

    @jabber.setter
    def jabber(self, jabber):
        """
        Sets the jabber of this AnalyticsEndpointDistributionDistribution.

        :param jabber: The jabber of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._jabber = jabber

    @property
    def android(self):
        """
        Gets the android of this AnalyticsEndpointDistributionDistribution.

        :return: The android of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._android

    @android.setter
    def android(self, android):
        """
        Sets the android of this AnalyticsEndpointDistributionDistribution.

        :param android: The android of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._android = android

    @property
    def skype(self):
        """
        Gets the skype of this AnalyticsEndpointDistributionDistribution.

        :return: The skype of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._skype

    @skype.setter
    def skype(self, skype):
        """
        Sets the skype of this AnalyticsEndpointDistributionDistribution.

        :param skype: The skype of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._skype = skype

    @property
    def isdn(self):
        """
        Gets the isdn of this AnalyticsEndpointDistributionDistribution.

        :return: The isdn of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._isdn

    @isdn.setter
    def isdn(self, isdn):
        """
        Sets the isdn of this AnalyticsEndpointDistributionDistribution.

        :param isdn: The isdn of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._isdn = isdn

    @property
    def pstn(self):
        """
        Gets the pstn of this AnalyticsEndpointDistributionDistribution.

        :return: The pstn of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._pstn

    @pstn.setter
    def pstn(self, pstn):
        """
        Sets the pstn of this AnalyticsEndpointDistributionDistribution.

        :param pstn: The pstn of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._pstn = pstn

    @property
    def level3(self):
        """
        Gets the level3 of this AnalyticsEndpointDistributionDistribution.

        :return: The level3 of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._level3

    @level3.setter
    def level3(self, level3):
        """
        Sets the level3 of this AnalyticsEndpointDistributionDistribution.

        :param level3: The level3 of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._level3 = level3

    @property
    def sip(self):
        """
        Gets the sip of this AnalyticsEndpointDistributionDistribution.

        :return: The sip of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._sip

    @sip.setter
    def sip(self, sip):
        """
        Sets the sip of this AnalyticsEndpointDistributionDistribution.

        :param sip: The sip of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._sip = sip

    @property
    def blue_jeans_app(self):
        """
        Gets the blue_jeans_app of this AnalyticsEndpointDistributionDistribution.

        :return: The blue_jeans_app of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._blue_jeans_app

    @blue_jeans_app.setter
    def blue_jeans_app(self, blue_jeans_app):
        """
        Sets the blue_jeans_app of this AnalyticsEndpointDistributionDistribution.

        :param blue_jeans_app: The blue_jeans_app of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._blue_jeans_app = blue_jeans_app

    @property
    def browser(self):
        """
        Gets the browser of this AnalyticsEndpointDistributionDistribution.

        :return: The browser of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._browser

    @browser.setter
    def browser(self, browser):
        """
        Sets the browser of this AnalyticsEndpointDistributionDistribution.

        :param browser: The browser of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._browser = browser

    @property
    def web_rtc(self):
        """
        Gets the web_rtc of this AnalyticsEndpointDistributionDistribution.

        :return: The web_rtc of this AnalyticsEndpointDistributionDistribution.
        :rtype: int
        """
        return self._web_rtc

    @web_rtc.setter
    def web_rtc(self, web_rtc):
        """
        Sets the web_rtc of this AnalyticsEndpointDistributionDistribution.

        :param web_rtc: The web_rtc of this AnalyticsEndpointDistributionDistribution.
        :type: int
        """

        self._web_rtc = web_rtc

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
        if not isinstance(other, AnalyticsEndpointDistributionDistribution):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

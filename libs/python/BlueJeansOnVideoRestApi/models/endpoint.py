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


class Endpoint(object):
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
        'ec_mode': 'str',
        'creationtime': 'str',
        'audio_remote_rtcp_address': 'str',
        'video_send_codec': 'str',
        'audio_play_id': 'str',
        'call_quality_recv': 'str',
        'session_out': 'str',
        'audio_local_address': 'str',
        'meetingid': 'str',
        'video_send_width': 'str',
        'call_quality_send': 'str',
        'mhaddress': 'str',
        'rdc_controllee_capable': 'str',
        'audio_cap_name': 'str',
        'proxy_info': 'str',
        'audio_send_codec': 'str',
        'vendor': 'str',
        'video_recv_width': 'str',
        'conaddress': 'str',
        'talk_detected': 'str',
        'sub_layout': 'str',
        'audio_rtcp_relay': 'str',
        'audio_recv_local_mute': 'str',
        'name': 'str',
        'video_local_address': 'str',
        'audio_local_rtcp_address': 'str',
        'content_rtp_relay': 'str',
        'content_local_rtcp_address': 'str',
        'remote_connection_count': 'str',
        'callrate': 'str',
        'mixer_guid': 'str',
        'transport': 'str',
        'audio_cap_select_id': 'str',
        'country_code': 'str',
        'rdc_controller_capable': 'str',
        'pairedname': 'str',
        'video_rtcp_relay': 'str',
        'endpoint_cpu_params': 'str',
        'video_remote_address': 'str',
        'version': 'str',
        'content_recv': 'str',
        'local_name': 'str',
        'bjn_user_id': 'str',
        'content_remote_address': 'str',
        'audio_send': 'str',
        'participant_dtmf_menus': 'str',
        'video_rtcp_transpor': 'str',
        'audio_rtcp_transport': 'str',
        'relay_node_id': 'str',
        'content_remote_rtcp_address': 'str',
        'audio_rtp_relay': 'str',
        'video_rtp_transport': 'str',
        'content_recv_local_mute': 'str',
        'layout': 'str',
        'content_send': 'str',
        'remoteaddress': 'str',
        'meeting_guid': 'str',
        'connecttime': 'str',
        'localaddress': 'str',
        'audio_remote_address': 'str',
        'bonded_audio_guid': 'str',
        'audio_recv_remote_mute': 'str',
        'session_out_relay': 'str',
        'leader': 'str',
        'content_local_address': 'str',
        'movie_capable': 'str',
        'video_recv_local_mute': 'str',
        'content_rtp_transport': 'str',
        'rdc_version': 'str',
        'audio_recv': 'str',
        'content_relay_server': 'str',
        'video_recv': 'str',
        'visibility': 'str',
        'sessionid': 'str',
        'content_rtcp_relay': 'str',
        'locales': 'str',
        'medaddress': 'str',
        'html_layout_guid': 'str',
        'endpoint': 'str',
        'video_drop': 'str',
        'content_rtcp_transport': 'str',
        'video_remote_rtcp_address': 'str',
        'video_rtp_relay': 'str',
        'mixaddress': 'str',
        'siphttp_proxy_transport': 'str',
        'video_recv_codec': 'str',
        'audio_recv_codec': 'str',
        'session_in': 'str',
        'bonded_video_guid': 'str',
        'call_quality': 'str',
        'meetingjointime': 'str',
        'session_in_relay': 'str',
        'pairedremoteaddress': 'str',
        'video_send_height': 'str',
        'video_recv_height': 'str',
        'secure_call': 'str',
        'video_local_rtcp_address': 'str',
        'audio_play_name': 'str',
        'video_cap_id': 'str',
        'audio_rtp_transport': 'str',
        'meeting_info_mode': 'str',
        'callhostname': 'str',
        'callguid': 'str',
        'audio_cap_id': 'str',
        'video_send': 'str',
        'content_recv_codec': 'str',
        'session_relay': 'str',
        'video_recv_remote_mute': 'str',
        'id': 'str',
        'bonded_video_name': 'str',
        'is_in_roster': 'bool'
    }

    attribute_map = {
        'ec_mode': 'EcMode',
        'creationtime': 'creationtime',
        'audio_remote_rtcp_address': 'audio.remote.rtcpAddress',
        'video_send_codec': 'VideoSendCodec',
        'audio_play_id': 'AudioPlayID',
        'call_quality_recv': 'CallQualityRecv',
        'session_out': 'SessionOut',
        'audio_local_address': 'audio.local.address',
        'meetingid': 'meetingid',
        'video_send_width': 'VideoSendWidth',
        'call_quality_send': 'CallQualitySend',
        'mhaddress': 'mhaddress',
        'rdc_controllee_capable': 'RDCControlleeCapable',
        'audio_cap_name': 'AudioCapName',
        'proxy_info': 'ProxyInfo',
        'audio_send_codec': 'AudioSendCodec',
        'vendor': 'vendor',
        'video_recv_width': 'VideoRecvWidth',
        'conaddress': 'conaddress',
        'talk_detected': 'TalkDetected',
        'sub_layout': 'SubLayout',
        'audio_rtcp_relay': 'AudioRtcpRelay',
        'audio_recv_local_mute': 'AudioRecvLocalMute',
        'name': 'name',
        'video_local_address': 'video.local.address',
        'audio_local_rtcp_address': 'audio.local.rtcpAddress',
        'content_rtp_relay': 'ContentRtpRelay',
        'content_local_rtcp_address': 'content.local.rtcpAddress',
        'remote_connection_count': 'RemoteConnectionCount',
        'callrate': 'callrate',
        'mixer_guid': 'MixerGuid',
        'transport': 'transport',
        'audio_cap_select_id': 'AudioCapSelectID',
        'country_code': 'CountryCode',
        'rdc_controller_capable': 'RDCControllerCapable',
        'pairedname': 'pairedname',
        'video_rtcp_relay': 'VideoRtcpRelay',
        'endpoint_cpu_params': 'EndpointCpuParams',
        'video_remote_address': 'video.remote.address',
        'version': 'version',
        'content_recv': 'ContentRecv',
        'local_name': 'localName',
        'bjn_user_id': 'BJNUserId',
        'content_remote_address': 'content.remote.address',
        'audio_send': 'AudioSend',
        'participant_dtmf_menus': 'ParticipantDTMFMenus',
        'video_rtcp_transpor': 'VideoRtcpTranspor',
        'audio_rtcp_transport': 'AudioRtcpTransport',
        'relay_node_id': 'RelayNodeId',
        'content_remote_rtcp_address': 'content.remote.rtcpAddress',
        'audio_rtp_relay': 'AudioRtpRelay',
        'video_rtp_transport': 'VideoRtpTransport',
        'content_recv_local_mute': 'ContentRecvLocalMute',
        'layout': 'Layout',
        'content_send': 'ContentSend',
        'remoteaddress': 'remoteaddress',
        'meeting_guid': 'MeetingGuid',
        'connecttime': 'connecttime',
        'localaddress': 'localaddress',
        'audio_remote_address': 'audio.remote.address',
        'bonded_audio_guid': 'BondedAudioGuid',
        'audio_recv_remote_mute': 'AudioRecvRemoteMute',
        'session_out_relay': 'SessionOutRelay',
        'leader': 'Leader',
        'content_local_address': 'content.local.address',
        'movie_capable': 'MovieCapable',
        'video_recv_local_mute': 'VideoRecvLocalMute',
        'content_rtp_transport': 'ContentRtpTransport',
        'rdc_version': 'RDCVersion',
        'audio_recv': 'AudioRecv',
        'content_relay_server': 'ContentRelayServer',
        'video_recv': 'VideoRecv',
        'visibility': 'visibility',
        'sessionid': 'sessionid',
        'content_rtcp_relay': 'ContentRtcpRelay',
        'locales': 'locales',
        'medaddress': 'medaddress',
        'html_layout_guid': 'HtmlLayoutGuid',
        'endpoint': 'endpoint',
        'video_drop': 'VideoDrop',
        'content_rtcp_transport': 'ContentRtcpTransport',
        'video_remote_rtcp_address': 'video.remote.rtcpAddress',
        'video_rtp_relay': 'VideoRtpRelay',
        'mixaddress': 'mixaddress',
        'siphttp_proxy_transport': 'SIPHTTPProxyTransport',
        'video_recv_codec': 'VideoRecvCodec',
        'audio_recv_codec': 'AudioRecvCodec',
        'session_in': 'SessionIn',
        'bonded_video_guid': 'BondedVideoGuid',
        'call_quality': 'CallQuality',
        'meetingjointime': 'meetingjointime',
        'session_in_relay': 'SessionInRelay',
        'pairedremoteaddress': 'pairedremoteaddress',
        'video_send_height': 'VideoSendHeight',
        'video_recv_height': 'VideoRecvHeight',
        'secure_call': 'SecureCall',
        'video_local_rtcp_address': 'video.local.rtcpAddress',
        'audio_play_name': 'AudioPlayName',
        'video_cap_id': 'VideoCapID',
        'audio_rtp_transport': 'AudioRtpTransport',
        'meeting_info_mode': 'MeetingInfoMode',
        'callhostname': 'callhostname',
        'callguid': 'callguid',
        'audio_cap_id': 'AudioCapID',
        'video_send': 'VideoSend',
        'content_recv_codec': 'ContentRecvCodec',
        'session_relay': 'SessionRelay',
        'video_recv_remote_mute': 'VideoRecvRemoteMute',
        'id': 'Id',
        'bonded_video_name': 'BondedVideoName',
        'is_in_roster': 'isInRoster'
    }

    def __init__(self, ec_mode=None, creationtime=None, audio_remote_rtcp_address=None, video_send_codec=None, audio_play_id=None, call_quality_recv=None, session_out=None, audio_local_address=None, meetingid=None, video_send_width=None, call_quality_send=None, mhaddress=None, rdc_controllee_capable=None, audio_cap_name=None, proxy_info=None, audio_send_codec=None, vendor=None, video_recv_width=None, conaddress=None, talk_detected=None, sub_layout=None, audio_rtcp_relay=None, audio_recv_local_mute=None, name=None, video_local_address=None, audio_local_rtcp_address=None, content_rtp_relay=None, content_local_rtcp_address=None, remote_connection_count=None, callrate=None, mixer_guid=None, transport=None, audio_cap_select_id=None, country_code=None, rdc_controller_capable=None, pairedname=None, video_rtcp_relay=None, endpoint_cpu_params=None, video_remote_address=None, version=None, content_recv=None, local_name=None, bjn_user_id=None, content_remote_address=None, audio_send=None, participant_dtmf_menus=None, video_rtcp_transpor=None, audio_rtcp_transport=None, relay_node_id=None, content_remote_rtcp_address=None, audio_rtp_relay=None, video_rtp_transport=None, content_recv_local_mute=None, layout=None, content_send=None, remoteaddress=None, meeting_guid=None, connecttime=None, localaddress=None, audio_remote_address=None, bonded_audio_guid=None, audio_recv_remote_mute=None, session_out_relay=None, leader=None, content_local_address=None, movie_capable=None, video_recv_local_mute=None, content_rtp_transport=None, rdc_version=None, audio_recv=None, content_relay_server=None, video_recv=None, visibility=None, sessionid=None, content_rtcp_relay=None, locales=None, medaddress=None, html_layout_guid=None, endpoint=None, video_drop=None, content_rtcp_transport=None, video_remote_rtcp_address=None, video_rtp_relay=None, mixaddress=None, siphttp_proxy_transport=None, video_recv_codec=None, audio_recv_codec=None, session_in=None, bonded_video_guid=None, call_quality=None, meetingjointime=None, session_in_relay=None, pairedremoteaddress=None, video_send_height=None, video_recv_height=None, secure_call=None, video_local_rtcp_address=None, audio_play_name=None, video_cap_id=None, audio_rtp_transport=None, meeting_info_mode=None, callhostname=None, callguid=None, audio_cap_id=None, video_send=None, content_recv_codec=None, session_relay=None, video_recv_remote_mute=None, id=None, bonded_video_name=None, is_in_roster=None):
        """
        Endpoint - a model defined in Swagger
        """

        self._ec_mode = None
        self._creationtime = None
        self._audio_remote_rtcp_address = None
        self._video_send_codec = None
        self._audio_play_id = None
        self._call_quality_recv = None
        self._session_out = None
        self._audio_local_address = None
        self._meetingid = None
        self._video_send_width = None
        self._call_quality_send = None
        self._mhaddress = None
        self._rdc_controllee_capable = None
        self._audio_cap_name = None
        self._proxy_info = None
        self._audio_send_codec = None
        self._vendor = None
        self._video_recv_width = None
        self._conaddress = None
        self._talk_detected = None
        self._sub_layout = None
        self._audio_rtcp_relay = None
        self._audio_recv_local_mute = None
        self._name = None
        self._video_local_address = None
        self._audio_local_rtcp_address = None
        self._content_rtp_relay = None
        self._content_local_rtcp_address = None
        self._remote_connection_count = None
        self._callrate = None
        self._mixer_guid = None
        self._transport = None
        self._audio_cap_select_id = None
        self._country_code = None
        self._rdc_controller_capable = None
        self._pairedname = None
        self._video_rtcp_relay = None
        self._endpoint_cpu_params = None
        self._video_remote_address = None
        self._version = None
        self._content_recv = None
        self._local_name = None
        self._bjn_user_id = None
        self._content_remote_address = None
        self._audio_send = None
        self._participant_dtmf_menus = None
        self._video_rtcp_transpor = None
        self._audio_rtcp_transport = None
        self._relay_node_id = None
        self._content_remote_rtcp_address = None
        self._audio_rtp_relay = None
        self._video_rtp_transport = None
        self._content_recv_local_mute = None
        self._layout = None
        self._content_send = None
        self._remoteaddress = None
        self._meeting_guid = None
        self._connecttime = None
        self._localaddress = None
        self._audio_remote_address = None
        self._bonded_audio_guid = None
        self._audio_recv_remote_mute = None
        self._session_out_relay = None
        self._leader = None
        self._content_local_address = None
        self._movie_capable = None
        self._video_recv_local_mute = None
        self._content_rtp_transport = None
        self._rdc_version = None
        self._audio_recv = None
        self._content_relay_server = None
        self._video_recv = None
        self._visibility = None
        self._sessionid = None
        self._content_rtcp_relay = None
        self._locales = None
        self._medaddress = None
        self._html_layout_guid = None
        self._endpoint = None
        self._video_drop = None
        self._content_rtcp_transport = None
        self._video_remote_rtcp_address = None
        self._video_rtp_relay = None
        self._mixaddress = None
        self._siphttp_proxy_transport = None
        self._video_recv_codec = None
        self._audio_recv_codec = None
        self._session_in = None
        self._bonded_video_guid = None
        self._call_quality = None
        self._meetingjointime = None
        self._session_in_relay = None
        self._pairedremoteaddress = None
        self._video_send_height = None
        self._video_recv_height = None
        self._secure_call = None
        self._video_local_rtcp_address = None
        self._audio_play_name = None
        self._video_cap_id = None
        self._audio_rtp_transport = None
        self._meeting_info_mode = None
        self._callhostname = None
        self._callguid = None
        self._audio_cap_id = None
        self._video_send = None
        self._content_recv_codec = None
        self._session_relay = None
        self._video_recv_remote_mute = None
        self._id = None
        self._bonded_video_name = None
        self._is_in_roster = None

        if ec_mode is not None:
          self.ec_mode = ec_mode
        if creationtime is not None:
          self.creationtime = creationtime
        if audio_remote_rtcp_address is not None:
          self.audio_remote_rtcp_address = audio_remote_rtcp_address
        if video_send_codec is not None:
          self.video_send_codec = video_send_codec
        if audio_play_id is not None:
          self.audio_play_id = audio_play_id
        if call_quality_recv is not None:
          self.call_quality_recv = call_quality_recv
        if session_out is not None:
          self.session_out = session_out
        if audio_local_address is not None:
          self.audio_local_address = audio_local_address
        if meetingid is not None:
          self.meetingid = meetingid
        if video_send_width is not None:
          self.video_send_width = video_send_width
        if call_quality_send is not None:
          self.call_quality_send = call_quality_send
        if mhaddress is not None:
          self.mhaddress = mhaddress
        if rdc_controllee_capable is not None:
          self.rdc_controllee_capable = rdc_controllee_capable
        if audio_cap_name is not None:
          self.audio_cap_name = audio_cap_name
        if proxy_info is not None:
          self.proxy_info = proxy_info
        if audio_send_codec is not None:
          self.audio_send_codec = audio_send_codec
        if vendor is not None:
          self.vendor = vendor
        if video_recv_width is not None:
          self.video_recv_width = video_recv_width
        if conaddress is not None:
          self.conaddress = conaddress
        if talk_detected is not None:
          self.talk_detected = talk_detected
        if sub_layout is not None:
          self.sub_layout = sub_layout
        if audio_rtcp_relay is not None:
          self.audio_rtcp_relay = audio_rtcp_relay
        if audio_recv_local_mute is not None:
          self.audio_recv_local_mute = audio_recv_local_mute
        if name is not None:
          self.name = name
        if video_local_address is not None:
          self.video_local_address = video_local_address
        if audio_local_rtcp_address is not None:
          self.audio_local_rtcp_address = audio_local_rtcp_address
        if content_rtp_relay is not None:
          self.content_rtp_relay = content_rtp_relay
        if content_local_rtcp_address is not None:
          self.content_local_rtcp_address = content_local_rtcp_address
        if remote_connection_count is not None:
          self.remote_connection_count = remote_connection_count
        if callrate is not None:
          self.callrate = callrate
        if mixer_guid is not None:
          self.mixer_guid = mixer_guid
        if transport is not None:
          self.transport = transport
        if audio_cap_select_id is not None:
          self.audio_cap_select_id = audio_cap_select_id
        if country_code is not None:
          self.country_code = country_code
        if rdc_controller_capable is not None:
          self.rdc_controller_capable = rdc_controller_capable
        if pairedname is not None:
          self.pairedname = pairedname
        if video_rtcp_relay is not None:
          self.video_rtcp_relay = video_rtcp_relay
        if endpoint_cpu_params is not None:
          self.endpoint_cpu_params = endpoint_cpu_params
        if video_remote_address is not None:
          self.video_remote_address = video_remote_address
        if version is not None:
          self.version = version
        if content_recv is not None:
          self.content_recv = content_recv
        if local_name is not None:
          self.local_name = local_name
        if bjn_user_id is not None:
          self.bjn_user_id = bjn_user_id
        if content_remote_address is not None:
          self.content_remote_address = content_remote_address
        if audio_send is not None:
          self.audio_send = audio_send
        if participant_dtmf_menus is not None:
          self.participant_dtmf_menus = participant_dtmf_menus
        if video_rtcp_transpor is not None:
          self.video_rtcp_transpor = video_rtcp_transpor
        if audio_rtcp_transport is not None:
          self.audio_rtcp_transport = audio_rtcp_transport
        if relay_node_id is not None:
          self.relay_node_id = relay_node_id
        if content_remote_rtcp_address is not None:
          self.content_remote_rtcp_address = content_remote_rtcp_address
        if audio_rtp_relay is not None:
          self.audio_rtp_relay = audio_rtp_relay
        if video_rtp_transport is not None:
          self.video_rtp_transport = video_rtp_transport
        if content_recv_local_mute is not None:
          self.content_recv_local_mute = content_recv_local_mute
        if layout is not None:
          self.layout = layout
        if content_send is not None:
          self.content_send = content_send
        if remoteaddress is not None:
          self.remoteaddress = remoteaddress
        if meeting_guid is not None:
          self.meeting_guid = meeting_guid
        if connecttime is not None:
          self.connecttime = connecttime
        if localaddress is not None:
          self.localaddress = localaddress
        if audio_remote_address is not None:
          self.audio_remote_address = audio_remote_address
        if bonded_audio_guid is not None:
          self.bonded_audio_guid = bonded_audio_guid
        if audio_recv_remote_mute is not None:
          self.audio_recv_remote_mute = audio_recv_remote_mute
        if session_out_relay is not None:
          self.session_out_relay = session_out_relay
        if leader is not None:
          self.leader = leader
        if content_local_address is not None:
          self.content_local_address = content_local_address
        if movie_capable is not None:
          self.movie_capable = movie_capable
        if video_recv_local_mute is not None:
          self.video_recv_local_mute = video_recv_local_mute
        if content_rtp_transport is not None:
          self.content_rtp_transport = content_rtp_transport
        if rdc_version is not None:
          self.rdc_version = rdc_version
        if audio_recv is not None:
          self.audio_recv = audio_recv
        if content_relay_server is not None:
          self.content_relay_server = content_relay_server
        if video_recv is not None:
          self.video_recv = video_recv
        if visibility is not None:
          self.visibility = visibility
        if sessionid is not None:
          self.sessionid = sessionid
        if content_rtcp_relay is not None:
          self.content_rtcp_relay = content_rtcp_relay
        if locales is not None:
          self.locales = locales
        if medaddress is not None:
          self.medaddress = medaddress
        if html_layout_guid is not None:
          self.html_layout_guid = html_layout_guid
        if endpoint is not None:
          self.endpoint = endpoint
        if video_drop is not None:
          self.video_drop = video_drop
        if content_rtcp_transport is not None:
          self.content_rtcp_transport = content_rtcp_transport
        if video_remote_rtcp_address is not None:
          self.video_remote_rtcp_address = video_remote_rtcp_address
        if video_rtp_relay is not None:
          self.video_rtp_relay = video_rtp_relay
        if mixaddress is not None:
          self.mixaddress = mixaddress
        if siphttp_proxy_transport is not None:
          self.siphttp_proxy_transport = siphttp_proxy_transport
        if video_recv_codec is not None:
          self.video_recv_codec = video_recv_codec
        if audio_recv_codec is not None:
          self.audio_recv_codec = audio_recv_codec
        if session_in is not None:
          self.session_in = session_in
        if bonded_video_guid is not None:
          self.bonded_video_guid = bonded_video_guid
        if call_quality is not None:
          self.call_quality = call_quality
        if meetingjointime is not None:
          self.meetingjointime = meetingjointime
        if session_in_relay is not None:
          self.session_in_relay = session_in_relay
        if pairedremoteaddress is not None:
          self.pairedremoteaddress = pairedremoteaddress
        if video_send_height is not None:
          self.video_send_height = video_send_height
        if video_recv_height is not None:
          self.video_recv_height = video_recv_height
        if secure_call is not None:
          self.secure_call = secure_call
        if video_local_rtcp_address is not None:
          self.video_local_rtcp_address = video_local_rtcp_address
        if audio_play_name is not None:
          self.audio_play_name = audio_play_name
        if video_cap_id is not None:
          self.video_cap_id = video_cap_id
        if audio_rtp_transport is not None:
          self.audio_rtp_transport = audio_rtp_transport
        if meeting_info_mode is not None:
          self.meeting_info_mode = meeting_info_mode
        if callhostname is not None:
          self.callhostname = callhostname
        if callguid is not None:
          self.callguid = callguid
        if audio_cap_id is not None:
          self.audio_cap_id = audio_cap_id
        if video_send is not None:
          self.video_send = video_send
        if content_recv_codec is not None:
          self.content_recv_codec = content_recv_codec
        if session_relay is not None:
          self.session_relay = session_relay
        if video_recv_remote_mute is not None:
          self.video_recv_remote_mute = video_recv_remote_mute
        if id is not None:
          self.id = id
        if bonded_video_name is not None:
          self.bonded_video_name = bonded_video_name
        if is_in_roster is not None:
          self.is_in_roster = is_in_roster

    @property
    def ec_mode(self):
        """
        Gets the ec_mode of this Endpoint.

        :return: The ec_mode of this Endpoint.
        :rtype: str
        """
        return self._ec_mode

    @ec_mode.setter
    def ec_mode(self, ec_mode):
        """
        Sets the ec_mode of this Endpoint.

        :param ec_mode: The ec_mode of this Endpoint.
        :type: str
        """

        self._ec_mode = ec_mode

    @property
    def creationtime(self):
        """
        Gets the creationtime of this Endpoint.

        :return: The creationtime of this Endpoint.
        :rtype: str
        """
        return self._creationtime

    @creationtime.setter
    def creationtime(self, creationtime):
        """
        Sets the creationtime of this Endpoint.

        :param creationtime: The creationtime of this Endpoint.
        :type: str
        """

        self._creationtime = creationtime

    @property
    def audio_remote_rtcp_address(self):
        """
        Gets the audio_remote_rtcp_address of this Endpoint.

        :return: The audio_remote_rtcp_address of this Endpoint.
        :rtype: str
        """
        return self._audio_remote_rtcp_address

    @audio_remote_rtcp_address.setter
    def audio_remote_rtcp_address(self, audio_remote_rtcp_address):
        """
        Sets the audio_remote_rtcp_address of this Endpoint.

        :param audio_remote_rtcp_address: The audio_remote_rtcp_address of this Endpoint.
        :type: str
        """

        self._audio_remote_rtcp_address = audio_remote_rtcp_address

    @property
    def video_send_codec(self):
        """
        Gets the video_send_codec of this Endpoint.

        :return: The video_send_codec of this Endpoint.
        :rtype: str
        """
        return self._video_send_codec

    @video_send_codec.setter
    def video_send_codec(self, video_send_codec):
        """
        Sets the video_send_codec of this Endpoint.

        :param video_send_codec: The video_send_codec of this Endpoint.
        :type: str
        """

        self._video_send_codec = video_send_codec

    @property
    def audio_play_id(self):
        """
        Gets the audio_play_id of this Endpoint.

        :return: The audio_play_id of this Endpoint.
        :rtype: str
        """
        return self._audio_play_id

    @audio_play_id.setter
    def audio_play_id(self, audio_play_id):
        """
        Sets the audio_play_id of this Endpoint.

        :param audio_play_id: The audio_play_id of this Endpoint.
        :type: str
        """

        self._audio_play_id = audio_play_id

    @property
    def call_quality_recv(self):
        """
        Gets the call_quality_recv of this Endpoint.

        :return: The call_quality_recv of this Endpoint.
        :rtype: str
        """
        return self._call_quality_recv

    @call_quality_recv.setter
    def call_quality_recv(self, call_quality_recv):
        """
        Sets the call_quality_recv of this Endpoint.

        :param call_quality_recv: The call_quality_recv of this Endpoint.
        :type: str
        """

        self._call_quality_recv = call_quality_recv

    @property
    def session_out(self):
        """
        Gets the session_out of this Endpoint.

        :return: The session_out of this Endpoint.
        :rtype: str
        """
        return self._session_out

    @session_out.setter
    def session_out(self, session_out):
        """
        Sets the session_out of this Endpoint.

        :param session_out: The session_out of this Endpoint.
        :type: str
        """

        self._session_out = session_out

    @property
    def audio_local_address(self):
        """
        Gets the audio_local_address of this Endpoint.

        :return: The audio_local_address of this Endpoint.
        :rtype: str
        """
        return self._audio_local_address

    @audio_local_address.setter
    def audio_local_address(self, audio_local_address):
        """
        Sets the audio_local_address of this Endpoint.

        :param audio_local_address: The audio_local_address of this Endpoint.
        :type: str
        """

        self._audio_local_address = audio_local_address

    @property
    def meetingid(self):
        """
        Gets the meetingid of this Endpoint.

        :return: The meetingid of this Endpoint.
        :rtype: str
        """
        return self._meetingid

    @meetingid.setter
    def meetingid(self, meetingid):
        """
        Sets the meetingid of this Endpoint.

        :param meetingid: The meetingid of this Endpoint.
        :type: str
        """

        self._meetingid = meetingid

    @property
    def video_send_width(self):
        """
        Gets the video_send_width of this Endpoint.

        :return: The video_send_width of this Endpoint.
        :rtype: str
        """
        return self._video_send_width

    @video_send_width.setter
    def video_send_width(self, video_send_width):
        """
        Sets the video_send_width of this Endpoint.

        :param video_send_width: The video_send_width of this Endpoint.
        :type: str
        """

        self._video_send_width = video_send_width

    @property
    def call_quality_send(self):
        """
        Gets the call_quality_send of this Endpoint.

        :return: The call_quality_send of this Endpoint.
        :rtype: str
        """
        return self._call_quality_send

    @call_quality_send.setter
    def call_quality_send(self, call_quality_send):
        """
        Sets the call_quality_send of this Endpoint.

        :param call_quality_send: The call_quality_send of this Endpoint.
        :type: str
        """

        self._call_quality_send = call_quality_send

    @property
    def mhaddress(self):
        """
        Gets the mhaddress of this Endpoint.

        :return: The mhaddress of this Endpoint.
        :rtype: str
        """
        return self._mhaddress

    @mhaddress.setter
    def mhaddress(self, mhaddress):
        """
        Sets the mhaddress of this Endpoint.

        :param mhaddress: The mhaddress of this Endpoint.
        :type: str
        """

        self._mhaddress = mhaddress

    @property
    def rdc_controllee_capable(self):
        """
        Gets the rdc_controllee_capable of this Endpoint.

        :return: The rdc_controllee_capable of this Endpoint.
        :rtype: str
        """
        return self._rdc_controllee_capable

    @rdc_controllee_capable.setter
    def rdc_controllee_capable(self, rdc_controllee_capable):
        """
        Sets the rdc_controllee_capable of this Endpoint.

        :param rdc_controllee_capable: The rdc_controllee_capable of this Endpoint.
        :type: str
        """

        self._rdc_controllee_capable = rdc_controllee_capable

    @property
    def audio_cap_name(self):
        """
        Gets the audio_cap_name of this Endpoint.

        :return: The audio_cap_name of this Endpoint.
        :rtype: str
        """
        return self._audio_cap_name

    @audio_cap_name.setter
    def audio_cap_name(self, audio_cap_name):
        """
        Sets the audio_cap_name of this Endpoint.

        :param audio_cap_name: The audio_cap_name of this Endpoint.
        :type: str
        """

        self._audio_cap_name = audio_cap_name

    @property
    def proxy_info(self):
        """
        Gets the proxy_info of this Endpoint.

        :return: The proxy_info of this Endpoint.
        :rtype: str
        """
        return self._proxy_info

    @proxy_info.setter
    def proxy_info(self, proxy_info):
        """
        Sets the proxy_info of this Endpoint.

        :param proxy_info: The proxy_info of this Endpoint.
        :type: str
        """

        self._proxy_info = proxy_info

    @property
    def audio_send_codec(self):
        """
        Gets the audio_send_codec of this Endpoint.

        :return: The audio_send_codec of this Endpoint.
        :rtype: str
        """
        return self._audio_send_codec

    @audio_send_codec.setter
    def audio_send_codec(self, audio_send_codec):
        """
        Sets the audio_send_codec of this Endpoint.

        :param audio_send_codec: The audio_send_codec of this Endpoint.
        :type: str
        """

        self._audio_send_codec = audio_send_codec

    @property
    def vendor(self):
        """
        Gets the vendor of this Endpoint.

        :return: The vendor of this Endpoint.
        :rtype: str
        """
        return self._vendor

    @vendor.setter
    def vendor(self, vendor):
        """
        Sets the vendor of this Endpoint.

        :param vendor: The vendor of this Endpoint.
        :type: str
        """

        self._vendor = vendor

    @property
    def video_recv_width(self):
        """
        Gets the video_recv_width of this Endpoint.

        :return: The video_recv_width of this Endpoint.
        :rtype: str
        """
        return self._video_recv_width

    @video_recv_width.setter
    def video_recv_width(self, video_recv_width):
        """
        Sets the video_recv_width of this Endpoint.

        :param video_recv_width: The video_recv_width of this Endpoint.
        :type: str
        """

        self._video_recv_width = video_recv_width

    @property
    def conaddress(self):
        """
        Gets the conaddress of this Endpoint.

        :return: The conaddress of this Endpoint.
        :rtype: str
        """
        return self._conaddress

    @conaddress.setter
    def conaddress(self, conaddress):
        """
        Sets the conaddress of this Endpoint.

        :param conaddress: The conaddress of this Endpoint.
        :type: str
        """

        self._conaddress = conaddress

    @property
    def talk_detected(self):
        """
        Gets the talk_detected of this Endpoint.

        :return: The talk_detected of this Endpoint.
        :rtype: str
        """
        return self._talk_detected

    @talk_detected.setter
    def talk_detected(self, talk_detected):
        """
        Sets the talk_detected of this Endpoint.

        :param talk_detected: The talk_detected of this Endpoint.
        :type: str
        """

        self._talk_detected = talk_detected

    @property
    def sub_layout(self):
        """
        Gets the sub_layout of this Endpoint.

        :return: The sub_layout of this Endpoint.
        :rtype: str
        """
        return self._sub_layout

    @sub_layout.setter
    def sub_layout(self, sub_layout):
        """
        Sets the sub_layout of this Endpoint.

        :param sub_layout: The sub_layout of this Endpoint.
        :type: str
        """

        self._sub_layout = sub_layout

    @property
    def audio_rtcp_relay(self):
        """
        Gets the audio_rtcp_relay of this Endpoint.

        :return: The audio_rtcp_relay of this Endpoint.
        :rtype: str
        """
        return self._audio_rtcp_relay

    @audio_rtcp_relay.setter
    def audio_rtcp_relay(self, audio_rtcp_relay):
        """
        Sets the audio_rtcp_relay of this Endpoint.

        :param audio_rtcp_relay: The audio_rtcp_relay of this Endpoint.
        :type: str
        """

        self._audio_rtcp_relay = audio_rtcp_relay

    @property
    def audio_recv_local_mute(self):
        """
        Gets the audio_recv_local_mute of this Endpoint.

        :return: The audio_recv_local_mute of this Endpoint.
        :rtype: str
        """
        return self._audio_recv_local_mute

    @audio_recv_local_mute.setter
    def audio_recv_local_mute(self, audio_recv_local_mute):
        """
        Sets the audio_recv_local_mute of this Endpoint.

        :param audio_recv_local_mute: The audio_recv_local_mute of this Endpoint.
        :type: str
        """

        self._audio_recv_local_mute = audio_recv_local_mute

    @property
    def name(self):
        """
        Gets the name of this Endpoint.

        :return: The name of this Endpoint.
        :rtype: str
        """
        return self._name

    @name.setter
    def name(self, name):
        """
        Sets the name of this Endpoint.

        :param name: The name of this Endpoint.
        :type: str
        """

        self._name = name

    @property
    def video_local_address(self):
        """
        Gets the video_local_address of this Endpoint.

        :return: The video_local_address of this Endpoint.
        :rtype: str
        """
        return self._video_local_address

    @video_local_address.setter
    def video_local_address(self, video_local_address):
        """
        Sets the video_local_address of this Endpoint.

        :param video_local_address: The video_local_address of this Endpoint.
        :type: str
        """

        self._video_local_address = video_local_address

    @property
    def audio_local_rtcp_address(self):
        """
        Gets the audio_local_rtcp_address of this Endpoint.

        :return: The audio_local_rtcp_address of this Endpoint.
        :rtype: str
        """
        return self._audio_local_rtcp_address

    @audio_local_rtcp_address.setter
    def audio_local_rtcp_address(self, audio_local_rtcp_address):
        """
        Sets the audio_local_rtcp_address of this Endpoint.

        :param audio_local_rtcp_address: The audio_local_rtcp_address of this Endpoint.
        :type: str
        """

        self._audio_local_rtcp_address = audio_local_rtcp_address

    @property
    def content_rtp_relay(self):
        """
        Gets the content_rtp_relay of this Endpoint.

        :return: The content_rtp_relay of this Endpoint.
        :rtype: str
        """
        return self._content_rtp_relay

    @content_rtp_relay.setter
    def content_rtp_relay(self, content_rtp_relay):
        """
        Sets the content_rtp_relay of this Endpoint.

        :param content_rtp_relay: The content_rtp_relay of this Endpoint.
        :type: str
        """

        self._content_rtp_relay = content_rtp_relay

    @property
    def content_local_rtcp_address(self):
        """
        Gets the content_local_rtcp_address of this Endpoint.

        :return: The content_local_rtcp_address of this Endpoint.
        :rtype: str
        """
        return self._content_local_rtcp_address

    @content_local_rtcp_address.setter
    def content_local_rtcp_address(self, content_local_rtcp_address):
        """
        Sets the content_local_rtcp_address of this Endpoint.

        :param content_local_rtcp_address: The content_local_rtcp_address of this Endpoint.
        :type: str
        """

        self._content_local_rtcp_address = content_local_rtcp_address

    @property
    def remote_connection_count(self):
        """
        Gets the remote_connection_count of this Endpoint.

        :return: The remote_connection_count of this Endpoint.
        :rtype: str
        """
        return self._remote_connection_count

    @remote_connection_count.setter
    def remote_connection_count(self, remote_connection_count):
        """
        Sets the remote_connection_count of this Endpoint.

        :param remote_connection_count: The remote_connection_count of this Endpoint.
        :type: str
        """

        self._remote_connection_count = remote_connection_count

    @property
    def callrate(self):
        """
        Gets the callrate of this Endpoint.

        :return: The callrate of this Endpoint.
        :rtype: str
        """
        return self._callrate

    @callrate.setter
    def callrate(self, callrate):
        """
        Sets the callrate of this Endpoint.

        :param callrate: The callrate of this Endpoint.
        :type: str
        """

        self._callrate = callrate

    @property
    def mixer_guid(self):
        """
        Gets the mixer_guid of this Endpoint.

        :return: The mixer_guid of this Endpoint.
        :rtype: str
        """
        return self._mixer_guid

    @mixer_guid.setter
    def mixer_guid(self, mixer_guid):
        """
        Sets the mixer_guid of this Endpoint.

        :param mixer_guid: The mixer_guid of this Endpoint.
        :type: str
        """

        self._mixer_guid = mixer_guid

    @property
    def transport(self):
        """
        Gets the transport of this Endpoint.

        :return: The transport of this Endpoint.
        :rtype: str
        """
        return self._transport

    @transport.setter
    def transport(self, transport):
        """
        Sets the transport of this Endpoint.

        :param transport: The transport of this Endpoint.
        :type: str
        """

        self._transport = transport

    @property
    def audio_cap_select_id(self):
        """
        Gets the audio_cap_select_id of this Endpoint.

        :return: The audio_cap_select_id of this Endpoint.
        :rtype: str
        """
        return self._audio_cap_select_id

    @audio_cap_select_id.setter
    def audio_cap_select_id(self, audio_cap_select_id):
        """
        Sets the audio_cap_select_id of this Endpoint.

        :param audio_cap_select_id: The audio_cap_select_id of this Endpoint.
        :type: str
        """

        self._audio_cap_select_id = audio_cap_select_id

    @property
    def country_code(self):
        """
        Gets the country_code of this Endpoint.

        :return: The country_code of this Endpoint.
        :rtype: str
        """
        return self._country_code

    @country_code.setter
    def country_code(self, country_code):
        """
        Sets the country_code of this Endpoint.

        :param country_code: The country_code of this Endpoint.
        :type: str
        """

        self._country_code = country_code

    @property
    def rdc_controller_capable(self):
        """
        Gets the rdc_controller_capable of this Endpoint.

        :return: The rdc_controller_capable of this Endpoint.
        :rtype: str
        """
        return self._rdc_controller_capable

    @rdc_controller_capable.setter
    def rdc_controller_capable(self, rdc_controller_capable):
        """
        Sets the rdc_controller_capable of this Endpoint.

        :param rdc_controller_capable: The rdc_controller_capable of this Endpoint.
        :type: str
        """

        self._rdc_controller_capable = rdc_controller_capable

    @property
    def pairedname(self):
        """
        Gets the pairedname of this Endpoint.

        :return: The pairedname of this Endpoint.
        :rtype: str
        """
        return self._pairedname

    @pairedname.setter
    def pairedname(self, pairedname):
        """
        Sets the pairedname of this Endpoint.

        :param pairedname: The pairedname of this Endpoint.
        :type: str
        """

        self._pairedname = pairedname

    @property
    def video_rtcp_relay(self):
        """
        Gets the video_rtcp_relay of this Endpoint.

        :return: The video_rtcp_relay of this Endpoint.
        :rtype: str
        """
        return self._video_rtcp_relay

    @video_rtcp_relay.setter
    def video_rtcp_relay(self, video_rtcp_relay):
        """
        Sets the video_rtcp_relay of this Endpoint.

        :param video_rtcp_relay: The video_rtcp_relay of this Endpoint.
        :type: str
        """

        self._video_rtcp_relay = video_rtcp_relay

    @property
    def endpoint_cpu_params(self):
        """
        Gets the endpoint_cpu_params of this Endpoint.

        :return: The endpoint_cpu_params of this Endpoint.
        :rtype: str
        """
        return self._endpoint_cpu_params

    @endpoint_cpu_params.setter
    def endpoint_cpu_params(self, endpoint_cpu_params):
        """
        Sets the endpoint_cpu_params of this Endpoint.

        :param endpoint_cpu_params: The endpoint_cpu_params of this Endpoint.
        :type: str
        """

        self._endpoint_cpu_params = endpoint_cpu_params

    @property
    def video_remote_address(self):
        """
        Gets the video_remote_address of this Endpoint.

        :return: The video_remote_address of this Endpoint.
        :rtype: str
        """
        return self._video_remote_address

    @video_remote_address.setter
    def video_remote_address(self, video_remote_address):
        """
        Sets the video_remote_address of this Endpoint.

        :param video_remote_address: The video_remote_address of this Endpoint.
        :type: str
        """

        self._video_remote_address = video_remote_address

    @property
    def version(self):
        """
        Gets the version of this Endpoint.

        :return: The version of this Endpoint.
        :rtype: str
        """
        return self._version

    @version.setter
    def version(self, version):
        """
        Sets the version of this Endpoint.

        :param version: The version of this Endpoint.
        :type: str
        """

        self._version = version

    @property
    def content_recv(self):
        """
        Gets the content_recv of this Endpoint.

        :return: The content_recv of this Endpoint.
        :rtype: str
        """
        return self._content_recv

    @content_recv.setter
    def content_recv(self, content_recv):
        """
        Sets the content_recv of this Endpoint.

        :param content_recv: The content_recv of this Endpoint.
        :type: str
        """

        self._content_recv = content_recv

    @property
    def local_name(self):
        """
        Gets the local_name of this Endpoint.

        :return: The local_name of this Endpoint.
        :rtype: str
        """
        return self._local_name

    @local_name.setter
    def local_name(self, local_name):
        """
        Sets the local_name of this Endpoint.

        :param local_name: The local_name of this Endpoint.
        :type: str
        """

        self._local_name = local_name

    @property
    def bjn_user_id(self):
        """
        Gets the bjn_user_id of this Endpoint.

        :return: The bjn_user_id of this Endpoint.
        :rtype: str
        """
        return self._bjn_user_id

    @bjn_user_id.setter
    def bjn_user_id(self, bjn_user_id):
        """
        Sets the bjn_user_id of this Endpoint.

        :param bjn_user_id: The bjn_user_id of this Endpoint.
        :type: str
        """

        self._bjn_user_id = bjn_user_id

    @property
    def content_remote_address(self):
        """
        Gets the content_remote_address of this Endpoint.

        :return: The content_remote_address of this Endpoint.
        :rtype: str
        """
        return self._content_remote_address

    @content_remote_address.setter
    def content_remote_address(self, content_remote_address):
        """
        Sets the content_remote_address of this Endpoint.

        :param content_remote_address: The content_remote_address of this Endpoint.
        :type: str
        """

        self._content_remote_address = content_remote_address

    @property
    def audio_send(self):
        """
        Gets the audio_send of this Endpoint.

        :return: The audio_send of this Endpoint.
        :rtype: str
        """
        return self._audio_send

    @audio_send.setter
    def audio_send(self, audio_send):
        """
        Sets the audio_send of this Endpoint.

        :param audio_send: The audio_send of this Endpoint.
        :type: str
        """

        self._audio_send = audio_send

    @property
    def participant_dtmf_menus(self):
        """
        Gets the participant_dtmf_menus of this Endpoint.

        :return: The participant_dtmf_menus of this Endpoint.
        :rtype: str
        """
        return self._participant_dtmf_menus

    @participant_dtmf_menus.setter
    def participant_dtmf_menus(self, participant_dtmf_menus):
        """
        Sets the participant_dtmf_menus of this Endpoint.

        :param participant_dtmf_menus: The participant_dtmf_menus of this Endpoint.
        :type: str
        """

        self._participant_dtmf_menus = participant_dtmf_menus

    @property
    def video_rtcp_transpor(self):
        """
        Gets the video_rtcp_transpor of this Endpoint.

        :return: The video_rtcp_transpor of this Endpoint.
        :rtype: str
        """
        return self._video_rtcp_transpor

    @video_rtcp_transpor.setter
    def video_rtcp_transpor(self, video_rtcp_transpor):
        """
        Sets the video_rtcp_transpor of this Endpoint.

        :param video_rtcp_transpor: The video_rtcp_transpor of this Endpoint.
        :type: str
        """

        self._video_rtcp_transpor = video_rtcp_transpor

    @property
    def audio_rtcp_transport(self):
        """
        Gets the audio_rtcp_transport of this Endpoint.

        :return: The audio_rtcp_transport of this Endpoint.
        :rtype: str
        """
        return self._audio_rtcp_transport

    @audio_rtcp_transport.setter
    def audio_rtcp_transport(self, audio_rtcp_transport):
        """
        Sets the audio_rtcp_transport of this Endpoint.

        :param audio_rtcp_transport: The audio_rtcp_transport of this Endpoint.
        :type: str
        """

        self._audio_rtcp_transport = audio_rtcp_transport

    @property
    def relay_node_id(self):
        """
        Gets the relay_node_id of this Endpoint.

        :return: The relay_node_id of this Endpoint.
        :rtype: str
        """
        return self._relay_node_id

    @relay_node_id.setter
    def relay_node_id(self, relay_node_id):
        """
        Sets the relay_node_id of this Endpoint.

        :param relay_node_id: The relay_node_id of this Endpoint.
        :type: str
        """

        self._relay_node_id = relay_node_id

    @property
    def content_remote_rtcp_address(self):
        """
        Gets the content_remote_rtcp_address of this Endpoint.

        :return: The content_remote_rtcp_address of this Endpoint.
        :rtype: str
        """
        return self._content_remote_rtcp_address

    @content_remote_rtcp_address.setter
    def content_remote_rtcp_address(self, content_remote_rtcp_address):
        """
        Sets the content_remote_rtcp_address of this Endpoint.

        :param content_remote_rtcp_address: The content_remote_rtcp_address of this Endpoint.
        :type: str
        """

        self._content_remote_rtcp_address = content_remote_rtcp_address

    @property
    def audio_rtp_relay(self):
        """
        Gets the audio_rtp_relay of this Endpoint.

        :return: The audio_rtp_relay of this Endpoint.
        :rtype: str
        """
        return self._audio_rtp_relay

    @audio_rtp_relay.setter
    def audio_rtp_relay(self, audio_rtp_relay):
        """
        Sets the audio_rtp_relay of this Endpoint.

        :param audio_rtp_relay: The audio_rtp_relay of this Endpoint.
        :type: str
        """

        self._audio_rtp_relay = audio_rtp_relay

    @property
    def video_rtp_transport(self):
        """
        Gets the video_rtp_transport of this Endpoint.

        :return: The video_rtp_transport of this Endpoint.
        :rtype: str
        """
        return self._video_rtp_transport

    @video_rtp_transport.setter
    def video_rtp_transport(self, video_rtp_transport):
        """
        Sets the video_rtp_transport of this Endpoint.

        :param video_rtp_transport: The video_rtp_transport of this Endpoint.
        :type: str
        """

        self._video_rtp_transport = video_rtp_transport

    @property
    def content_recv_local_mute(self):
        """
        Gets the content_recv_local_mute of this Endpoint.

        :return: The content_recv_local_mute of this Endpoint.
        :rtype: str
        """
        return self._content_recv_local_mute

    @content_recv_local_mute.setter
    def content_recv_local_mute(self, content_recv_local_mute):
        """
        Sets the content_recv_local_mute of this Endpoint.

        :param content_recv_local_mute: The content_recv_local_mute of this Endpoint.
        :type: str
        """

        self._content_recv_local_mute = content_recv_local_mute

    @property
    def layout(self):
        """
        Gets the layout of this Endpoint.

        :return: The layout of this Endpoint.
        :rtype: str
        """
        return self._layout

    @layout.setter
    def layout(self, layout):
        """
        Sets the layout of this Endpoint.

        :param layout: The layout of this Endpoint.
        :type: str
        """

        self._layout = layout

    @property
    def content_send(self):
        """
        Gets the content_send of this Endpoint.

        :return: The content_send of this Endpoint.
        :rtype: str
        """
        return self._content_send

    @content_send.setter
    def content_send(self, content_send):
        """
        Sets the content_send of this Endpoint.

        :param content_send: The content_send of this Endpoint.
        :type: str
        """

        self._content_send = content_send

    @property
    def remoteaddress(self):
        """
        Gets the remoteaddress of this Endpoint.

        :return: The remoteaddress of this Endpoint.
        :rtype: str
        """
        return self._remoteaddress

    @remoteaddress.setter
    def remoteaddress(self, remoteaddress):
        """
        Sets the remoteaddress of this Endpoint.

        :param remoteaddress: The remoteaddress of this Endpoint.
        :type: str
        """

        self._remoteaddress = remoteaddress

    @property
    def meeting_guid(self):
        """
        Gets the meeting_guid of this Endpoint.

        :return: The meeting_guid of this Endpoint.
        :rtype: str
        """
        return self._meeting_guid

    @meeting_guid.setter
    def meeting_guid(self, meeting_guid):
        """
        Sets the meeting_guid of this Endpoint.

        :param meeting_guid: The meeting_guid of this Endpoint.
        :type: str
        """

        self._meeting_guid = meeting_guid

    @property
    def connecttime(self):
        """
        Gets the connecttime of this Endpoint.

        :return: The connecttime of this Endpoint.
        :rtype: str
        """
        return self._connecttime

    @connecttime.setter
    def connecttime(self, connecttime):
        """
        Sets the connecttime of this Endpoint.

        :param connecttime: The connecttime of this Endpoint.
        :type: str
        """

        self._connecttime = connecttime

    @property
    def localaddress(self):
        """
        Gets the localaddress of this Endpoint.

        :return: The localaddress of this Endpoint.
        :rtype: str
        """
        return self._localaddress

    @localaddress.setter
    def localaddress(self, localaddress):
        """
        Sets the localaddress of this Endpoint.

        :param localaddress: The localaddress of this Endpoint.
        :type: str
        """

        self._localaddress = localaddress

    @property
    def audio_remote_address(self):
        """
        Gets the audio_remote_address of this Endpoint.

        :return: The audio_remote_address of this Endpoint.
        :rtype: str
        """
        return self._audio_remote_address

    @audio_remote_address.setter
    def audio_remote_address(self, audio_remote_address):
        """
        Sets the audio_remote_address of this Endpoint.

        :param audio_remote_address: The audio_remote_address of this Endpoint.
        :type: str
        """

        self._audio_remote_address = audio_remote_address

    @property
    def bonded_audio_guid(self):
        """
        Gets the bonded_audio_guid of this Endpoint.

        :return: The bonded_audio_guid of this Endpoint.
        :rtype: str
        """
        return self._bonded_audio_guid

    @bonded_audio_guid.setter
    def bonded_audio_guid(self, bonded_audio_guid):
        """
        Sets the bonded_audio_guid of this Endpoint.

        :param bonded_audio_guid: The bonded_audio_guid of this Endpoint.
        :type: str
        """

        self._bonded_audio_guid = bonded_audio_guid

    @property
    def audio_recv_remote_mute(self):
        """
        Gets the audio_recv_remote_mute of this Endpoint.

        :return: The audio_recv_remote_mute of this Endpoint.
        :rtype: str
        """
        return self._audio_recv_remote_mute

    @audio_recv_remote_mute.setter
    def audio_recv_remote_mute(self, audio_recv_remote_mute):
        """
        Sets the audio_recv_remote_mute of this Endpoint.

        :param audio_recv_remote_mute: The audio_recv_remote_mute of this Endpoint.
        :type: str
        """

        self._audio_recv_remote_mute = audio_recv_remote_mute

    @property
    def session_out_relay(self):
        """
        Gets the session_out_relay of this Endpoint.

        :return: The session_out_relay of this Endpoint.
        :rtype: str
        """
        return self._session_out_relay

    @session_out_relay.setter
    def session_out_relay(self, session_out_relay):
        """
        Sets the session_out_relay of this Endpoint.

        :param session_out_relay: The session_out_relay of this Endpoint.
        :type: str
        """

        self._session_out_relay = session_out_relay

    @property
    def leader(self):
        """
        Gets the leader of this Endpoint.

        :return: The leader of this Endpoint.
        :rtype: str
        """
        return self._leader

    @leader.setter
    def leader(self, leader):
        """
        Sets the leader of this Endpoint.

        :param leader: The leader of this Endpoint.
        :type: str
        """

        self._leader = leader

    @property
    def content_local_address(self):
        """
        Gets the content_local_address of this Endpoint.

        :return: The content_local_address of this Endpoint.
        :rtype: str
        """
        return self._content_local_address

    @content_local_address.setter
    def content_local_address(self, content_local_address):
        """
        Sets the content_local_address of this Endpoint.

        :param content_local_address: The content_local_address of this Endpoint.
        :type: str
        """

        self._content_local_address = content_local_address

    @property
    def movie_capable(self):
        """
        Gets the movie_capable of this Endpoint.

        :return: The movie_capable of this Endpoint.
        :rtype: str
        """
        return self._movie_capable

    @movie_capable.setter
    def movie_capable(self, movie_capable):
        """
        Sets the movie_capable of this Endpoint.

        :param movie_capable: The movie_capable of this Endpoint.
        :type: str
        """

        self._movie_capable = movie_capable

    @property
    def video_recv_local_mute(self):
        """
        Gets the video_recv_local_mute of this Endpoint.

        :return: The video_recv_local_mute of this Endpoint.
        :rtype: str
        """
        return self._video_recv_local_mute

    @video_recv_local_mute.setter
    def video_recv_local_mute(self, video_recv_local_mute):
        """
        Sets the video_recv_local_mute of this Endpoint.

        :param video_recv_local_mute: The video_recv_local_mute of this Endpoint.
        :type: str
        """

        self._video_recv_local_mute = video_recv_local_mute

    @property
    def content_rtp_transport(self):
        """
        Gets the content_rtp_transport of this Endpoint.

        :return: The content_rtp_transport of this Endpoint.
        :rtype: str
        """
        return self._content_rtp_transport

    @content_rtp_transport.setter
    def content_rtp_transport(self, content_rtp_transport):
        """
        Sets the content_rtp_transport of this Endpoint.

        :param content_rtp_transport: The content_rtp_transport of this Endpoint.
        :type: str
        """

        self._content_rtp_transport = content_rtp_transport

    @property
    def rdc_version(self):
        """
        Gets the rdc_version of this Endpoint.

        :return: The rdc_version of this Endpoint.
        :rtype: str
        """
        return self._rdc_version

    @rdc_version.setter
    def rdc_version(self, rdc_version):
        """
        Sets the rdc_version of this Endpoint.

        :param rdc_version: The rdc_version of this Endpoint.
        :type: str
        """

        self._rdc_version = rdc_version

    @property
    def audio_recv(self):
        """
        Gets the audio_recv of this Endpoint.

        :return: The audio_recv of this Endpoint.
        :rtype: str
        """
        return self._audio_recv

    @audio_recv.setter
    def audio_recv(self, audio_recv):
        """
        Sets the audio_recv of this Endpoint.

        :param audio_recv: The audio_recv of this Endpoint.
        :type: str
        """

        self._audio_recv = audio_recv

    @property
    def content_relay_server(self):
        """
        Gets the content_relay_server of this Endpoint.

        :return: The content_relay_server of this Endpoint.
        :rtype: str
        """
        return self._content_relay_server

    @content_relay_server.setter
    def content_relay_server(self, content_relay_server):
        """
        Sets the content_relay_server of this Endpoint.

        :param content_relay_server: The content_relay_server of this Endpoint.
        :type: str
        """

        self._content_relay_server = content_relay_server

    @property
    def video_recv(self):
        """
        Gets the video_recv of this Endpoint.

        :return: The video_recv of this Endpoint.
        :rtype: str
        """
        return self._video_recv

    @video_recv.setter
    def video_recv(self, video_recv):
        """
        Sets the video_recv of this Endpoint.

        :param video_recv: The video_recv of this Endpoint.
        :type: str
        """

        self._video_recv = video_recv

    @property
    def visibility(self):
        """
        Gets the visibility of this Endpoint.

        :return: The visibility of this Endpoint.
        :rtype: str
        """
        return self._visibility

    @visibility.setter
    def visibility(self, visibility):
        """
        Sets the visibility of this Endpoint.

        :param visibility: The visibility of this Endpoint.
        :type: str
        """

        self._visibility = visibility

    @property
    def sessionid(self):
        """
        Gets the sessionid of this Endpoint.

        :return: The sessionid of this Endpoint.
        :rtype: str
        """
        return self._sessionid

    @sessionid.setter
    def sessionid(self, sessionid):
        """
        Sets the sessionid of this Endpoint.

        :param sessionid: The sessionid of this Endpoint.
        :type: str
        """

        self._sessionid = sessionid

    @property
    def content_rtcp_relay(self):
        """
        Gets the content_rtcp_relay of this Endpoint.

        :return: The content_rtcp_relay of this Endpoint.
        :rtype: str
        """
        return self._content_rtcp_relay

    @content_rtcp_relay.setter
    def content_rtcp_relay(self, content_rtcp_relay):
        """
        Sets the content_rtcp_relay of this Endpoint.

        :param content_rtcp_relay: The content_rtcp_relay of this Endpoint.
        :type: str
        """

        self._content_rtcp_relay = content_rtcp_relay

    @property
    def locales(self):
        """
        Gets the locales of this Endpoint.

        :return: The locales of this Endpoint.
        :rtype: str
        """
        return self._locales

    @locales.setter
    def locales(self, locales):
        """
        Sets the locales of this Endpoint.

        :param locales: The locales of this Endpoint.
        :type: str
        """

        self._locales = locales

    @property
    def medaddress(self):
        """
        Gets the medaddress of this Endpoint.

        :return: The medaddress of this Endpoint.
        :rtype: str
        """
        return self._medaddress

    @medaddress.setter
    def medaddress(self, medaddress):
        """
        Sets the medaddress of this Endpoint.

        :param medaddress: The medaddress of this Endpoint.
        :type: str
        """

        self._medaddress = medaddress

    @property
    def html_layout_guid(self):
        """
        Gets the html_layout_guid of this Endpoint.

        :return: The html_layout_guid of this Endpoint.
        :rtype: str
        """
        return self._html_layout_guid

    @html_layout_guid.setter
    def html_layout_guid(self, html_layout_guid):
        """
        Sets the html_layout_guid of this Endpoint.

        :param html_layout_guid: The html_layout_guid of this Endpoint.
        :type: str
        """

        self._html_layout_guid = html_layout_guid

    @property
    def endpoint(self):
        """
        Gets the endpoint of this Endpoint.

        :return: The endpoint of this Endpoint.
        :rtype: str
        """
        return self._endpoint

    @endpoint.setter
    def endpoint(self, endpoint):
        """
        Sets the endpoint of this Endpoint.

        :param endpoint: The endpoint of this Endpoint.
        :type: str
        """

        self._endpoint = endpoint

    @property
    def video_drop(self):
        """
        Gets the video_drop of this Endpoint.

        :return: The video_drop of this Endpoint.
        :rtype: str
        """
        return self._video_drop

    @video_drop.setter
    def video_drop(self, video_drop):
        """
        Sets the video_drop of this Endpoint.

        :param video_drop: The video_drop of this Endpoint.
        :type: str
        """

        self._video_drop = video_drop

    @property
    def content_rtcp_transport(self):
        """
        Gets the content_rtcp_transport of this Endpoint.

        :return: The content_rtcp_transport of this Endpoint.
        :rtype: str
        """
        return self._content_rtcp_transport

    @content_rtcp_transport.setter
    def content_rtcp_transport(self, content_rtcp_transport):
        """
        Sets the content_rtcp_transport of this Endpoint.

        :param content_rtcp_transport: The content_rtcp_transport of this Endpoint.
        :type: str
        """

        self._content_rtcp_transport = content_rtcp_transport

    @property
    def video_remote_rtcp_address(self):
        """
        Gets the video_remote_rtcp_address of this Endpoint.

        :return: The video_remote_rtcp_address of this Endpoint.
        :rtype: str
        """
        return self._video_remote_rtcp_address

    @video_remote_rtcp_address.setter
    def video_remote_rtcp_address(self, video_remote_rtcp_address):
        """
        Sets the video_remote_rtcp_address of this Endpoint.

        :param video_remote_rtcp_address: The video_remote_rtcp_address of this Endpoint.
        :type: str
        """

        self._video_remote_rtcp_address = video_remote_rtcp_address

    @property
    def video_rtp_relay(self):
        """
        Gets the video_rtp_relay of this Endpoint.

        :return: The video_rtp_relay of this Endpoint.
        :rtype: str
        """
        return self._video_rtp_relay

    @video_rtp_relay.setter
    def video_rtp_relay(self, video_rtp_relay):
        """
        Sets the video_rtp_relay of this Endpoint.

        :param video_rtp_relay: The video_rtp_relay of this Endpoint.
        :type: str
        """

        self._video_rtp_relay = video_rtp_relay

    @property
    def mixaddress(self):
        """
        Gets the mixaddress of this Endpoint.

        :return: The mixaddress of this Endpoint.
        :rtype: str
        """
        return self._mixaddress

    @mixaddress.setter
    def mixaddress(self, mixaddress):
        """
        Sets the mixaddress of this Endpoint.

        :param mixaddress: The mixaddress of this Endpoint.
        :type: str
        """

        self._mixaddress = mixaddress

    @property
    def siphttp_proxy_transport(self):
        """
        Gets the siphttp_proxy_transport of this Endpoint.

        :return: The siphttp_proxy_transport of this Endpoint.
        :rtype: str
        """
        return self._siphttp_proxy_transport

    @siphttp_proxy_transport.setter
    def siphttp_proxy_transport(self, siphttp_proxy_transport):
        """
        Sets the siphttp_proxy_transport of this Endpoint.

        :param siphttp_proxy_transport: The siphttp_proxy_transport of this Endpoint.
        :type: str
        """

        self._siphttp_proxy_transport = siphttp_proxy_transport

    @property
    def video_recv_codec(self):
        """
        Gets the video_recv_codec of this Endpoint.

        :return: The video_recv_codec of this Endpoint.
        :rtype: str
        """
        return self._video_recv_codec

    @video_recv_codec.setter
    def video_recv_codec(self, video_recv_codec):
        """
        Sets the video_recv_codec of this Endpoint.

        :param video_recv_codec: The video_recv_codec of this Endpoint.
        :type: str
        """

        self._video_recv_codec = video_recv_codec

    @property
    def audio_recv_codec(self):
        """
        Gets the audio_recv_codec of this Endpoint.

        :return: The audio_recv_codec of this Endpoint.
        :rtype: str
        """
        return self._audio_recv_codec

    @audio_recv_codec.setter
    def audio_recv_codec(self, audio_recv_codec):
        """
        Sets the audio_recv_codec of this Endpoint.

        :param audio_recv_codec: The audio_recv_codec of this Endpoint.
        :type: str
        """

        self._audio_recv_codec = audio_recv_codec

    @property
    def session_in(self):
        """
        Gets the session_in of this Endpoint.

        :return: The session_in of this Endpoint.
        :rtype: str
        """
        return self._session_in

    @session_in.setter
    def session_in(self, session_in):
        """
        Sets the session_in of this Endpoint.

        :param session_in: The session_in of this Endpoint.
        :type: str
        """

        self._session_in = session_in

    @property
    def bonded_video_guid(self):
        """
        Gets the bonded_video_guid of this Endpoint.

        :return: The bonded_video_guid of this Endpoint.
        :rtype: str
        """
        return self._bonded_video_guid

    @bonded_video_guid.setter
    def bonded_video_guid(self, bonded_video_guid):
        """
        Sets the bonded_video_guid of this Endpoint.

        :param bonded_video_guid: The bonded_video_guid of this Endpoint.
        :type: str
        """

        self._bonded_video_guid = bonded_video_guid

    @property
    def call_quality(self):
        """
        Gets the call_quality of this Endpoint.

        :return: The call_quality of this Endpoint.
        :rtype: str
        """
        return self._call_quality

    @call_quality.setter
    def call_quality(self, call_quality):
        """
        Sets the call_quality of this Endpoint.

        :param call_quality: The call_quality of this Endpoint.
        :type: str
        """

        self._call_quality = call_quality

    @property
    def meetingjointime(self):
        """
        Gets the meetingjointime of this Endpoint.

        :return: The meetingjointime of this Endpoint.
        :rtype: str
        """
        return self._meetingjointime

    @meetingjointime.setter
    def meetingjointime(self, meetingjointime):
        """
        Sets the meetingjointime of this Endpoint.

        :param meetingjointime: The meetingjointime of this Endpoint.
        :type: str
        """

        self._meetingjointime = meetingjointime

    @property
    def session_in_relay(self):
        """
        Gets the session_in_relay of this Endpoint.

        :return: The session_in_relay of this Endpoint.
        :rtype: str
        """
        return self._session_in_relay

    @session_in_relay.setter
    def session_in_relay(self, session_in_relay):
        """
        Sets the session_in_relay of this Endpoint.

        :param session_in_relay: The session_in_relay of this Endpoint.
        :type: str
        """

        self._session_in_relay = session_in_relay

    @property
    def pairedremoteaddress(self):
        """
        Gets the pairedremoteaddress of this Endpoint.

        :return: The pairedremoteaddress of this Endpoint.
        :rtype: str
        """
        return self._pairedremoteaddress

    @pairedremoteaddress.setter
    def pairedremoteaddress(self, pairedremoteaddress):
        """
        Sets the pairedremoteaddress of this Endpoint.

        :param pairedremoteaddress: The pairedremoteaddress of this Endpoint.
        :type: str
        """

        self._pairedremoteaddress = pairedremoteaddress

    @property
    def video_send_height(self):
        """
        Gets the video_send_height of this Endpoint.

        :return: The video_send_height of this Endpoint.
        :rtype: str
        """
        return self._video_send_height

    @video_send_height.setter
    def video_send_height(self, video_send_height):
        """
        Sets the video_send_height of this Endpoint.

        :param video_send_height: The video_send_height of this Endpoint.
        :type: str
        """

        self._video_send_height = video_send_height

    @property
    def video_recv_height(self):
        """
        Gets the video_recv_height of this Endpoint.

        :return: The video_recv_height of this Endpoint.
        :rtype: str
        """
        return self._video_recv_height

    @video_recv_height.setter
    def video_recv_height(self, video_recv_height):
        """
        Sets the video_recv_height of this Endpoint.

        :param video_recv_height: The video_recv_height of this Endpoint.
        :type: str
        """

        self._video_recv_height = video_recv_height

    @property
    def secure_call(self):
        """
        Gets the secure_call of this Endpoint.

        :return: The secure_call of this Endpoint.
        :rtype: str
        """
        return self._secure_call

    @secure_call.setter
    def secure_call(self, secure_call):
        """
        Sets the secure_call of this Endpoint.

        :param secure_call: The secure_call of this Endpoint.
        :type: str
        """

        self._secure_call = secure_call

    @property
    def video_local_rtcp_address(self):
        """
        Gets the video_local_rtcp_address of this Endpoint.

        :return: The video_local_rtcp_address of this Endpoint.
        :rtype: str
        """
        return self._video_local_rtcp_address

    @video_local_rtcp_address.setter
    def video_local_rtcp_address(self, video_local_rtcp_address):
        """
        Sets the video_local_rtcp_address of this Endpoint.

        :param video_local_rtcp_address: The video_local_rtcp_address of this Endpoint.
        :type: str
        """

        self._video_local_rtcp_address = video_local_rtcp_address

    @property
    def audio_play_name(self):
        """
        Gets the audio_play_name of this Endpoint.

        :return: The audio_play_name of this Endpoint.
        :rtype: str
        """
        return self._audio_play_name

    @audio_play_name.setter
    def audio_play_name(self, audio_play_name):
        """
        Sets the audio_play_name of this Endpoint.

        :param audio_play_name: The audio_play_name of this Endpoint.
        :type: str
        """

        self._audio_play_name = audio_play_name

    @property
    def video_cap_id(self):
        """
        Gets the video_cap_id of this Endpoint.

        :return: The video_cap_id of this Endpoint.
        :rtype: str
        """
        return self._video_cap_id

    @video_cap_id.setter
    def video_cap_id(self, video_cap_id):
        """
        Sets the video_cap_id of this Endpoint.

        :param video_cap_id: The video_cap_id of this Endpoint.
        :type: str
        """

        self._video_cap_id = video_cap_id

    @property
    def audio_rtp_transport(self):
        """
        Gets the audio_rtp_transport of this Endpoint.

        :return: The audio_rtp_transport of this Endpoint.
        :rtype: str
        """
        return self._audio_rtp_transport

    @audio_rtp_transport.setter
    def audio_rtp_transport(self, audio_rtp_transport):
        """
        Sets the audio_rtp_transport of this Endpoint.

        :param audio_rtp_transport: The audio_rtp_transport of this Endpoint.
        :type: str
        """

        self._audio_rtp_transport = audio_rtp_transport

    @property
    def meeting_info_mode(self):
        """
        Gets the meeting_info_mode of this Endpoint.

        :return: The meeting_info_mode of this Endpoint.
        :rtype: str
        """
        return self._meeting_info_mode

    @meeting_info_mode.setter
    def meeting_info_mode(self, meeting_info_mode):
        """
        Sets the meeting_info_mode of this Endpoint.

        :param meeting_info_mode: The meeting_info_mode of this Endpoint.
        :type: str
        """

        self._meeting_info_mode = meeting_info_mode

    @property
    def callhostname(self):
        """
        Gets the callhostname of this Endpoint.

        :return: The callhostname of this Endpoint.
        :rtype: str
        """
        return self._callhostname

    @callhostname.setter
    def callhostname(self, callhostname):
        """
        Sets the callhostname of this Endpoint.

        :param callhostname: The callhostname of this Endpoint.
        :type: str
        """

        self._callhostname = callhostname

    @property
    def callguid(self):
        """
        Gets the callguid of this Endpoint.

        :return: The callguid of this Endpoint.
        :rtype: str
        """
        return self._callguid

    @callguid.setter
    def callguid(self, callguid):
        """
        Sets the callguid of this Endpoint.

        :param callguid: The callguid of this Endpoint.
        :type: str
        """

        self._callguid = callguid

    @property
    def audio_cap_id(self):
        """
        Gets the audio_cap_id of this Endpoint.

        :return: The audio_cap_id of this Endpoint.
        :rtype: str
        """
        return self._audio_cap_id

    @audio_cap_id.setter
    def audio_cap_id(self, audio_cap_id):
        """
        Sets the audio_cap_id of this Endpoint.

        :param audio_cap_id: The audio_cap_id of this Endpoint.
        :type: str
        """

        self._audio_cap_id = audio_cap_id

    @property
    def video_send(self):
        """
        Gets the video_send of this Endpoint.

        :return: The video_send of this Endpoint.
        :rtype: str
        """
        return self._video_send

    @video_send.setter
    def video_send(self, video_send):
        """
        Sets the video_send of this Endpoint.

        :param video_send: The video_send of this Endpoint.
        :type: str
        """

        self._video_send = video_send

    @property
    def content_recv_codec(self):
        """
        Gets the content_recv_codec of this Endpoint.

        :return: The content_recv_codec of this Endpoint.
        :rtype: str
        """
        return self._content_recv_codec

    @content_recv_codec.setter
    def content_recv_codec(self, content_recv_codec):
        """
        Sets the content_recv_codec of this Endpoint.

        :param content_recv_codec: The content_recv_codec of this Endpoint.
        :type: str
        """

        self._content_recv_codec = content_recv_codec

    @property
    def session_relay(self):
        """
        Gets the session_relay of this Endpoint.

        :return: The session_relay of this Endpoint.
        :rtype: str
        """
        return self._session_relay

    @session_relay.setter
    def session_relay(self, session_relay):
        """
        Sets the session_relay of this Endpoint.

        :param session_relay: The session_relay of this Endpoint.
        :type: str
        """

        self._session_relay = session_relay

    @property
    def video_recv_remote_mute(self):
        """
        Gets the video_recv_remote_mute of this Endpoint.

        :return: The video_recv_remote_mute of this Endpoint.
        :rtype: str
        """
        return self._video_recv_remote_mute

    @video_recv_remote_mute.setter
    def video_recv_remote_mute(self, video_recv_remote_mute):
        """
        Sets the video_recv_remote_mute of this Endpoint.

        :param video_recv_remote_mute: The video_recv_remote_mute of this Endpoint.
        :type: str
        """

        self._video_recv_remote_mute = video_recv_remote_mute

    @property
    def id(self):
        """
        Gets the id of this Endpoint.

        :return: The id of this Endpoint.
        :rtype: str
        """
        return self._id

    @id.setter
    def id(self, id):
        """
        Sets the id of this Endpoint.

        :param id: The id of this Endpoint.
        :type: str
        """

        self._id = id

    @property
    def bonded_video_name(self):
        """
        Gets the bonded_video_name of this Endpoint.

        :return: The bonded_video_name of this Endpoint.
        :rtype: str
        """
        return self._bonded_video_name

    @bonded_video_name.setter
    def bonded_video_name(self, bonded_video_name):
        """
        Sets the bonded_video_name of this Endpoint.

        :param bonded_video_name: The bonded_video_name of this Endpoint.
        :type: str
        """

        self._bonded_video_name = bonded_video_name

    @property
    def is_in_roster(self):
        """
        Gets the is_in_roster of this Endpoint.

        :return: The is_in_roster of this Endpoint.
        :rtype: bool
        """
        return self._is_in_roster

    @is_in_roster.setter
    def is_in_roster(self, is_in_roster):
        """
        Sets the is_in_roster of this Endpoint.

        :param is_in_roster: The is_in_roster of this Endpoint.
        :type: bool
        """

        self._is_in_roster = is_in_roster

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
        if not isinstance(other, Endpoint):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

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


class EndpointIndigoSummaryStats(object):
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
        'audio_recv_codec': 'str',
        'audio_send_codec': 'str',
        'content_recv': 'bool',
        'content_send': 'bool',
        'talk_detected': 'bool',
        'session_relay': 'bool',
        'session_in_relay': 'bool',
        'session_out_relay': 'bool',
        'audio_rtp_relay': 'bool',
        'call_rate': 'int',
        'cumul_loss_percent_ai': 'float',
        'cumul_loss_percent_ao': 'float',
        'cumul_loss_percent_vi': 'float',
        'cumul_loss_percent_vo': 'float',
        'cumul_loss_percent_vic': 'float',
        'cumul_loss_percent_voc': 'float',
        'cumul_loss_ai': 'float',
        'cumul_loss_ao': 'float',
        'cumul_loss_vi': 'float',
        'cumul_loss_vo': 'float',
        'cumul_loss_vic': 'float',
        'cumul_loss_voc': 'float',
        'discontinuity_count': 'float',
        'dropped_packets_ai': 'float',
        'dropped_packets_vi': 'float',
        'dropped_packets_vic': 'float',
        'mix_under_runs_ai': 'float',
        'network_avg_loss_ai': 'float',
        'network_avg_loss_ao': 'float',
        'network_avg_loss_vi': 'float',
        'network_avg_loss_vo': 'float',
        'network_cumul_loss_ai': 'float',
        'network_cumul_loss_ao': 'float',
        'network_cumul_loss_vi': 'float',
        'network_cumul_loss_vo': 'float',
        'network_loss_ai': 'float',
        'network_loss_ao': 'float',
        'network_loss_vi': 'float',
        'network_loss_vo': 'float',
        'call_quality_min': 'float',
        'call_quality_max': 'float',
        'call_quality_avg': 'float',
        'fps_min_vi': 'float',
        'fps_min_vo': 'float',
        'fps_min_vic': 'float',
        'fps_min_voc': 'float',
        'fps_max_vi': 'float',
        'fps_max_vo': 'float',
        'fps_max_vic': 'float',
        'fps_max_voc': 'float',
        'fps_avg_vi': 'float',
        'fps_avg_vo': 'float',
        'fps_avg_vic': 'float',
        'fps_avg_voc': 'float',
        'bitrate_min_ai': 'float',
        'bitrate_min_ao': 'float',
        'bitrate_min_vi': 'float',
        'bitrate_min_vo': 'float',
        'bitrate_min_vic': 'float',
        'bitrate_min_voc': 'float',
        'bitrate_max_ai': 'float',
        'bitrate_max_ao': 'float',
        'bitrate_max_vi': 'float',
        'bitrate_max_vo': 'float',
        'bitrate_max_vic': 'float',
        'bitrate_max_voc': 'float',
        'bitrate_avg_ai': 'float',
        'bitrate_avg_ao': 'float',
        'bitrate_avg_vi': 'float',
        'bitrate_avg_vo': 'float',
        'bitrate_avg_vic': 'float',
        'bitrate_avg_voc': 'float',
        'jitter_min_ai': 'float',
        'jitter_min_ao': 'float',
        'jitter_min_vi': 'float',
        'jitter_min_vo': 'float',
        'jitter_min_vic': 'float',
        'jitter_min_voc': 'float',
        'jitter_max_ai': 'float',
        'jitter_max_ao': 'float',
        'jitter_max_vi': 'float',
        'jitter_max_vo': 'float',
        'jitter_max_vic': 'float',
        'jitter_max_voc': 'float',
        'jitter_avg_ai': 'float',
        'jitter_avg_ao': 'float',
        'jitter_avg_vi': 'float',
        'jitter_avg_vo': 'float',
        'jitter_avg_vic': 'float',
        'jitter_avg_voc': 'float',
        'max_jitter_min_ai': 'float',
        'max_jitter_min_vi': 'float',
        'max_jitter_min_vic': 'float',
        'max_jitter_max_ai': 'float',
        'max_jitter_max_vi': 'float',
        'max_jitter_max_vic': 'float',
        'max_jitter_avg_ai': 'float',
        'max_jitter_avg_vi': 'float',
        'max_jitter_avg_vic': 'float',
        'video_recv_height_min': 'float',
        'video_recv_height_max': 'float',
        'video_recv_width_min': 'float',
        'video_recv_width_max': 'float',
        'video_send_height_min': 'float',
        'video_send_height_max': 'float',
        'video_send_width_min': 'float',
        'video_send_width_max': 'float',
        'content_recv_height_min': 'float',
        'content_recv_height_max': 'float',
        'content_recv_width_min': 'float',
        'content_recv_width_max': 'float',
        'content_send_height_min': 'float',
        'content_send_height_max': 'float',
        'content_send_width_min': 'float',
        'content_send_width_max': 'float',
        'round_trip_delay_min': 'float',
        'round_trip_delay_max': 'float',
        'round_trip_delay_avg': 'float',
        'rfactor_min': 'float',
        'rfactor_max': 'float',
        'rfactor_avg': 'float',
        'process_cpu_load_min': 'float',
        'process_cpu_load_max': 'float',
        'process_cpu_load_avg': 'float',
        'system_cpu_load_min': 'float',
        'system_cpu_load_max': 'float',
        'system_cpu_load_avg': 'float',
        'wifi_recv_strength_min': 'float',
        'wifi_recv_strength_max': 'float',
        'wifi_recv_strength_avg': 'float',
        'key_frame_rate_avg_vi': 'float',
        'key_frame_rate_avg_vo': 'float',
        'key_frame_rate_avg_vic': 'float',
        'key_frame_rate_avg_voc': 'float',
        'key_frame_rate_min_vi': 'float',
        'key_frame_rate_min_vo': 'float',
        'key_frame_rate_min_vic': 'float',
        'key_frame_rate_min_voc': 'float',
        'key_frame_rate_max_vi': 'float',
        'key_frame_rate_max_vo': 'float',
        'key_frame_rate_max_vic': 'float',
        'key_frame_rate_max_voc': 'float',
        'round_trip_delay_avg_vo': 'float',
        'round_trip_delay_avg_voc': 'float',
        'round_trip_delay_avg_ao': 'float'
    }

    attribute_map = {
        'audio_recv_codec': 'audioRecvCodec',
        'audio_send_codec': 'audioSendCodec',
        'content_recv': 'contentRecv',
        'content_send': 'contentSend',
        'talk_detected': 'talkDetected',
        'session_relay': 'sessionRelay',
        'session_in_relay': 'sessionInRelay',
        'session_out_relay': 'sessionOutRelay',
        'audio_rtp_relay': 'audioRtpRelay',
        'call_rate': 'callRate',
        'cumul_loss_percent_ai': 'cumulLoss_Percent_AI',
        'cumul_loss_percent_ao': 'cumulLoss_Percent_AO',
        'cumul_loss_percent_vi': 'cumulLoss_Percent_VI',
        'cumul_loss_percent_vo': 'cumulLoss_Percent_VO',
        'cumul_loss_percent_vic': 'cumulLoss_Percent_VIC',
        'cumul_loss_percent_voc': 'cumulLoss_Percent_VOC',
        'cumul_loss_ai': 'cumulLoss_AI',
        'cumul_loss_ao': 'cumulLoss_AO',
        'cumul_loss_vi': 'cumulLoss_VI',
        'cumul_loss_vo': 'cumulLoss_VO',
        'cumul_loss_vic': 'cumulLoss_VIC',
        'cumul_loss_voc': 'cumulLoss_VOC',
        'discontinuity_count': 'discontinuityCount',
        'dropped_packets_ai': 'droppedPackets_AI',
        'dropped_packets_vi': 'droppedPackets_VI',
        'dropped_packets_vic': 'droppedPackets_VIC',
        'mix_under_runs_ai': 'mixUnderRuns_AI',
        'network_avg_loss_ai': 'networkAvgLoss_AI',
        'network_avg_loss_ao': 'networkAvgLoss_AO',
        'network_avg_loss_vi': 'networkAvgLoss_VI',
        'network_avg_loss_vo': 'networkAvgLoss_VO',
        'network_cumul_loss_ai': 'networkCumulLoss_AI',
        'network_cumul_loss_ao': 'networkCumulLoss_AO',
        'network_cumul_loss_vi': 'networkCumulLoss_VI',
        'network_cumul_loss_vo': 'networkCumulLoss_VO',
        'network_loss_ai': 'networkLoss_AI',
        'network_loss_ao': 'networkLoss_AO',
        'network_loss_vi': 'networkLoss_VI',
        'network_loss_vo': 'networkLoss_VO',
        'call_quality_min': 'callQuality_Min',
        'call_quality_max': 'callQuality_Max',
        'call_quality_avg': 'callQuality_Avg',
        'fps_min_vi': 'fps_Min_VI',
        'fps_min_vo': 'fps_Min_VO',
        'fps_min_vic': 'fps_Min_VIC',
        'fps_min_voc': 'fps_Min_VOC',
        'fps_max_vi': 'fps_Max_VI',
        'fps_max_vo': 'fps_Max_VO',
        'fps_max_vic': 'fps_Max_VIC',
        'fps_max_voc': 'fps_Max_VOC',
        'fps_avg_vi': 'fps_Avg_VI',
        'fps_avg_vo': 'fps_Avg_VO',
        'fps_avg_vic': 'fps_Avg_VIC',
        'fps_avg_voc': 'fps_Avg_VOC',
        'bitrate_min_ai': 'bitrate_Min_AI',
        'bitrate_min_ao': 'bitrate_Min_AO',
        'bitrate_min_vi': 'bitrate_Min_VI',
        'bitrate_min_vo': 'bitrate_Min_VO',
        'bitrate_min_vic': 'bitrate_Min_VIC',
        'bitrate_min_voc': 'bitrate_Min_VOC',
        'bitrate_max_ai': 'bitrate_Max_AI',
        'bitrate_max_ao': 'bitrate_Max_AO',
        'bitrate_max_vi': 'bitrate_Max_VI',
        'bitrate_max_vo': 'bitrate_Max_VO',
        'bitrate_max_vic': 'bitrate_Max_VIC',
        'bitrate_max_voc': 'bitrate_Max_VOC',
        'bitrate_avg_ai': 'bitrate_Avg_AI',
        'bitrate_avg_ao': 'bitrate_Avg_AO',
        'bitrate_avg_vi': 'bitrate_Avg_VI',
        'bitrate_avg_vo': 'bitrate_Avg_VO',
        'bitrate_avg_vic': 'bitrate_Avg_VIC',
        'bitrate_avg_voc': 'bitrate_Avg_VOC',
        'jitter_min_ai': 'jitter_Min_AI',
        'jitter_min_ao': 'jitter_Min_AO',
        'jitter_min_vi': 'jitter_Min_VI',
        'jitter_min_vo': 'jitter_Min_VO',
        'jitter_min_vic': 'jitter_Min_VIC',
        'jitter_min_voc': 'jitter_Min_VOC',
        'jitter_max_ai': 'jitter_Max_AI',
        'jitter_max_ao': 'jitter_Max_AO',
        'jitter_max_vi': 'jitter_Max_VI',
        'jitter_max_vo': 'jitter_Max_VO',
        'jitter_max_vic': 'jitter_Max_VIC',
        'jitter_max_voc': 'jitter_Max_VOC',
        'jitter_avg_ai': 'jitter_Avg_AI',
        'jitter_avg_ao': 'jitter_Avg_AO',
        'jitter_avg_vi': 'jitter_Avg_VI',
        'jitter_avg_vo': 'jitter_Avg_VO',
        'jitter_avg_vic': 'jitter_Avg_VIC',
        'jitter_avg_voc': 'jitter_Avg_VOC',
        'max_jitter_min_ai': 'maxJitter_Min_AI',
        'max_jitter_min_vi': 'maxJitter_Min_VI',
        'max_jitter_min_vic': 'maxJitter_Min_VIC',
        'max_jitter_max_ai': 'maxJitter_Max_AI',
        'max_jitter_max_vi': 'maxJitter_Max_VI',
        'max_jitter_max_vic': 'maxJitter_Max_VIC',
        'max_jitter_avg_ai': 'maxJitter_Avg_AI',
        'max_jitter_avg_vi': 'maxJitter_Avg_VI',
        'max_jitter_avg_vic': 'maxJitter_Avg_VIC',
        'video_recv_height_min': 'videoRecvHeight_Min',
        'video_recv_height_max': 'videoRecvHeight_Max',
        'video_recv_width_min': 'videoRecvWidth_Min',
        'video_recv_width_max': 'videoRecvWidth_Max',
        'video_send_height_min': 'videoSendHeight_Min',
        'video_send_height_max': 'videoSendHeight_Max',
        'video_send_width_min': 'videoSendWidth_Min',
        'video_send_width_max': 'videoSendWidth_Max',
        'content_recv_height_min': 'contentRecvHeight_Min',
        'content_recv_height_max': 'contentRecvHeight_Max',
        'content_recv_width_min': 'contentRecvWidth_Min',
        'content_recv_width_max': 'contentRecvWidth_Max',
        'content_send_height_min': 'contentSendHeight_Min',
        'content_send_height_max': 'contentSendHeight_Max',
        'content_send_width_min': 'contentSendWidth_Min',
        'content_send_width_max': 'contentSendWidth_Max',
        'round_trip_delay_min': 'roundTripDelay_Min',
        'round_trip_delay_max': 'roundTripDelay_Max',
        'round_trip_delay_avg': 'roundTripDelay_Avg',
        'rfactor_min': 'rfactor_Min',
        'rfactor_max': 'rfactor_Max',
        'rfactor_avg': 'rfactor_Avg',
        'process_cpu_load_min': 'processCpuLoad_Min',
        'process_cpu_load_max': 'processCpuLoad_Max',
        'process_cpu_load_avg': 'processCpuLoad_Avg',
        'system_cpu_load_min': 'systemCpuLoad_Min',
        'system_cpu_load_max': 'systemCpuLoad_Max',
        'system_cpu_load_avg': 'systemCpuLoad_Avg',
        'wifi_recv_strength_min': 'wifiRecvStrength_Min',
        'wifi_recv_strength_max': 'wifiRecvStrength_Max',
        'wifi_recv_strength_avg': 'wifiRecvStrength_Avg',
        'key_frame_rate_avg_vi': 'keyFrameRate_Avg_VI',
        'key_frame_rate_avg_vo': 'keyFrameRate_Avg_VO',
        'key_frame_rate_avg_vic': 'keyFrameRate_Avg_VIC',
        'key_frame_rate_avg_voc': 'keyFrameRate_Avg_VOC',
        'key_frame_rate_min_vi': 'keyFrameRate_Min_VI',
        'key_frame_rate_min_vo': 'keyFrameRate_Min_VO',
        'key_frame_rate_min_vic': 'keyFrameRate_Min_VIC',
        'key_frame_rate_min_voc': 'keyFrameRate_Min_VOC',
        'key_frame_rate_max_vi': 'keyFrameRate_Max_VI',
        'key_frame_rate_max_vo': 'keyFrameRate_Max_VO',
        'key_frame_rate_max_vic': 'keyFrameRate_Max_VIC',
        'key_frame_rate_max_voc': 'keyFrameRate_Max_VOC',
        'round_trip_delay_avg_vo': 'roundTripDelay_Avg_VO',
        'round_trip_delay_avg_voc': 'roundTripDelay_Avg_VOC',
        'round_trip_delay_avg_ao': 'roundTripDelay_Avg_AO'
    }

    def __init__(self, audio_recv_codec=None, audio_send_codec=None, content_recv=None, content_send=None, talk_detected=None, session_relay=None, session_in_relay=None, session_out_relay=None, audio_rtp_relay=None, call_rate=None, cumul_loss_percent_ai=None, cumul_loss_percent_ao=None, cumul_loss_percent_vi=None, cumul_loss_percent_vo=None, cumul_loss_percent_vic=None, cumul_loss_percent_voc=None, cumul_loss_ai=None, cumul_loss_ao=None, cumul_loss_vi=None, cumul_loss_vo=None, cumul_loss_vic=None, cumul_loss_voc=None, discontinuity_count=None, dropped_packets_ai=None, dropped_packets_vi=None, dropped_packets_vic=None, mix_under_runs_ai=None, network_avg_loss_ai=None, network_avg_loss_ao=None, network_avg_loss_vi=None, network_avg_loss_vo=None, network_cumul_loss_ai=None, network_cumul_loss_ao=None, network_cumul_loss_vi=None, network_cumul_loss_vo=None, network_loss_ai=None, network_loss_ao=None, network_loss_vi=None, network_loss_vo=None, call_quality_min=None, call_quality_max=None, call_quality_avg=None, fps_min_vi=None, fps_min_vo=None, fps_min_vic=None, fps_min_voc=None, fps_max_vi=None, fps_max_vo=None, fps_max_vic=None, fps_max_voc=None, fps_avg_vi=None, fps_avg_vo=None, fps_avg_vic=None, fps_avg_voc=None, bitrate_min_ai=None, bitrate_min_ao=None, bitrate_min_vi=None, bitrate_min_vo=None, bitrate_min_vic=None, bitrate_min_voc=None, bitrate_max_ai=None, bitrate_max_ao=None, bitrate_max_vi=None, bitrate_max_vo=None, bitrate_max_vic=None, bitrate_max_voc=None, bitrate_avg_ai=None, bitrate_avg_ao=None, bitrate_avg_vi=None, bitrate_avg_vo=None, bitrate_avg_vic=None, bitrate_avg_voc=None, jitter_min_ai=None, jitter_min_ao=None, jitter_min_vi=None, jitter_min_vo=None, jitter_min_vic=None, jitter_min_voc=None, jitter_max_ai=None, jitter_max_ao=None, jitter_max_vi=None, jitter_max_vo=None, jitter_max_vic=None, jitter_max_voc=None, jitter_avg_ai=None, jitter_avg_ao=None, jitter_avg_vi=None, jitter_avg_vo=None, jitter_avg_vic=None, jitter_avg_voc=None, max_jitter_min_ai=None, max_jitter_min_vi=None, max_jitter_min_vic=None, max_jitter_max_ai=None, max_jitter_max_vi=None, max_jitter_max_vic=None, max_jitter_avg_ai=None, max_jitter_avg_vi=None, max_jitter_avg_vic=None, video_recv_height_min=None, video_recv_height_max=None, video_recv_width_min=None, video_recv_width_max=None, video_send_height_min=None, video_send_height_max=None, video_send_width_min=None, video_send_width_max=None, content_recv_height_min=None, content_recv_height_max=None, content_recv_width_min=None, content_recv_width_max=None, content_send_height_min=None, content_send_height_max=None, content_send_width_min=None, content_send_width_max=None, round_trip_delay_min=None, round_trip_delay_max=None, round_trip_delay_avg=None, rfactor_min=None, rfactor_max=None, rfactor_avg=None, process_cpu_load_min=None, process_cpu_load_max=None, process_cpu_load_avg=None, system_cpu_load_min=None, system_cpu_load_max=None, system_cpu_load_avg=None, wifi_recv_strength_min=None, wifi_recv_strength_max=None, wifi_recv_strength_avg=None, key_frame_rate_avg_vi=None, key_frame_rate_avg_vo=None, key_frame_rate_avg_vic=None, key_frame_rate_avg_voc=None, key_frame_rate_min_vi=None, key_frame_rate_min_vo=None, key_frame_rate_min_vic=None, key_frame_rate_min_voc=None, key_frame_rate_max_vi=None, key_frame_rate_max_vo=None, key_frame_rate_max_vic=None, key_frame_rate_max_voc=None, round_trip_delay_avg_vo=None, round_trip_delay_avg_voc=None, round_trip_delay_avg_ao=None):  # noqa: E501
        """EndpointIndigoSummaryStats - a model defined in Swagger"""  # noqa: E501

        self._audio_recv_codec = None
        self._audio_send_codec = None
        self._content_recv = None
        self._content_send = None
        self._talk_detected = None
        self._session_relay = None
        self._session_in_relay = None
        self._session_out_relay = None
        self._audio_rtp_relay = None
        self._call_rate = None
        self._cumul_loss_percent_ai = None
        self._cumul_loss_percent_ao = None
        self._cumul_loss_percent_vi = None
        self._cumul_loss_percent_vo = None
        self._cumul_loss_percent_vic = None
        self._cumul_loss_percent_voc = None
        self._cumul_loss_ai = None
        self._cumul_loss_ao = None
        self._cumul_loss_vi = None
        self._cumul_loss_vo = None
        self._cumul_loss_vic = None
        self._cumul_loss_voc = None
        self._discontinuity_count = None
        self._dropped_packets_ai = None
        self._dropped_packets_vi = None
        self._dropped_packets_vic = None
        self._mix_under_runs_ai = None
        self._network_avg_loss_ai = None
        self._network_avg_loss_ao = None
        self._network_avg_loss_vi = None
        self._network_avg_loss_vo = None
        self._network_cumul_loss_ai = None
        self._network_cumul_loss_ao = None
        self._network_cumul_loss_vi = None
        self._network_cumul_loss_vo = None
        self._network_loss_ai = None
        self._network_loss_ao = None
        self._network_loss_vi = None
        self._network_loss_vo = None
        self._call_quality_min = None
        self._call_quality_max = None
        self._call_quality_avg = None
        self._fps_min_vi = None
        self._fps_min_vo = None
        self._fps_min_vic = None
        self._fps_min_voc = None
        self._fps_max_vi = None
        self._fps_max_vo = None
        self._fps_max_vic = None
        self._fps_max_voc = None
        self._fps_avg_vi = None
        self._fps_avg_vo = None
        self._fps_avg_vic = None
        self._fps_avg_voc = None
        self._bitrate_min_ai = None
        self._bitrate_min_ao = None
        self._bitrate_min_vi = None
        self._bitrate_min_vo = None
        self._bitrate_min_vic = None
        self._bitrate_min_voc = None
        self._bitrate_max_ai = None
        self._bitrate_max_ao = None
        self._bitrate_max_vi = None
        self._bitrate_max_vo = None
        self._bitrate_max_vic = None
        self._bitrate_max_voc = None
        self._bitrate_avg_ai = None
        self._bitrate_avg_ao = None
        self._bitrate_avg_vi = None
        self._bitrate_avg_vo = None
        self._bitrate_avg_vic = None
        self._bitrate_avg_voc = None
        self._jitter_min_ai = None
        self._jitter_min_ao = None
        self._jitter_min_vi = None
        self._jitter_min_vo = None
        self._jitter_min_vic = None
        self._jitter_min_voc = None
        self._jitter_max_ai = None
        self._jitter_max_ao = None
        self._jitter_max_vi = None
        self._jitter_max_vo = None
        self._jitter_max_vic = None
        self._jitter_max_voc = None
        self._jitter_avg_ai = None
        self._jitter_avg_ao = None
        self._jitter_avg_vi = None
        self._jitter_avg_vo = None
        self._jitter_avg_vic = None
        self._jitter_avg_voc = None
        self._max_jitter_min_ai = None
        self._max_jitter_min_vi = None
        self._max_jitter_min_vic = None
        self._max_jitter_max_ai = None
        self._max_jitter_max_vi = None
        self._max_jitter_max_vic = None
        self._max_jitter_avg_ai = None
        self._max_jitter_avg_vi = None
        self._max_jitter_avg_vic = None
        self._video_recv_height_min = None
        self._video_recv_height_max = None
        self._video_recv_width_min = None
        self._video_recv_width_max = None
        self._video_send_height_min = None
        self._video_send_height_max = None
        self._video_send_width_min = None
        self._video_send_width_max = None
        self._content_recv_height_min = None
        self._content_recv_height_max = None
        self._content_recv_width_min = None
        self._content_recv_width_max = None
        self._content_send_height_min = None
        self._content_send_height_max = None
        self._content_send_width_min = None
        self._content_send_width_max = None
        self._round_trip_delay_min = None
        self._round_trip_delay_max = None
        self._round_trip_delay_avg = None
        self._rfactor_min = None
        self._rfactor_max = None
        self._rfactor_avg = None
        self._process_cpu_load_min = None
        self._process_cpu_load_max = None
        self._process_cpu_load_avg = None
        self._system_cpu_load_min = None
        self._system_cpu_load_max = None
        self._system_cpu_load_avg = None
        self._wifi_recv_strength_min = None
        self._wifi_recv_strength_max = None
        self._wifi_recv_strength_avg = None
        self._key_frame_rate_avg_vi = None
        self._key_frame_rate_avg_vo = None
        self._key_frame_rate_avg_vic = None
        self._key_frame_rate_avg_voc = None
        self._key_frame_rate_min_vi = None
        self._key_frame_rate_min_vo = None
        self._key_frame_rate_min_vic = None
        self._key_frame_rate_min_voc = None
        self._key_frame_rate_max_vi = None
        self._key_frame_rate_max_vo = None
        self._key_frame_rate_max_vic = None
        self._key_frame_rate_max_voc = None
        self._round_trip_delay_avg_vo = None
        self._round_trip_delay_avg_voc = None
        self._round_trip_delay_avg_ao = None
        self.discriminator = None

        if audio_recv_codec is not None:
            self.audio_recv_codec = audio_recv_codec
        if audio_send_codec is not None:
            self.audio_send_codec = audio_send_codec
        if content_recv is not None:
            self.content_recv = content_recv
        if content_send is not None:
            self.content_send = content_send
        if talk_detected is not None:
            self.talk_detected = talk_detected
        if session_relay is not None:
            self.session_relay = session_relay
        if session_in_relay is not None:
            self.session_in_relay = session_in_relay
        if session_out_relay is not None:
            self.session_out_relay = session_out_relay
        if audio_rtp_relay is not None:
            self.audio_rtp_relay = audio_rtp_relay
        if call_rate is not None:
            self.call_rate = call_rate
        if cumul_loss_percent_ai is not None:
            self.cumul_loss_percent_ai = cumul_loss_percent_ai
        if cumul_loss_percent_ao is not None:
            self.cumul_loss_percent_ao = cumul_loss_percent_ao
        if cumul_loss_percent_vi is not None:
            self.cumul_loss_percent_vi = cumul_loss_percent_vi
        if cumul_loss_percent_vo is not None:
            self.cumul_loss_percent_vo = cumul_loss_percent_vo
        if cumul_loss_percent_vic is not None:
            self.cumul_loss_percent_vic = cumul_loss_percent_vic
        if cumul_loss_percent_voc is not None:
            self.cumul_loss_percent_voc = cumul_loss_percent_voc
        if cumul_loss_ai is not None:
            self.cumul_loss_ai = cumul_loss_ai
        if cumul_loss_ao is not None:
            self.cumul_loss_ao = cumul_loss_ao
        if cumul_loss_vi is not None:
            self.cumul_loss_vi = cumul_loss_vi
        if cumul_loss_vo is not None:
            self.cumul_loss_vo = cumul_loss_vo
        if cumul_loss_vic is not None:
            self.cumul_loss_vic = cumul_loss_vic
        if cumul_loss_voc is not None:
            self.cumul_loss_voc = cumul_loss_voc
        if discontinuity_count is not None:
            self.discontinuity_count = discontinuity_count
        if dropped_packets_ai is not None:
            self.dropped_packets_ai = dropped_packets_ai
        if dropped_packets_vi is not None:
            self.dropped_packets_vi = dropped_packets_vi
        if dropped_packets_vic is not None:
            self.dropped_packets_vic = dropped_packets_vic
        if mix_under_runs_ai is not None:
            self.mix_under_runs_ai = mix_under_runs_ai
        if network_avg_loss_ai is not None:
            self.network_avg_loss_ai = network_avg_loss_ai
        if network_avg_loss_ao is not None:
            self.network_avg_loss_ao = network_avg_loss_ao
        if network_avg_loss_vi is not None:
            self.network_avg_loss_vi = network_avg_loss_vi
        if network_avg_loss_vo is not None:
            self.network_avg_loss_vo = network_avg_loss_vo
        if network_cumul_loss_ai is not None:
            self.network_cumul_loss_ai = network_cumul_loss_ai
        if network_cumul_loss_ao is not None:
            self.network_cumul_loss_ao = network_cumul_loss_ao
        if network_cumul_loss_vi is not None:
            self.network_cumul_loss_vi = network_cumul_loss_vi
        if network_cumul_loss_vo is not None:
            self.network_cumul_loss_vo = network_cumul_loss_vo
        if network_loss_ai is not None:
            self.network_loss_ai = network_loss_ai
        if network_loss_ao is not None:
            self.network_loss_ao = network_loss_ao
        if network_loss_vi is not None:
            self.network_loss_vi = network_loss_vi
        if network_loss_vo is not None:
            self.network_loss_vo = network_loss_vo
        if call_quality_min is not None:
            self.call_quality_min = call_quality_min
        if call_quality_max is not None:
            self.call_quality_max = call_quality_max
        if call_quality_avg is not None:
            self.call_quality_avg = call_quality_avg
        if fps_min_vi is not None:
            self.fps_min_vi = fps_min_vi
        if fps_min_vo is not None:
            self.fps_min_vo = fps_min_vo
        if fps_min_vic is not None:
            self.fps_min_vic = fps_min_vic
        if fps_min_voc is not None:
            self.fps_min_voc = fps_min_voc
        if fps_max_vi is not None:
            self.fps_max_vi = fps_max_vi
        if fps_max_vo is not None:
            self.fps_max_vo = fps_max_vo
        if fps_max_vic is not None:
            self.fps_max_vic = fps_max_vic
        if fps_max_voc is not None:
            self.fps_max_voc = fps_max_voc
        if fps_avg_vi is not None:
            self.fps_avg_vi = fps_avg_vi
        if fps_avg_vo is not None:
            self.fps_avg_vo = fps_avg_vo
        if fps_avg_vic is not None:
            self.fps_avg_vic = fps_avg_vic
        if fps_avg_voc is not None:
            self.fps_avg_voc = fps_avg_voc
        if bitrate_min_ai is not None:
            self.bitrate_min_ai = bitrate_min_ai
        if bitrate_min_ao is not None:
            self.bitrate_min_ao = bitrate_min_ao
        if bitrate_min_vi is not None:
            self.bitrate_min_vi = bitrate_min_vi
        if bitrate_min_vo is not None:
            self.bitrate_min_vo = bitrate_min_vo
        if bitrate_min_vic is not None:
            self.bitrate_min_vic = bitrate_min_vic
        if bitrate_min_voc is not None:
            self.bitrate_min_voc = bitrate_min_voc
        if bitrate_max_ai is not None:
            self.bitrate_max_ai = bitrate_max_ai
        if bitrate_max_ao is not None:
            self.bitrate_max_ao = bitrate_max_ao
        if bitrate_max_vi is not None:
            self.bitrate_max_vi = bitrate_max_vi
        if bitrate_max_vo is not None:
            self.bitrate_max_vo = bitrate_max_vo
        if bitrate_max_vic is not None:
            self.bitrate_max_vic = bitrate_max_vic
        if bitrate_max_voc is not None:
            self.bitrate_max_voc = bitrate_max_voc
        if bitrate_avg_ai is not None:
            self.bitrate_avg_ai = bitrate_avg_ai
        if bitrate_avg_ao is not None:
            self.bitrate_avg_ao = bitrate_avg_ao
        if bitrate_avg_vi is not None:
            self.bitrate_avg_vi = bitrate_avg_vi
        if bitrate_avg_vo is not None:
            self.bitrate_avg_vo = bitrate_avg_vo
        if bitrate_avg_vic is not None:
            self.bitrate_avg_vic = bitrate_avg_vic
        if bitrate_avg_voc is not None:
            self.bitrate_avg_voc = bitrate_avg_voc
        if jitter_min_ai is not None:
            self.jitter_min_ai = jitter_min_ai
        if jitter_min_ao is not None:
            self.jitter_min_ao = jitter_min_ao
        if jitter_min_vi is not None:
            self.jitter_min_vi = jitter_min_vi
        if jitter_min_vo is not None:
            self.jitter_min_vo = jitter_min_vo
        if jitter_min_vic is not None:
            self.jitter_min_vic = jitter_min_vic
        if jitter_min_voc is not None:
            self.jitter_min_voc = jitter_min_voc
        if jitter_max_ai is not None:
            self.jitter_max_ai = jitter_max_ai
        if jitter_max_ao is not None:
            self.jitter_max_ao = jitter_max_ao
        if jitter_max_vi is not None:
            self.jitter_max_vi = jitter_max_vi
        if jitter_max_vo is not None:
            self.jitter_max_vo = jitter_max_vo
        if jitter_max_vic is not None:
            self.jitter_max_vic = jitter_max_vic
        if jitter_max_voc is not None:
            self.jitter_max_voc = jitter_max_voc
        if jitter_avg_ai is not None:
            self.jitter_avg_ai = jitter_avg_ai
        if jitter_avg_ao is not None:
            self.jitter_avg_ao = jitter_avg_ao
        if jitter_avg_vi is not None:
            self.jitter_avg_vi = jitter_avg_vi
        if jitter_avg_vo is not None:
            self.jitter_avg_vo = jitter_avg_vo
        if jitter_avg_vic is not None:
            self.jitter_avg_vic = jitter_avg_vic
        if jitter_avg_voc is not None:
            self.jitter_avg_voc = jitter_avg_voc
        if max_jitter_min_ai is not None:
            self.max_jitter_min_ai = max_jitter_min_ai
        if max_jitter_min_vi is not None:
            self.max_jitter_min_vi = max_jitter_min_vi
        if max_jitter_min_vic is not None:
            self.max_jitter_min_vic = max_jitter_min_vic
        if max_jitter_max_ai is not None:
            self.max_jitter_max_ai = max_jitter_max_ai
        if max_jitter_max_vi is not None:
            self.max_jitter_max_vi = max_jitter_max_vi
        if max_jitter_max_vic is not None:
            self.max_jitter_max_vic = max_jitter_max_vic
        if max_jitter_avg_ai is not None:
            self.max_jitter_avg_ai = max_jitter_avg_ai
        if max_jitter_avg_vi is not None:
            self.max_jitter_avg_vi = max_jitter_avg_vi
        if max_jitter_avg_vic is not None:
            self.max_jitter_avg_vic = max_jitter_avg_vic
        if video_recv_height_min is not None:
            self.video_recv_height_min = video_recv_height_min
        if video_recv_height_max is not None:
            self.video_recv_height_max = video_recv_height_max
        if video_recv_width_min is not None:
            self.video_recv_width_min = video_recv_width_min
        if video_recv_width_max is not None:
            self.video_recv_width_max = video_recv_width_max
        if video_send_height_min is not None:
            self.video_send_height_min = video_send_height_min
        if video_send_height_max is not None:
            self.video_send_height_max = video_send_height_max
        if video_send_width_min is not None:
            self.video_send_width_min = video_send_width_min
        if video_send_width_max is not None:
            self.video_send_width_max = video_send_width_max
        if content_recv_height_min is not None:
            self.content_recv_height_min = content_recv_height_min
        if content_recv_height_max is not None:
            self.content_recv_height_max = content_recv_height_max
        if content_recv_width_min is not None:
            self.content_recv_width_min = content_recv_width_min
        if content_recv_width_max is not None:
            self.content_recv_width_max = content_recv_width_max
        if content_send_height_min is not None:
            self.content_send_height_min = content_send_height_min
        if content_send_height_max is not None:
            self.content_send_height_max = content_send_height_max
        if content_send_width_min is not None:
            self.content_send_width_min = content_send_width_min
        if content_send_width_max is not None:
            self.content_send_width_max = content_send_width_max
        if round_trip_delay_min is not None:
            self.round_trip_delay_min = round_trip_delay_min
        if round_trip_delay_max is not None:
            self.round_trip_delay_max = round_trip_delay_max
        if round_trip_delay_avg is not None:
            self.round_trip_delay_avg = round_trip_delay_avg
        if rfactor_min is not None:
            self.rfactor_min = rfactor_min
        if rfactor_max is not None:
            self.rfactor_max = rfactor_max
        if rfactor_avg is not None:
            self.rfactor_avg = rfactor_avg
        if process_cpu_load_min is not None:
            self.process_cpu_load_min = process_cpu_load_min
        if process_cpu_load_max is not None:
            self.process_cpu_load_max = process_cpu_load_max
        if process_cpu_load_avg is not None:
            self.process_cpu_load_avg = process_cpu_load_avg
        if system_cpu_load_min is not None:
            self.system_cpu_load_min = system_cpu_load_min
        if system_cpu_load_max is not None:
            self.system_cpu_load_max = system_cpu_load_max
        if system_cpu_load_avg is not None:
            self.system_cpu_load_avg = system_cpu_load_avg
        if wifi_recv_strength_min is not None:
            self.wifi_recv_strength_min = wifi_recv_strength_min
        if wifi_recv_strength_max is not None:
            self.wifi_recv_strength_max = wifi_recv_strength_max
        if wifi_recv_strength_avg is not None:
            self.wifi_recv_strength_avg = wifi_recv_strength_avg
        if key_frame_rate_avg_vi is not None:
            self.key_frame_rate_avg_vi = key_frame_rate_avg_vi
        if key_frame_rate_avg_vo is not None:
            self.key_frame_rate_avg_vo = key_frame_rate_avg_vo
        if key_frame_rate_avg_vic is not None:
            self.key_frame_rate_avg_vic = key_frame_rate_avg_vic
        if key_frame_rate_avg_voc is not None:
            self.key_frame_rate_avg_voc = key_frame_rate_avg_voc
        if key_frame_rate_min_vi is not None:
            self.key_frame_rate_min_vi = key_frame_rate_min_vi
        if key_frame_rate_min_vo is not None:
            self.key_frame_rate_min_vo = key_frame_rate_min_vo
        if key_frame_rate_min_vic is not None:
            self.key_frame_rate_min_vic = key_frame_rate_min_vic
        if key_frame_rate_min_voc is not None:
            self.key_frame_rate_min_voc = key_frame_rate_min_voc
        if key_frame_rate_max_vi is not None:
            self.key_frame_rate_max_vi = key_frame_rate_max_vi
        if key_frame_rate_max_vo is not None:
            self.key_frame_rate_max_vo = key_frame_rate_max_vo
        if key_frame_rate_max_vic is not None:
            self.key_frame_rate_max_vic = key_frame_rate_max_vic
        if key_frame_rate_max_voc is not None:
            self.key_frame_rate_max_voc = key_frame_rate_max_voc
        if round_trip_delay_avg_vo is not None:
            self.round_trip_delay_avg_vo = round_trip_delay_avg_vo
        if round_trip_delay_avg_voc is not None:
            self.round_trip_delay_avg_voc = round_trip_delay_avg_voc
        if round_trip_delay_avg_ao is not None:
            self.round_trip_delay_avg_ao = round_trip_delay_avg_ao

    @property
    def audio_recv_codec(self):
        """Gets the audio_recv_codec of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The audio_recv_codec of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: str
        """
        return self._audio_recv_codec

    @audio_recv_codec.setter
    def audio_recv_codec(self, audio_recv_codec):
        """Sets the audio_recv_codec of this EndpointIndigoSummaryStats.


        :param audio_recv_codec: The audio_recv_codec of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: str
        """

        self._audio_recv_codec = audio_recv_codec

    @property
    def audio_send_codec(self):
        """Gets the audio_send_codec of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The audio_send_codec of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: str
        """
        return self._audio_send_codec

    @audio_send_codec.setter
    def audio_send_codec(self, audio_send_codec):
        """Sets the audio_send_codec of this EndpointIndigoSummaryStats.


        :param audio_send_codec: The audio_send_codec of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: str
        """

        self._audio_send_codec = audio_send_codec

    @property
    def content_recv(self):
        """Gets the content_recv of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The content_recv of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: bool
        """
        return self._content_recv

    @content_recv.setter
    def content_recv(self, content_recv):
        """Sets the content_recv of this EndpointIndigoSummaryStats.


        :param content_recv: The content_recv of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: bool
        """

        self._content_recv = content_recv

    @property
    def content_send(self):
        """Gets the content_send of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The content_send of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: bool
        """
        return self._content_send

    @content_send.setter
    def content_send(self, content_send):
        """Sets the content_send of this EndpointIndigoSummaryStats.


        :param content_send: The content_send of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: bool
        """

        self._content_send = content_send

    @property
    def talk_detected(self):
        """Gets the talk_detected of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The talk_detected of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: bool
        """
        return self._talk_detected

    @talk_detected.setter
    def talk_detected(self, talk_detected):
        """Sets the talk_detected of this EndpointIndigoSummaryStats.


        :param talk_detected: The talk_detected of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: bool
        """

        self._talk_detected = talk_detected

    @property
    def session_relay(self):
        """Gets the session_relay of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The session_relay of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: bool
        """
        return self._session_relay

    @session_relay.setter
    def session_relay(self, session_relay):
        """Sets the session_relay of this EndpointIndigoSummaryStats.


        :param session_relay: The session_relay of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: bool
        """

        self._session_relay = session_relay

    @property
    def session_in_relay(self):
        """Gets the session_in_relay of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The session_in_relay of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: bool
        """
        return self._session_in_relay

    @session_in_relay.setter
    def session_in_relay(self, session_in_relay):
        """Sets the session_in_relay of this EndpointIndigoSummaryStats.


        :param session_in_relay: The session_in_relay of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: bool
        """

        self._session_in_relay = session_in_relay

    @property
    def session_out_relay(self):
        """Gets the session_out_relay of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The session_out_relay of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: bool
        """
        return self._session_out_relay

    @session_out_relay.setter
    def session_out_relay(self, session_out_relay):
        """Sets the session_out_relay of this EndpointIndigoSummaryStats.


        :param session_out_relay: The session_out_relay of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: bool
        """

        self._session_out_relay = session_out_relay

    @property
    def audio_rtp_relay(self):
        """Gets the audio_rtp_relay of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The audio_rtp_relay of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: bool
        """
        return self._audio_rtp_relay

    @audio_rtp_relay.setter
    def audio_rtp_relay(self, audio_rtp_relay):
        """Sets the audio_rtp_relay of this EndpointIndigoSummaryStats.


        :param audio_rtp_relay: The audio_rtp_relay of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: bool
        """

        self._audio_rtp_relay = audio_rtp_relay

    @property
    def call_rate(self):
        """Gets the call_rate of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The call_rate of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: int
        """
        return self._call_rate

    @call_rate.setter
    def call_rate(self, call_rate):
        """Sets the call_rate of this EndpointIndigoSummaryStats.


        :param call_rate: The call_rate of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: int
        """

        self._call_rate = call_rate

    @property
    def cumul_loss_percent_ai(self):
        """Gets the cumul_loss_percent_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The cumul_loss_percent_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._cumul_loss_percent_ai

    @cumul_loss_percent_ai.setter
    def cumul_loss_percent_ai(self, cumul_loss_percent_ai):
        """Sets the cumul_loss_percent_ai of this EndpointIndigoSummaryStats.


        :param cumul_loss_percent_ai: The cumul_loss_percent_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._cumul_loss_percent_ai = cumul_loss_percent_ai

    @property
    def cumul_loss_percent_ao(self):
        """Gets the cumul_loss_percent_ao of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The cumul_loss_percent_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._cumul_loss_percent_ao

    @cumul_loss_percent_ao.setter
    def cumul_loss_percent_ao(self, cumul_loss_percent_ao):
        """Sets the cumul_loss_percent_ao of this EndpointIndigoSummaryStats.


        :param cumul_loss_percent_ao: The cumul_loss_percent_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._cumul_loss_percent_ao = cumul_loss_percent_ao

    @property
    def cumul_loss_percent_vi(self):
        """Gets the cumul_loss_percent_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The cumul_loss_percent_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._cumul_loss_percent_vi

    @cumul_loss_percent_vi.setter
    def cumul_loss_percent_vi(self, cumul_loss_percent_vi):
        """Sets the cumul_loss_percent_vi of this EndpointIndigoSummaryStats.


        :param cumul_loss_percent_vi: The cumul_loss_percent_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._cumul_loss_percent_vi = cumul_loss_percent_vi

    @property
    def cumul_loss_percent_vo(self):
        """Gets the cumul_loss_percent_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The cumul_loss_percent_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._cumul_loss_percent_vo

    @cumul_loss_percent_vo.setter
    def cumul_loss_percent_vo(self, cumul_loss_percent_vo):
        """Sets the cumul_loss_percent_vo of this EndpointIndigoSummaryStats.


        :param cumul_loss_percent_vo: The cumul_loss_percent_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._cumul_loss_percent_vo = cumul_loss_percent_vo

    @property
    def cumul_loss_percent_vic(self):
        """Gets the cumul_loss_percent_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The cumul_loss_percent_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._cumul_loss_percent_vic

    @cumul_loss_percent_vic.setter
    def cumul_loss_percent_vic(self, cumul_loss_percent_vic):
        """Sets the cumul_loss_percent_vic of this EndpointIndigoSummaryStats.


        :param cumul_loss_percent_vic: The cumul_loss_percent_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._cumul_loss_percent_vic = cumul_loss_percent_vic

    @property
    def cumul_loss_percent_voc(self):
        """Gets the cumul_loss_percent_voc of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The cumul_loss_percent_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._cumul_loss_percent_voc

    @cumul_loss_percent_voc.setter
    def cumul_loss_percent_voc(self, cumul_loss_percent_voc):
        """Sets the cumul_loss_percent_voc of this EndpointIndigoSummaryStats.


        :param cumul_loss_percent_voc: The cumul_loss_percent_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._cumul_loss_percent_voc = cumul_loss_percent_voc

    @property
    def cumul_loss_ai(self):
        """Gets the cumul_loss_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The cumul_loss_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._cumul_loss_ai

    @cumul_loss_ai.setter
    def cumul_loss_ai(self, cumul_loss_ai):
        """Sets the cumul_loss_ai of this EndpointIndigoSummaryStats.


        :param cumul_loss_ai: The cumul_loss_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._cumul_loss_ai = cumul_loss_ai

    @property
    def cumul_loss_ao(self):
        """Gets the cumul_loss_ao of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The cumul_loss_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._cumul_loss_ao

    @cumul_loss_ao.setter
    def cumul_loss_ao(self, cumul_loss_ao):
        """Sets the cumul_loss_ao of this EndpointIndigoSummaryStats.


        :param cumul_loss_ao: The cumul_loss_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._cumul_loss_ao = cumul_loss_ao

    @property
    def cumul_loss_vi(self):
        """Gets the cumul_loss_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The cumul_loss_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._cumul_loss_vi

    @cumul_loss_vi.setter
    def cumul_loss_vi(self, cumul_loss_vi):
        """Sets the cumul_loss_vi of this EndpointIndigoSummaryStats.


        :param cumul_loss_vi: The cumul_loss_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._cumul_loss_vi = cumul_loss_vi

    @property
    def cumul_loss_vo(self):
        """Gets the cumul_loss_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The cumul_loss_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._cumul_loss_vo

    @cumul_loss_vo.setter
    def cumul_loss_vo(self, cumul_loss_vo):
        """Sets the cumul_loss_vo of this EndpointIndigoSummaryStats.


        :param cumul_loss_vo: The cumul_loss_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._cumul_loss_vo = cumul_loss_vo

    @property
    def cumul_loss_vic(self):
        """Gets the cumul_loss_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The cumul_loss_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._cumul_loss_vic

    @cumul_loss_vic.setter
    def cumul_loss_vic(self, cumul_loss_vic):
        """Sets the cumul_loss_vic of this EndpointIndigoSummaryStats.


        :param cumul_loss_vic: The cumul_loss_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._cumul_loss_vic = cumul_loss_vic

    @property
    def cumul_loss_voc(self):
        """Gets the cumul_loss_voc of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The cumul_loss_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._cumul_loss_voc

    @cumul_loss_voc.setter
    def cumul_loss_voc(self, cumul_loss_voc):
        """Sets the cumul_loss_voc of this EndpointIndigoSummaryStats.


        :param cumul_loss_voc: The cumul_loss_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._cumul_loss_voc = cumul_loss_voc

    @property
    def discontinuity_count(self):
        """Gets the discontinuity_count of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The discontinuity_count of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._discontinuity_count

    @discontinuity_count.setter
    def discontinuity_count(self, discontinuity_count):
        """Sets the discontinuity_count of this EndpointIndigoSummaryStats.


        :param discontinuity_count: The discontinuity_count of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._discontinuity_count = discontinuity_count

    @property
    def dropped_packets_ai(self):
        """Gets the dropped_packets_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The dropped_packets_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._dropped_packets_ai

    @dropped_packets_ai.setter
    def dropped_packets_ai(self, dropped_packets_ai):
        """Sets the dropped_packets_ai of this EndpointIndigoSummaryStats.


        :param dropped_packets_ai: The dropped_packets_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._dropped_packets_ai = dropped_packets_ai

    @property
    def dropped_packets_vi(self):
        """Gets the dropped_packets_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The dropped_packets_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._dropped_packets_vi

    @dropped_packets_vi.setter
    def dropped_packets_vi(self, dropped_packets_vi):
        """Sets the dropped_packets_vi of this EndpointIndigoSummaryStats.


        :param dropped_packets_vi: The dropped_packets_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._dropped_packets_vi = dropped_packets_vi

    @property
    def dropped_packets_vic(self):
        """Gets the dropped_packets_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The dropped_packets_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._dropped_packets_vic

    @dropped_packets_vic.setter
    def dropped_packets_vic(self, dropped_packets_vic):
        """Sets the dropped_packets_vic of this EndpointIndigoSummaryStats.


        :param dropped_packets_vic: The dropped_packets_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._dropped_packets_vic = dropped_packets_vic

    @property
    def mix_under_runs_ai(self):
        """Gets the mix_under_runs_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The mix_under_runs_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._mix_under_runs_ai

    @mix_under_runs_ai.setter
    def mix_under_runs_ai(self, mix_under_runs_ai):
        """Sets the mix_under_runs_ai of this EndpointIndigoSummaryStats.


        :param mix_under_runs_ai: The mix_under_runs_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._mix_under_runs_ai = mix_under_runs_ai

    @property
    def network_avg_loss_ai(self):
        """Gets the network_avg_loss_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The network_avg_loss_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._network_avg_loss_ai

    @network_avg_loss_ai.setter
    def network_avg_loss_ai(self, network_avg_loss_ai):
        """Sets the network_avg_loss_ai of this EndpointIndigoSummaryStats.


        :param network_avg_loss_ai: The network_avg_loss_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._network_avg_loss_ai = network_avg_loss_ai

    @property
    def network_avg_loss_ao(self):
        """Gets the network_avg_loss_ao of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The network_avg_loss_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._network_avg_loss_ao

    @network_avg_loss_ao.setter
    def network_avg_loss_ao(self, network_avg_loss_ao):
        """Sets the network_avg_loss_ao of this EndpointIndigoSummaryStats.


        :param network_avg_loss_ao: The network_avg_loss_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._network_avg_loss_ao = network_avg_loss_ao

    @property
    def network_avg_loss_vi(self):
        """Gets the network_avg_loss_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The network_avg_loss_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._network_avg_loss_vi

    @network_avg_loss_vi.setter
    def network_avg_loss_vi(self, network_avg_loss_vi):
        """Sets the network_avg_loss_vi of this EndpointIndigoSummaryStats.


        :param network_avg_loss_vi: The network_avg_loss_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._network_avg_loss_vi = network_avg_loss_vi

    @property
    def network_avg_loss_vo(self):
        """Gets the network_avg_loss_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The network_avg_loss_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._network_avg_loss_vo

    @network_avg_loss_vo.setter
    def network_avg_loss_vo(self, network_avg_loss_vo):
        """Sets the network_avg_loss_vo of this EndpointIndigoSummaryStats.


        :param network_avg_loss_vo: The network_avg_loss_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._network_avg_loss_vo = network_avg_loss_vo

    @property
    def network_cumul_loss_ai(self):
        """Gets the network_cumul_loss_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The network_cumul_loss_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._network_cumul_loss_ai

    @network_cumul_loss_ai.setter
    def network_cumul_loss_ai(self, network_cumul_loss_ai):
        """Sets the network_cumul_loss_ai of this EndpointIndigoSummaryStats.


        :param network_cumul_loss_ai: The network_cumul_loss_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._network_cumul_loss_ai = network_cumul_loss_ai

    @property
    def network_cumul_loss_ao(self):
        """Gets the network_cumul_loss_ao of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The network_cumul_loss_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._network_cumul_loss_ao

    @network_cumul_loss_ao.setter
    def network_cumul_loss_ao(self, network_cumul_loss_ao):
        """Sets the network_cumul_loss_ao of this EndpointIndigoSummaryStats.


        :param network_cumul_loss_ao: The network_cumul_loss_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._network_cumul_loss_ao = network_cumul_loss_ao

    @property
    def network_cumul_loss_vi(self):
        """Gets the network_cumul_loss_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The network_cumul_loss_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._network_cumul_loss_vi

    @network_cumul_loss_vi.setter
    def network_cumul_loss_vi(self, network_cumul_loss_vi):
        """Sets the network_cumul_loss_vi of this EndpointIndigoSummaryStats.


        :param network_cumul_loss_vi: The network_cumul_loss_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._network_cumul_loss_vi = network_cumul_loss_vi

    @property
    def network_cumul_loss_vo(self):
        """Gets the network_cumul_loss_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The network_cumul_loss_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._network_cumul_loss_vo

    @network_cumul_loss_vo.setter
    def network_cumul_loss_vo(self, network_cumul_loss_vo):
        """Sets the network_cumul_loss_vo of this EndpointIndigoSummaryStats.


        :param network_cumul_loss_vo: The network_cumul_loss_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._network_cumul_loss_vo = network_cumul_loss_vo

    @property
    def network_loss_ai(self):
        """Gets the network_loss_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The network_loss_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._network_loss_ai

    @network_loss_ai.setter
    def network_loss_ai(self, network_loss_ai):
        """Sets the network_loss_ai of this EndpointIndigoSummaryStats.


        :param network_loss_ai: The network_loss_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._network_loss_ai = network_loss_ai

    @property
    def network_loss_ao(self):
        """Gets the network_loss_ao of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The network_loss_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._network_loss_ao

    @network_loss_ao.setter
    def network_loss_ao(self, network_loss_ao):
        """Sets the network_loss_ao of this EndpointIndigoSummaryStats.


        :param network_loss_ao: The network_loss_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._network_loss_ao = network_loss_ao

    @property
    def network_loss_vi(self):
        """Gets the network_loss_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The network_loss_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._network_loss_vi

    @network_loss_vi.setter
    def network_loss_vi(self, network_loss_vi):
        """Sets the network_loss_vi of this EndpointIndigoSummaryStats.


        :param network_loss_vi: The network_loss_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._network_loss_vi = network_loss_vi

    @property
    def network_loss_vo(self):
        """Gets the network_loss_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The network_loss_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._network_loss_vo

    @network_loss_vo.setter
    def network_loss_vo(self, network_loss_vo):
        """Sets the network_loss_vo of this EndpointIndigoSummaryStats.


        :param network_loss_vo: The network_loss_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._network_loss_vo = network_loss_vo

    @property
    def call_quality_min(self):
        """Gets the call_quality_min of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The call_quality_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._call_quality_min

    @call_quality_min.setter
    def call_quality_min(self, call_quality_min):
        """Sets the call_quality_min of this EndpointIndigoSummaryStats.


        :param call_quality_min: The call_quality_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._call_quality_min = call_quality_min

    @property
    def call_quality_max(self):
        """Gets the call_quality_max of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The call_quality_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._call_quality_max

    @call_quality_max.setter
    def call_quality_max(self, call_quality_max):
        """Sets the call_quality_max of this EndpointIndigoSummaryStats.


        :param call_quality_max: The call_quality_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._call_quality_max = call_quality_max

    @property
    def call_quality_avg(self):
        """Gets the call_quality_avg of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The call_quality_avg of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._call_quality_avg

    @call_quality_avg.setter
    def call_quality_avg(self, call_quality_avg):
        """Sets the call_quality_avg of this EndpointIndigoSummaryStats.


        :param call_quality_avg: The call_quality_avg of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._call_quality_avg = call_quality_avg

    @property
    def fps_min_vi(self):
        """Gets the fps_min_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The fps_min_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._fps_min_vi

    @fps_min_vi.setter
    def fps_min_vi(self, fps_min_vi):
        """Sets the fps_min_vi of this EndpointIndigoSummaryStats.


        :param fps_min_vi: The fps_min_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._fps_min_vi = fps_min_vi

    @property
    def fps_min_vo(self):
        """Gets the fps_min_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The fps_min_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._fps_min_vo

    @fps_min_vo.setter
    def fps_min_vo(self, fps_min_vo):
        """Sets the fps_min_vo of this EndpointIndigoSummaryStats.


        :param fps_min_vo: The fps_min_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._fps_min_vo = fps_min_vo

    @property
    def fps_min_vic(self):
        """Gets the fps_min_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The fps_min_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._fps_min_vic

    @fps_min_vic.setter
    def fps_min_vic(self, fps_min_vic):
        """Sets the fps_min_vic of this EndpointIndigoSummaryStats.


        :param fps_min_vic: The fps_min_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._fps_min_vic = fps_min_vic

    @property
    def fps_min_voc(self):
        """Gets the fps_min_voc of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The fps_min_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._fps_min_voc

    @fps_min_voc.setter
    def fps_min_voc(self, fps_min_voc):
        """Sets the fps_min_voc of this EndpointIndigoSummaryStats.


        :param fps_min_voc: The fps_min_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._fps_min_voc = fps_min_voc

    @property
    def fps_max_vi(self):
        """Gets the fps_max_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The fps_max_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._fps_max_vi

    @fps_max_vi.setter
    def fps_max_vi(self, fps_max_vi):
        """Sets the fps_max_vi of this EndpointIndigoSummaryStats.


        :param fps_max_vi: The fps_max_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._fps_max_vi = fps_max_vi

    @property
    def fps_max_vo(self):
        """Gets the fps_max_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The fps_max_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._fps_max_vo

    @fps_max_vo.setter
    def fps_max_vo(self, fps_max_vo):
        """Sets the fps_max_vo of this EndpointIndigoSummaryStats.


        :param fps_max_vo: The fps_max_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._fps_max_vo = fps_max_vo

    @property
    def fps_max_vic(self):
        """Gets the fps_max_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The fps_max_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._fps_max_vic

    @fps_max_vic.setter
    def fps_max_vic(self, fps_max_vic):
        """Sets the fps_max_vic of this EndpointIndigoSummaryStats.


        :param fps_max_vic: The fps_max_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._fps_max_vic = fps_max_vic

    @property
    def fps_max_voc(self):
        """Gets the fps_max_voc of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The fps_max_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._fps_max_voc

    @fps_max_voc.setter
    def fps_max_voc(self, fps_max_voc):
        """Sets the fps_max_voc of this EndpointIndigoSummaryStats.


        :param fps_max_voc: The fps_max_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._fps_max_voc = fps_max_voc

    @property
    def fps_avg_vi(self):
        """Gets the fps_avg_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The fps_avg_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._fps_avg_vi

    @fps_avg_vi.setter
    def fps_avg_vi(self, fps_avg_vi):
        """Sets the fps_avg_vi of this EndpointIndigoSummaryStats.


        :param fps_avg_vi: The fps_avg_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._fps_avg_vi = fps_avg_vi

    @property
    def fps_avg_vo(self):
        """Gets the fps_avg_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The fps_avg_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._fps_avg_vo

    @fps_avg_vo.setter
    def fps_avg_vo(self, fps_avg_vo):
        """Sets the fps_avg_vo of this EndpointIndigoSummaryStats.


        :param fps_avg_vo: The fps_avg_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._fps_avg_vo = fps_avg_vo

    @property
    def fps_avg_vic(self):
        """Gets the fps_avg_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The fps_avg_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._fps_avg_vic

    @fps_avg_vic.setter
    def fps_avg_vic(self, fps_avg_vic):
        """Sets the fps_avg_vic of this EndpointIndigoSummaryStats.


        :param fps_avg_vic: The fps_avg_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._fps_avg_vic = fps_avg_vic

    @property
    def fps_avg_voc(self):
        """Gets the fps_avg_voc of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The fps_avg_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._fps_avg_voc

    @fps_avg_voc.setter
    def fps_avg_voc(self, fps_avg_voc):
        """Sets the fps_avg_voc of this EndpointIndigoSummaryStats.


        :param fps_avg_voc: The fps_avg_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._fps_avg_voc = fps_avg_voc

    @property
    def bitrate_min_ai(self):
        """Gets the bitrate_min_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_min_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_min_ai

    @bitrate_min_ai.setter
    def bitrate_min_ai(self, bitrate_min_ai):
        """Sets the bitrate_min_ai of this EndpointIndigoSummaryStats.


        :param bitrate_min_ai: The bitrate_min_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_min_ai = bitrate_min_ai

    @property
    def bitrate_min_ao(self):
        """Gets the bitrate_min_ao of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_min_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_min_ao

    @bitrate_min_ao.setter
    def bitrate_min_ao(self, bitrate_min_ao):
        """Sets the bitrate_min_ao of this EndpointIndigoSummaryStats.


        :param bitrate_min_ao: The bitrate_min_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_min_ao = bitrate_min_ao

    @property
    def bitrate_min_vi(self):
        """Gets the bitrate_min_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_min_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_min_vi

    @bitrate_min_vi.setter
    def bitrate_min_vi(self, bitrate_min_vi):
        """Sets the bitrate_min_vi of this EndpointIndigoSummaryStats.


        :param bitrate_min_vi: The bitrate_min_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_min_vi = bitrate_min_vi

    @property
    def bitrate_min_vo(self):
        """Gets the bitrate_min_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_min_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_min_vo

    @bitrate_min_vo.setter
    def bitrate_min_vo(self, bitrate_min_vo):
        """Sets the bitrate_min_vo of this EndpointIndigoSummaryStats.


        :param bitrate_min_vo: The bitrate_min_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_min_vo = bitrate_min_vo

    @property
    def bitrate_min_vic(self):
        """Gets the bitrate_min_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_min_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_min_vic

    @bitrate_min_vic.setter
    def bitrate_min_vic(self, bitrate_min_vic):
        """Sets the bitrate_min_vic of this EndpointIndigoSummaryStats.


        :param bitrate_min_vic: The bitrate_min_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_min_vic = bitrate_min_vic

    @property
    def bitrate_min_voc(self):
        """Gets the bitrate_min_voc of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_min_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_min_voc

    @bitrate_min_voc.setter
    def bitrate_min_voc(self, bitrate_min_voc):
        """Sets the bitrate_min_voc of this EndpointIndigoSummaryStats.


        :param bitrate_min_voc: The bitrate_min_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_min_voc = bitrate_min_voc

    @property
    def bitrate_max_ai(self):
        """Gets the bitrate_max_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_max_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_max_ai

    @bitrate_max_ai.setter
    def bitrate_max_ai(self, bitrate_max_ai):
        """Sets the bitrate_max_ai of this EndpointIndigoSummaryStats.


        :param bitrate_max_ai: The bitrate_max_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_max_ai = bitrate_max_ai

    @property
    def bitrate_max_ao(self):
        """Gets the bitrate_max_ao of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_max_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_max_ao

    @bitrate_max_ao.setter
    def bitrate_max_ao(self, bitrate_max_ao):
        """Sets the bitrate_max_ao of this EndpointIndigoSummaryStats.


        :param bitrate_max_ao: The bitrate_max_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_max_ao = bitrate_max_ao

    @property
    def bitrate_max_vi(self):
        """Gets the bitrate_max_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_max_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_max_vi

    @bitrate_max_vi.setter
    def bitrate_max_vi(self, bitrate_max_vi):
        """Sets the bitrate_max_vi of this EndpointIndigoSummaryStats.


        :param bitrate_max_vi: The bitrate_max_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_max_vi = bitrate_max_vi

    @property
    def bitrate_max_vo(self):
        """Gets the bitrate_max_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_max_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_max_vo

    @bitrate_max_vo.setter
    def bitrate_max_vo(self, bitrate_max_vo):
        """Sets the bitrate_max_vo of this EndpointIndigoSummaryStats.


        :param bitrate_max_vo: The bitrate_max_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_max_vo = bitrate_max_vo

    @property
    def bitrate_max_vic(self):
        """Gets the bitrate_max_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_max_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_max_vic

    @bitrate_max_vic.setter
    def bitrate_max_vic(self, bitrate_max_vic):
        """Sets the bitrate_max_vic of this EndpointIndigoSummaryStats.


        :param bitrate_max_vic: The bitrate_max_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_max_vic = bitrate_max_vic

    @property
    def bitrate_max_voc(self):
        """Gets the bitrate_max_voc of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_max_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_max_voc

    @bitrate_max_voc.setter
    def bitrate_max_voc(self, bitrate_max_voc):
        """Sets the bitrate_max_voc of this EndpointIndigoSummaryStats.


        :param bitrate_max_voc: The bitrate_max_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_max_voc = bitrate_max_voc

    @property
    def bitrate_avg_ai(self):
        """Gets the bitrate_avg_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_avg_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_avg_ai

    @bitrate_avg_ai.setter
    def bitrate_avg_ai(self, bitrate_avg_ai):
        """Sets the bitrate_avg_ai of this EndpointIndigoSummaryStats.


        :param bitrate_avg_ai: The bitrate_avg_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_avg_ai = bitrate_avg_ai

    @property
    def bitrate_avg_ao(self):
        """Gets the bitrate_avg_ao of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_avg_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_avg_ao

    @bitrate_avg_ao.setter
    def bitrate_avg_ao(self, bitrate_avg_ao):
        """Sets the bitrate_avg_ao of this EndpointIndigoSummaryStats.


        :param bitrate_avg_ao: The bitrate_avg_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_avg_ao = bitrate_avg_ao

    @property
    def bitrate_avg_vi(self):
        """Gets the bitrate_avg_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_avg_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_avg_vi

    @bitrate_avg_vi.setter
    def bitrate_avg_vi(self, bitrate_avg_vi):
        """Sets the bitrate_avg_vi of this EndpointIndigoSummaryStats.


        :param bitrate_avg_vi: The bitrate_avg_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_avg_vi = bitrate_avg_vi

    @property
    def bitrate_avg_vo(self):
        """Gets the bitrate_avg_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_avg_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_avg_vo

    @bitrate_avg_vo.setter
    def bitrate_avg_vo(self, bitrate_avg_vo):
        """Sets the bitrate_avg_vo of this EndpointIndigoSummaryStats.


        :param bitrate_avg_vo: The bitrate_avg_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_avg_vo = bitrate_avg_vo

    @property
    def bitrate_avg_vic(self):
        """Gets the bitrate_avg_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_avg_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_avg_vic

    @bitrate_avg_vic.setter
    def bitrate_avg_vic(self, bitrate_avg_vic):
        """Sets the bitrate_avg_vic of this EndpointIndigoSummaryStats.


        :param bitrate_avg_vic: The bitrate_avg_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_avg_vic = bitrate_avg_vic

    @property
    def bitrate_avg_voc(self):
        """Gets the bitrate_avg_voc of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The bitrate_avg_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._bitrate_avg_voc

    @bitrate_avg_voc.setter
    def bitrate_avg_voc(self, bitrate_avg_voc):
        """Sets the bitrate_avg_voc of this EndpointIndigoSummaryStats.


        :param bitrate_avg_voc: The bitrate_avg_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._bitrate_avg_voc = bitrate_avg_voc

    @property
    def jitter_min_ai(self):
        """Gets the jitter_min_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_min_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_min_ai

    @jitter_min_ai.setter
    def jitter_min_ai(self, jitter_min_ai):
        """Sets the jitter_min_ai of this EndpointIndigoSummaryStats.


        :param jitter_min_ai: The jitter_min_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_min_ai = jitter_min_ai

    @property
    def jitter_min_ao(self):
        """Gets the jitter_min_ao of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_min_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_min_ao

    @jitter_min_ao.setter
    def jitter_min_ao(self, jitter_min_ao):
        """Sets the jitter_min_ao of this EndpointIndigoSummaryStats.


        :param jitter_min_ao: The jitter_min_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_min_ao = jitter_min_ao

    @property
    def jitter_min_vi(self):
        """Gets the jitter_min_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_min_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_min_vi

    @jitter_min_vi.setter
    def jitter_min_vi(self, jitter_min_vi):
        """Sets the jitter_min_vi of this EndpointIndigoSummaryStats.


        :param jitter_min_vi: The jitter_min_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_min_vi = jitter_min_vi

    @property
    def jitter_min_vo(self):
        """Gets the jitter_min_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_min_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_min_vo

    @jitter_min_vo.setter
    def jitter_min_vo(self, jitter_min_vo):
        """Sets the jitter_min_vo of this EndpointIndigoSummaryStats.


        :param jitter_min_vo: The jitter_min_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_min_vo = jitter_min_vo

    @property
    def jitter_min_vic(self):
        """Gets the jitter_min_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_min_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_min_vic

    @jitter_min_vic.setter
    def jitter_min_vic(self, jitter_min_vic):
        """Sets the jitter_min_vic of this EndpointIndigoSummaryStats.


        :param jitter_min_vic: The jitter_min_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_min_vic = jitter_min_vic

    @property
    def jitter_min_voc(self):
        """Gets the jitter_min_voc of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_min_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_min_voc

    @jitter_min_voc.setter
    def jitter_min_voc(self, jitter_min_voc):
        """Sets the jitter_min_voc of this EndpointIndigoSummaryStats.


        :param jitter_min_voc: The jitter_min_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_min_voc = jitter_min_voc

    @property
    def jitter_max_ai(self):
        """Gets the jitter_max_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_max_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_max_ai

    @jitter_max_ai.setter
    def jitter_max_ai(self, jitter_max_ai):
        """Sets the jitter_max_ai of this EndpointIndigoSummaryStats.


        :param jitter_max_ai: The jitter_max_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_max_ai = jitter_max_ai

    @property
    def jitter_max_ao(self):
        """Gets the jitter_max_ao of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_max_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_max_ao

    @jitter_max_ao.setter
    def jitter_max_ao(self, jitter_max_ao):
        """Sets the jitter_max_ao of this EndpointIndigoSummaryStats.


        :param jitter_max_ao: The jitter_max_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_max_ao = jitter_max_ao

    @property
    def jitter_max_vi(self):
        """Gets the jitter_max_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_max_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_max_vi

    @jitter_max_vi.setter
    def jitter_max_vi(self, jitter_max_vi):
        """Sets the jitter_max_vi of this EndpointIndigoSummaryStats.


        :param jitter_max_vi: The jitter_max_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_max_vi = jitter_max_vi

    @property
    def jitter_max_vo(self):
        """Gets the jitter_max_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_max_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_max_vo

    @jitter_max_vo.setter
    def jitter_max_vo(self, jitter_max_vo):
        """Sets the jitter_max_vo of this EndpointIndigoSummaryStats.


        :param jitter_max_vo: The jitter_max_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_max_vo = jitter_max_vo

    @property
    def jitter_max_vic(self):
        """Gets the jitter_max_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_max_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_max_vic

    @jitter_max_vic.setter
    def jitter_max_vic(self, jitter_max_vic):
        """Sets the jitter_max_vic of this EndpointIndigoSummaryStats.


        :param jitter_max_vic: The jitter_max_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_max_vic = jitter_max_vic

    @property
    def jitter_max_voc(self):
        """Gets the jitter_max_voc of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_max_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_max_voc

    @jitter_max_voc.setter
    def jitter_max_voc(self, jitter_max_voc):
        """Sets the jitter_max_voc of this EndpointIndigoSummaryStats.


        :param jitter_max_voc: The jitter_max_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_max_voc = jitter_max_voc

    @property
    def jitter_avg_ai(self):
        """Gets the jitter_avg_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_avg_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_avg_ai

    @jitter_avg_ai.setter
    def jitter_avg_ai(self, jitter_avg_ai):
        """Sets the jitter_avg_ai of this EndpointIndigoSummaryStats.


        :param jitter_avg_ai: The jitter_avg_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_avg_ai = jitter_avg_ai

    @property
    def jitter_avg_ao(self):
        """Gets the jitter_avg_ao of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_avg_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_avg_ao

    @jitter_avg_ao.setter
    def jitter_avg_ao(self, jitter_avg_ao):
        """Sets the jitter_avg_ao of this EndpointIndigoSummaryStats.


        :param jitter_avg_ao: The jitter_avg_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_avg_ao = jitter_avg_ao

    @property
    def jitter_avg_vi(self):
        """Gets the jitter_avg_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_avg_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_avg_vi

    @jitter_avg_vi.setter
    def jitter_avg_vi(self, jitter_avg_vi):
        """Sets the jitter_avg_vi of this EndpointIndigoSummaryStats.


        :param jitter_avg_vi: The jitter_avg_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_avg_vi = jitter_avg_vi

    @property
    def jitter_avg_vo(self):
        """Gets the jitter_avg_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_avg_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_avg_vo

    @jitter_avg_vo.setter
    def jitter_avg_vo(self, jitter_avg_vo):
        """Sets the jitter_avg_vo of this EndpointIndigoSummaryStats.


        :param jitter_avg_vo: The jitter_avg_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_avg_vo = jitter_avg_vo

    @property
    def jitter_avg_vic(self):
        """Gets the jitter_avg_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_avg_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_avg_vic

    @jitter_avg_vic.setter
    def jitter_avg_vic(self, jitter_avg_vic):
        """Sets the jitter_avg_vic of this EndpointIndigoSummaryStats.


        :param jitter_avg_vic: The jitter_avg_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_avg_vic = jitter_avg_vic

    @property
    def jitter_avg_voc(self):
        """Gets the jitter_avg_voc of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The jitter_avg_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._jitter_avg_voc

    @jitter_avg_voc.setter
    def jitter_avg_voc(self, jitter_avg_voc):
        """Sets the jitter_avg_voc of this EndpointIndigoSummaryStats.


        :param jitter_avg_voc: The jitter_avg_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._jitter_avg_voc = jitter_avg_voc

    @property
    def max_jitter_min_ai(self):
        """Gets the max_jitter_min_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The max_jitter_min_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._max_jitter_min_ai

    @max_jitter_min_ai.setter
    def max_jitter_min_ai(self, max_jitter_min_ai):
        """Sets the max_jitter_min_ai of this EndpointIndigoSummaryStats.


        :param max_jitter_min_ai: The max_jitter_min_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._max_jitter_min_ai = max_jitter_min_ai

    @property
    def max_jitter_min_vi(self):
        """Gets the max_jitter_min_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The max_jitter_min_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._max_jitter_min_vi

    @max_jitter_min_vi.setter
    def max_jitter_min_vi(self, max_jitter_min_vi):
        """Sets the max_jitter_min_vi of this EndpointIndigoSummaryStats.


        :param max_jitter_min_vi: The max_jitter_min_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._max_jitter_min_vi = max_jitter_min_vi

    @property
    def max_jitter_min_vic(self):
        """Gets the max_jitter_min_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The max_jitter_min_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._max_jitter_min_vic

    @max_jitter_min_vic.setter
    def max_jitter_min_vic(self, max_jitter_min_vic):
        """Sets the max_jitter_min_vic of this EndpointIndigoSummaryStats.


        :param max_jitter_min_vic: The max_jitter_min_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._max_jitter_min_vic = max_jitter_min_vic

    @property
    def max_jitter_max_ai(self):
        """Gets the max_jitter_max_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The max_jitter_max_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._max_jitter_max_ai

    @max_jitter_max_ai.setter
    def max_jitter_max_ai(self, max_jitter_max_ai):
        """Sets the max_jitter_max_ai of this EndpointIndigoSummaryStats.


        :param max_jitter_max_ai: The max_jitter_max_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._max_jitter_max_ai = max_jitter_max_ai

    @property
    def max_jitter_max_vi(self):
        """Gets the max_jitter_max_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The max_jitter_max_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._max_jitter_max_vi

    @max_jitter_max_vi.setter
    def max_jitter_max_vi(self, max_jitter_max_vi):
        """Sets the max_jitter_max_vi of this EndpointIndigoSummaryStats.


        :param max_jitter_max_vi: The max_jitter_max_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._max_jitter_max_vi = max_jitter_max_vi

    @property
    def max_jitter_max_vic(self):
        """Gets the max_jitter_max_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The max_jitter_max_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._max_jitter_max_vic

    @max_jitter_max_vic.setter
    def max_jitter_max_vic(self, max_jitter_max_vic):
        """Sets the max_jitter_max_vic of this EndpointIndigoSummaryStats.


        :param max_jitter_max_vic: The max_jitter_max_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._max_jitter_max_vic = max_jitter_max_vic

    @property
    def max_jitter_avg_ai(self):
        """Gets the max_jitter_avg_ai of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The max_jitter_avg_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._max_jitter_avg_ai

    @max_jitter_avg_ai.setter
    def max_jitter_avg_ai(self, max_jitter_avg_ai):
        """Sets the max_jitter_avg_ai of this EndpointIndigoSummaryStats.


        :param max_jitter_avg_ai: The max_jitter_avg_ai of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._max_jitter_avg_ai = max_jitter_avg_ai

    @property
    def max_jitter_avg_vi(self):
        """Gets the max_jitter_avg_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The max_jitter_avg_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._max_jitter_avg_vi

    @max_jitter_avg_vi.setter
    def max_jitter_avg_vi(self, max_jitter_avg_vi):
        """Sets the max_jitter_avg_vi of this EndpointIndigoSummaryStats.


        :param max_jitter_avg_vi: The max_jitter_avg_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._max_jitter_avg_vi = max_jitter_avg_vi

    @property
    def max_jitter_avg_vic(self):
        """Gets the max_jitter_avg_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The max_jitter_avg_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._max_jitter_avg_vic

    @max_jitter_avg_vic.setter
    def max_jitter_avg_vic(self, max_jitter_avg_vic):
        """Sets the max_jitter_avg_vic of this EndpointIndigoSummaryStats.


        :param max_jitter_avg_vic: The max_jitter_avg_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._max_jitter_avg_vic = max_jitter_avg_vic

    @property
    def video_recv_height_min(self):
        """Gets the video_recv_height_min of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The video_recv_height_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._video_recv_height_min

    @video_recv_height_min.setter
    def video_recv_height_min(self, video_recv_height_min):
        """Sets the video_recv_height_min of this EndpointIndigoSummaryStats.


        :param video_recv_height_min: The video_recv_height_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._video_recv_height_min = video_recv_height_min

    @property
    def video_recv_height_max(self):
        """Gets the video_recv_height_max of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The video_recv_height_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._video_recv_height_max

    @video_recv_height_max.setter
    def video_recv_height_max(self, video_recv_height_max):
        """Sets the video_recv_height_max of this EndpointIndigoSummaryStats.


        :param video_recv_height_max: The video_recv_height_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._video_recv_height_max = video_recv_height_max

    @property
    def video_recv_width_min(self):
        """Gets the video_recv_width_min of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The video_recv_width_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._video_recv_width_min

    @video_recv_width_min.setter
    def video_recv_width_min(self, video_recv_width_min):
        """Sets the video_recv_width_min of this EndpointIndigoSummaryStats.


        :param video_recv_width_min: The video_recv_width_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._video_recv_width_min = video_recv_width_min

    @property
    def video_recv_width_max(self):
        """Gets the video_recv_width_max of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The video_recv_width_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._video_recv_width_max

    @video_recv_width_max.setter
    def video_recv_width_max(self, video_recv_width_max):
        """Sets the video_recv_width_max of this EndpointIndigoSummaryStats.


        :param video_recv_width_max: The video_recv_width_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._video_recv_width_max = video_recv_width_max

    @property
    def video_send_height_min(self):
        """Gets the video_send_height_min of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The video_send_height_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._video_send_height_min

    @video_send_height_min.setter
    def video_send_height_min(self, video_send_height_min):
        """Sets the video_send_height_min of this EndpointIndigoSummaryStats.


        :param video_send_height_min: The video_send_height_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._video_send_height_min = video_send_height_min

    @property
    def video_send_height_max(self):
        """Gets the video_send_height_max of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The video_send_height_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._video_send_height_max

    @video_send_height_max.setter
    def video_send_height_max(self, video_send_height_max):
        """Sets the video_send_height_max of this EndpointIndigoSummaryStats.


        :param video_send_height_max: The video_send_height_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._video_send_height_max = video_send_height_max

    @property
    def video_send_width_min(self):
        """Gets the video_send_width_min of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The video_send_width_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._video_send_width_min

    @video_send_width_min.setter
    def video_send_width_min(self, video_send_width_min):
        """Sets the video_send_width_min of this EndpointIndigoSummaryStats.


        :param video_send_width_min: The video_send_width_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._video_send_width_min = video_send_width_min

    @property
    def video_send_width_max(self):
        """Gets the video_send_width_max of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The video_send_width_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._video_send_width_max

    @video_send_width_max.setter
    def video_send_width_max(self, video_send_width_max):
        """Sets the video_send_width_max of this EndpointIndigoSummaryStats.


        :param video_send_width_max: The video_send_width_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._video_send_width_max = video_send_width_max

    @property
    def content_recv_height_min(self):
        """Gets the content_recv_height_min of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The content_recv_height_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._content_recv_height_min

    @content_recv_height_min.setter
    def content_recv_height_min(self, content_recv_height_min):
        """Sets the content_recv_height_min of this EndpointIndigoSummaryStats.


        :param content_recv_height_min: The content_recv_height_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._content_recv_height_min = content_recv_height_min

    @property
    def content_recv_height_max(self):
        """Gets the content_recv_height_max of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The content_recv_height_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._content_recv_height_max

    @content_recv_height_max.setter
    def content_recv_height_max(self, content_recv_height_max):
        """Sets the content_recv_height_max of this EndpointIndigoSummaryStats.


        :param content_recv_height_max: The content_recv_height_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._content_recv_height_max = content_recv_height_max

    @property
    def content_recv_width_min(self):
        """Gets the content_recv_width_min of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The content_recv_width_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._content_recv_width_min

    @content_recv_width_min.setter
    def content_recv_width_min(self, content_recv_width_min):
        """Sets the content_recv_width_min of this EndpointIndigoSummaryStats.


        :param content_recv_width_min: The content_recv_width_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._content_recv_width_min = content_recv_width_min

    @property
    def content_recv_width_max(self):
        """Gets the content_recv_width_max of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The content_recv_width_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._content_recv_width_max

    @content_recv_width_max.setter
    def content_recv_width_max(self, content_recv_width_max):
        """Sets the content_recv_width_max of this EndpointIndigoSummaryStats.


        :param content_recv_width_max: The content_recv_width_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._content_recv_width_max = content_recv_width_max

    @property
    def content_send_height_min(self):
        """Gets the content_send_height_min of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The content_send_height_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._content_send_height_min

    @content_send_height_min.setter
    def content_send_height_min(self, content_send_height_min):
        """Sets the content_send_height_min of this EndpointIndigoSummaryStats.


        :param content_send_height_min: The content_send_height_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._content_send_height_min = content_send_height_min

    @property
    def content_send_height_max(self):
        """Gets the content_send_height_max of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The content_send_height_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._content_send_height_max

    @content_send_height_max.setter
    def content_send_height_max(self, content_send_height_max):
        """Sets the content_send_height_max of this EndpointIndigoSummaryStats.


        :param content_send_height_max: The content_send_height_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._content_send_height_max = content_send_height_max

    @property
    def content_send_width_min(self):
        """Gets the content_send_width_min of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The content_send_width_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._content_send_width_min

    @content_send_width_min.setter
    def content_send_width_min(self, content_send_width_min):
        """Sets the content_send_width_min of this EndpointIndigoSummaryStats.


        :param content_send_width_min: The content_send_width_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._content_send_width_min = content_send_width_min

    @property
    def content_send_width_max(self):
        """Gets the content_send_width_max of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The content_send_width_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._content_send_width_max

    @content_send_width_max.setter
    def content_send_width_max(self, content_send_width_max):
        """Sets the content_send_width_max of this EndpointIndigoSummaryStats.


        :param content_send_width_max: The content_send_width_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._content_send_width_max = content_send_width_max

    @property
    def round_trip_delay_min(self):
        """Gets the round_trip_delay_min of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The round_trip_delay_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._round_trip_delay_min

    @round_trip_delay_min.setter
    def round_trip_delay_min(self, round_trip_delay_min):
        """Sets the round_trip_delay_min of this EndpointIndigoSummaryStats.


        :param round_trip_delay_min: The round_trip_delay_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._round_trip_delay_min = round_trip_delay_min

    @property
    def round_trip_delay_max(self):
        """Gets the round_trip_delay_max of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The round_trip_delay_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._round_trip_delay_max

    @round_trip_delay_max.setter
    def round_trip_delay_max(self, round_trip_delay_max):
        """Sets the round_trip_delay_max of this EndpointIndigoSummaryStats.


        :param round_trip_delay_max: The round_trip_delay_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._round_trip_delay_max = round_trip_delay_max

    @property
    def round_trip_delay_avg(self):
        """Gets the round_trip_delay_avg of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The round_trip_delay_avg of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._round_trip_delay_avg

    @round_trip_delay_avg.setter
    def round_trip_delay_avg(self, round_trip_delay_avg):
        """Sets the round_trip_delay_avg of this EndpointIndigoSummaryStats.


        :param round_trip_delay_avg: The round_trip_delay_avg of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._round_trip_delay_avg = round_trip_delay_avg

    @property
    def rfactor_min(self):
        """Gets the rfactor_min of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The rfactor_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._rfactor_min

    @rfactor_min.setter
    def rfactor_min(self, rfactor_min):
        """Sets the rfactor_min of this EndpointIndigoSummaryStats.


        :param rfactor_min: The rfactor_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._rfactor_min = rfactor_min

    @property
    def rfactor_max(self):
        """Gets the rfactor_max of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The rfactor_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._rfactor_max

    @rfactor_max.setter
    def rfactor_max(self, rfactor_max):
        """Sets the rfactor_max of this EndpointIndigoSummaryStats.


        :param rfactor_max: The rfactor_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._rfactor_max = rfactor_max

    @property
    def rfactor_avg(self):
        """Gets the rfactor_avg of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The rfactor_avg of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._rfactor_avg

    @rfactor_avg.setter
    def rfactor_avg(self, rfactor_avg):
        """Sets the rfactor_avg of this EndpointIndigoSummaryStats.


        :param rfactor_avg: The rfactor_avg of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._rfactor_avg = rfactor_avg

    @property
    def process_cpu_load_min(self):
        """Gets the process_cpu_load_min of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The process_cpu_load_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._process_cpu_load_min

    @process_cpu_load_min.setter
    def process_cpu_load_min(self, process_cpu_load_min):
        """Sets the process_cpu_load_min of this EndpointIndigoSummaryStats.


        :param process_cpu_load_min: The process_cpu_load_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._process_cpu_load_min = process_cpu_load_min

    @property
    def process_cpu_load_max(self):
        """Gets the process_cpu_load_max of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The process_cpu_load_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._process_cpu_load_max

    @process_cpu_load_max.setter
    def process_cpu_load_max(self, process_cpu_load_max):
        """Sets the process_cpu_load_max of this EndpointIndigoSummaryStats.


        :param process_cpu_load_max: The process_cpu_load_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._process_cpu_load_max = process_cpu_load_max

    @property
    def process_cpu_load_avg(self):
        """Gets the process_cpu_load_avg of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The process_cpu_load_avg of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._process_cpu_load_avg

    @process_cpu_load_avg.setter
    def process_cpu_load_avg(self, process_cpu_load_avg):
        """Sets the process_cpu_load_avg of this EndpointIndigoSummaryStats.


        :param process_cpu_load_avg: The process_cpu_load_avg of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._process_cpu_load_avg = process_cpu_load_avg

    @property
    def system_cpu_load_min(self):
        """Gets the system_cpu_load_min of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The system_cpu_load_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._system_cpu_load_min

    @system_cpu_load_min.setter
    def system_cpu_load_min(self, system_cpu_load_min):
        """Sets the system_cpu_load_min of this EndpointIndigoSummaryStats.


        :param system_cpu_load_min: The system_cpu_load_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._system_cpu_load_min = system_cpu_load_min

    @property
    def system_cpu_load_max(self):
        """Gets the system_cpu_load_max of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The system_cpu_load_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._system_cpu_load_max

    @system_cpu_load_max.setter
    def system_cpu_load_max(self, system_cpu_load_max):
        """Sets the system_cpu_load_max of this EndpointIndigoSummaryStats.


        :param system_cpu_load_max: The system_cpu_load_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._system_cpu_load_max = system_cpu_load_max

    @property
    def system_cpu_load_avg(self):
        """Gets the system_cpu_load_avg of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The system_cpu_load_avg of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._system_cpu_load_avg

    @system_cpu_load_avg.setter
    def system_cpu_load_avg(self, system_cpu_load_avg):
        """Sets the system_cpu_load_avg of this EndpointIndigoSummaryStats.


        :param system_cpu_load_avg: The system_cpu_load_avg of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._system_cpu_load_avg = system_cpu_load_avg

    @property
    def wifi_recv_strength_min(self):
        """Gets the wifi_recv_strength_min of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The wifi_recv_strength_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._wifi_recv_strength_min

    @wifi_recv_strength_min.setter
    def wifi_recv_strength_min(self, wifi_recv_strength_min):
        """Sets the wifi_recv_strength_min of this EndpointIndigoSummaryStats.


        :param wifi_recv_strength_min: The wifi_recv_strength_min of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._wifi_recv_strength_min = wifi_recv_strength_min

    @property
    def wifi_recv_strength_max(self):
        """Gets the wifi_recv_strength_max of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The wifi_recv_strength_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._wifi_recv_strength_max

    @wifi_recv_strength_max.setter
    def wifi_recv_strength_max(self, wifi_recv_strength_max):
        """Sets the wifi_recv_strength_max of this EndpointIndigoSummaryStats.


        :param wifi_recv_strength_max: The wifi_recv_strength_max of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._wifi_recv_strength_max = wifi_recv_strength_max

    @property
    def wifi_recv_strength_avg(self):
        """Gets the wifi_recv_strength_avg of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The wifi_recv_strength_avg of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._wifi_recv_strength_avg

    @wifi_recv_strength_avg.setter
    def wifi_recv_strength_avg(self, wifi_recv_strength_avg):
        """Sets the wifi_recv_strength_avg of this EndpointIndigoSummaryStats.


        :param wifi_recv_strength_avg: The wifi_recv_strength_avg of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._wifi_recv_strength_avg = wifi_recv_strength_avg

    @property
    def key_frame_rate_avg_vi(self):
        """Gets the key_frame_rate_avg_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The key_frame_rate_avg_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._key_frame_rate_avg_vi

    @key_frame_rate_avg_vi.setter
    def key_frame_rate_avg_vi(self, key_frame_rate_avg_vi):
        """Sets the key_frame_rate_avg_vi of this EndpointIndigoSummaryStats.


        :param key_frame_rate_avg_vi: The key_frame_rate_avg_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._key_frame_rate_avg_vi = key_frame_rate_avg_vi

    @property
    def key_frame_rate_avg_vo(self):
        """Gets the key_frame_rate_avg_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The key_frame_rate_avg_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._key_frame_rate_avg_vo

    @key_frame_rate_avg_vo.setter
    def key_frame_rate_avg_vo(self, key_frame_rate_avg_vo):
        """Sets the key_frame_rate_avg_vo of this EndpointIndigoSummaryStats.


        :param key_frame_rate_avg_vo: The key_frame_rate_avg_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._key_frame_rate_avg_vo = key_frame_rate_avg_vo

    @property
    def key_frame_rate_avg_vic(self):
        """Gets the key_frame_rate_avg_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The key_frame_rate_avg_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._key_frame_rate_avg_vic

    @key_frame_rate_avg_vic.setter
    def key_frame_rate_avg_vic(self, key_frame_rate_avg_vic):
        """Sets the key_frame_rate_avg_vic of this EndpointIndigoSummaryStats.


        :param key_frame_rate_avg_vic: The key_frame_rate_avg_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._key_frame_rate_avg_vic = key_frame_rate_avg_vic

    @property
    def key_frame_rate_avg_voc(self):
        """Gets the key_frame_rate_avg_voc of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The key_frame_rate_avg_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._key_frame_rate_avg_voc

    @key_frame_rate_avg_voc.setter
    def key_frame_rate_avg_voc(self, key_frame_rate_avg_voc):
        """Sets the key_frame_rate_avg_voc of this EndpointIndigoSummaryStats.


        :param key_frame_rate_avg_voc: The key_frame_rate_avg_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._key_frame_rate_avg_voc = key_frame_rate_avg_voc

    @property
    def key_frame_rate_min_vi(self):
        """Gets the key_frame_rate_min_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The key_frame_rate_min_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._key_frame_rate_min_vi

    @key_frame_rate_min_vi.setter
    def key_frame_rate_min_vi(self, key_frame_rate_min_vi):
        """Sets the key_frame_rate_min_vi of this EndpointIndigoSummaryStats.


        :param key_frame_rate_min_vi: The key_frame_rate_min_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._key_frame_rate_min_vi = key_frame_rate_min_vi

    @property
    def key_frame_rate_min_vo(self):
        """Gets the key_frame_rate_min_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The key_frame_rate_min_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._key_frame_rate_min_vo

    @key_frame_rate_min_vo.setter
    def key_frame_rate_min_vo(self, key_frame_rate_min_vo):
        """Sets the key_frame_rate_min_vo of this EndpointIndigoSummaryStats.


        :param key_frame_rate_min_vo: The key_frame_rate_min_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._key_frame_rate_min_vo = key_frame_rate_min_vo

    @property
    def key_frame_rate_min_vic(self):
        """Gets the key_frame_rate_min_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The key_frame_rate_min_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._key_frame_rate_min_vic

    @key_frame_rate_min_vic.setter
    def key_frame_rate_min_vic(self, key_frame_rate_min_vic):
        """Sets the key_frame_rate_min_vic of this EndpointIndigoSummaryStats.


        :param key_frame_rate_min_vic: The key_frame_rate_min_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._key_frame_rate_min_vic = key_frame_rate_min_vic

    @property
    def key_frame_rate_min_voc(self):
        """Gets the key_frame_rate_min_voc of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The key_frame_rate_min_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._key_frame_rate_min_voc

    @key_frame_rate_min_voc.setter
    def key_frame_rate_min_voc(self, key_frame_rate_min_voc):
        """Sets the key_frame_rate_min_voc of this EndpointIndigoSummaryStats.


        :param key_frame_rate_min_voc: The key_frame_rate_min_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._key_frame_rate_min_voc = key_frame_rate_min_voc

    @property
    def key_frame_rate_max_vi(self):
        """Gets the key_frame_rate_max_vi of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The key_frame_rate_max_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._key_frame_rate_max_vi

    @key_frame_rate_max_vi.setter
    def key_frame_rate_max_vi(self, key_frame_rate_max_vi):
        """Sets the key_frame_rate_max_vi of this EndpointIndigoSummaryStats.


        :param key_frame_rate_max_vi: The key_frame_rate_max_vi of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._key_frame_rate_max_vi = key_frame_rate_max_vi

    @property
    def key_frame_rate_max_vo(self):
        """Gets the key_frame_rate_max_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The key_frame_rate_max_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._key_frame_rate_max_vo

    @key_frame_rate_max_vo.setter
    def key_frame_rate_max_vo(self, key_frame_rate_max_vo):
        """Sets the key_frame_rate_max_vo of this EndpointIndigoSummaryStats.


        :param key_frame_rate_max_vo: The key_frame_rate_max_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._key_frame_rate_max_vo = key_frame_rate_max_vo

    @property
    def key_frame_rate_max_vic(self):
        """Gets the key_frame_rate_max_vic of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The key_frame_rate_max_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._key_frame_rate_max_vic

    @key_frame_rate_max_vic.setter
    def key_frame_rate_max_vic(self, key_frame_rate_max_vic):
        """Sets the key_frame_rate_max_vic of this EndpointIndigoSummaryStats.


        :param key_frame_rate_max_vic: The key_frame_rate_max_vic of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._key_frame_rate_max_vic = key_frame_rate_max_vic

    @property
    def key_frame_rate_max_voc(self):
        """Gets the key_frame_rate_max_voc of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The key_frame_rate_max_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._key_frame_rate_max_voc

    @key_frame_rate_max_voc.setter
    def key_frame_rate_max_voc(self, key_frame_rate_max_voc):
        """Sets the key_frame_rate_max_voc of this EndpointIndigoSummaryStats.


        :param key_frame_rate_max_voc: The key_frame_rate_max_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._key_frame_rate_max_voc = key_frame_rate_max_voc

    @property
    def round_trip_delay_avg_vo(self):
        """Gets the round_trip_delay_avg_vo of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The round_trip_delay_avg_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._round_trip_delay_avg_vo

    @round_trip_delay_avg_vo.setter
    def round_trip_delay_avg_vo(self, round_trip_delay_avg_vo):
        """Sets the round_trip_delay_avg_vo of this EndpointIndigoSummaryStats.


        :param round_trip_delay_avg_vo: The round_trip_delay_avg_vo of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._round_trip_delay_avg_vo = round_trip_delay_avg_vo

    @property
    def round_trip_delay_avg_voc(self):
        """Gets the round_trip_delay_avg_voc of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The round_trip_delay_avg_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._round_trip_delay_avg_voc

    @round_trip_delay_avg_voc.setter
    def round_trip_delay_avg_voc(self, round_trip_delay_avg_voc):
        """Sets the round_trip_delay_avg_voc of this EndpointIndigoSummaryStats.


        :param round_trip_delay_avg_voc: The round_trip_delay_avg_voc of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._round_trip_delay_avg_voc = round_trip_delay_avg_voc

    @property
    def round_trip_delay_avg_ao(self):
        """Gets the round_trip_delay_avg_ao of this EndpointIndigoSummaryStats.  # noqa: E501


        :return: The round_trip_delay_avg_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :rtype: float
        """
        return self._round_trip_delay_avg_ao

    @round_trip_delay_avg_ao.setter
    def round_trip_delay_avg_ao(self, round_trip_delay_avg_ao):
        """Sets the round_trip_delay_avg_ao of this EndpointIndigoSummaryStats.


        :param round_trip_delay_avg_ao: The round_trip_delay_avg_ao of this EndpointIndigoSummaryStats.  # noqa: E501
        :type: float
        """

        self._round_trip_delay_avg_ao = round_trip_delay_avg_ao

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
        if issubclass(EndpointIndigoSummaryStats, dict):
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
        if not isinstance(other, EndpointIndigoSummaryStats):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other

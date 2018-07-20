# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/010/2018 </alert>Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 

    OpenAPI spec version: 1.0.4407102018
    Contact: glenn@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from __future__ import absolute_import

import sys
import os
import re

# python 2 and python 3 compatibility library
from six import iteritems

from ..configuration import Configuration
from ..api_client import ApiClient


class RecordingApi(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    Ref: https://github.com/swagger-api/swagger-codegen
    """

    def __init__(self, api_client=None):
        config = Configuration()
        if api_client:
            self.api_client = api_client
        else:
            if not config.api_client:
                config.api_client = ApiClient()
            self.api_client = config.api_client

    def create_share_recordings(self, user_id, meeting_guid, set_sharing, **kwargs):
        """
        Enable Recording Sharing
        This endpoint creates a sharing authorization record for the specified meeting recording.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.create_share_recordings(user_id, meeting_guid, set_sharing, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param str meeting_guid: The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
        :param SetSharing set_sharing: (required)
        :return: MeetingSharing
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.create_share_recordings_with_http_info(user_id, meeting_guid, set_sharing, **kwargs)
        else:
            (data) = self.create_share_recordings_with_http_info(user_id, meeting_guid, set_sharing, **kwargs)
            return data

    def create_share_recordings_with_http_info(self, user_id, meeting_guid, set_sharing, **kwargs):
        """
        Enable Recording Sharing
        This endpoint creates a sharing authorization record for the specified meeting recording.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.create_share_recordings_with_http_info(user_id, meeting_guid, set_sharing, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param str meeting_guid: The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
        :param SetSharing set_sharing: (required)
        :return: MeetingSharing
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['user_id', 'meeting_guid', 'set_sharing']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method create_share_recordings" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'user_id' is set
        if ('user_id' not in params) or (params['user_id'] is None):
            raise ValueError("Missing the required parameter `user_id` when calling `create_share_recordings`")
        # verify the required parameter 'meeting_guid' is set
        if ('meeting_guid' not in params) or (params['meeting_guid'] is None):
            raise ValueError("Missing the required parameter `meeting_guid` when calling `create_share_recordings`")
        # verify the required parameter 'set_sharing' is set
        if ('set_sharing' not in params) or (params['set_sharing'] is None):
            raise ValueError("Missing the required parameter `set_sharing` when calling `create_share_recordings`")


        collection_formats = {}

        path_params = {}
        if 'user_id' in params:
            path_params['user_id'] = params['user_id']
        if 'meeting_guid' in params:
            path_params['meetingGuid'] = params['meeting_guid']

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'set_sharing' in params:
            body_params = params['set_sharing']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing', 'POST',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='MeetingSharing',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def delete_all_recordings_by_meeting_guid(self, user_id, meeting_guid, **kwargs):
        """
        Delete All Recordings for a Specified Meeting GUID
        This endpoint stops recording for a meeting in progress. 
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.delete_all_recordings_by_meeting_guid(user_id, meeting_guid, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param str meeting_guid: The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
        :return: Meeting
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.delete_all_recordings_by_meeting_guid_with_http_info(user_id, meeting_guid, **kwargs)
        else:
            (data) = self.delete_all_recordings_by_meeting_guid_with_http_info(user_id, meeting_guid, **kwargs)
            return data

    def delete_all_recordings_by_meeting_guid_with_http_info(self, user_id, meeting_guid, **kwargs):
        """
        Delete All Recordings for a Specified Meeting GUID
        This endpoint stops recording for a meeting in progress. 
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.delete_all_recordings_by_meeting_guid_with_http_info(user_id, meeting_guid, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param str meeting_guid: The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
        :return: Meeting
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['user_id', 'meeting_guid']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method delete_all_recordings_by_meeting_guid" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'user_id' is set
        if ('user_id' not in params) or (params['user_id'] is None):
            raise ValueError("Missing the required parameter `user_id` when calling `delete_all_recordings_by_meeting_guid`")
        # verify the required parameter 'meeting_guid' is set
        if ('meeting_guid' not in params) or (params['meeting_guid'] is None):
            raise ValueError("Missing the required parameter `meeting_guid` when calling `delete_all_recordings_by_meeting_guid`")


        collection_formats = {}

        path_params = {}
        if 'user_id' in params:
            path_params['user_id'] = params['user_id']
        if 'meeting_guid' in params:
            path_params['meeting_guid'] = params['meeting_guid']

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/', 'DELETE',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='Meeting',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def delete_recording_chapter(self, user_id, meeting_id, recording_chapter_id, **kwargs):
        """
        Delete a Specified Recording Chapter
        This endpoint stops recording for a meeting in progress.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.delete_recording_chapter(user_id, meeting_id, recording_chapter_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param int meeting_id: The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property. (required)
        :param int recording_chapter_id: The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property. (required)
        :return: Meeting
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.delete_recording_chapter_with_http_info(user_id, meeting_id, recording_chapter_id, **kwargs)
        else:
            (data) = self.delete_recording_chapter_with_http_info(user_id, meeting_id, recording_chapter_id, **kwargs)
            return data

    def delete_recording_chapter_with_http_info(self, user_id, meeting_id, recording_chapter_id, **kwargs):
        """
        Delete a Specified Recording Chapter
        This endpoint stops recording for a meeting in progress.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.delete_recording_chapter_with_http_info(user_id, meeting_id, recording_chapter_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param int meeting_id: The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property. (required)
        :param int recording_chapter_id: The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property. (required)
        :return: Meeting
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['user_id', 'meeting_id', 'recording_chapter_id']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method delete_recording_chapter" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'user_id' is set
        if ('user_id' not in params) or (params['user_id'] is None):
            raise ValueError("Missing the required parameter `user_id` when calling `delete_recording_chapter`")
        # verify the required parameter 'meeting_id' is set
        if ('meeting_id' not in params) or (params['meeting_id'] is None):
            raise ValueError("Missing the required parameter `meeting_id` when calling `delete_recording_chapter`")
        # verify the required parameter 'recording_chapter_id' is set
        if ('recording_chapter_id' not in params) or (params['recording_chapter_id'] is None):
            raise ValueError("Missing the required parameter `recording_chapter_id` when calling `delete_recording_chapter`")


        collection_formats = {}

        path_params = {}
        if 'user_id' in params:
            path_params['user_id'] = params['user_id']
        if 'meeting_id' in params:
            path_params['meeting_id'] = params['meeting_id']
        if 'recording_chapter_id' in params:
            path_params['recording_chapter_id'] = params['recording_chapter_id']

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/', 'DELETE',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='Meeting',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def delete_share_recordings(self, user_id, meeting_guid, **kwargs):
        """
        Delete Recording Sharing
        This endpoint deletes the sharing authorization associated with a meeting recording.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.delete_share_recordings(user_id, meeting_guid, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param str meeting_guid: The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.delete_share_recordings_with_http_info(user_id, meeting_guid, **kwargs)
        else:
            (data) = self.delete_share_recordings_with_http_info(user_id, meeting_guid, **kwargs)
            return data

    def delete_share_recordings_with_http_info(self, user_id, meeting_guid, **kwargs):
        """
        Delete Recording Sharing
        This endpoint deletes the sharing authorization associated with a meeting recording.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.delete_share_recordings_with_http_info(user_id, meeting_guid, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param str meeting_guid: The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['user_id', 'meeting_guid']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method delete_share_recordings" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'user_id' is set
        if ('user_id' not in params) or (params['user_id'] is None):
            raise ValueError("Missing the required parameter `user_id` when calling `delete_share_recordings`")
        # verify the required parameter 'meeting_guid' is set
        if ('meeting_guid' not in params) or (params['meeting_guid'] is None):
            raise ValueError("Missing the required parameter `meeting_guid` when calling `delete_share_recordings`")


        collection_formats = {}

        path_params = {}
        if 'user_id' in params:
            path_params['user_id'] = params['user_id']
        if 'meeting_guid' in params:
            path_params['meetingGuid'] = params['meeting_guid']

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing', 'DELETE',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type=None,
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_meeting_recordings(self, user_id, meeting_id, **kwargs):
        """
        Get All Recordings for a Specified Meeting ID
        This endpoint lists the recordings for a meeting.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meeting_recordings(user_id, meeting_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param int meeting_id: The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property. (required)
        :param str meeting_guid: The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
        :return: RecordingHistoryList
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_meeting_recordings_with_http_info(user_id, meeting_id, **kwargs)
        else:
            (data) = self.get_meeting_recordings_with_http_info(user_id, meeting_id, **kwargs)
            return data

    def get_meeting_recordings_with_http_info(self, user_id, meeting_id, **kwargs):
        """
        Get All Recordings for a Specified Meeting ID
        This endpoint lists the recordings for a meeting.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meeting_recordings_with_http_info(user_id, meeting_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param int meeting_id: The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property. (required)
        :param str meeting_guid: The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.
        :return: RecordingHistoryList
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['user_id', 'meeting_id', 'meeting_guid']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_meeting_recordings" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'user_id' is set
        if ('user_id' not in params) or (params['user_id'] is None):
            raise ValueError("Missing the required parameter `user_id` when calling `get_meeting_recordings`")
        # verify the required parameter 'meeting_id' is set
        if ('meeting_id' not in params) or (params['meeting_id'] is None):
            raise ValueError("Missing the required parameter `meeting_id` when calling `get_meeting_recordings`")


        collection_formats = {}

        path_params = {}
        if 'user_id' in params:
            path_params['user_id'] = params['user_id']
        if 'meeting_id' in params:
            path_params['meeting_id'] = params['meeting_id']

        query_params = []
        if 'meeting_guid' in params:
            query_params.append(('meetingGuid', params['meeting_guid']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/user/{user_id}/meeting_history/{meeting_id}/recordings', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='RecordingHistoryList',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_recording_content(self, user_id, content_id, is_downloadable, **kwargs):
        """
        Get Recording Download Link
        This endpoint retrieves properties about the recording chapter.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_recording_content(user_id, content_id, is_downloadable, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param int content_id: The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. (required)
        :param bool is_downloadable: Set to true. (required)
        :return: Content
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_recording_content_with_http_info(user_id, content_id, is_downloadable, **kwargs)
        else:
            (data) = self.get_recording_content_with_http_info(user_id, content_id, is_downloadable, **kwargs)
            return data

    def get_recording_content_with_http_info(self, user_id, content_id, is_downloadable, **kwargs):
        """
        Get Recording Download Link
        This endpoint retrieves properties about the recording chapter.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_recording_content_with_http_info(user_id, content_id, is_downloadable, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param int content_id: The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. (required)
        :param bool is_downloadable: Set to true. (required)
        :return: Content
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['user_id', 'content_id', 'is_downloadable']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_recording_content" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'user_id' is set
        if ('user_id' not in params) or (params['user_id'] is None):
            raise ValueError("Missing the required parameter `user_id` when calling `get_recording_content`")
        # verify the required parameter 'content_id' is set
        if ('content_id' not in params) or (params['content_id'] is None):
            raise ValueError("Missing the required parameter `content_id` when calling `get_recording_content`")
        # verify the required parameter 'is_downloadable' is set
        if ('is_downloadable' not in params) or (params['is_downloadable'] is None):
            raise ValueError("Missing the required parameter `is_downloadable` when calling `get_recording_content`")


        collection_formats = {}

        path_params = {}
        if 'user_id' in params:
            path_params['user_id'] = params['user_id']
        if 'content_id' in params:
            path_params['content_id'] = params['content_id']

        query_params = []
        if 'is_downloadable' in params:
            query_params.append(('isDownloadable', params['is_downloadable']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/user/{user_id}/cms/{content_id}', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='Content',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_share_recordings(self, user_id, meeting_guid, **kwargs):
        """
        List Recording Sharing
        This endpoint retrieves a the sharing authorization information for a meeting's recording. If no sharing has been authorized for the meeting, this API returns a 404 error.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_share_recordings(user_id, meeting_guid, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param str meeting_guid: The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
        :return: MeetingSharing
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_share_recordings_with_http_info(user_id, meeting_guid, **kwargs)
        else:
            (data) = self.get_share_recordings_with_http_info(user_id, meeting_guid, **kwargs)
            return data

    def get_share_recordings_with_http_info(self, user_id, meeting_guid, **kwargs):
        """
        List Recording Sharing
        This endpoint retrieves a the sharing authorization information for a meeting's recording. If no sharing has been authorized for the meeting, this API returns a 404 error.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_share_recordings_with_http_info(user_id, meeting_guid, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param str meeting_guid: The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
        :return: MeetingSharing
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['user_id', 'meeting_guid']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_share_recordings" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'user_id' is set
        if ('user_id' not in params) or (params['user_id'] is None):
            raise ValueError("Missing the required parameter `user_id` when calling `get_share_recordings`")
        # verify the required parameter 'meeting_guid' is set
        if ('meeting_guid' not in params) or (params['meeting_guid'] is None):
            raise ValueError("Missing the required parameter `meeting_guid` when calling `get_share_recordings`")


        collection_formats = {}

        path_params = {}
        if 'user_id' in params:
            path_params['user_id'] = params['user_id']
        if 'meeting_guid' in params:
            path_params['meetingGuid'] = params['meeting_guid']

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='MeetingSharing',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def modify_share_recordings(self, user_id, meeting_guid, sharing_id, modify_sharing, **kwargs):
        """
        Modify Recording Sharing
        This endpoint modifieds the sharing authorization attributes for a meeting recording.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.modify_share_recordings(user_id, meeting_guid, sharing_id, modify_sharing, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param str meeting_guid: The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
        :param str sharing_id: The identifier of the sharing authorization record.  This value can be obtained from the \"Id\" in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing (required)
        :param ModifySharing modify_sharing: (required)
        :return: MeetingSharing
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.modify_share_recordings_with_http_info(user_id, meeting_guid, sharing_id, modify_sharing, **kwargs)
        else:
            (data) = self.modify_share_recordings_with_http_info(user_id, meeting_guid, sharing_id, modify_sharing, **kwargs)
            return data

    def modify_share_recordings_with_http_info(self, user_id, meeting_guid, sharing_id, modify_sharing, **kwargs):
        """
        Modify Recording Sharing
        This endpoint modifieds the sharing authorization attributes for a meeting recording.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.modify_share_recordings_with_http_info(user_id, meeting_guid, sharing_id, modify_sharing, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param str meeting_guid: The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. (required)
        :param str sharing_id: The identifier of the sharing authorization record.  This value can be obtained from the \"Id\" in the response to the API GET /v1/user/{user_id}/meeting_history/{meetingGuid}/sharing (required)
        :param ModifySharing modify_sharing: (required)
        :return: MeetingSharing
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['user_id', 'meeting_guid', 'sharing_id', 'modify_sharing']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method modify_share_recordings" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'user_id' is set
        if ('user_id' not in params) or (params['user_id'] is None):
            raise ValueError("Missing the required parameter `user_id` when calling `modify_share_recordings`")
        # verify the required parameter 'meeting_guid' is set
        if ('meeting_guid' not in params) or (params['meeting_guid'] is None):
            raise ValueError("Missing the required parameter `meeting_guid` when calling `modify_share_recordings`")
        # verify the required parameter 'sharing_id' is set
        if ('sharing_id' not in params) or (params['sharing_id'] is None):
            raise ValueError("Missing the required parameter `sharing_id` when calling `modify_share_recordings`")
        # verify the required parameter 'modify_sharing' is set
        if ('modify_sharing' not in params) or (params['modify_sharing'] is None):
            raise ValueError("Missing the required parameter `modify_sharing` when calling `modify_share_recordings`")


        collection_formats = {}

        path_params = {}
        if 'user_id' in params:
            path_params['user_id'] = params['user_id']
        if 'meeting_guid' in params:
            path_params['meetingGuid'] = params['meeting_guid']
        if 'sharing_id' in params:
            path_params['sharingId'] = params['sharing_id']

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'modify_sharing' in params:
            body_params = params['modify_sharing']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/user/{user_id}/meeting_history/{meetingGuid}/sharing/{sharingId}', 'PUT',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='MeetingSharing',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def move_recording_owner(self, user_id, original_owner, new_owner, **kwargs):
        """
        Move Recording Ownership
        This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.move_recording_owner(user_id, original_owner, new_owner, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param int original_owner: The ID of the recording's current owner. (required)
        :param int new_owner: The ID of the intended owner for the recording. (required)
        :return: RecordingMovedComp
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.move_recording_owner_with_http_info(user_id, original_owner, new_owner, **kwargs)
        else:
            (data) = self.move_recording_owner_with_http_info(user_id, original_owner, new_owner, **kwargs)
            return data

    def move_recording_owner_with_http_info(self, user_id, original_owner, new_owner, **kwargs):
        """
        Move Recording Ownership
        This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.move_recording_owner_with_http_info(user_id, original_owner, new_owner, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user requesting the move.  This user must have Enterprise Administrator privileges.  This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param int original_owner: The ID of the recording's current owner. (required)
        :param int new_owner: The ID of the intended owner for the recording. (required)
        :return: RecordingMovedComp
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['user_id', 'original_owner', 'new_owner']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method move_recording_owner" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'user_id' is set
        if ('user_id' not in params) or (params['user_id'] is None):
            raise ValueError("Missing the required parameter `user_id` when calling `move_recording_owner`")
        # verify the required parameter 'original_owner' is set
        if ('original_owner' not in params) or (params['original_owner'] is None):
            raise ValueError("Missing the required parameter `original_owner` when calling `move_recording_owner`")
        # verify the required parameter 'new_owner' is set
        if ('new_owner' not in params) or (params['new_owner'] is None):
            raise ValueError("Missing the required parameter `new_owner` when calling `move_recording_owner`")


        collection_formats = {}

        path_params = {}
        if 'user_id' in params:
            path_params['user_id'] = params['user_id']
        if 'original_owner' in params:
            path_params['originalOwner'] = params['original_owner']
        if 'new_owner' in params:
            path_params['newOwner'] = params['new_owner']

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/user/{user_id}/meeting_history/move_recordings/from_user/{originalOwner}/to_user/{newOwner}', 'POST',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='RecordingMovedComp',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def start_recording(self, user_id, meeting_id, action, **kwargs):
        """
        Start Recording
        This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.start_recording(user_id, meeting_id, action, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param int meeting_id: The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property. (required)
        :param str action: Always set to \"start\" in order to start recording. (required)
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.start_recording_with_http_info(user_id, meeting_id, action, **kwargs)
        else:
            (data) = self.start_recording_with_http_info(user_id, meeting_id, action, **kwargs)
            return data

    def start_recording_with_http_info(self, user_id, meeting_id, action, **kwargs):
        """
        Start Recording
        This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.start_recording_with_http_info(user_id, meeting_id, action, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param int meeting_id: The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property. (required)
        :param str action: Always set to \"start\" in order to start recording. (required)
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['user_id', 'meeting_id', 'action']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method start_recording" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'user_id' is set
        if ('user_id' not in params) or (params['user_id'] is None):
            raise ValueError("Missing the required parameter `user_id` when calling `start_recording`")
        # verify the required parameter 'meeting_id' is set
        if ('meeting_id' not in params) or (params['meeting_id'] is None):
            raise ValueError("Missing the required parameter `meeting_id` when calling `start_recording`")
        # verify the required parameter 'action' is set
        if ('action' not in params) or (params['action'] is None):
            raise ValueError("Missing the required parameter `action` when calling `start_recording`")


        collection_formats = {}

        path_params = {}
        if 'user_id' in params:
            path_params['user_id'] = params['user_id']
        if 'meeting_id' in params:
            path_params['meeting_id'] = params['meeting_id']

        query_params = []
        if 'action' in params:
            query_params.append(('action', params['action']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/user/{user_id}/live_meetings/{meeting_id}/recordings', 'POST',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type=None,
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def stop_recording(self, user_id, meeting_id, action, **kwargs):
        """
        Stop Recording
        This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.stop_recording(user_id, meeting_id, action, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param int meeting_id: The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property. (required)
        :param str action: Always set to \"stop\" in order to stop recording. (required)
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.stop_recording_with_http_info(user_id, meeting_id, action, **kwargs)
        else:
            (data) = self.stop_recording_with_http_info(user_id, meeting_id, action, **kwargs)
            return data

    def stop_recording_with_http_info(self, user_id, meeting_id, action, **kwargs):
        """
        Stop Recording
        This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.stop_recording_with_http_info(user_id, meeting_id, action, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param int meeting_id: The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property. (required)
        :param str action: Always set to \"stop\" in order to stop recording. (required)
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['user_id', 'meeting_id', 'action']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method stop_recording" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'user_id' is set
        if ('user_id' not in params) or (params['user_id'] is None):
            raise ValueError("Missing the required parameter `user_id` when calling `stop_recording`")
        # verify the required parameter 'meeting_id' is set
        if ('meeting_id' not in params) or (params['meeting_id'] is None):
            raise ValueError("Missing the required parameter `meeting_id` when calling `stop_recording`")
        # verify the required parameter 'action' is set
        if ('action' not in params) or (params['action'] is None):
            raise ValueError("Missing the required parameter `action` when calling `stop_recording`")


        collection_formats = {}

        path_params = {}
        if 'user_id' in params:
            path_params['user_id'] = params['user_id']
        if 'meeting_id' in params:
            path_params['meeting_id'] = params['meeting_id']

        query_params = []
        if 'action' in params:
            query_params.append(('action', params['action']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/user/{user_id}/live_meetings/{meeting_id}/recordings', 'PUT',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type=None,
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

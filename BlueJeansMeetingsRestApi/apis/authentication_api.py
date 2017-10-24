# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 

    OpenAPI spec version: 1.0.0
    Contact: brandon@bluejeans.com
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


class AuthenticationApi(object):
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

    def get_authorization_code(self, **kwargs):
        """
        Get Authorization Code
        This is **not a true REST endpoint**. <br /> This URL should be used by a user's browser-client application to perform authorization. <br />Upon completion, the user will be redirected back to the client application with state and code return parameters. Use \"bluejeans.com\" as hostname. <br />**Note:**<br />&nbsp;&nbsp;The code returned is only valid for *30 seconds.*  Your application must call as soon as possible the /oauth2/token API to generate an access token from the returned code.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_authorization_code(callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str client_id: The 32 character client ID generated when you created the client application.
        :param str redirect_uri: The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application.
        :param str state: Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users.
        :param str scope: A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time.
        :param str response_type: The type of authorization you are peforrming.  Set to \"code\".
        :param str app_name: The name of the client application shown to user during authorization.
        :param str app_logo_url: URL to an 84x84 image shown to user during authorization.
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_authorization_code_with_http_info(**kwargs)
        else:
            (data) = self.get_authorization_code_with_http_info(**kwargs)
            return data

    def get_authorization_code_with_http_info(self, **kwargs):
        """
        Get Authorization Code
        This is **not a true REST endpoint**. <br /> This URL should be used by a user's browser-client application to perform authorization. <br />Upon completion, the user will be redirected back to the client application with state and code return parameters. Use \"bluejeans.com\" as hostname. <br />**Note:**<br />&nbsp;&nbsp;The code returned is only valid for *30 seconds.*  Your application must call as soon as possible the /oauth2/token API to generate an access token from the returned code.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_authorization_code_with_http_info(callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str client_id: The 32 character client ID generated when you created the client application.
        :param str redirect_uri: The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application.
        :param str state: Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users.
        :param str scope: A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time.
        :param str response_type: The type of authorization you are peforrming.  Set to \"code\".
        :param str app_name: The name of the client application shown to user during authorization.
        :param str app_logo_url: URL to an 84x84 image shown to user during authorization.
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['client_id', 'redirect_uri', 'state', 'scope', 'response_type', 'app_name', 'app_logo_url']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_authorization_code" % key
                )
            params[key] = val
        del params['kwargs']


        collection_formats = {}

        path_params = {}

        query_params = []
        if 'client_id' in params:
            query_params.append(('clientId', params['client_id']))
        if 'redirect_uri' in params:
            query_params.append(('redirectUri', params['redirect_uri']))
        if 'state' in params:
            query_params.append(('state', params['state']))
        if 'scope' in params:
            query_params.append(('scope', params['scope']))
        if 'response_type' in params:
            query_params.append(('responseType', params['response_type']))
        if 'app_name' in params:
            query_params.append(('appName', params['app_name']))
        if 'app_logo_url' in params:
            query_params.append(('appLogoUrl', params['app_logo_url']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/oauth2/authorize', 'GET',
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

    def get_token_by_client(self, grant_request_client, **kwargs):
        """
        Authentication via Client Grant Type
        This API is typically called from an application that needs to make API requests.  The values for the calling parameters, Client ID, and Secret, are provisioned within the BlueJeans Enterprise Administration console.  A BlueJeans administrator must generate these parameters and provide them to the customer/developer. <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**client_credentials**\" (string).
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_token_by_client(grant_request_client, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param GrantRequestClient grant_request_client: Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*. (required)
        :return: GrantClient
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_token_by_client_with_http_info(grant_request_client, **kwargs)
        else:
            (data) = self.get_token_by_client_with_http_info(grant_request_client, **kwargs)
            return data

    def get_token_by_client_with_http_info(self, grant_request_client, **kwargs):
        """
        Authentication via Client Grant Type
        This API is typically called from an application that needs to make API requests.  The values for the calling parameters, Client ID, and Secret, are provisioned within the BlueJeans Enterprise Administration console.  A BlueJeans administrator must generate these parameters and provide them to the customer/developer. <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**client_credentials**\" (string).
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_token_by_client_with_http_info(grant_request_client, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param GrantRequestClient grant_request_client: Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*. (required)
        :return: GrantClient
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['grant_request_client']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_token_by_client" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'grant_request_client' is set
        if ('grant_request_client' not in params) or (params['grant_request_client'] is None):
            raise ValueError("Missing the required parameter `grant_request_client` when calling `get_token_by_client`")


        collection_formats = {}

        path_params = {}

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'grant_request_client' in params:
            body_params = params['grant_request_client']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/oauth2/token?Client', 'POST',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='GrantClient',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_token_by_code(self, grant_request_code, **kwargs):
        """
        Authentication via Code Grant Type
        This API is part of the 3-legged OAuth 2.0 authorization flow.  The user will be redirected to a BlueJeans page to authenticate.  You must pass to this API your OAuth client and secret keys as well as a *success URL* to which the user will be redirected upon successful authentication. <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**authorization_code**\" (string).
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_token_by_code(grant_request_code, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param GrantRequestCode grant_request_code: Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*. (required)
        :return: GrantCode
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_token_by_code_with_http_info(grant_request_code, **kwargs)
        else:
            (data) = self.get_token_by_code_with_http_info(grant_request_code, **kwargs)
            return data

    def get_token_by_code_with_http_info(self, grant_request_code, **kwargs):
        """
        Authentication via Code Grant Type
        This API is part of the 3-legged OAuth 2.0 authorization flow.  The user will be redirected to a BlueJeans page to authenticate.  You must pass to this API your OAuth client and secret keys as well as a *success URL* to which the user will be redirected upon successful authentication. <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**authorization_code**\" (string).
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_token_by_code_with_http_info(grant_request_code, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param GrantRequestCode grant_request_code: Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*. (required)
        :return: GrantCode
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['grant_request_code']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_token_by_code" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'grant_request_code' is set
        if ('grant_request_code' not in params) or (params['grant_request_code'] is None):
            raise ValueError("Missing the required parameter `grant_request_code` when calling `get_token_by_code`")


        collection_formats = {}

        path_params = {}

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'grant_request_code' in params:
            body_params = params['grant_request_code']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/oauth2/token?Code', 'POST',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='GrantCode',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_token_by_meeting(self, grant_request_meeting, **kwargs):
        """
        Authentication via Meeting Grant Type
        This API uses an OAuth-like grant/request method similar to the Password grant type.  The API returns an access token whose scope is limited to the meeting only. <br />Call this API with the meeting's numeric ID, and the meeting passcode (if one exists). <br />&nbsp;&nbsp;If you call the API with a Moderator passcode, moderator privileges are granted. <br />&nbsp;&nbsp;If an Attendee access code is passed, the access token will grant attendee abilities.<br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**meeting_passcode**\" (string).
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_token_by_meeting(grant_request_meeting, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param GrantRequestMeeting grant_request_meeting: Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*. (required)
        :return: GrantMeeting
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_token_by_meeting_with_http_info(grant_request_meeting, **kwargs)
        else:
            (data) = self.get_token_by_meeting_with_http_info(grant_request_meeting, **kwargs)
            return data

    def get_token_by_meeting_with_http_info(self, grant_request_meeting, **kwargs):
        """
        Authentication via Meeting Grant Type
        This API uses an OAuth-like grant/request method similar to the Password grant type.  The API returns an access token whose scope is limited to the meeting only. <br />Call this API with the meeting's numeric ID, and the meeting passcode (if one exists). <br />&nbsp;&nbsp;If you call the API with a Moderator passcode, moderator privileges are granted. <br />&nbsp;&nbsp;If an Attendee access code is passed, the access token will grant attendee abilities.<br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**meeting_passcode**\" (string).
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_token_by_meeting_with_http_info(grant_request_meeting, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param GrantRequestMeeting grant_request_meeting: Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*. (required)
        :return: GrantMeeting
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['grant_request_meeting']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_token_by_meeting" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'grant_request_meeting' is set
        if ('grant_request_meeting' not in params) or (params['grant_request_meeting'] is None):
            raise ValueError("Missing the required parameter `grant_request_meeting` when calling `get_token_by_meeting`")


        collection_formats = {}

        path_params = {}

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'grant_request_meeting' in params:
            body_params = params['grant_request_meeting']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/oauth2/token?Meeting', 'POST',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='GrantMeeting',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_token_by_password(self, grant_request_password, **kwargs):
        """
        Authentication via Password Grant Type
        This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password. <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**password**\" (string).
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_token_by_password(grant_request_password, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param GrantRequestPassword grant_request_password: Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*. (required)
        :return: GrantPassword
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_token_by_password_with_http_info(grant_request_password, **kwargs)
        else:
            (data) = self.get_token_by_password_with_http_info(grant_request_password, **kwargs)
            return data

    def get_token_by_password_with_http_info(self, grant_request_password, **kwargs):
        """
        Authentication via Password Grant Type
        This API performs an authentication based upon a username and password.   Call this API and provide a valid username and password. <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**password**\" (string).
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_token_by_password_with_http_info(grant_request_password, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param GrantRequestPassword grant_request_password: Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*. (required)
        :return: GrantPassword
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['grant_request_password']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_token_by_password" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'grant_request_password' is set
        if ('grant_request_password' not in params) or (params['grant_request_password'] is None):
            raise ValueError("Missing the required parameter `grant_request_password` when calling `get_token_by_password`")


        collection_formats = {}

        path_params = {}

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'grant_request_password' in params:
            body_params = params['grant_request_password']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/oauth2/token?Password', 'POST',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='GrantPassword',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_token_by_refresh(self, grant_request_refresh, **kwargs):
        """
        Authentication via Refresh Grant Type
        This API is part of the 3-legged OAuth 2.0 authorization flow.  It only works for access tokens obtained via /oauth2/token?Code endpoint. It allows an application to refresh an existing access token.  You must pass to this API your OAuth client and secret keys as well as the current access token being refreshed.  <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**refresh_token**\" (string).
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_token_by_refresh(grant_request_refresh, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param GrantRequestRefresh grant_request_refresh: Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*. (required)
        :return: GrantRefresh
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_token_by_refresh_with_http_info(grant_request_refresh, **kwargs)
        else:
            (data) = self.get_token_by_refresh_with_http_info(grant_request_refresh, **kwargs)
            return data

    def get_token_by_refresh_with_http_info(self, grant_request_refresh, **kwargs):
        """
        Authentication via Refresh Grant Type
        This API is part of the 3-legged OAuth 2.0 authorization flow.  It only works for access tokens obtained via /oauth2/token?Code endpoint. It allows an application to refresh an existing access token.  You must pass to this API your OAuth client and secret keys as well as the current access token being refreshed.  <br />**NOTE:** <br />&nbsp;&nbsp;When calling this API, you must set the field, **grant_type** to equal \"**refresh_token**\" (string).
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_token_by_refresh_with_http_info(grant_request_refresh, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param GrantRequestRefresh grant_request_refresh: Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*. (required)
        :return: GrantRefresh
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['grant_request_refresh']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_token_by_refresh" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'grant_request_refresh' is set
        if ('grant_request_refresh' not in params) or (params['grant_request_refresh'] is None):
            raise ValueError("Missing the required parameter `grant_request_refresh` when calling `get_token_by_refresh`")


        collection_formats = {}

        path_params = {}

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'grant_request_refresh' in params:
            body_params = params['grant_request_refresh']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/oauth2/token?Refresh', 'POST',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='GrantRefresh',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_token_info(self, **kwargs):
        """
        Validate a Token
        This endpoint will determine if a token is valid or not.  If the token is valid, it returns the user ID for the owner of the token.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_token_info(callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str access_token:
        :return: InlineResponse200
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_token_info_with_http_info(**kwargs)
        else:
            (data) = self.get_token_info_with_http_info(**kwargs)
            return data

    def get_token_info_with_http_info(self, **kwargs):
        """
        Validate a Token
        This endpoint will determine if a token is valid or not.  If the token is valid, it returns the user ID for the owner of the token.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_token_info_with_http_info(callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str access_token:
        :return: InlineResponse200
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['access_token']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_token_info" % key
                )
            params[key] = val
        del params['kwargs']


        collection_formats = {}

        path_params = {}

        query_params = []
        if 'access_token' in params:
            query_params.append(('access_token', params['access_token']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/oauth2/tokenInfo', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='InlineResponse200',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def revoke_access_token(self, grant_request_revoke, **kwargs):
        """
        Revoke Access Token
        This API is part of the 3-legged OAuth 2.0 authorization flow.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.revoke_access_token(grant_request_revoke, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param GrantRequestRevoke grant_request_revoke: Contains information about the type of grant you are revoking. (required)
        :param str access_token:
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.revoke_access_token_with_http_info(grant_request_revoke, **kwargs)
        else:
            (data) = self.revoke_access_token_with_http_info(grant_request_revoke, **kwargs)
            return data

    def revoke_access_token_with_http_info(self, grant_request_revoke, **kwargs):
        """
        Revoke Access Token
        This API is part of the 3-legged OAuth 2.0 authorization flow.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.revoke_access_token_with_http_info(grant_request_revoke, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param GrantRequestRevoke grant_request_revoke: Contains information about the type of grant you are revoking. (required)
        :param str access_token:
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['grant_request_revoke', 'access_token']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method revoke_access_token" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'grant_request_revoke' is set
        if ('grant_request_revoke' not in params) or (params['grant_request_revoke'] is None):
            raise ValueError("Missing the required parameter `grant_request_revoke` when calling `revoke_access_token`")


        collection_formats = {}

        path_params = {}

        query_params = []
        if 'access_token' in params:
            query_params.append(('access_token', params['access_token']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'grant_request_revoke' in params:
            body_params = params['grant_request_revoke']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/oauth2/token?Revoke', 'DELETE',
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

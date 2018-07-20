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


class EnterpriseApi(object):
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

    def change_enterprise_tags(self, enterprise_id, action, tag, **kwargs):
        """
        Set Enterprise Tags
        This endpoint modifies the list of profile tags associated with the specified enterprise.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.change_enterprise_tags(enterprise_id, action, tag, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str action: Type of operation to be done (required)
        :param str tag: The name of tag (required)
        :return: TagListComp
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.change_enterprise_tags_with_http_info(enterprise_id, action, tag, **kwargs)
        else:
            (data) = self.change_enterprise_tags_with_http_info(enterprise_id, action, tag, **kwargs)
            return data

    def change_enterprise_tags_with_http_info(self, enterprise_id, action, tag, **kwargs):
        """
        Set Enterprise Tags
        This endpoint modifies the list of profile tags associated with the specified enterprise.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.change_enterprise_tags_with_http_info(enterprise_id, action, tag, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str action: Type of operation to be done (required)
        :param str tag: The name of tag (required)
        :return: TagListComp
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'action', 'tag']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method change_enterprise_tags" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `change_enterprise_tags`")
        # verify the required parameter 'action' is set
        if ('action' not in params) or (params['action'] is None):
            raise ValueError("Missing the required parameter `action` when calling `change_enterprise_tags`")
        # verify the required parameter 'tag' is set
        if ('tag' not in params) or (params['tag'] is None):
            raise ValueError("Missing the required parameter `tag` when calling `change_enterprise_tags`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterpriseId'] = params['enterprise_id']

        query_params = []
        if 'action' in params:
            query_params.append(('action', params['action']))
        if 'tag' in params:
            query_params.append(('tag', params['tag']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/enterprise/{enterpriseId}/tags', 'PUT',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='TagListComp',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def create_enterprise_user(self, enterprise_id, enterprise_user, **kwargs):
        """
        Create User
        This endpoint creates a user profile within the specified enterprise.  It is the first of the 2-step process to create a BlueJeans user.  It should be followed by an API call to create the user's personal meeting room.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.create_enterprise_user(enterprise_id, enterprise_user, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param EnterpriseCreateUser enterprise_user: Basic Enterprise Account information (required)
        :param str billing_category: What general billing group does this profile belong?
        :param bool force_password_change: Create profile and force user to change password on next login
        :param bool is_admin: Create this account to have Administrative Privileges for the enterprise
        :return: UserId
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.create_enterprise_user_with_http_info(enterprise_id, enterprise_user, **kwargs)
        else:
            (data) = self.create_enterprise_user_with_http_info(enterprise_id, enterprise_user, **kwargs)
            return data

    def create_enterprise_user_with_http_info(self, enterprise_id, enterprise_user, **kwargs):
        """
        Create User
        This endpoint creates a user profile within the specified enterprise.  It is the first of the 2-step process to create a BlueJeans user.  It should be followed by an API call to create the user's personal meeting room.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.create_enterprise_user_with_http_info(enterprise_id, enterprise_user, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param EnterpriseCreateUser enterprise_user: Basic Enterprise Account information (required)
        :param str billing_category: What general billing group does this profile belong?
        :param bool force_password_change: Create profile and force user to change password on next login
        :param bool is_admin: Create this account to have Administrative Privileges for the enterprise
        :return: UserId
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'enterprise_user', 'billing_category', 'force_password_change', 'is_admin']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method create_enterprise_user" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `create_enterprise_user`")
        # verify the required parameter 'enterprise_user' is set
        if ('enterprise_user' not in params) or (params['enterprise_user'] is None):
            raise ValueError("Missing the required parameter `enterprise_user` when calling `create_enterprise_user`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterpriseId'] = params['enterprise_id']

        query_params = []
        if 'billing_category' in params:
            query_params.append(('billingCategory', params['billing_category']))
        if 'force_password_change' in params:
            query_params.append(('forcePasswordChange', params['force_password_change']))
        if 'is_admin' in params:
            query_params.append(('isAdmin', params['is_admin']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'enterprise_user' in params:
            body_params = params['enterprise_user']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/enterprise/{enterpriseId}/users', 'POST',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='UserId',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def export_users(self, enterprise_id, **kwargs):
        """
        Export Enterprise Users
        This endpoint exports existing users into a CSV file.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.export_users(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.export_users_with_http_info(enterprise_id, **kwargs)
        else:
            (data) = self.export_users_with_http_info(enterprise_id, **kwargs)
            return data

    def export_users_with_http_info(self, enterprise_id, **kwargs):
        """
        Export Enterprise Users
        This endpoint exports existing users into a CSV file.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.export_users_with_http_info(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method export_users" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `export_users`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['text/csv'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/enterprise/{enterprise_id}/users/export', 'GET',
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

    def get_enterprise_tags(self, enterprise_id, **kwargs):
        """
        List Enterprise Tags
        This endpoint retrieves all profile tags defined for the specified enterprise.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_enterprise_tags(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :return: TagListComp
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_enterprise_tags_with_http_info(enterprise_id, **kwargs)
        else:
            (data) = self.get_enterprise_tags_with_http_info(enterprise_id, **kwargs)
            return data

    def get_enterprise_tags_with_http_info(self, enterprise_id, **kwargs):
        """
        List Enterprise Tags
        This endpoint retrieves all profile tags defined for the specified enterprise.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_enterprise_tags_with_http_info(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :return: TagListComp
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_enterprise_tags" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_enterprise_tags`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterpriseId'] = params['enterprise_id']

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

        return self.api_client.call_api('/v1/enterprise/{enterpriseId}/tags', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='TagListComp',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def remove_user(self, enterprise_id, user_id, **kwargs):
        """
        Remove Enterprise User
        This endpoint allows removing a user from an enterprise; it does not delete the user. Requires enterprise admin access level.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.remove_user(enterprise_id, user_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.remove_user_with_http_info(enterprise_id, user_id, **kwargs)
        else:
            (data) = self.remove_user_with_http_info(enterprise_id, user_id, **kwargs)
            return data

    def remove_user_with_http_info(self, enterprise_id, user_id, **kwargs):
        """
        Remove Enterprise User
        This endpoint allows removing a user from an enterprise; it does not delete the user. Requires enterprise admin access level.
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.remove_user_with_http_info(enterprise_id, user_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'user_id']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method remove_user" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `remove_user`")
        # verify the required parameter 'user_id' is set
        if ('user_id' not in params) or (params['user_id'] is None):
            raise ValueError("Missing the required parameter `user_id` when calling `remove_user`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']
        if 'user_id' in params:
            path_params['user_id'] = params['user_id']

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

        return self.api_client.call_api('/v1/enterprise/{enterprise_id}/users/{user_id}', 'DELETE',
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

    def search_users(self, enterprise_id, **kwargs):
        """
        Search for User(s)
        This endpoint provides a search facility for the specified enterprise.  <ul><li>If textSearch is provided, the results will be a partial string-match search of the given textSearch value.</li><li> Otherwise, the search will return an exact lookup by emailId.</li></ul>
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.search_users(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str fields: A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email
        :param str order: If specificed, order defines how the API sorts results- ascending or descending
        :param str sort_by: Name of BlueJeans profile field by with API response data is sorted
        :param str text_search: If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users
        :param str email_id: If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are <b>not</b> supported for the email address value.
        :param int page_size: Sets number of items returned per page.
        :param int page_number: Selects which page of results to return (1-based value)
        :return: EnterpriseUserSearch
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.search_users_with_http_info(enterprise_id, **kwargs)
        else:
            (data) = self.search_users_with_http_info(enterprise_id, **kwargs)
            return data

    def search_users_with_http_info(self, enterprise_id, **kwargs):
        """
        Search for User(s)
        This endpoint provides a search facility for the specified enterprise.  <ul><li>If textSearch is provided, the results will be a partial string-match search of the given textSearch value.</li><li> Otherwise, the search will return an exact lookup by emailId.</li></ul>
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.search_users_with_http_info(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str fields: A comma-separated list one or more of these BlueJeans enteprise profile fields to include in the API responses- username, firstName, middleName, lastName, isEnterpriseAdmin, enterpriseJoinDate, email
        :param str order: If specificed, order defines how the API sorts results- ascending or descending
        :param str sort_by: Name of BlueJeans profile field by with API response data is sorted
        :param str text_search: If specified textSearch provides a string (partial or complete) by which to search the list of BlueJeans users
        :param str email_id: If specified, emailId specifies performing a search for the user profile associated with this email address.  Wildcards are <b>not</b> supported for the email address value.
        :param int page_size: Sets number of items returned per page.
        :param int page_number: Selects which page of results to return (1-based value)
        :return: EnterpriseUserSearch
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'fields', 'order', 'sort_by', 'text_search', 'email_id', 'page_size', 'page_number']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method search_users" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `search_users`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterpriseId'] = params['enterprise_id']

        query_params = []
        if 'fields' in params:
            query_params.append(('fields', params['fields']))
        if 'order' in params:
            query_params.append(('order', params['order']))
        if 'sort_by' in params:
            query_params.append(('sortBy', params['sort_by']))
        if 'text_search' in params:
            query_params.append(('textSearch', params['text_search']))
        if 'email_id' in params:
            query_params.append(('emailId', params['email_id']))
        if 'page_size' in params:
            query_params.append(('pageSize', params['page_size']))
        if 'page_number' in params:
            query_params.append(('pageNumber', params['page_number']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/enterprise/{enterpriseId}/users', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='EnterpriseUserSearch',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

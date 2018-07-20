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


class CommandCenterApi(object):
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

    def get_endpoint_distribution(self, enterprise_id, **kwargs):
        """
        Endpoint Distribution
        This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_endpoint_distribution(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: URL-encoded JSON string
        :return: AnalyticsEndpointDistribution
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_endpoint_distribution_with_http_info(enterprise_id, **kwargs)
        else:
            (data) = self.get_endpoint_distribution_with_http_info(enterprise_id, **kwargs)
            return data

    def get_endpoint_distribution_with_http_info(self, enterprise_id, **kwargs):
        """
        Endpoint Distribution
        This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_endpoint_distribution_with_http_info(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: URL-encoded JSON string
        :return: AnalyticsEndpointDistribution
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'filter']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_endpoint_distribution" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_endpoint_distribution`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'filter' in params:
            query_params.append(('filter', params['filter']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='AnalyticsEndpointDistribution',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_endpoint_distribution_v2(self, enterprise_id, filter, **kwargs):
        """
        Endpoint Distribution
        This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_endpoint_distribution_v2(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: A JSON array of objects that bracket the search time  [{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2018-06-19T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2018-06-26T23:59:59-07:00\",\"field\":\"end_time\"}] (required)
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: AnalyticsEndpointDistributionV2
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_endpoint_distribution_v2_with_http_info(enterprise_id, filter, **kwargs)
        else:
            (data) = self.get_endpoint_distribution_v2_with_http_info(enterprise_id, filter, **kwargs)
            return data

    def get_endpoint_distribution_v2_with_http_info(self, enterprise_id, filter, **kwargs):
        """
        Endpoint Distribution
        This endpoint retrieves endpoint connection type distribution by enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_endpoint_distribution_v2_with_http_info(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: A JSON array of objects that bracket the search time  [{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2018-06-19T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2018-06-26T23:59:59-07:00\",\"field\":\"end_time\"}] (required)
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: AnalyticsEndpointDistributionV2
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'filter', 'app_name']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_endpoint_distribution_v2" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_endpoint_distribution_v2`")
        # verify the required parameter 'filter' is set
        if ('filter' not in params) or (params['filter'] is None):
            raise ValueError("Missing the required parameter `filter` when calling `get_endpoint_distribution_v2`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'filter' in params:
            query_params.append(('filter', params['filter']))
        if 'app_name' in params:
            query_params.append(('app_name', params['app_name']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v2/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution_new', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='AnalyticsEndpointDistributionV2',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_enterprise_overall_summary(self, enterprise_id, filter, **kwargs):
        """
        Overall Enterprise Summary
        This endpoint lists the summary usage statistics for the specified Enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_enterprise_overall_summary(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: A JSON array of FilterHighLowTs objects to bracket the search time `[{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-04T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-10T23:59:59-07:00\",\"field\":\"hights\"}]` (required)
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: MeetingSummaryInfo
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_enterprise_overall_summary_with_http_info(enterprise_id, filter, **kwargs)
        else:
            (data) = self.get_enterprise_overall_summary_with_http_info(enterprise_id, filter, **kwargs)
            return data

    def get_enterprise_overall_summary_with_http_info(self, enterprise_id, filter, **kwargs):
        """
        Overall Enterprise Summary
        This endpoint lists the summary usage statistics for the specified Enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_enterprise_overall_summary_with_http_info(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: A JSON array of FilterHighLowTs objects to bracket the search time `[{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-04T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-10T23:59:59-07:00\",\"field\":\"hights\"}]` (required)
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: MeetingSummaryInfo
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'filter', 'app_name']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_enterprise_overall_summary" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_enterprise_overall_summary`")
        # verify the required parameter 'filter' is set
        if ('filter' not in params) or (params['filter'] is None):
            raise ValueError("Missing the required parameter `filter` when calling `get_enterprise_overall_summary`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'filter' in params:
            query_params.append(('filter', params['filter']))
        if 'app_name' in params:
            query_params.append(('app_name', params['app_name']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v2/enterprise/{enterprise_id}/indigo/analytics/meetings/summary', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='MeetingSummaryInfo',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_enterprise_users_active(self, enterprise_id, filter, **kwargs):
        """
        Enterprise User Summary
        This endpoint lists the summary of active users statistics for the specified Enterprise.  Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_enterprise_users_active(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: A JSON array of FilterHighLowTs objects to bracket the search time `[{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"'%Y-%m-%d'\",\"field\":\"dateFormat\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-14T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-20T23:59:00-07:00\",\"field\":\"hights\"}]` (required)
        :param str client_tz: Timezone of the requesting site in the format `America/Los_Angeles`
        :param int limit: The maximum number of records to return.  A value of `0` returns all records
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: EnterpriseUsersActive
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_enterprise_users_active_with_http_info(enterprise_id, filter, **kwargs)
        else:
            (data) = self.get_enterprise_users_active_with_http_info(enterprise_id, filter, **kwargs)
            return data

    def get_enterprise_users_active_with_http_info(self, enterprise_id, filter, **kwargs):
        """
        Enterprise User Summary
        This endpoint lists the summary of active users statistics for the specified Enterprise.  Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_enterprise_users_active_with_http_info(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: A JSON array of FilterHighLowTs objects to bracket the search time `[{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"'%Y-%m-%d'\",\"field\":\"dateFormat\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-14T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-20T23:59:00-07:00\",\"field\":\"hights\"}]` (required)
        :param str client_tz: Timezone of the requesting site in the format `America/Los_Angeles`
        :param int limit: The maximum number of records to return.  A value of `0` returns all records
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: EnterpriseUsersActive
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'filter', 'client_tz', 'limit', 'app_name']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_enterprise_users_active" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_enterprise_users_active`")
        # verify the required parameter 'filter' is set
        if ('filter' not in params) or (params['filter'] is None):
            raise ValueError("Missing the required parameter `filter` when calling `get_enterprise_users_active`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'filter' in params:
            query_params.append(('filter', params['filter']))
        if 'client_tz' in params:
            query_params.append(('clientTZ', params['client_tz']))
        if 'limit' in params:
            query_params.append(('limit', params['limit']))
        if 'app_name' in params:
            query_params.append(('app_name', params['app_name']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v2/enterprise/{enterprise_id}/indigo/analytics/users/active', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='EnterpriseUsersActive',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_feedback_comments(self, enterprise_id, start, end, **kwargs):
        """
        Survey Feedback Comments
        This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_feedback_comments(enterprise_id, start, end, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str start: Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
        :param str end: Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
        :return: AnalyticsFeedbackComments
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_feedback_comments_with_http_info(enterprise_id, start, end, **kwargs)
        else:
            (data) = self.get_feedback_comments_with_http_info(enterprise_id, start, end, **kwargs)
            return data

    def get_feedback_comments_with_http_info(self, enterprise_id, start, end, **kwargs):
        """
        Survey Feedback Comments
        This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_feedback_comments_with_http_info(enterprise_id, start, end, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str start: Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
        :param str end: Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
        :return: AnalyticsFeedbackComments
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'start', 'end']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_feedback_comments" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_feedback_comments`")
        # verify the required parameter 'start' is set
        if ('start' not in params) or (params['start'] is None):
            raise ValueError("Missing the required parameter `start` when calling `get_feedback_comments`")
        # verify the required parameter 'end' is set
        if ('end' not in params) or (params['end'] is None):
            raise ValueError("Missing the required parameter `end` when calling `get_feedback_comments`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'start' in params:
            query_params.append(('start', params['start']))
        if 'end' in params:
            query_params.append(('end', params['end']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/enterprise/{enterprise_id}/indigo/analytics/feedback/comments', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='AnalyticsFeedbackComments',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_feedback_comments_v2(self, enterprise_id, filter, **kwargs):
        """
        Survey Feedback Comments
        This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_feedback_comments_v2(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: URL-encoded Array of JSON objects defining the time interval [{\"type\":\"date\", \"comparison\":\"gt\", \"value\":\"2018-06-19T00:00:00-07:00\", \"field\":\"startTime\"}, {\"type\":\"date\", \"comparison\":\"lt\", \"value\":\"2018-06-26T23:59:59-07:00\", \"field\":\"endTime\" }] (required)
        :param int limit: The limit on the number of responses to return
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: AnalyticsFeedbackComments
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_feedback_comments_v2_with_http_info(enterprise_id, filter, **kwargs)
        else:
            (data) = self.get_feedback_comments_v2_with_http_info(enterprise_id, filter, **kwargs)
            return data

    def get_feedback_comments_v2_with_http_info(self, enterprise_id, filter, **kwargs):
        """
        Survey Feedback Comments
        This endpoint lists end of meeting survey comments by enterprise by time period. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_feedback_comments_v2_with_http_info(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: URL-encoded Array of JSON objects defining the time interval [{\"type\":\"date\", \"comparison\":\"gt\", \"value\":\"2018-06-19T00:00:00-07:00\", \"field\":\"startTime\"}, {\"type\":\"date\", \"comparison\":\"lt\", \"value\":\"2018-06-26T23:59:59-07:00\", \"field\":\"endTime\" }] (required)
        :param int limit: The limit on the number of responses to return
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: AnalyticsFeedbackComments
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'filter', 'limit', 'app_name']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_feedback_comments_v2" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_feedback_comments_v2`")
        # verify the required parameter 'filter' is set
        if ('filter' not in params) or (params['filter'] is None):
            raise ValueError("Missing the required parameter `filter` when calling `get_feedback_comments_v2`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'filter' in params:
            query_params.append(('filter', params['filter']))
        if 'limit' in params:
            query_params.append(('limit', params['limit']))
        if 'app_name' in params:
            query_params.append(('app_name', params['app_name']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v2/enterprise/{enterprise_id}/indigo/analytics/feedback/comments', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='AnalyticsFeedbackComments',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_feedback_count(self, enterprise_id, start, end, **kwargs):
        """
        Survey Feedback Scores
        This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_feedback_count(enterprise_id, start, end, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str start: Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
        :param str end: Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
        :return: AnalyticsFeedbackScores
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_feedback_count_with_http_info(enterprise_id, start, end, **kwargs)
        else:
            (data) = self.get_feedback_count_with_http_info(enterprise_id, start, end, **kwargs)
            return data

    def get_feedback_count_with_http_info(self, enterprise_id, start, end, **kwargs):
        """
        Survey Feedback Scores
        This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_feedback_count_with_http_info(enterprise_id, start, end, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str start: Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
        :param str end: Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
        :return: AnalyticsFeedbackScores
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'start', 'end']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_feedback_count" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_feedback_count`")
        # verify the required parameter 'start' is set
        if ('start' not in params) or (params['start'] is None):
            raise ValueError("Missing the required parameter `start` when calling `get_feedback_count`")
        # verify the required parameter 'end' is set
        if ('end' not in params) or (params['end'] is None):
            raise ValueError("Missing the required parameter `end` when calling `get_feedback_count`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'start' in params:
            query_params.append(('start', params['start']))
        if 'end' in params:
            query_params.append(('end', params['end']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/enterprise/{enterprise_id}/indigo/feedback/count', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='AnalyticsFeedbackScores',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_feedback_count_v2(self, enterprise_id, start, end, **kwargs):
        """
        Survey Feedback Scores
        This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_feedback_count_v2(enterprise_id, start, end, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str start: Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
        :param str end: Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: AnalyticsFeedbackScores
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_feedback_count_v2_with_http_info(enterprise_id, start, end, **kwargs)
        else:
            (data) = self.get_feedback_count_v2_with_http_info(enterprise_id, start, end, **kwargs)
            return data

    def get_feedback_count_v2_with_http_info(self, enterprise_id, start, end, **kwargs):
        """
        Survey Feedback Scores
        This endpoint lists end of meeting survey scores by enterprise by time period. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_feedback_count_v2_with_http_info(enterprise_id, start, end, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str start: Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
        :param str end: Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. (required)
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: AnalyticsFeedbackScores
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'start', 'end', 'app_name']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_feedback_count_v2" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_feedback_count_v2`")
        # verify the required parameter 'start' is set
        if ('start' not in params) or (params['start'] is None):
            raise ValueError("Missing the required parameter `start` when calling `get_feedback_count_v2`")
        # verify the required parameter 'end' is set
        if ('end' not in params) or (params['end'] is None):
            raise ValueError("Missing the required parameter `end` when calling `get_feedback_count_v2`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'start' in params:
            query_params.append(('start', params['start']))
        if 'end' in params:
            query_params.append(('end', params['end']))
        if 'app_name' in params:
            query_params.append(('app_name', params['app_name']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v2/enterprise/{enterprise_id}/indigo/feedback/count', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='AnalyticsFeedbackScores',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_geo_map(self, enterprise_id, filter, **kwargs):
        """
        Geographic Demographics
        This endpoint lists the Geographic endpoint accesses.  Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_geo_map(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param dict(str, str) filter: An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. `[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2018-05-31T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2018-06-07T23:59:59-07:00\",\"field\":\"start_time\"}]` (required)
        :param int offset: Offset into the total set of datarecords.  If offset=0, return data includes size of data.
        :param int limit: The Limit sets the maximum number of data records to return .  Limit=0 returns the full dataset
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: EndpointLocationSummary
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_geo_map_with_http_info(enterprise_id, filter, **kwargs)
        else:
            (data) = self.get_geo_map_with_http_info(enterprise_id, filter, **kwargs)
            return data

    def get_geo_map_with_http_info(self, enterprise_id, filter, **kwargs):
        """
        Geographic Demographics
        This endpoint lists the Geographic endpoint accesses.  Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_geo_map_with_http_info(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param dict(str, str) filter: An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. `[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2018-05-31T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2018-06-07T23:59:59-07:00\",\"field\":\"start_time\"}]` (required)
        :param int offset: Offset into the total set of datarecords.  If offset=0, return data includes size of data.
        :param int limit: The Limit sets the maximum number of data records to return .  Limit=0 returns the full dataset
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: EndpointLocationSummary
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'filter', 'offset', 'limit', 'app_name']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_geo_map" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_geo_map`")
        # verify the required parameter 'filter' is set
        if ('filter' not in params) or (params['filter'] is None):
            raise ValueError("Missing the required parameter `filter` when calling `get_geo_map`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'offset' in params:
            query_params.append(('offset', params['offset']))
        if 'limit' in params:
            query_params.append(('limit', params['limit']))
        if 'filter' in params:
            query_params.append(('filter', params['filter']))
        if 'app_name' in params:
            query_params.append(('app_name', params['app_name']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v2/enterprise/{enterprise_id}/indigo/analytics/endpoints/location/countries', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='EndpointLocationSummary',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_meeting_endpoints_live_by_enterprise(self, enterprise_id, meeting_uuid, **kwargs):
        """
        List Live Meeting Endpoints by Enterprise
        This endpoint lists endpoints for a given meeting in progress. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meeting_endpoints_live_by_enterprise(enterprise_id, meeting_uuid, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str meeting_uuid: The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: MeetingExtendedIndigo
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_meeting_endpoints_live_by_enterprise_with_http_info(enterprise_id, meeting_uuid, **kwargs)
        else:
            (data) = self.get_meeting_endpoints_live_by_enterprise_with_http_info(enterprise_id, meeting_uuid, **kwargs)
            return data

    def get_meeting_endpoints_live_by_enterprise_with_http_info(self, enterprise_id, meeting_uuid, **kwargs):
        """
        List Live Meeting Endpoints by Enterprise
        This endpoint lists endpoints for a given meeting in progress. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meeting_endpoints_live_by_enterprise_with_http_info(enterprise_id, meeting_uuid, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str meeting_uuid: The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: MeetingExtendedIndigo
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'meeting_uuid', 'app_name']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_meeting_endpoints_live_by_enterprise" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_meeting_endpoints_live_by_enterprise`")
        # verify the required parameter 'meeting_uuid' is set
        if ('meeting_uuid' not in params) or (params['meeting_uuid'] is None):
            raise ValueError("Missing the required parameter `meeting_uuid` when calling `get_meeting_endpoints_live_by_enterprise`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']
        if 'meeting_uuid' in params:
            path_params['meeting_uuid'] = params['meeting_uuid']

        query_params = []
        if 'app_name' in params:
            query_params.append(('app_name', params['app_name']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/enterprise/{enterprise_id}/indigo/meetings/live/{meeting_uuid}/endpoints/', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='MeetingExtendedIndigo',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_meeting_past_by_enterprise(self, enterprise_id, meeting_uuid, **kwargs):
        """
        List Meeting Endpoints & Stats by Enterprise
        This endpoint lists meeting endpoints for completed meetings by enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meeting_past_by_enterprise(enterprise_id, meeting_uuid, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str meeting_uuid: The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
        :param bool include_endpoints: Option to include detailed data on endpoints
        :return: MeetingExtendedIndigo
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_meeting_past_by_enterprise_with_http_info(enterprise_id, meeting_uuid, **kwargs)
        else:
            (data) = self.get_meeting_past_by_enterprise_with_http_info(enterprise_id, meeting_uuid, **kwargs)
            return data

    def get_meeting_past_by_enterprise_with_http_info(self, enterprise_id, meeting_uuid, **kwargs):
        """
        List Meeting Endpoints & Stats by Enterprise
        This endpoint lists meeting endpoints for completed meetings by enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meeting_past_by_enterprise_with_http_info(enterprise_id, meeting_uuid, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str meeting_uuid: The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
        :param bool include_endpoints: Option to include detailed data on endpoints
        :return: MeetingExtendedIndigo
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'meeting_uuid', 'include_endpoints']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_meeting_past_by_enterprise" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_meeting_past_by_enterprise`")
        # verify the required parameter 'meeting_uuid' is set
        if ('meeting_uuid' not in params) or (params['meeting_uuid'] is None):
            raise ValueError("Missing the required parameter `meeting_uuid` when calling `get_meeting_past_by_enterprise`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']
        if 'meeting_uuid' in params:
            path_params['meeting_uuid'] = params['meeting_uuid']

        query_params = []
        if 'include_endpoints' in params:
            query_params.append(('includeEndpoints', params['include_endpoints']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/enterprise/{enterprise_id}/indigo/meetings/{meeting_uuid}', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='MeetingExtendedIndigo',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_meeting_past_by_user(self, user_id, meeting_uuid, **kwargs):
        """
        List Meeting Endpoints & Stats by User
        This endpoint lists meeting endpoints for completed meetings by user. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meeting_past_by_user(user_id, meeting_uuid, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param str meeting_uuid: The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
        :return: MeetingExtendedIndigo
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_meeting_past_by_user_with_http_info(user_id, meeting_uuid, **kwargs)
        else:
            (data) = self.get_meeting_past_by_user_with_http_info(user_id, meeting_uuid, **kwargs)
            return data

    def get_meeting_past_by_user_with_http_info(self, user_id, meeting_uuid, **kwargs):
        """
        List Meeting Endpoints & Stats by User
        This endpoint lists meeting endpoints for completed meetings by user. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meeting_past_by_user_with_http_info(user_id, meeting_uuid, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param str meeting_uuid: The universally unique identifier (UUID) of the meeting of interest. This value is a string which contains 6 alphanumeric segments separated by dashes. (required)
        :return: MeetingExtendedIndigo
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['user_id', 'meeting_uuid']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_meeting_past_by_user" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'user_id' is set
        if ('user_id' not in params) or (params['user_id'] is None):
            raise ValueError("Missing the required parameter `user_id` when calling `get_meeting_past_by_user`")
        # verify the required parameter 'meeting_uuid' is set
        if ('meeting_uuid' not in params) or (params['meeting_uuid'] is None):
            raise ValueError("Missing the required parameter `meeting_uuid` when calling `get_meeting_past_by_user`")


        collection_formats = {}

        path_params = {}
        if 'user_id' in params:
            path_params['user_id'] = params['user_id']
        if 'meeting_uuid' in params:
            path_params['meeting_uuid'] = params['meeting_uuid']

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

        return self.api_client.call_api('/v1/user/{user_id}/indigo/meetings/{meeting_uuid}', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='MeetingExtendedIndigo',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_meeting_usage(self, enterprise_id, **kwargs):
        """
        Meeting Usage Over Time
        This endpoint reports on meeting usage. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meeting_usage(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str client_tz: Based on standard TZ code.
        :param str filter: URL-encoded JSON string
        :return: AnalyticsUsage
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_meeting_usage_with_http_info(enterprise_id, **kwargs)
        else:
            (data) = self.get_meeting_usage_with_http_info(enterprise_id, **kwargs)
            return data

    def get_meeting_usage_with_http_info(self, enterprise_id, **kwargs):
        """
        Meeting Usage Over Time
        This endpoint reports on meeting usage. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meeting_usage_with_http_info(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str client_tz: Based on standard TZ code.
        :param str filter: URL-encoded JSON string
        :return: AnalyticsUsage
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'client_tz', 'filter']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_meeting_usage" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_meeting_usage`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'client_tz' in params:
            query_params.append(('clientTZ', params['client_tz']))
        if 'filter' in params:
            query_params.append(('filter', params['filter']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/enterprise/{enterprise_id}/indigo/analytics/meetings/usage', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='AnalyticsUsage',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_meeting_usage_v2(self, enterprise_id, filter, **kwargs):
        """
        Meeting Usage Over Time
        This endpoint reports on meeting usage.  Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meeting_usage_v2(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: URL-encoded Array of JSON objects defining the time interval [{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"DAY\",\"field\":\"groupInterval\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-19T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-26T23:59:59-07:00\",\"field\":\"hights\"}] (required)
        :param str client_tz: Based on standard TZ code.
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: AnalyticsUsage
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_meeting_usage_v2_with_http_info(enterprise_id, filter, **kwargs)
        else:
            (data) = self.get_meeting_usage_v2_with_http_info(enterprise_id, filter, **kwargs)
            return data

    def get_meeting_usage_v2_with_http_info(self, enterprise_id, filter, **kwargs):
        """
        Meeting Usage Over Time
        This endpoint reports on meeting usage.  Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meeting_usage_v2_with_http_info(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: URL-encoded Array of JSON objects defining the time interval [{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"DAY\",\"field\":\"groupInterval\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-19T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2018-06-26T23:59:59-07:00\",\"field\":\"hights\"}] (required)
        :param str client_tz: Based on standard TZ code.
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: AnalyticsUsage
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'filter', 'client_tz', 'app_name']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_meeting_usage_v2" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_meeting_usage_v2`")
        # verify the required parameter 'filter' is set
        if ('filter' not in params) or (params['filter'] is None):
            raise ValueError("Missing the required parameter `filter` when calling `get_meeting_usage_v2`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'client_tz' in params:
            query_params.append(('clientTZ', params['client_tz']))
        if 'filter' in params:
            query_params.append(('filter', params['filter']))
        if 'app_name' in params:
            query_params.append(('app_name', params['app_name']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v2/enterprise/{enterprise_id}/indigo/analytics/meetings/usage', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='AnalyticsUsage',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_meetings_live_by_enterprise(self, enterprise_id, **kwargs):
        """
        Live Meetings Summary by Enterprise
        This endpoint lists meetings in progress by enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meetings_live_by_enterprise(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: MeetingIndigoList
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_meetings_live_by_enterprise_with_http_info(enterprise_id, **kwargs)
        else:
            (data) = self.get_meetings_live_by_enterprise_with_http_info(enterprise_id, **kwargs)
            return data

    def get_meetings_live_by_enterprise_with_http_info(self, enterprise_id, **kwargs):
        """
        Live Meetings Summary by Enterprise
        This endpoint lists meetings in progress by enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meetings_live_by_enterprise_with_http_info(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: MeetingIndigoList
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'app_name']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_meetings_live_by_enterprise" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_meetings_live_by_enterprise`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'app_name' in params:
            query_params.append(('app_name', params['app_name']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/enterprise/{enterprise_id}/indigo/meetings/live', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='MeetingIndigoList',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_meetings_past_by_enterprise(self, enterprise_id, **kwargs):
        """
        List Past Meetings by Enterprise
        This endpoint lists completed meetings by enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meetings_past_by_enterprise(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param int offset: Page Number
        :param int limit: Per page
        :param dict(str, str) filter: An array of search filter conditions that describe the limits of the search to perform. For example `[{\"type\":\"date\",\"value\":\"2018-06-05T00:00:00-07:00\",\"field\":\"startTime\",\"comparison\":\"gt\"},{\"type\":\"date\",\"value\":\"2018-06-12T23:59:59-07:00\",\"field\":\"endTime\",\"comparison\":\"lt\"},{\"type\":\"date\",\"value\":\"2018-06-12T23:59:59-07:00\",\"field\":\"startTime\",\"comparison\":\"lt\"}]`
        :param bool count: Include total count of meetings in response
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: MeetingIndigoList
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_meetings_past_by_enterprise_with_http_info(enterprise_id, **kwargs)
        else:
            (data) = self.get_meetings_past_by_enterprise_with_http_info(enterprise_id, **kwargs)
            return data

    def get_meetings_past_by_enterprise_with_http_info(self, enterprise_id, **kwargs):
        """
        List Past Meetings by Enterprise
        This endpoint lists completed meetings by enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meetings_past_by_enterprise_with_http_info(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param int offset: Page Number
        :param int limit: Per page
        :param dict(str, str) filter: An array of search filter conditions that describe the limits of the search to perform. For example `[{\"type\":\"date\",\"value\":\"2018-06-05T00:00:00-07:00\",\"field\":\"startTime\",\"comparison\":\"gt\"},{\"type\":\"date\",\"value\":\"2018-06-12T23:59:59-07:00\",\"field\":\"endTime\",\"comparison\":\"lt\"},{\"type\":\"date\",\"value\":\"2018-06-12T23:59:59-07:00\",\"field\":\"startTime\",\"comparison\":\"lt\"}]`
        :param bool count: Include total count of meetings in response
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: MeetingIndigoList
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'offset', 'limit', 'filter', 'count', 'app_name']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_meetings_past_by_enterprise" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_meetings_past_by_enterprise`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'offset' in params:
            query_params.append(('offset', params['offset']))
        if 'limit' in params:
            query_params.append(('limit', params['limit']))
        if 'filter' in params:
            query_params.append(('filter', params['filter']))
        if 'count' in params:
            query_params.append(('count', params['count']))
        if 'app_name' in params:
            query_params.append(('app_name', params['app_name']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/enterprise/{enterprise_id}/indigo/meetings', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='MeetingIndigoList',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_meetings_past_by_user(self, user_id, filter, **kwargs):
        """
        List Past Meetings by User
        This endpoint lists completed meetings by user. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meetings_past_by_user(user_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param dict(str, str) filter: An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. (required)
        :return: MeetingIndigoList
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_meetings_past_by_user_with_http_info(user_id, filter, **kwargs)
        else:
            (data) = self.get_meetings_past_by_user_with_http_info(user_id, filter, **kwargs)
            return data

    def get_meetings_past_by_user_with_http_info(self, user_id, filter, **kwargs):
        """
        List Past Meetings by User
        This endpoint lists completed meetings by user. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_meetings_past_by_user_with_http_info(user_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int user_id: The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
        :param dict(str, str) filter: An array of search filter conditions that describe the limits of the search to perform.  Refer to the FilterSpecification definition in the Models section below. (required)
        :return: MeetingIndigoList
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['user_id', 'filter']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_meetings_past_by_user" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'user_id' is set
        if ('user_id' not in params) or (params['user_id'] is None):
            raise ValueError("Missing the required parameter `user_id` when calling `get_meetings_past_by_user`")
        # verify the required parameter 'filter' is set
        if ('filter' not in params) or (params['filter'] is None):
            raise ValueError("Missing the required parameter `filter` when calling `get_meetings_past_by_user`")


        collection_formats = {}

        path_params = {}
        if 'user_id' in params:
            path_params['user_id'] = params['user_id']

        query_params = []
        if 'filter' in params:
            query_params.append(('filter', params['filter']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/user/{user_id}/indigo/meetings', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='MeetingIndigoList',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_roi_ranges(self, enterprise_id, filter, **kwargs):
        """
        ROI Data
        This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_roi_ranges(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: URL-encoded JSON string (required)
        :return: AnalyticsRoiData
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_roi_ranges_with_http_info(enterprise_id, filter, **kwargs)
        else:
            (data) = self.get_roi_ranges_with_http_info(enterprise_id, filter, **kwargs)
            return data

    def get_roi_ranges_with_http_info(self, enterprise_id, filter, **kwargs):
        """
        ROI Data
        This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_roi_ranges_with_http_info(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: URL-encoded JSON string (required)
        :return: AnalyticsRoiData
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'filter']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_roi_ranges" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_roi_ranges`")
        # verify the required parameter 'filter' is set
        if ('filter' not in params) or (params['filter'] is None):
            raise ValueError("Missing the required parameter `filter` when calling `get_roi_ranges`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'filter' in params:
            query_params.append(('filter', params['filter']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/enterprise/{enterprise_id}/indigo/analytics/roi_ranges', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='AnalyticsRoiData',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_roi_ranges_v2(self, enterprise_id, filter, **kwargs):
        """
        ROI Data
        This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_roi_ranges_v2(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: URL-encoded Array of JSON objects defining the time interval [{\"type\":\"date\", \"comparison\":\"gt\", \"value\":\"2018-06-19T00:00:00-07:00\", \"field\":\"startTime\"}, {\"type\":\"date\", \"comparison\":\"lt\", \"value\":\"2018-06-26T23:59:59-07:00\", \"field\":\"startTime\" }] (required)
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: AnalyticsRoiData
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_roi_ranges_v2_with_http_info(enterprise_id, filter, **kwargs)
        else:
            (data) = self.get_roi_ranges_v2_with_http_info(enterprise_id, filter, **kwargs)
            return data

    def get_roi_ranges_v2_with_http_info(self, enterprise_id, filter, **kwargs):
        """
        ROI Data
        This endpoint lists return on investment (ROI) data for meetings. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_roi_ranges_v2_with_http_info(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: URL-encoded Array of JSON objects defining the time interval [{\"type\":\"date\", \"comparison\":\"gt\", \"value\":\"2018-06-19T00:00:00-07:00\", \"field\":\"startTime\"}, {\"type\":\"date\", \"comparison\":\"lt\", \"value\":\"2018-06-26T23:59:59-07:00\", \"field\":\"startTime\" }] (required)
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: AnalyticsRoiData
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'filter', 'app_name']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_roi_ranges_v2" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_roi_ranges_v2`")
        # verify the required parameter 'filter' is set
        if ('filter' not in params) or (params['filter'] is None):
            raise ValueError("Missing the required parameter `filter` when calling `get_roi_ranges_v2`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'filter' in params:
            query_params.append(('filter', params['filter']))
        if 'app_name' in params:
            query_params.append(('app_name', params['app_name']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v2/enterprise/{enterprise_id}/indigo/analytics/roi_ranges', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='AnalyticsRoiData',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_top_users(self, enterprise_id, **kwargs):
        """
        Top Users
        This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_top_users(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: URL-encoded JSON string
        :return: AnalyticsTopUsers
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_top_users_with_http_info(enterprise_id, **kwargs)
        else:
            (data) = self.get_top_users_with_http_info(enterprise_id, **kwargs)
            return data

    def get_top_users_with_http_info(self, enterprise_id, **kwargs):
        """
        Top Users
        This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_top_users_with_http_info(enterprise_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: URL-encoded JSON string
        :return: AnalyticsTopUsers
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'filter']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_top_users" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_top_users`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'filter' in params:
            query_params.append(('filter', params['filter']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v1/enterprise/{enterprise_id}/indigo/analytics/users/usage', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='AnalyticsTopUsers',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

    def get_top_users_v2(self, enterprise_id, filter, **kwargs):
        """
        Top Users
        This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_top_users_v2(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: A JSON array of objects that bracket the search time  [{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2018-06-19T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2018-06-26T23:59:59-07:00\",\"field\":\"end_time\"}] (required)
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: AnalyticsTopUsers
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.get_top_users_v2_with_http_info(enterprise_id, filter, **kwargs)
        else:
            (data) = self.get_top_users_v2_with_http_info(enterprise_id, filter, **kwargs)
            return data

    def get_top_users_v2_with_http_info(self, enterprise_id, filter, **kwargs):
        """
        Top Users
        This endpoint retrieves the top users by usage for an enterprise. Requires enterprise administrator access token
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.get_top_users_v2_with_http_info(enterprise_id, filter, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int enterprise_id: The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
        :param str filter: A JSON array of objects that bracket the search time  [{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2018-06-19T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2018-06-26T23:59:59-07:00\",\"field\":\"end_time\"}] (required)
        :param str app_name: name of your application.  While not required, providing an app_name improves API performance
        :return: AnalyticsTopUsers
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['enterprise_id', 'filter', 'app_name']
        all_params.append('callback')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_top_users_v2" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'enterprise_id' is set
        if ('enterprise_id' not in params) or (params['enterprise_id'] is None):
            raise ValueError("Missing the required parameter `enterprise_id` when calling `get_top_users_v2`")
        # verify the required parameter 'filter' is set
        if ('filter' not in params) or (params['filter'] is None):
            raise ValueError("Missing the required parameter `filter` when calling `get_top_users_v2`")


        collection_formats = {}

        path_params = {}
        if 'enterprise_id' in params:
            path_params['enterprise_id'] = params['enterprise_id']

        query_params = []
        if 'filter' in params:
            query_params.append(('filter', params['filter']))
        if 'app_name' in params:
            query_params.append(('app_name', params['app_name']))

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json'])

        # Authentication setting
        auth_settings = ['access_token']

        return self.api_client.call_api('/v2/enterprise/{enterprise_id}/indigo/analytics/users/usage', 'GET',
                                        path_params,
                                        query_params,
                                        header_params,
                                        body=body_params,
                                        post_params=form_params,
                                        files=local_var_files,
                                        response_type='AnalyticsTopUsers',
                                        auth_settings=auth_settings,
                                        callback=params.get('callback'),
                                        _return_http_data_only=params.get('_return_http_data_only'),
                                        _preload_content=params.get('_preload_content', True),
                                        _request_timeout=params.get('_request_timeout'),
                                        collection_formats=collection_formats)

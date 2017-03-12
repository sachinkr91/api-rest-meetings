# coding: utf-8

"""
    BlueJeans onVideo REST API

    _Video That Works Where You Do, from the world's leader in cloud video communication._ # Authentication Each API request that is sent to BlueJeans requires an access token, which is obtained through the BlueJeans Authentication API. There are several methods (grant types) for obtaining an access token, which follow the OAuth2.0 specification. ## Grant Types * Authorization Code Grant – This grant type is used in an authentication flow commonly referred to as \"three-legged OAuth\". The user authenticates via a BlueJeans page, which provides an authorization code. This code, along with a few other elements, can be used to obtain an access code. * Password Credentials Grant – This grant type is used in a two-legged OAuth flow. Username and password are sent to retrieve an access code. * Client Credentials Grant – This grant type is used in a two-legged OAuth flow.  ## Access & Permissions The access level that is associated with each access token is referred to as the scope. There are three basic levels of access that BlueJeans allows, which affect the level of scope.  Three access levels exist within the Blue Jeans service today. * Meeting-level – Authentication takes place using a meeting ID and passcode, and the scope is limited to APIs that relate to the individual meeting. * User-level – Authentication either takes place via three-legged OAuth, or else a direct authorization token request containing a username or password. Access level depends on the requested scope permissions. * App-level – An application is provisioned either by BlueJeans personnel, or within the BlueJeans Enterprise Admin interface. When provisioning an app, a client key and secret are provided, which is then used to obtain an access token, via the BlueJeans Authentication API. The scope that is associated with the token will provide access to an entire enterprise and all of its users.  All endpoints in this document that require Enterprise Admin access will be marked as such. ## Testing In order to make effective use of this page, you will first use one of the authentication methods to obtain an access token. Once the token is given, use the Authorize button up in the header to store the token. Each BlueJeans API called after that will use the access token provided. 

    OpenAPI spec version: 1.0.0
    Contact: brandon@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
"""

from pprint import pformat
from six import iteritems
import re


class AnalyticsUsageUsage(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self, endpoint_minutes=None, num_endpoints=None, num_meetings=None, date=None):
        """
        AnalyticsUsageUsage - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'endpoint_minutes': 'int',
            'num_endpoints': 'int',
            'num_meetings': 'int',
            'date': 'int'
        }

        self.attribute_map = {
            'endpoint_minutes': 'endpointMinutes',
            'num_endpoints': 'numEndpoints',
            'num_meetings': 'numMeetings',
            'date': 'Date'
        }

        self._endpoint_minutes = endpoint_minutes
        self._num_endpoints = num_endpoints
        self._num_meetings = num_meetings
        self._date = date

    @property
    def endpoint_minutes(self):
        """
        Gets the endpoint_minutes of this AnalyticsUsageUsage.


        :return: The endpoint_minutes of this AnalyticsUsageUsage.
        :rtype: int
        """
        return self._endpoint_minutes

    @endpoint_minutes.setter
    def endpoint_minutes(self, endpoint_minutes):
        """
        Sets the endpoint_minutes of this AnalyticsUsageUsage.


        :param endpoint_minutes: The endpoint_minutes of this AnalyticsUsageUsage.
        :type: int
        """

        self._endpoint_minutes = endpoint_minutes

    @property
    def num_endpoints(self):
        """
        Gets the num_endpoints of this AnalyticsUsageUsage.


        :return: The num_endpoints of this AnalyticsUsageUsage.
        :rtype: int
        """
        return self._num_endpoints

    @num_endpoints.setter
    def num_endpoints(self, num_endpoints):
        """
        Sets the num_endpoints of this AnalyticsUsageUsage.


        :param num_endpoints: The num_endpoints of this AnalyticsUsageUsage.
        :type: int
        """

        self._num_endpoints = num_endpoints

    @property
    def num_meetings(self):
        """
        Gets the num_meetings of this AnalyticsUsageUsage.


        :return: The num_meetings of this AnalyticsUsageUsage.
        :rtype: int
        """
        return self._num_meetings

    @num_meetings.setter
    def num_meetings(self, num_meetings):
        """
        Sets the num_meetings of this AnalyticsUsageUsage.


        :param num_meetings: The num_meetings of this AnalyticsUsageUsage.
        :type: int
        """

        self._num_meetings = num_meetings

    @property
    def date(self):
        """
        Gets the date of this AnalyticsUsageUsage.


        :return: The date of this AnalyticsUsageUsage.
        :rtype: int
        """
        return self._date

    @date.setter
    def date(self, date):
        """
        Sets the date of this AnalyticsUsageUsage.


        :param date: The date of this AnalyticsUsageUsage.
        :type: int
        """

        self._date = date

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
        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

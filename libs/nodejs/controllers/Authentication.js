'use strict';

var url = require('url');


var Authentication = require('./AuthenticationService');


module.exports.oauth2TokenClientPOST = function oauth2TokenClientPOST (req, res, next) {
  Authentication.oauth2TokenClientPOST(req.swagger.params, res, next);
};

module.exports.oauth2TokenMeetingPOST = function oauth2TokenMeetingPOST (req, res, next) {
  Authentication.oauth2TokenMeetingPOST(req.swagger.params, res, next);
};

module.exports.oauth2TokenPasswordPOST = function oauth2TokenPasswordPOST (req, res, next) {
  Authentication.oauth2TokenPasswordPOST(req.swagger.params, res, next);
};

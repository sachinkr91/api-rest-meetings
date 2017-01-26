'use strict';

var url = require('url');


var Authentication = require('./AuthenticationService');


module.exports.oauth2TokenclientPOST = function oauth2TokenclientPOST (req, res, next) {
  Authentication.oauth2TokenclientPOST(req.swagger.params, res, next);
};

module.exports.oauth2TokenmeetingPOST = function oauth2TokenmeetingPOST (req, res, next) {
  Authentication.oauth2TokenmeetingPOST(req.swagger.params, res, next);
};

module.exports.oauth2TokenpasswordPOST = function oauth2TokenpasswordPOST (req, res, next) {
  Authentication.oauth2TokenpasswordPOST(req.swagger.params, res, next);
};

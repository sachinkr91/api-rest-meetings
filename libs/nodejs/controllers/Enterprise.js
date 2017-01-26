'use strict';

var url = require('url');


var Enterprise = require('./EnterpriseService');


module.exports.v1EnterpriseEnterprise_idUsersGET = function v1EnterpriseEnterprise_idUsersGET (req, res, next) {
  Enterprise.v1EnterpriseEnterprise_idUsersGET(req.swagger.params, res, next);
};

module.exports.v1EnterpriseEnterprise_idUsersPOST = function v1EnterpriseEnterprise_idUsersPOST (req, res, next) {
  Enterprise.v1EnterpriseEnterprise_idUsersPOST(req.swagger.params, res, next);
};

module.exports.v1EnterpriseEnterprise_idUsersUser_idDELETE = function v1EnterpriseEnterprise_idUsersUser_idDELETE (req, res, next) {
  Enterprise.v1EnterpriseEnterprise_idUsersUser_idDELETE(req.swagger.params, res, next);
};

module.exports.v1UserUser_idEnterprise_profileGET = function v1UserUser_idEnterprise_profileGET (req, res, next) {
  Enterprise.v1UserUser_idEnterprise_profileGET(req.swagger.params, res, next);
};

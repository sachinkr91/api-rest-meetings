'use strict';

var url = require('url');


var User = require('./UserService');


module.exports.v1UserUser_idEnterprise_profileGET = function v1UserUser_idEnterprise_profileGET (req, res, next) {
  User.v1UserUser_idEnterprise_profileGET(req.swagger.params, res, next);
};

module.exports.v1UserUser_idGET = function v1UserUser_idGET (req, res, next) {
  User.v1UserUser_idGET(req.swagger.params, res, next);
};

module.exports.v1UserUser_idPUT = function v1UserUser_idPUT (req, res, next) {
  User.v1UserUser_idPUT(req.swagger.params, res, next);
};

module.exports.v1UserUser_idRoomGET = function v1UserUser_idRoomGET (req, res, next) {
  User.v1UserUser_idRoomGET(req.swagger.params, res, next);
};

module.exports.v1UserUser_idRoomPUT = function v1UserUser_idRoomPUT (req, res, next) {
  User.v1UserUser_idRoomPUT(req.swagger.params, res, next);
};

module.exports.v1UserUser_idScheduled_meetingGET = function v1UserUser_idScheduled_meetingGET (req, res, next) {
  User.v1UserUser_idScheduled_meetingGET(req.swagger.params, res, next);
};

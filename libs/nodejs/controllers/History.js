'use strict';

var url = require('url');


var History = require('./HistoryService');


module.exports.v1EnterpriseEnterprise_idMeeting_historyGET = function v1EnterpriseEnterprise_idMeeting_historyGET (req, res, next) {
  History.v1EnterpriseEnterprise_idMeeting_historyGET(req.swagger.params, res, next);
};

module.exports.v1EnterpriseEnterprise_idMeeting_historyMeeting_guidGET = function v1EnterpriseEnterprise_idMeeting_historyMeeting_guidGET (req, res, next) {
  History.v1EnterpriseEnterprise_idMeeting_historyMeeting_guidGET(req.swagger.params, res, next);
};

module.exports.v1UserUser_idMeeting_historyGET = function v1UserUser_idMeeting_historyGET (req, res, next) {
  History.v1UserUser_idMeeting_historyGET(req.swagger.params, res, next);
};

module.exports.v1UserUser_idMeeting_historyMeeting_guidGET = function v1UserUser_idMeeting_historyMeeting_guidGET (req, res, next) {
  History.v1UserUser_idMeeting_historyMeeting_guidGET(req.swagger.params, res, next);
};

module.exports.v1UserUser_idMeeting_historyRecordingsGET = function v1UserUser_idMeeting_historyRecordingsGET (req, res, next) {
  History.v1UserUser_idMeeting_historyRecordingsGET(req.swagger.params, res, next);
};

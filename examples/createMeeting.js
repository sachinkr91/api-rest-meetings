// Include some shared credentials
var config = require('./config.json');

// Include the library for the APIs
var BlueJeansOnVideoRestApi = require('../src/index');

// Instantiate the service APIs
var authSvc = new BlueJeansOnVideoRestApi.AuthenticationApi();
var meetingSvc = new BlueJeansOnVideoRestApi.MeetingApi();

// Authenticate with username & password grant type
authSvc.getTokenByPassword(
	{
		'grant_type': 'password',
		'username': config.username,
		'password': config.password
	},
	function (err, grant)
	{
		if (err) console.log(err);
		if (err) return;

		// Store the access token into the API client for subsequent calls
		meetingSvc.apiClient.authentications.access_token.apiKey = grant.access_token;

		var now = new Date().getTime();

		meetingSvc.createMeeting(grant.scope.user,
		{
			title: 'Test Meeting #' + parseInt(Math.random() * 100),
			endPointVersion: '2.10',
			endPointType: 'WEB_APP',
			timezone: 'America/New_York',
			start: now,
			end: now + 60 * 60 * 1000
		},
		{},
		function (err, meeting)
		{
			if (err) console.log(err);
			if (err) return;

			console.log('New meeting scheduled! ID = ' + meeting.id);
		});
	}
);
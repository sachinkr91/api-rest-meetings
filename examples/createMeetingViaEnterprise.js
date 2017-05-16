// Include some shared credentials
var config = require('./config.json');

// Include the library for the APIs
var BlueJeansOnVideoRestApi = require('../src/index');

// Instantiate the service APIs
var authSvc = new BlueJeansOnVideoRestApi.AuthenticationApi();
var enterpriseSvc = new BlueJeansOnVideoRestApi.EnterpriseApi();
var meetingSvc = new BlueJeansOnVideoRestApi.MeetingApi();

authSvc.getTokenByClient(
	{
		'grant_type': 'client_credentials',
		'client_id': config.client_id,
		'client_secret': config.client_secret,
	},
	function (err, grant)
	{
		if (err) console.log(err);
		if (err) return;

		// Store the access token into the API client for subsequent calls
		enterpriseSvc.apiClient.authentications.access_token.apiKey = grant.access_token;
		meetingSvc.apiClient.authentications.access_token.apiKey = grant.access_token;

		enterpriseSvc.listUsers(grant.scope.enterprise, {"emailId":"someone@example.com"}, function (err, response)
		{
			if (err) console.log(err);
			if (err) return;

			console.log('Found ' + response.count + ' user(s)!');

			response.users.forEach(function (user)
			{
				var now = new Date().getTime();

				meetingSvc.createMeeting(user.id,
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
			});
		});
	}
);

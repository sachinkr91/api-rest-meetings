// Include some shared credentials
var config = require('./config.json');

// Include the library for the APIs
var BlueJeansOnVideoRestApi = require('../src/index');

// Instantiate the service APIs
var authSvc = new BlueJeansOnVideoRestApi.AuthenticationApi();
var userSvc = new BlueJeansOnVideoRestApi.UserApi();

// Authenticate with username & password grant type
authSvc.oauth2TokenpasswordPost(
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
		userSvc.apiClient.authentications.access_token.apiKey = grant.access_token;

		// Go fetch info about my user
		userSvc.v1UserUserIdGet(grant.scope.user, function (err, user)
		{
			if (err) console.log(err);
			if (err) return;

			// Print some arbitrary information
			console.log('Hello ' + user.firstName  + ' ' + user.lastName + '!');
		});
	}
);
// Include some shared credentials
var config = require('./config.json');

// Include the library for the APIs
var BlueJeansOnVideoRestApi = require('../src/index');

// Instantiate the service APIs
var authSvc = new BlueJeansOnVideoRestApi.AuthenticationApi();
var enterpriseSvc = new BlueJeansOnVideoRestApi.EnterpriseApi();
var userSvc = new BlueJeansOnVideoRestApi.UserApi();

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

		enterpriseSvc.listUsers(grant.scope.enterprise, {}, function (err, response)
		{
			if (err) console.log(err);
			if (err) return;

			console.log('Found ' + response.count + ' user(s)!');

			response.users.forEach(function (user)
			{
				userSvc.getUser(user.id, function (err, userDetails)
				{
					if (err) console.log(err);
					if (err) return;

					console.log(userDetails.firstName  + ' ' + userDetails.lastName);
				});
			});
		});
	}
);
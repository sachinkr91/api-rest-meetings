// Include some shared credentials
var config = require('./config.json');

// Include the library for the APIs
var BlueJeansOnVideoRestApi = require('../src/index');

// Instantiate the service APIs
var authSvc = new BlueJeansOnVideoRestApi.AuthenticationApi();
var historySvc = new BlueJeansOnVideoRestApi.HistoryApi();
var recordingSvc = new BlueJeansOnVideoRestApi.RecordingApi();
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
		// Store the access token into the API client for subsequent calls
		historySvc.apiClient.authentications.access_token.apiKey = grant.access_token;

		// Go fetch my recordings
		historySvc.v1UserUserIdMeetingHistoryRecordingsGet(grant.scope.user,
			{
				pageSize: 10,
				pageNumber: 1,
				sortBy: 'start_time',
				order: 'desc'
			}, function (err, recordings)
		{
			if (err) console.log(err);
			if (err) return;

			// Iterate over all your recordings
			recordings.forEach(function (recording)
			{
				// Get detailed information about each recording
				historySvc.v1UserUserIdMeetingHistoryRecordingsRecordingEntityIdGet(grant.scope.user, recording.recordingEntityId, function (err, details)
				{
					if (err) console.log(err);
					if (err) return;

					// Iterate over the chapters in the recording
					details.recordingChapters.forEach(function (chapter)
					{
						// Ask the content management system for the URL of the recording
						recordingSvc.v1UserUserIdCmsContentIdisDownloadabletrueGet(grant.scope.user, chapter.compositeContentId, function (err, response)
						{
							if (err) console.log(err);
							if (err) return;
					
							console.log('Recording: ' + recording.recordingName);
							console.log(response.contentUrl);
							console.log('');
						});
					});
				});
			});
		});
	}
);
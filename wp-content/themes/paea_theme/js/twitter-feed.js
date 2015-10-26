$( window ).load(function() {

/* TWITTER FETCHER */

var config1 = {
	"id": '657514433682501632', // Tweets by @paeaonline
	"domId":'',
	"maxTweets": 4,
	"enableLinks": true,
	"showUser": true,
	"showTime": true,
	"dateFunction": momentDateFormatter,
	"showRetweet": true,
	"customCallback": handleTweets,
	"showInteraction": false
};

function momentDateFormatter(date, dateString) {
  return moment(dateString).fromNow();
}

function handleTweets(tweets) {
	
	var x = tweets.length;
	var n = 0;
	var element = document.getElementById('twitter-feed');
	var html = '<div>';
	while (n < x) {
		html += '<div class="grid-item grid-item--rectangle twitter-block">' + tweets[n] + '</div>';
      n++;
    }
    html += '</div>';
    element.innerHTML = html;
	}

twitterFetcher.fetch(config1);


});
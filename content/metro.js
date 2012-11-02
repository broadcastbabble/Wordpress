$(document).ready(function () {
    $(".block-click:has(a)").click(function () {
        window.open($("a:first", this).attr("href"), "_blank");
    });
    prettyPrint();
    m.initialize();
    initGoogleCalendar();
});

$(window).load(function () {
    $('#slideshow').cycle({ fx: 'scrollDown', timeout: 17000, random: 1 });
});

Metro = function () {
	this._accountName = "broadcastbabble";
	this._rssFeedUrl = "http://feeds.feedburner.com/broadcastbabble";

	this._twitterFollowerCountClass = ".twitter-followers .count";
	this._twitterShareClass = ".twitter-share-button-2";
	this._rssSubscriberCountClass = ".rss-subscribers .count";
};

Metro.prototype = {

	initialize: function () {

		var metro = this;

		$(this._rssSubscriberCountClass).each(function () {
			metro._getSubscribers($(this));
		});

		$(this._twitterFollowerCountClass).each(function () {
			metro._getFollowerCount($(this));
		});

		$(this._twitterShareClass).each(function () {
			metro._loadTweetCount($(this));
		});
	},

	_getSubscribers: function (element) {

		var fbUrl = "https://feedburner.google.com/api/awareness/1.0/GetFeedData?&uri=" + this._rssFeedUrl;
		var url = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20xml%20where%20url%3D'" + $.URLEncode(fbUrl) + "'&format=json&diagnostics=true&callback=?";

		$.getJSON(url, function (data) {

			console.log(data);

			alert(data.query.results.rsp.feed.entry.circulation);
		});
	},

	_getFollowerCount: function (element) {

		var url = "http://api.twitter.com/1/users/show.json?callback=?&screen_name=" + this._accountName;

		$.getJSON(url, function (data) {

			element.text(data.followers_count);
		});
	},

	_loadTweetCount: function (element) {

		var loc = element.attr("data-url");
		var text = element.attr("data-text");

		var url = "http://urls.api.twitter.com/1/urls/count.json?url=" + loc + "&callback=?";

		var metro = this;

		$.getJSON(url, function (data) {

		    if (data.count > 0) {
		        var qualifier = "Mentions";

		        if (data.count > 99)
		            qualifier = "Tweets";

		        if (data.count == 1)
		            qualifier = "Mention";

		        element.attr("href", "http://twitter.com/share?url=" + loc + "&text=" + text + "&via=" + metro._accountName);
		        element.attr("target", "_blank");

		        element.html("<span>" + data.count + " " + qualifier + "</span>");
		    } else {
		        element.attr("href", "http://twitter.com/share?url=" + loc + "&text=" + text + "&via=" + metro._accountName);
		        element.attr("target", "_blank");

		        element.html("<span>Mention</span>");
		    }
		});
	}
};

var m = new Metro();
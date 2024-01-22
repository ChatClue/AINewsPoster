=== AI News Poster ===
Contributors: ainewsposter
Tags: news, AI, article generation, content creation
Requires at least: 5.0
Tested up to: 6.4
Requires PHP: 7.2
Stable tag: 1.0.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

AI News Poster is an innovative WordPress plugin that automates news summarization and aggregation using AI technology.

== Description ==

AI News Poster is a cutting-edge plugin designed to help WordPress site owners automatically generate summarized and rewritten news content. By integrating with various APIs like Bing News Search API, PagePixels, and OpenAI, the plugin fetches, processes, and rewrites news articles, making content creation effortless and efficient.

Key Features:
- Fetch latest news articles based on user-defined topics.
- Summarize and rewrite articles using advanced AI technology.
- Option to automatically publish or save articles as drafts.
- Support for setting custom post authors, categories, and tags.
- Automatically detects duplicate articles and discards them before writing a new post.

Cost Considerations:
- [Bing Search API](https://www.microsoft.com/en-us/bing/apis/bing-news-search-api) provides a free tier of 1,000 searches per month.
- [The PagePixels Screenshot API](https://pagepixels.com/pricing) provides a free tier of 25 captures per month. 
- [OpenAI API](https://openai.com/pricing) prices depend on the model used. The default model `gpt-3.5-turbo` can generate ~20-30 articles per day for $0.15 to $0.25 cents.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/ainewsposter` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Use the Settings->AI News Poster screen to configure and use the plugin. Remember to set your API Keys in the API Keys section.

== Frequently Asked Questions ==

= Can I customize the news topics? =
Yes, AI News Poster allows you to specify the news topics you want to aggregate.

= Is it possible to control the publishing of articles? =
Absolutely! You can choose to automatically publish articles or save them as drafts.

= Is support available? = 
Absolutely

== Screenshots ==

1. Setup API Keys

[https://res.cloudinary.com/drlltxtaf/image/upload/v1705901239/sfalyoxyfdy85riy32ft.png Setup your Bing Search API, PagePixels API, and OpenAI API Keys.]

2. Post Configuration

[https://res.cloudinary.com/drlltxtaf/image/upload/v1705901494/guzpxfkzriggm9aksisa.png Configure the type of news you'd like to aggregate, how many articles you'd like to post, how the AI should write the posts, if the posts should be created as drafts or published immediately, and set the author, categories, and tags.]

3. Bing API Setup

[https://res.cloudinary.com/drlltxtaf/image/upload/v1705901475/ckjxzon7nohuooau4cjl.png Tell bing how to search for the related news articles.]

4. OpenAI Setup

[https://res.cloudinary.com/drlltxtaf/image/upload/v1705901493/lu8y646oowacipud3j2a.png Pick which model you would like to use for OpenAI. This is the model that will be used to complete the rewrite. This uses the /v1/chat/completions endpoint for reference]

5. Generate Posts

[https://res.cloudinary.com/drlltxtaf/image/upload/v1705902117/eantw5hysijlxku7enzb.png Generate new posts and see the current progress.]

== Changelog ==

= 1.0.0 =
- Initial release.

== Upgrade Notice ==

= 1.0.0 =
Initial Release.

== Additional Information ==

For more information, visit the official [AI News Poster website](https://ainewsposter.com/).

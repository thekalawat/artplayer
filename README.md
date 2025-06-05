# ArtPlayer Video Embed Plugin for WordPress

This WordPress plugin allows you to easily embed videos using the powerful [ArtPlayer](https://artplayer.org/) HTML5 video player via a simple shortcode.

## 🎬 Shortcode Usage

Use the following shortcode anywhere in your posts or pages:

```php
[artplayer video="https://example.com/video.mp4" poster="https://example.com/poster.jpg"]
````

### 🔧 Attributes

* `video` *(required)* – URL to the video file.
* `poster` *(optional)* – URL to the preview thumbnail/poster image.

## ✅ Example

```php
[artplayer video="https://www.w3schools.com/html/mov_bbb.mp4" poster="https://www.example.com/poster.jpg"]
```

## 📦 Installation

1. Upload the plugin folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Use the `[artplayer]` shortcode as described above.

## 🚀 Features

* Lightweight integration with [ArtPlayer.js](https://github.com/zhw2590582/ArtPlayer).
* Customizable video source and poster.
* Responsive and modern UI.

## 📄 License

GPLv3 or later — [View License](https://www.gnu.org/licenses/gpl-3.0.html)

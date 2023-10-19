⚠️ This is probably not working now as Twitter (X?) have been doing crappy things with their API and **I'm no longer maintaining this**  

---

# Random Twitter Header [![ko-fi](https://www.ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/EduFdezSoy)
Change the twitter header programatically

## How to?
Just drop it in somewhere and run `composer install` to add the dependencies.  

Open the `change_header.php` and edit those const and vars with your api keys and tokens:
```php
// twitter auth things
const CONSUMER_KEY = "you";
const CONSUMER_SECRET = "must";
$access_token = "add";
$access_token_secret = "those";
```

Then just run `php change_header.php` and it will change your header.

It will explode since there is no image to put atm, lets see how to add them:

## Adding images
If you read the code, it says:

```php
// Sets up path to the images
$pathToAssets = 'images/';
```

so we need to create a folder `images` (or change the value) in the proyect directory and inside it we add some images.  

At the moment Twitter says 3000x1000 for header images but then cuts two bands, why Twitter, WHY?  

## Something more
Um, oh, do whatever you like with this, I really don't care. *MIT License*.  

If you need some **help** or want to verbally abuse me just drop me a tweet [@EduFdezSoy](https://twitter.com/EduFdezSoy).  

If you really liked it and feel like I deserve some money, I don't know whats happening to you, but buy me a [coffee](https://ko-fi.com/EduFdezSoy) and I'll continue transforming caffeine into code.

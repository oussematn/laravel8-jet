This repo contains a ready to use Laravel <b>8</b> app with <b>Jetstream</b> and <b>Socialite</b> packages integration.
I used Facebook driver but you can switch to any driver.

What you need to do is:

<ol>
    <li>Clone This repo</li>
    <li>Run `composer install`</li>
    <li>Run `npm install && npm run dev`</li>
    <li>Configure your `.env` like usual and add the following:</li>
</ol>

```
FB_APP_ID=<your app ID>
FB_APP_SECRET=<your app secret>
FB_REDIRECT='http://localhost:8000/fb/login/redirect'
```

You get your app ID and secret from the website which you want to integrate. For Facebook, you get it from <a href='https://developers.facebook.com/apps' target='_blank'>here</a>

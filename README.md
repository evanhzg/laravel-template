<p align="center"><img src="https://gist.githubusercontent.com/evanhzg/7e9f3d9dd686bd93f7d86b7b17d7be84/raw/f0be910fea1bbeb24e1ec31ee548d21d064b24c1/evan-dev-logo.svg" width="400" alt="Evan Hoizey Logo"></p>
<h1 align="center">+</h1>
<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></p>


# Global Laravel Template

#### This repo tends to be updated with features I use and want to default in my future projects.

---

## Quick Setup

Everything is set to be installed in a few steps. The point of the template is to be quick to setup and easy to use.

Following these steps should get everything working with no errors :

1. Make sure your terminal is in a local server environment such as [MAMP](https://www.mamp.info/en), [XAMPP](https://www.apachefriends.org/) or a [Docker](https://www.docker.com/) container. This step is essential to have the live reload working as PHP files won't get monitored in a basic browser preview.
2. Clone the repository using git with ```git clone [link]```
3. Install all the dependencies with ```composer i``` or ```composer install```
4. Install npm packages with ```npm i``` or ```npm install```

> Now, the installations ___should___ have gone well. If not, check if your PHP version is >= 8.1 on your environment. (I had to update my MAMP once to get the right versions so think about this before changing anything inside the template)

---

## Starting Local Server

Try and start the local server with ```npm run watch```.

- If not working, try reinstalling Laravel-mix with :
```npm install laravel-mix --save-dev```

- Check if the scripts are well defined, here is the ```package.json``` part as it should be :
```
"scripts": {
    "dev": "npm run development",
    "development": "mix",
    "watch": "mix watch",
    "watch-poll": "mix watch -- --watch-options-poll=1000",
    "hot": "mix watch --hot",
    "prod": "npm run production",
    "production": "mix --production"
},
  ```

If it's not like this, then... change it to that and try again.

> For more information, I strongly suggest checking - [Laravel Mix documentation](https://laravel-mix.com/docs/6.0/installation).

---

## Going further

Changing environment variables could get you lost at first but is a strong tool to get further in your automations.

Head into ```.env``` at the root of the template and play with the vars.

> Some commands could help as you use a lot of artisan, like : ```alias phpa='php artisan'``` and replace ```php artisan [...]``` with ```phpa [...]```. 

#### <mark>Custom Local URL
You could change ```APP_URL=localhost``` to whatever you want but will need some toying. As a mac user, I have to edit my hosts settings to allow a new local url redirection.
Here is the technique : open ```sudo nano /etc/hosts``` and add the following lines within the Hosts Database section :
```
0.0.0.0 app.test
0.0.0.0 www.app.test
```
> Note : Both URLs are purely arbitrary and could be anything.

#### <mark>Configure Your Database

Here, you  won't have much more to do than defaulting env variables to your DB configuration.

Using MAMP or XAMPP, you should be able to connect to your phpmyadmin database, check your software's documentation for further reading.

Using Docker, you probably already created your container by yourself and thus added your own DB config. If not, I advise that you check everything on Docker's documentation as to how to setup a database with Docker.

---

## Resolve Problems

```scss
php artisan optimize
```
<p align="center">&</p>

```scss
php artisan route:clear
```

> These two commands will be important when you update your routes (whether in your ```web.php``` or in a call like ```config('app.name')``` that points on changing app's title)

---

## Relative documentations :

- [Laravel 9](https://laravel.com).
- [Eloquent ORM](https://laravel.com/docs/9.x/eloquent)
- [Laravel Mix](https://laravel-mix.com).
- [Browser-sync](https://laravel-mix.com/docs/4.0/browsersync).
- [VueJS](https://vuejs.org/guide/introduction.html).
- [Tailwind](https://tailwindcss.com/docs/installation).
- [SCSS](https://sass-lang.com/documentation/).

---

## Laravel License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

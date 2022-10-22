# Honey Badger Starter Theme

A WordPress workflow built for use with Webpack and Docker/Valet. Also heavily optimised for those all important Lighthouse results ;)

Guide:

- First, make sure your Node.js version is up to date. This is working with the latest Node.js version at the time of writing (16.14.0). If you have any doubts, uninstall Node.js from your computer entirely and then download the latest version from nodejs.org. Let it install any build tools necessary.

- We now need to install Yarn globally. To do so, open cmd and run npm install --global yarn. If this first attempt fails, open PowerShell as administrator and run the following: Set-ExecutionPolicy -Scope CurrentUser -ExecutionPolicy Unrestricted

- Next, open this project. Run npm install and then yarn install - both of these should run fine with the included package.json and yarn.lock files in place, but any issues, Google is your friend!

- These are the commands you'll want to know about:
- yarn dev - compiles everything for a development environment
- yarn dev:watch - watches files to compile, runs BrowserSync (essentially the same as npm run watch)
- yarn build - compiles everything for production - minifies those JS and CSS files and compresses those images

# Notes

- The /src folder now includes images, so this is the folder where you'd drop in static assets like logos, map pins etc - anything that doesn't get uploaded via WordPress basically. Don't put these in /themename/assets/images anymore, doing it this way means they get compressed which is good. They will go into /dist/images/ within the theme, so this is the path you would want to reference within WordPress or your CSS.

- The contents of the dist folder are now nested - I've updated the references within the WordPress theme to reflect this. So instead of having /dist/main.js, it's /dist/js/main.js and so forth.
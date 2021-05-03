BUILT ON: 

HTML5

CSS3

Javascript

SASS

Bootstrap v5.0.0-beta1

Fontawesome Pro v5.13.0

Requires the following to be first installed on your machine and available globally:

1. Node (Node Package Manager)
2. Gulp

STEPS:

1. CD into the root folder of your project
```
cd project-folder-name
```

2. run 
```
npm init -y
``` 
(This creates the `package.json` file)

3. run
```
npm i gulp browser-sync gulp-sass --save-dev
```
(The `--save-dev` installs development dependencies (gulp, browser-sync, gulp-sass & fontawesome) into the `node_modules` folder in the root folder and creates/updates the `package-lock.json` folder with details of the dependecies for this specific project)

4. run 
```
npm i bootstrap@next jquery popper.js --save
```
(The `--save` command installs the production dependecies (bootstrap, jquery and popper.js))

5. run 
```
gulp
```
(This creates the JS and CSS files in your `src/assets/` folder. Your browser should open style guide properly styled as an indication that gulp is parsing .scss into .css successfully. There should display the message `Testing 123` followed by 5 abacus icons as an indication that fontawesome 5.13.0 is loading properly)
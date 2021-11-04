# JUST ANOTHER BLOG :tv:

This app is just another blog that i made so i can work on different skills. The main goal here was to learn more and use easyAdmin in a full Symfony app. 
<br/>
I started with my trello and defined the tech stack, the user stories and then used Merise method to modelize my database (MVC, MLD). After that i made wireframes and a color palette. (Don't ask me why i went with green and pink 😏) <br/>
I also worked with webpack-encore to compile all of my bootstrap, bootswatch, sass and all and decided to use VichUploader bundle to be able to upload images. It also was the opportunity to test out the new Symfony authentication method.
<br>
The final goal is to deploy this app but i struggled a lot with heroku since i have a mysql database and i can't make clearDB bundlepack to work and with JawsDB i have a server side issue after i add a new post (still trying to find a solution :persevere:). But for now i can already show you captures of the website working on my dev environement.

### Tech stack
Symfony, easyAdmin, webpack-encore, boostrap, bootswatch, sass, twig, VichUploader.

## THE APP

<h3 align="center">Homepage - desktop</h3>
<p align="center">
<img width="500" src="https://github.com/ZK9XW3/just-another-blog/blob/main/public/img/thumbnails/homepage-top.png"/>
<img width="500" src="https://github.com/ZK9XW3/just-another-blog/blob/main/public/img/thumbnails/homepage-posts.png"/>
<img width="500" src="https://github.com/ZK9XW3/just-another-blog/blob/main/public/img/thumbnails/homepage-bottom.png"/>
</p>

<h3 align="center">PostsList - mobile</h3>
<p align="center">
<img width="250" src="https://github.com/ZK9XW3/just-another-blog/blob/main/public/img/thumbnails/postsList-mobile.png"/>
<img width="250" src="https://github.com/ZK9XW3/just-another-blog/blob/main/public/img/thumbnails/postsList-mobile-nav.png"/>
<img width="250" src="https://github.com/ZK9XW3/just-another-blog/blob/main/public/img/thumbnails/postsList-mobile-bottom.png"/>
</p>

<h3 align="center">BackOffice - desktop</h3>
  In this back office you have 2 types of roles: 
  <ul>
    <li>The 'ADMIN' can create, update, delete the posts, categories and only edit users.</li>
  <li>'USER' can read posts, categories, users. The user role was made to have some kind if a demo account when the website will be online. You can see it on the third image we are at the category section but i can't add, edit or delete a category since i'm logged in as user@user.com</li>
  </ul>
<p align="center">
<img width="500" src="https://github.com/ZK9XW3/just-another-blog/blob/main/public/img/thumbnails/bo-admin-posts.png"/>
<img width="500" src="https://github.com/ZK9XW3/just-another-blog/blob/main/public/img/thumbnails/bo-admin-posts-add.png"/>
<img width="500" src="https://github.com/ZK9XW3/just-another-blog/blob/main/public/img/thumbnails/bo-user-categories.png"/>
</p>


## INSTALL

- `composer install`
- `npm install` (if necessary)
- configure .env OR make .env.local
- `bin/console doctrine:database:create`
- `bin/console doctrine:migrations:migrate`
- create a user
- give your user ["ROLE_ADMIN"] (you can do it with mysql CLI or use something like phpMyAdmin)
- go to the back office and create posts, categories and so on.

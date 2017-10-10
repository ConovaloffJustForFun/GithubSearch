# Goal:
Service where the user can enter any word and get the list of PHP and JavaScript repositories from GitHub where the entered word is mentioned in the name. Each repository in the list should be represented as the link to repository on GitHub.

# Install:
```js
git clone https://github.com/ConovaloffJustForFun/GithubSearch.git
cd GithubSearch
curl -sS https://getcomposer.org/installer | php
composer.phar install
cd www
php -S localhost:8000
```
and open http://localhost:8000 in your browser

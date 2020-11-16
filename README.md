

## Build With

- [PHP 7.4](https://www.php.net/)
- [Symfony](https://github.com/symfony/symfony)
- [Vich Uploader](https://github.com/dustin10/VichUploaderBundle)

## Configuration

All you need to run this app on your server.

When you have cloned this app, you have to run a `composer install` 
> Take a coffee 

This two past command will download all the packages 
you need to run the app on your server.
There are all available in `composer.json` and in `yarn.lock`.

Then you have to configure your `.env` :

### **If you want to make some changes in dev environment :** 

1. You have to create a `.env.local` (Copy/Past `.env). 
    > DATABASE_URL=mysql://_user_:_password_@127.0.0.1:3306/zeonis_test

    Change _user_ and _password_ with your mysql credentials
    Please double check your port and your localServer address for the BDD.


2. Create your database, run `php bin/console doctrine:database:create`.

3. Run `php bin/console d:s:u --force`.

Run your app with `symfony server:start`

Shut down your app with `symfony server:stop`
  
---

##User

User are created with Fixtrures

for login use;
-username = Zeonis1
-pw = userzeonis

## ToDo
 
This is the list of user story that we didn't dev.

- Saisons ans statisics


## Authors

- Franck ROTH : [GitHub](https://github.com/Franck-Roth) | [LinkedIn](https://www.linkedin.com/in/franck-roth/)

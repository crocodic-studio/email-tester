# Email Tester For Laravel

Debugging send the email is never been easy. With this library you can debug and check your email smtp problem.

## How to install
Install this library with command : 

<code>composer require crocodicstudio/email-tester</code>

Recommended laravel version 5.7 up . If you use 5.4 or bellow you have to add service provider manually

<code>crocodicstudio/emailtester/EmailTesterServiceProvider::class</code> to config/app.php (Providers section)

## How to use

Just visit the url /email-tester at the browser.

# How to disable

To disable this email tester, you can add <code>EMAIL_TESTER=false</code> to your .env
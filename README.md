

# How I worked on this project

I worked with team members using miro. I was the frontend developer for this project.


# How the project is built

Using HTML and CSS, we created the structure for the frontend part of our platform. Javascript was used for the interactive sections of the platform. We created various pages such as the homepage, blog page ,user dashboard, registration and login pages as well as the about us page. These pages were linked to each other and using Minuteinbox.com, we automatically generated emails which had very short validity periods. With these email addresses, the users could register on slack completely anonymously. Using EmailJs.com, we automated the process of users getting their slack login link directly sent to their newly generated email addresses. Using PHP we coonected the frontend data to the backend for easier creating, reading,updating and deleting of data (CRUD).

The data of the website is transmitted to the mysql database hosted on Xampp. For our website, it was paramount that we use Xampp for the back-end to maximize space. This is because Xampp takes the actual packages from other server services (Apache, PHP, MySQL, etc.) and packages them together in a pre-configured server, whereas you normally would download those things and manually install and configure them.


# A simplified rundown of how our platform works

Alex registers on Angusta, they are directed to the user dashboard after registration, where they have to generate a unique and anonymous email address on a third party platform to receive their slack access. The user can now access the slack channel using this auto-generated email address. This email address is only valid for ten minutes and must be used for generating the slack link within this timeframe. With the slack access received in the new email address, the user can now log on into the slack channel and enjoy the complete anonymity which our platform offers


# Stacks & Software used for this project

HTML
CSS
JAVASCRIPT
PHP
EmailJs
SLACK
XAMPP
MySQL
VSCode
miro

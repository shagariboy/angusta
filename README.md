We used HTML, CSS, Bootstrap and Javascript for the design and development of the Frontend. For the Backend we used  MySQL,phpmyAdmin, Apache and PHP.  
Hypertext Markup Language,HTML is a standardized system for tagging text files to achieve font, colour, graphic, and hyperlink effects on World Wide Web pages.
Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML or XML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript
Javascript is an object-oriented computer programming language commonly used to create interactive effects within web browsers.We used this for creating some of the interactive pages on our platform such as the homepage as well as the user dashboard. 
PHP (Hypertext Preprocessor) is known as a general-purpose scripting language that can be used to develop dynamic and interactive websites. It was among the first server-side languages that could be embedded into HTML, making it easier to add functionality to web pages without needing to call external files for data.
MySQL is a relational database management system (RDBMS) developed by Oracle that is based on structured query language (SQL). A database is a structured collection of data. It may be anything from a simple shopping list to a picture gallery or a place to hold the vast amounts of information in a corporate network.

Using HTML and CSS, we created the structure for the frontend part of our platform. Javascript was used for the interactive sections of the platform. 
We created various pages such as the homepage, blog page ,user dashboard, registration and login pages as well as the about us page. These pages were linked to each other and using Minuteinbox.com, we automatically generated emails which had very short validity periods. With these email addresses, the users could register on slack completely anonymously. Using EmailJs.com, we automated the process of users getting their slack login link directly sent to their newly generated email addresses. Using PHP we coonected the frontend data to the backend for easier creating, reading,updating and deleting of data (CRUD). 
  
The data of the website is transmitted to the mysql database hosted on Xampp. For our website, it was paramount that we use Xampp for the back-end to maximize space. This is because Xampp takes the actual packages from other server services (Apache, PHP, MySQL, etc.) and packages them together in a pre-configured server, whereas you normally would download those things and manually install and configure them. 
 The transmission of data from the website to our database follows this simple protocol.
1.	Make sure the data on your database corresponds to the one on your website 
2.	Open Xampp Control panel and turn on MySQL and Apache
3.	Go to the Homepage and click on the registration navbar at the top right
4.	Fill in the registration details.
5.	These details get saved to the MySQL database on the backend 

A simplified rundown of how our platform works

Alex registers on Angusta, they are directed to the user dashboard after registration, where they have to generate a unique and anonymous email address on a third party platform to receive their slack access. The user can now access the slack channel using this auto-generated email address. This email address is only valid for ten minutes and must be used for generating the slack link within this timeframe. With the slack access received in the new email address, the user can now log on into the slack channel and enjoy the complete anonymity which our platform offers

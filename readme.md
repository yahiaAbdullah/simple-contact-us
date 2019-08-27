## Installation

Clone Repository

`git clone git@github.com:yahiaAbdullah/simple-contact-us.git`

Move to the newly created directory

`cd simple-contact-us`

Create a new .env file from .env.example

`cp .env.example .env`

Now edit your .env file and set your env parameters (Specially the database username/pass, database name)

Install dependencies

`composer install`

Generate a new key for your app

`php artisan key:generate`

Run Mix to build assets

`yarn dev`

Reload Database and add some faker(test) data

`php artisan migrate:refresh --seed`

Done, You're ready to go

`php artisan serve`
## how to use 
- you can to send message for admin by click the `contact`
link on the top right of screen
in url :
`your_project_url/home`

- and you can show unread messages by enter this url :
`your_project_url/admin/messages`
the un read messages number will be appeared on messages dropdown title

- you can click the message to show it and deleted it from unread messages

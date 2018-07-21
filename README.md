eventmanager
============

A Symfony 3.4 project created on July 20, 2018, 10:20 am.


# installation

make free you have XAMPP installed and running and Symfony 3.4 ...

import the database provided with this repo to your installed database

create a new Symfony 3.4 project and then replace the directories 
with mine.

The create the database and fill it with some tables.

<p><code>php bin/console doctrine:database:create</code></p>
<p><code>php bin/console doctrine:schema:update --force </code></p> 

Then start the application with 

<code>php bin/console server:run</code>

# important notes 

/ (usually localhost:8000) is the start page which shows all events

## to Add an Event

/43a7b9e3886a3312/addEventForm

## to Edit an Event

/43a7b9e3886a3312/editEventForm?id=*EventId*

## to Delete an Event

/43a7b9e3886a3312/deleteEvent?id=*EventId*


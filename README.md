# PHP Back- and Front-End Application Development Test

Hey there! Thanks for considering working as a PHP and Front End developer for <a href="https://www.marymorrissey.com/">LifeSOULutions That Work, LLC</a>.

## Why this test?

Due to the proliferation of contractors with barely any skills portraying themselves as
PHP and OOP experts, we had to find a way to pre-qualify applicants.

The only sensible way to do that is to include a test as part of the application process.

## The job

We are hiring a full-time PHP developer for the long term. Although it's a contractor position as you are based outside the US, you will be considered a permanent member of staff.

The work is primarily back-end. If you are able to help with front-end HTML and CSS for
the site itself - fantastic!

Technologies include:
- PHP 7
- MySQL
- Slim Framework (standard OOP MVC framework)
- Smarty templating system
- jQuery
- Vue.js
- Git
- Composer
- HTML/CSS

## Working hours

At minimum you need to be able to cover the core hours from 9 AM to 5 PM,
America/New_York. Alternatively you may choose to work the same hours, America/Los_Angeles.

## The task

Create a small application to allow a user to add notes to individual records in a table.

- Bear in mind our technology list above. We prefer PHP 7.2 over PHP 7.
- Use the new features of PHP 7/7.2 where possible and appropriate.
- Use Bootstrap 4 as your starting stylesheet
- Use an MVC structure
- Use either Eloquent or Aura/SQL
- Create INSTALL.md with full installation instructions, step by step.

The basis for the data is as follows (you can seed the sku and description with random data for test purposes):
 - order_id - Integer
 - sku - string, 50 characters
 - description - string, 250 characters
 - notes, a single field to store individual notes from the user

Functionality
 - A "note" is a comment from a user, stored in the "notes" field.
 - There can be several notes, all stored in the same field in the database.
 - Display records from the DB using DataTables
 - Indicate through an icon if notes exists for a particular record
 - Find a way to display the notes in a balloon when hovering somewhere on the record
   - Explain why and/or how you chose your solution
 - Use an icon to allow user to delete all comments from a record.
 - When clicking an "add" icon, create a modal that allows the user to enter more information.
   - Note:
     - All notes are stored in a single field.
     - Previous notes should be immutable; they cannot be changed or removed.
     - User is required to enter their initials and the note text.
     - When the modal is closed, the information in the datatable should be refreshed without a page reload.

## What we are looking for

Programming task is a test of your abilities. Not just as a coder, but as a
person who can deliver a solution that can be used.

We do use this test to highlight those contractors who can deliver, and leave those
who cannot deliver far behind. 

So here's what we are looking at:

- How you deal with encodings and charsets
- How clean your code looks
- How well you have commented your code
- How you organize your code according to the MVC structure
- Your use of new features of PHP 7/7.2
- Are the instructions for the task correct? Did you interpret them correctly?
- Your adherence to our technology list, and if you have chosen something else, your reasons why
- For instance, using Smarty is optional. However, if you choose Twig instead of Smarty we will ask you why. If you have a good answer, that's fine.

And most importantly - there are many elements that have been left to YOUR CHOICE.

A big part of the assessment is your ability to use your knowledge to deliver a
usable solution. Basically, use sensible defaults. Protect against user error.
Cover against all sensible error conditions.

You must fork or clone this repo.

When you have spent 1 hour of what you consider to be billable time on the project,
commit all code to Github and create a tag with "1hour".

Make sure we have the URL for your repo.

For each additional 2 hours of working time you spend on the project, commit the
code and add a corresponding tag, e.g. "3hours", "5hours" etc.

## If your solution is incomplete

We get that you might not want to spend 20+ hours on a recruitment test. If you do not
finish the project, but have reached your limit, please explain what is left to do and
how you would do it, and notify us that you consider the project completed.

Also please let us know how much time you spent on the project, in total.

# Good luck!

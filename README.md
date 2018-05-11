# PHP Back- and Front-End Application Development Test

Hey there! Thanks for considering working as a PHP and Back End developer for
<a href="https://www.marymorrissey.com/">LifeSOULutions That Work, LLC</a>.

## Why this test?

Due to the proliferation of contractors with barely any skills portraying themselves as
PHP and OOP experts, we had to find a way to pre-qualify applicants.

During the process we have asked for links to Github or to other projects you have coded.
If you have not sent through satisfactory code samples then we're asking that you complete this
test.

Please read the whole description thoroughly before you start.

## The job

We are hiring a full-time PHP developer for the long term. Although it's a contractor position
if you are based outside the US, you will be considered a permanent member of staff.

The work is primarily back-end. If you are able to help with front-end HTML and CSS for
the site itself - fantastic!

Technologies we work with include:
- PHP 7
- MySQL
- Slim and laravel Frameworks (standard OOP MVC framework)
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

Create a small application to allow a user to add notes to individual records in a table using
a REST api using JSON.

- Bear in mind our technology list above. We prefer PHP 7.2 over PHP 7.
- Use the new features of PHP 7/7.2 where possible and appropriate.
- Use an MVC structure
- Use either Eloquent or Aura/SQL
- Create INSTALL.md with full installation instructions, step by step.

The basis for the data is as follows (you can seed the contact_id and notes with random data for test purposes):
 - note_id - Integer
 - contact_id - Integer
 - notes - String

In addition, please create a contacts table as follows:
 - contact_id - Integer
 - name - String

## Concept
We have many contacts in our contact table. We have a separate table to store notes for each contact. We want a REST
API where we can add notes. This REST API can be called from a web page so we can add and remove notes for a contact.

## Functionality
 - A "note" is a comment, stored in the "notes" field.
 - There can be several notes for a contact.
 - Create a page that display records from the contacts table using datatables.net.
 - Indicate through an icon if notes exists for a contact.
 - When hovering over the notes icon, display the notes in a balloon style notification, in reverse date order.
 - When clicking an "add" icon, create a modal that allows the user to enter more information.
   - Note:
     - All notes are stored in separate records.
     - Previous notes should be immutable; they cannot be changed or removed.
     - When the modal is closed, the information in the datatable should be refreshed without a page reload.
 - Use an icon to allow user to delete a note from a record.

## What we are looking for

Programming task is a test of your abilities. Not just as a coder, but as a
person who can deliver a solution that can be used.

We do use this test to highlight those contractors who can deliver, and leave those
who cannot deliver far behind.

Note that we prefer the API to completed ahead of HTML; it's great to have some of both.

So here's what we are looking at:

- How you deal with encodings and charsets.
- How clean your code looks.
- How well you have commented your code.
- How you organize your code according to the MVC structure.
- Your use of new features of PHP 7/7.2
- Are the instructions for the task correct? Did you interpret them correctly?
- Your adherence to our technology list, and if you have chosen something else, your reasons why.
  - For instance, using Smarty is optional. However, if you choose Twig instead of Smarty we will ask you why.
    If you have a good answer, that's fine.

And most importantly - there are many elements that have been left to YOUR CHOICE.

A significant part of the assessment is your ability to use your knowledge to deliver a
usable solution. Basically, use sensible defaults. Protect against user error.
Cover against all sensible error conditions.

You must fork or clone this repo.

Very important - for every single hour of what you would normally consider to be billable time on the project,
commit all code to Github and create a tag at that point.

Do this for EVERY hour of development time.

Also, make sure we have the URL for your repo BEFORE you start.

## If your solution is incomplete

We don't expect you to complete the task. We expect you to have questions - you need to try to do your
best without asking questions. After 3 hours, let us know so we can look at what you have achieved. You
may be asked to do more, or you may be told to stop.

It would help you if you at that time explain what is left to do and how you would do it.

Also please let us know how much time you spent on the project, in total.

# Good luck!

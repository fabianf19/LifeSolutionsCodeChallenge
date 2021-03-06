# Installation Instructions for CodeChallenge

Submitter: Fabian Fuenmayor

### Useful Cheat-Sheet Commands

- Make Models: `php artisan make:model {CLASS}> -m`
- Making Seeders: `php artisan make:seeder {CLASS_NAME}`
- Running a seeder: `php artisan db:seed --class={CLASS_NAME}`
- Making a new Controller : `php artisan make:controller {CONTROLLER}`
- Make the migratiosn : `php artisan migrate`

## Steps to install and run the CodeChallenge

1. Start by initializing your database server, in this case I used MAMP (v4.2) for the project
	
	You must also create the database and edit the `.env.use_this_one` file for such configuration

2. Edit `.env.use_this_one` file and setup the apropiate connections to your database

	Remove the `use_this_one` extension so that the file is simply name: `.env`

3. Create migrations required for the project

	Run the following command: `php artisan migrate`

4. (Optional) If you wish, you may seed the database with random records for testing

	Run the following command: `php artisan db:seed` as in this case only one class is required to run the seeder

5. Run the command `php artisan serve` to start the application
6. Go to route: `http://127.0.0.1/` to see the working code challenge!

[![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/212ad6a471aaae9f4844)
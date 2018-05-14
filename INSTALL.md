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
	
	You must also create the database and edit the `.env` file for such configuration

2. Edit `.env` file and setup the apropiate connections to your database
3. Create migrations required for the project

	Run the following command: `php artisan migrate`

4. (Optional) If you wish, you may seed the database with random records for testing

	Run the following command: `php artisan db:seed` as in this case only one class is required to run the seeder

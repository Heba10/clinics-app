## 1:Project Name
 its a Coding Test ....
 
## Installation
1. Clone GitHub repo for this project locally : 'git clone https://github.com/Heba10/clinics-app.git '
2. cd into your project : 'cd Test'
3. [Optional]: Checkout the “Start” tag so you have a fresh install of the project (and not the final files) : git checkout tags/start -b tutorial 
(“tutorial” in this example) to be the name of the working branch you prefer.
4. Install Composer Dependencies : 'composer install'
5. Create a copy of your .env file : 'cp .env.example .env' 
6. Generate an app encryption key : 'php artisan key:generate'
7. Create an empty database for our application
8. In the .env file, add database information to allow Laravel to connect to the database
9. Migrate the database  : 'php artisan migrate' 

10.Seeders : php artisan db:seed --class=ClinicSeeder
           : php artisan db:seed --class=BranchSeeder


## Contributing
1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

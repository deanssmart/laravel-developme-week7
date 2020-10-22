# The Vet Practice

![app preview](./public/assets/images/vet-preview.jpg)

### View the app online 

Open the live app in your browser with this link: http://vet-practice.herokuapp.com/

- username: guest@thevetpractice.com 
- password: password

## Intro

A veterinary practice database app that allows tracking of owners and their pets with a one to many relationship and pet treatments with a many to many relationship. The app also includes a RESTFUL API (End-points listed below)

### Technologies

- PHP
- MySQL
- Laravel
- Blade
- HTML/CSS
- Bootstrap (styling)
- Git (version managed)
- Heroku (deployment)

### Functionality and Features

- Adaptive welcome screen depending on time of day and logged in user
- Add, edit, delete, list and search owners
- Add, edit and delete pets for each owner (one to many)
- Add and delete treatments for each pet
- List treatments and see which pets are booked in for each treatment (many to many)
- Authentication login to only allow admin rights for adding, editing and deleting from the database (I have provided a login above for you to play around and update the database)
- Restful API
- Danger warning if pet is a 3 or above in biteyness
- Neat and clean UI 👍

### How to Use

- Login using the credentials provided (username: guest@thevetpractice.com password: password)
- Click "owners" to see a list of current owners in the database
- Click the owners name to see their details and pets they own
- Use the form at the bottom of the owners page to add a pet to the currently selected owner (multiple treatments can be added using a comma to separate)
- Once a pet is added, treatments can be clicked which will bring up a list of all pets that are booked in for the chosen treatment
- A list of all the treatments can be seen by clicking the treatments in the navbar

## Setup on your machine

### Prerequisites 
This project requires [Vagrant](https://www.vagrantup.com/) to be downloaded on your machine

### Steps

1. Create a local directory on your machine 
2. Run the following code in your command line to navigate into that directory:   

```shell 
$ cd ~/your-directory-name-here
```
3. Copy the SSH key from this GitHub repository `git@github.com:deanssmart/the-vet-practice.git`

4. Run the following code in your command line to clone the repo to your machine (you can change the app-name to what you desire):  

```shell 
git clone git@github.com:deanssmart/the-vet-practice.git <app-name>
```
5. Navigate to your new app directory (the app name you just picked):

```shell 
$ cd app-name
```
6. Install the dependencies in the node_modules folder:

```shell 
npm i
```
7. Install the dependencies in the composer file:

```shell 
composer i
```
8. Copy the relevant Homestead files into the
project directory:

```shell 
vendor/bin/homestead make
```

9. Change the second line of Homestead.yaml so it just uses 512mb: 

```shell 
memory: 512
```

10. Create a .env file:

```shell 
cp .env.example .env
```

11. Edit the .env file you just created to use the default Homestead database setup:

```shell 
DB_DATABASE=homestead
DB_USERNAME=root
DB_PASSWORD=secret
```

12. Generate an application key:

```shell 
php artisan key:generate
```

13. Get Vagrant up and running:

```shell 
vagrant up
```
14. Once Vagrant has finished loading, go to:

    1.  On Mac: http://homestead.test
    2.  On Windows: http://localhost:8000

15. SSH into the Vagrant machine:

```shell 
vagrant ssh
```

16. Navigate to the code directory:

```shell 
cd code
```
17. Run migrations:

```shell 
artisan migrate
```


# The Vet Practice

![app preview](./public/assets/images/vet-preview.jpg)

### View the app online 

Open the live app in your browser with this link: http://vet-practice.herokuapp.com/

- username: guest@thevetpractice.com 
- password: password

## Intro

A veterinary practice database app that allows tracking of owners and their pets with a one to many relationship and pet treatments with a many to many relationship. The app also includes a RESTful API (End-points listed below)

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
- Age of pet calculated from DoB
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

### Creating an authorised user

Some of the app's features are blocked to unauthorised users to you will need to create a user in order to access them. The easiest way to do this is using `artisan tinker`:

````
$user=newUser();
$user->name="Your Name"
$user->role="Your Role"
$user->email="your@email.com"
$user->password=Hash::make("password")
$user->save()
````

You can now use these credentials to log in and add, edit, and delete owners, pets and treatments.

## API End-Points

You can access the live API using the following link:

https://vet-practice.herokuapp.com/api

and corresponding end-points:

### Owners

#### 'GET /owners'
Will return a list of all owners
````
{
    "data": [
        {
            "id": 2,
            "first_name": "Cadbury",
            "last_name": "Flake"
        },
        {
            "id": 3,
            "first_name": "Hula",
            "last_name": "Hoop"
        },
        {
            "id": 4,
            "first_name": "Chilli",
            "last_name": "Bottle"
        }
    ]
}
````

#### 'POST /owners'
Will create a new owner
##### Request

- `first_name`: required
- `last_name`: required
- `telephone`: required
- `email`: required
- `address_1`: required
- `address_2`: optional
- `town`: required
- `postcode`: required

#### 'GET /owners/<id>'
Will return an owner with the given id

##### example return
````
{
    "data": {
        "id": 2,
        "first_name": "Cadbury",
        "last_name": "Flake",
        "address_1": "99",
        "address_2": null,
        "town": "Cornetto",
        "postcode": "BR0 WNN",
        "animals": [
            "Big ol Parrot",
            "Big ol Parrot II"
        ]
    }
}
````
#### 'PUT /owners/<id>'
Will update an entire existing owner
##### Request

- `first_name`: required
- `last_name`: required
- `telephone`: required
- `email`: required
- `address_1`: required
- `address_2`: optional
- `town`: required
- `postcode`: required

#### 'DELETE /owners/<id>'
Will delete an existing owner

### Animals

#### 'GET /owners/<id>/animals'
Will return the pets of a given owner

##### example return
````
{
    "data": [
        {
            "id": 29,
            "name": "Big ol Parrot",
            "type": "Parrot",
            "treatments": [
                "defeather"
            ],
            "owner_first_name": "Cadbury",
            "owner_last_name": "Flake",
            "owner_id": 2
        },
        {
            "id": 32,
            "name": "Big ol Parrot II",
            "type": "Parrot",
            "treatments": [
                "defeather",
                "debeak"
            ],
            "owner_first_name": "Cadbury",
            "owner_last_name": "Flake",
            "owner_id": 2
        }
    ]
}
````
#### 'POST /owners/<id>/animals'
Add a pet to an owner
##### Request

- `name`: required
- `type`: required, type of animal
- `dob`: required, YYYY-mm-dd
- `weight`: required, number in kg
- `height`: required, number in m
- `biteyness`: required, integer between 1 and 5
- `treatments`: required, array comma separated 

#### 'GET /animals'
Will return a list of all animals

##### example return
````
{
    "data": [
        {
            "id": 14,
            "name": "Pumpy",
            "type": "Dog",
            "treatments": [
                "deball"
            ],
            "owner_first_name": "Rugby",
            "owner_last_name": "Ball",
            "owner_id": 25
        },
        {
            "id": 23,
            "name": "Mr Catty",
            "type": "Cat",
            "treatments": [
                "deflea"
            ],
            "owner_first_name": "Rugby",
            "owner_last_name": "Ball",
            "owner_id": 25
        },
        {
            "id": 25,
            "name": "Sharky",
            "type": "Shark",
            "treatments": [
                "tooth filling",
                "counseling"
            ],
            "owner_first_name": "Chilli",
            "owner_last_name": "Bottle",
            "owner_id": 4
        }
    ]
}
````
#### 'GET /animals/<id>'
Will return an animal with the given id

##### example return
````
{
    "data": {
        "id": 14,
        "name": "Pumpy",
        "type": "Dog",
        "dob": "2019-01-11",
        "weight": "7.30",
        "height": "0.70",
        "biteyness": 5,
        "owner_first_name": "Rugby",
        "owner_last_name": "Ball",
        "treatments": [
            "deball"
        ]
    }
}
````
#### 'PUT /animals/<id>'
Will update an entire existing animal
##### Request

- `name`: required
- `type`: required, type of animal
- `dob`: required, YYYY-mm-dd
- `weight`: required, number in kg
- `height`: required, number in m
- `biteyness`: required, integer between 1 and 5
- `treatments`: required, array comma separated 

#### 'DELETE /animals/<id>'
Will delete an existing animal

### Treatments

#### 'GET /treatments'
Will return a list of all treatments

##### example return
````
{
    "data": [
  {
            "id": 2,
            "treatment": "defeather",
            "animals": [
                "Big ol Parrot",
                "Big ol Parrot II"
            ]
        },
        {
            "id": 7,
            "treatment": "debeak",
            "animals": [
                "Big ol Parrot II"
            ]
        },
        {
            "id": 14,
            "treatment": "eye lift",
            "animals": [
                "Sophie"
            ]
        }
    ]
}
````

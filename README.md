# URL-Shortner

## Demo Video
https://user-images.githubusercontent.com/76685103/147847157-a2aff4d5-21ea-4642-b8bd-c3fa1f21df2a.mp4

A deployed version can be checked here: http://ec2-3-142-232-79.us-east-2.compute.amazonaws.com/

## Designs
![1](https://user-images.githubusercontent.com/76685103/147847309-b81fa921-c5b9-4907-865a-baed2df58f4e.png)
![2](https://user-images.githubusercontent.com/76685103/147847315-e4063d88-7055-476b-abc1-8209aadc31bd.png)
![3](https://user-images.githubusercontent.com/76685103/147847316-832134a1-b1c2-4084-bbb5-91ee50534519.png)
![4](https://user-images.githubusercontent.com/76685103/147847318-14606934-5386-4f1b-95a2-9fd2a8cda718.png)
![5](https://user-images.githubusercontent.com/76685103/147847321-671c93fe-59fa-4e5c-a04e-b6c42ffb3101.png)
![6](https://user-images.githubusercontent.com/76685103/147847326-2ffbb03c-9ce2-42a3-a1b9-4f66ab7e3968.png)

## User Story
### Requirement 1
There is the need to shorten long urs
as now a day's urls unavailability.

### User Story 1: 
As a Businessman I would like to have a Url Shortner Service
so that I can Shorten the URL as my own.

## Developer
1. Nirmallya Mitra [https://github.com/NirmallyaMitra]

* `Frontend + JavaScript Functionality + Backend + Database` : ***Nirmallya Mitra***

## Tech Stack Used
1. `Frontend` : HTML5, CSS3, Javascript, Bootstrap, AJAX
2. `Backend` : PHP
3. `Database` : MySQL

## We worked for the following specifications
1. Loging With Authentication✔️

2. Registration Page✔️
   
   `If a user does not have a account then he/she must have an account.`
  
3. Link input box detects the genuine of false link✔️

4. User can change their shorten link as their wish before save the link (Last 5 characters).✔️

5. At the time of saving the shorten url it checks that the link is ok or not.✔️ 

6. After loging out user can not go back to the logged in phase. User have to login again.✔️

## Deployment
For Deployment, I have used `Amazon Web Services` as a platform connected with `phpmyadmin` as database.

CI/CD setup
1. Create a GitHub repository
2. Install git via terminal (On Ubuntu you can do `sudo apt-get install git`)
3. Then do a git clone of your repository, or simply download the zip file of your repository from GitHub and extract it.
4. Copy your project in the new folder created after cloning (its name will be same to that of the repository you cloned).
5. Add all the changes you want.
6. Then execute these commands:
   
   ````
   git add . 
   git commit -m "[mandatory commit message]" 
   
   git push [url to your repository] master/main 
7. Now your commit will be successfully pushed to the main branch of your GitHub repository.

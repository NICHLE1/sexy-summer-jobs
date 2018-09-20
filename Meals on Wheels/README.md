Project documentation, with full instructions on how to start up the server: https://gitlab.op-bit.nz/BIT/Project/Meals_On_Wheels/wikis/Meals-on-Wheels

### Starting a local server

#### Important Information

| **Description** | **Value** |
| -------- | -------- |
| IP Address | localhost:3000 |
| Local Port | 3000 |
| Web App (Node.js) Port | 3000 |
| Other Apps (phpMyAdmin) Port | N/A |
| Username (**phpMyAdmin**) | meals_admin |
| Password (**phpMyAdmin**) | P@ssw0rd |

#### Step-by-step guide
1. Open up the MAMP program. If a dialog box appears, allow Apache HTTP Server access to communicate on Domain networks

2. Click on 'Open start page'

3. Open up Tools > phpMyAdmin (NOT phpLiteAdmin)

4. Go to the User accounts panel

5. Click on 'Add user account'

6. Enter a user named 'meals_admin'

7. Change the host name type to 'Local' and leave the resulting text display of 'localhost' as it is

8. Enter the relevant password as described in the db.js file (and re-type it)

9. Leave the Authentication plugin as it is

10. Do not click on Generate Password

11. Leave the 'Database for user account' fields as they are

12. Provide the account all privileges by checking the 'Global privileges' box

13. Leave the SSL fields as they are

14. Click on 'Go' to create the user

15. Click on the Databases panel on the navigation bar

16. Create a new database using the fields provided, entering the name 'mealsonwheels'

17. Leave the dropdown menu to the right as it is (it should be 'Collation')

18. Confirm the creation of the database by clicking on 'Create'

19. Visit the official website at https://nodejs.org/en/ and download the LTS - recommended for most users option

20. Go through the installation process to install node.js (you will have to do this every time if you are working at polytech)

21. Open up command prompt and change your directory to the location of the app, which is the parent folder of the project

    
    **NOTE: At this point, it does not seem essential to run the 'npm install' command to 
    download dependencies, and the server will still succesfully connect without it.**
    

22. Execute the 'npm start' command. You should see output such as 'node ./bin/www', followed by a dialog box

23. Allow Node.js to communicate on Domain networks

24. Navigate to the web address 'localhost:3000' in a web browser

25. The web page may take a while to load. You should eventually see a stream of GET requests appear in the command line with successful status code 200 messages

# You will probably want to run an `npm install` command if the website is not loading or is displaying errors.
# CSIT337FinalProject
A Final project for Montclair State University CSIT 337 - Internet Computing. A website with design of my choice.

# 12-10-24
- Setup directory framework and planning on keeping this project very organized and clean. 
- Main goal for the day is getting the index finished and the general style of the page setup so I can get clear Aesthetic view of the website layout, will probably defer from the original wireframes for a more user friendly and engaging UI.
- Build the logo for the index. 

# 12/11/24
- Index is complete and so is logo#2 landscape logo. 
- Need to add just info to the index because the frame is setup but the info is lacking...
- working on about page currently.

# 12/12/24
- Working on MySQL and getting all the php connected for the contact.html... little confused right now. 

# MARIADB - MySQL Steps:
- Start APACHE AND MySQL in XAMPP
- Make sure the proj file is in htdocs
- C:\xampp\mysql\bin\mysql -h localhost -P 3307 -u root -p
- click enter password is blank -> ""
- SHOW DATABASES; <- Shows all DBs
- For this project's DB paste USE rosarios_mechanics;
- SHOW TABLES; <- Shows tables in the rosarios_mechanics Database
- SELECT * FROM contactForm; <- This will show all form entries currently in the Database
- SELECT * FROM users; 
- SELECT * FROM services;

# 12/16/24 
- Finish Index info page, look over all code, clean up possibly... 
- Do the @media views
- Add Admin login and user login possibly for website additions such as editing the services prices, names, adding or deleting services and overall avoid adding and deleting through code and rather through the website page. Going to use SHA2 for credential hashing. 

# 12/17/24
- Add user login and admin login, going to add functionality to the services so they can be changed on the website rather than through the code. 
- Going to have to set up more DB tables for user and admin.

# 12/17/24 
- Navbar is giving me so many issues , had to watch videos , now IM RUSHING to finish...
- Okay I ran out of time to get the navBar to reflect the changes so were going to skip it and leave the project as is... Refactored all the code to a prvious point. 
